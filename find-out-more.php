<?php
    //initiation of a session to store form data to be loaded on successful page
    session_start();
    $_SESSION['isSubmitted'] = false;
    $title = "Find out more";
    include "header.php";
?>
<?php
    include "db_connect.php";
    $category_query = "SELECT catDesc FROM CT_category";
    $category_result = $dbConn ->query($category_query);
?>
<div class="main-container">
    <section class="sections find-out-section">
        <div class="section-heading">
            <h1 class="section-title">Find out more</h1>
            <p class="section-description">Fill in the form to register your interests and receive updates straight to your inbox from our Chollerton Tearooms Office!</p>
        </div>
        <div class="find-out-form-wrapper">
            <?php
            // initialising variables
            $fnameErr = $snameErr = $addrErr = $emailErr = $postMethodErr = $telErr = $categoryErr = "";
            $forename = $surname = $street = $city = $postcode = $postalAddr = $email = $mobile = $sendMethod = $category = "";
            // flag variables
            $isValid = 0;
            $subSts = false;

            if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_REQUEST['submit'])) {
                if (empty($_REQUEST['forename'])){
                    $fnameErr = "Forename is required.";
                } elseif (isset($_REQUEST['forename'])) {
                    $forename = validateInput($_REQUEST['forename']);
                    // matching input to reduce GIGO
                    if (!preg_match("/^[a-zA-Z ]+$/",$forename)) {
                        $fnameErr = "Only alphabets and white spaces are allowed";
                    } else {
                        $isValid += 1;
                    }
                }

                if (!empty($_REQUEST['surname'])) {
                    $surname = validateInput($_REQUEST['surname']);
                    // matching input to reduce GIGO
                    if (!preg_match("/^[a-zA-Z ]+$/",$surname)) {
                        $snameErr = "Only alphabets and white spaces are allowed.";
                        $isValid -= 1;
                    }
                }

                if (!empty($_REQUEST['mobile'])) {
                    $mobile = validateInput($_REQUEST['mobile']);
                    // matching input to reduce GIGO - UK phone number format
                    if (!preg_match("/^0[0-9]{9,10}+/",$mobile)){
                        $telErr = "Check your mobile number again.";
                        $isValid -= 1;
                    }
                }

                if (!isset($_REQUEST['category'])) {
                    $categoryErr = "Please choose a category of interest.";
                } else {
                    $category = validateInput($_REQUEST['category']);
                    $isValid += 1;
                }

                if (!isset($_REQUEST['sendMethod'])) {
                    $postMethodErr = "Please select a method for the updates to be sent.";
                } else {
                    $sendMethod = validateInput($_REQUEST['sendMethod']);
                    $isValid += 1;
                }

                // requiring information based on selection of send method
                if ($sendMethod == "post" and (empty($_REQUEST['street']) or empty($_REQUEST['city']) or empty($_REQUEST['postcode']))) {
                    $addrErr = "All address fields are required for postal communication.";
                } else {
                        $street = validateInput($_REQUEST['street']);
                        $city = validateInput($_REQUEST['city']);
                        $postcode = validateInput($_REQUEST['postcode']);
                        // avoid having commas for empty address fields
                        if (!empty($street) or !empty($city) or !empty($postcode)) {
                            $postalAddr = "$street, $city, $postcode";
                        }
                        $isValid += 1;
                }

                if ($sendMethod == "email" and empty($_REQUEST['email'])) {
                    $emailErr = "Email is required for email communication.";
                } elseif (isset($_REQUEST['email'])) {
                    //making sure all emails are in lowercase
                    $email = mb_strtolower(validateInput($_REQUEST['email']));
                    if (!empty($email) and !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Email is not valid.";
                    } else
                    $isValid += 1;
                }

            }

            if ($isValid == 5) {
                $categoryID_query = "SELECT catID FROM CT_category WHERE catDesc = '$category'";
                $catID = $dbConn->query($categoryID_query)->fetch_object()->catID;

                $forename = $dbConn->real_escape_string($forename);
                $surname = $dbConn->real_escape_string($surname);
                $postalAddr = $dbConn->real_escape_string($postalAddr);
                $mobile = $dbConn->real_escape_string($mobile);
                $email = $dbConn->real_escape_string($email);
                $sendMethod = $dbConn->real_escape_string($sendMethod);

                $insert_query = "INSERT INTO CT_expressedInterest (forename, surname, postalAddress, mobileTelNo, email, sendMethod, catID) VALUES ('$forename','$surname','$postalAddr','$mobile','$email','$sendMethod','$catID')";
                $success = $dbConn->query($insert_query);
                $subSts = true;
                $_SESSION['forename'] = $forename;
                $_SESSION['surname'] = $surname;
                $_SESSION['postalAddr'] = $postalAddr;
                $_SESSION['mobile'] = $mobile;
                $_SESSION['email'] = $email;
                $_SESSION['sendMethod'] = $sendMethod;
                //emptying request to avoid data from being exploited
                unset($_REQUEST);
            }

            //defining a function to validate form data before processing to avoid vulnerability
            function validateInput($data){
                $data = trim($data);
                $data = stripslashes($data);
                return htmlspecialchars($data);
            }
            ?>
            <?php
            if ($subSts) {
                $_SESSION['isSubmitted'] = true;
                //redirecting to other page only if all requirements are met and form is successfully submitted
                header('Location: form-success.php');
            }
            ?>
            <form name="interest-register-form" id="interestRegisterForm" action="find-out-more.php" method="post">
                <div>
                    <label for="forename">Forename <span class="required">*</span></label>
                    <input id="forename" name="forename" type="text" maxlength="15" value="<?php echo "$forename"?>" required>
                    <span class="required"><?php echo "$fnameErr"?></span>
                </div>
                <div>
                    <label for="surname">Surname</label>
                    <input id="surname" name="surname" type="text" maxlength="15" value="<?php echo "$surname"?>">
                    <span class="required"><?php echo "$snameErr"?></span>
                </div>
                <div>
                    <label for="mobile">Mobile/Telephone Number</label>
                    <input id="mobile" name="mobile" type="tel" maxlength="11" value="<?php echo "$mobile"?>">
                    <span class="required"><?php echo "$telErr"?></span>
                </div>
                <div>
                    <label for="category">Interested Category <span class="required">*</span></label>
                    <select name="category" id="category" required>
                        <!-- a placeholder option value to prevent HTML standard error -->
                        <option value="" disabled selected hidden>Choose a category</option>
                        <?php
                        while ($category_item = $category_result->fetch_object()){
                            echo "<option value='$category_item->catDesc'>$category_item->catDesc</option>\n";
                        }
                        ?>
                    </select>
                    <span class="required"><?php echo "$categoryErr"?></span>
                </div>
                <fieldset name="sendMethod" class="radio-container">
                    <legend>How would you like to receive updates? <span class="required">*</span></legend>
                    <label><input type="radio" name="sendMethod" value="post" <?php if ($sendMethod === "post") {echo "checked";} ?> required> <span>Post</span></label>
                    <label><input type="radio" name="sendMethod" value="email" <?php if ($sendMethod === "email") {echo "checked";} ?> required> <span>Email</span></label>
                    <span class="required"><?php echo "$postMethodErr"?></span>
                </fieldset>
                <div>
                    <label for="email">Email Address</label>
                    <input id="email" name="email" type="email" value="<?php echo "$email"?>">
                    <span class="required"><?php echo "$emailErr"?></span>
                </div>
                <fieldset name="postalAddress">
                    <legend>Postal Address</legend><br>
                    <span class="required"><?php echo "$addrErr"?></span>
                    <div>
                        <label for="street">Street Address</label>
                        <input id="street" name="street" type="text" maxlength="50" value="<?php echo "$street"?>">
                    </div>
                    <div>
                        <label for="city">City/Town/Village</label>
                        <!-- length limited to the longest place name in uk -->
                        <input id="city" name="city" type="text" maxlength="58" value="<?php echo "$city"?>">
                    </div>
                    <div>
                        <label for="postcode">Postcode</label>
                        <input id="postcode" name="postcode" type="text" maxlength="8" value="<?php echo "$postcode"?>">
                    </div>
                </fieldset>
                <button class="submit-button" name="submit" type="submit">Submit</button>
                <p><span class="required">*</span> Required field</p>
            </form>
        </div>
    </section>
</div>
<?php include "footer.php"; ?>

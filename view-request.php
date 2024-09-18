<?php
    $title = "View Requests";
    include "header.php";
?>

<!-- database connection -->
<?php
    include "db_connect.php";
    $interest_query = "SELECT forename, surname, postalAddress, mobileTelNo, email, sendMethod, catDesc FROM CT_expressedInterest INNER JOIN CT_category ON CT_expressedInterest.catID = CT_category.catID ORDER BY surname";
    $interest_result = $dbConn ->query($interest_query);
?>
<div class="main-container">
    <section class="sections view-request-section">
        <div class="section-heading">
            <h1 class="section-title">View requests</h1>
        </div>
        <div class="table-wrapper">
            <?php
                if (!$interest_result){
                    echo "<p>Error while retrieving data from the database.</p>\n";
                    echo "Error message: <span class='bold'>$dbConn->error</span></p>";
                }
                else {
                    echo "<table id='requestTable'>\n";
                    echo "\t<colgroup>\n";
                    echo "\t\t<col span='1' class='forename'>\n";
                    echo "\t\t<col span='1' class='surname'>\n";
                    echo "\t\t<col span='1' class='postal'>\n";
                    echo "\t\t<col span='1' class='mobile'>\n";
                    echo "\t\t<col span='1' class='email'>\n";
                    echo "\t\t<col span='1' class='method'>\n";
                    echo "\t\t<col span='1' class='category'>\n";
                    echo "\t</colgroup>\n";
                    echo "\t<thead>\n";
                    echo "\t\t<tr>\n";
                    echo "\t\t\t<th>Forename</th>\n";
                    echo "\t\t\t<th>Surname</th>\n";
                    echo "\t\t\t<th>Postal Address</th>\n";
                    echo "\t\t\t<th>Mobile</th>\n";
                    echo "\t\t\t<th>Email Address</th>\n";
                    echo "\t\t\t<th>Post Method</th>\n";
                    echo "\t\t\t<th>Interested Category</th>\n";
                    echo "\t\t</tr>\n";
                    echo "\t</thead>\n";
                    echo "\t<tbody>\n";
                    while ($interest_row = $interest_result->fetch_object()){
                        echo "\t\t<tr>\n";
                        echo "\t\t\t<td>$interest_row->forename</td>\n";
                        echo "\t\t\t<td>$interest_row->surname</td>\n";
                        echo "\t\t\t<td>$interest_row->postalAddress</td>\n";
                        echo "\t\t\t<td>$interest_row->mobileTelNo</td>\n";
                        echo "\t\t\t<td>$interest_row->email</td>\n";
                        echo "\t\t\t<td>$interest_row->sendMethod</td>\n";
                        echo "\t\t\t<td>$interest_row->catDesc</td>\n";
                        echo "\t\t</tr>\n";
                    }
                    echo "\t</tbody>\n";
                    echo "</table>\n";
                }
            ?>
        </div>
    </section>
</div>
<?php include "footer.php"; ?>

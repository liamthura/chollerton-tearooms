<?php
// starting a session to be passed form data from find-out-more page
session_start();
$title = "Find out more";
include "header.php";

// to destroy session and prevent leftover data in session
if (isset($_GET['done']) and $_GET['done']) {
    session_destroy();
    echo "<script>location.href='index.php';</script>";
}
?>

<div class="main-container">
    <section class="sections" style="min-height: 60vh; max-height: 100%;">
        <?php
        if (isset($_SESSION['isSubmitted']) and $_SESSION['isSubmitted']) {
            echo "<h1 class='section-title'>You have successfully submitted the form!</h1>\n";
            echo "<span class='section-description'>Your form submission summary</span>\n";
            echo "<div class='form-data-table-wrapper'>\n";
            echo "\t<table>\n";
            echo "\t\t<tr>\n";
            echo "\t\t\t<td>Forename</td>\n";
            echo "\t\t\t<td>".$_SESSION['forename']."</td>\n";
            echo "\t\t</tr>\n";
            echo "\t\t<tr>\n";
            echo "\t\t\t<td>Surname</td>\n";
            echo "\t\t\t<td>".$_SESSION['surname']."</td>\n";
            echo "\t\t</tr>\n";
            echo "\t\t<tr>\n";
            echo "\t\t\t<td>Postal address</td>\n";
            echo "\t\t\t<td>".$_SESSION['postalAddr']."</td>\n";
            echo "\t\t</tr>\n";
            echo "\t\t<tr>\n";
            echo "\t\t\t<td>Mobile</td>\n";
            echo "\t\t\t<td>".$_SESSION['mobile']."</td>\n";
            echo "\t\t</tr>\n";
            echo "\t\t<tr>\n";
            echo "\t\t\t<td>Email</td>\n";
            echo "\t\t\t<td>".$_SESSION['email']."</td>\n";
            echo "\t\t</tr>\n";
            echo "\t\t<tr>\n";
            echo "\t\t\t<td>Communication preference</td>\n";
            echo "\t\t\t<td>".$_SESSION['sendMethod']."</td>\n";
            echo "\t\t</tr>\n";
            echo "\t</table>";
            echo "</div>";
        }
        else {
            echo "<h1 class='section-title'>Ooops you may be on the wrong page!</h1>";
        }
        ?>
        <a class="primary-button" href="?done=true">Go back to home page</a>
    </section>
</div>

<?php include "footer.php"; ?>

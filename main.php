<?php
if($_POST["message"]) {
    mail("bradshimp@gmail.com", "Form to email message", $_POST["name"], "From: bradshimp@gmail.com");
}
?>

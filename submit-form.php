<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "entid@protonmail.com";
    $subject = "Contact Form Submission";
    $headers = "From: ".$email;
    $txt = "You have received an email from ".$name.".\n\n".$message;
    mail($to,$subject,$txt,$headers);
    header("Location: index.html");
}
?>

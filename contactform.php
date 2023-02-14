<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];



    $mailTo  = "admin@baileypointer.com";
    $headers = "From: ".$email;
    $txt = "You have received a message from ".$fname.$lname.".\n\m".$msg;

    mail($mailTo, $subject, $msg, $headers);
    header("Location: index.php?mailsend");
}
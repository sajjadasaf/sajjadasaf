<?php

$name = $_POST['fullname'];
$email = $_POST['email-input'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "sajadasif2000@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");




?>
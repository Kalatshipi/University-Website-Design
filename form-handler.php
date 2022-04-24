<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from ='info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "uesr Email: $visitor_email.\n".
               "subject: $subject.\n".
                "Uesr Message: $message.\n";
$to = 'kalatshipicost@gmail.com';

$headers = "From: $email-from \r\n";

$headers = "Reply-to: $vistor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location:contact.html");
?>
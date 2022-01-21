<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'mywebsite.com';

$email_subject = 'New form submision';

$email_body = "User Name: $name.\n."
                "User Email: $visitor_email .\n"
                "Subject: $subject .\n"
                "User Message: $message . \n";

$to = "kalindkoirala7@gmail.com";

$headers = "From: $email from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject,$email_body,$headers);


header("Location: contact.html");

?>
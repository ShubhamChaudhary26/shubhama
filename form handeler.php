<?php
$name = $_POST['name'];
$visitor_email =$_post['email'];
$subject = $_post['subject'];
$subject = $_post['massage'];

$email_from = 'sc3617378@gmail.com';

$email_subject = 'new from submission';

$email_body = "user name: $name.\n".
                 "user email: $visitor_email.\n".
                 "subject: $subject.\n".
                 "user massage: $massage.\n".;
$to = 'sc3617378@gmail.com';

$headers = "form: $email_from \r\n";

$headers = "reply-to: $visitor_email \r\n";
 mail($to,$email_subject,$email_body,$headers);

 header("location: contact.html");
 ?>

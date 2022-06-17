<?php

$name = $_POST['namea'];
$email = "websitequery@unitedphotography.in";
$subject = "Website Query";
$mainbat = $_POST['messagea'];
$phone = $_POST['phonea'];
$message = "Name: $name \r\nPhone: $phone \r\nMessage: $mainbat";

$payer_email = "unitedphotography19@gmail.com";

print("$payer_email, $name, $message, $phone, $email");

$headers = "From: $email" . "\r\n" . "Reply-To: $email" ;
                $a = mail( $payer_email , $subject, $message, $headers );
if ($a)
                {
                     header('Location: /index.html');
                } else {
                     print("Message wasn't sent, please check agn");
                }


?>
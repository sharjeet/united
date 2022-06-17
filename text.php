<?php


$payer_email = "logodesigningindiabyds@gmail.com";
$subject = "Your Subject";
$message = "kutta";
$email = "jebat@unitedphotography.in";

  $headers = "From: $email" . "\r\n" . "Reply-To: $email"  ;
                $a = mail( $payer_email , $subject, $message, $headers );
                if ($a)
                {
                     print("Message was sent, you can send another one");
                } else {
                     print("Message wasn't sent, please check that you have changed emails in the bottom");
                }



?>
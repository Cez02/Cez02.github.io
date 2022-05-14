<?php

  $receiving_email_address = 'czarek.czubala@gmail.com';

  $headers =  'MIME-Version: 1.0' . "\r\n"; 
  $headers .= "From: " . $_POST['name'] . " " . $_POST['email'] . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

  mail($receiving_email_address, $_POST['subject'], $_POST['message'], $headers );
  $mail_sent = @mail( $receiving_email_address, $_POST['subject'], $_POST['message'], $headers );
  echo $mail_sent ? "Mail sent" : "Mail failed";
?>

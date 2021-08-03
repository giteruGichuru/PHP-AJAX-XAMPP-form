<?php

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);

require_once "email.php";

$host = "ssl://smtp.dreamhost.com";
$username = "spu.ac.ke";
$password = "your email password";
$port = "465";
$to = "spu.ac.ke";
$email_from = "email";
$email_subject = "Subject Line Here:" ;
$email_body = "whatever you like" ;
$email_address = "reply-to@example.com";
$name= "name";

$headers = array ('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address);
$smtp = Mail::factory('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password));
$mail = $smtp->send($to, $headers, $email_body);


if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<p> Dear  $name, Your application has been successfully submitted for [course one applied] . Please await the outcome in two weeks time . Yours Registrar</p>");
}
?>
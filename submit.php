<?php

$post = (!empty($_POST)) ? true : false;

if($post)
{
$email = trim($_POST['email']);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
$tel = htmlspecialchars($_POST["tel"]);
$error = '';

if(!$name)
{
$error .= 'Please enter your name<br />';
}


function ValidateTel($valueTel)
{
$regexTel = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
if($valueTel == "") {
return false;
} else {
$string = preg_replace($regexTel, "", $valueTel);
}
return empty($string) ? true : false;
}
if(!$email)
{
$error .= "Please enter correct email<br />";
}
if($email && !ValidateTel($email))
{
$error .= "Please enter correct email<br />";
}
if(!$error)


if(!$message || strlen($message) < 1)
{
$error .= "Please enter message <br />";
}
if(!$error)
{


$name_tema = "=?utf-8?b?". base64_encode($name) ."?=";

$subject ="new application from domain.name";
$subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";

$message1 ="\n\nName: ".$name."\n\nPhone: " .$tel."\n\nE-mail: " .$email."\n\nMassage: ".$message."\n\n";	


$header = "Content-Type: text/plain; charset=utf-8\n";

$header .= "From: New application <pikasotest@gmail.com>\n\n";	
$mail = mail("pikasotest@gmail.com", $subject1, iconv ('utf-8', 'windows-1251', $message1), iconv ('utf-8', 'windows-1251', $header));

if($mail)
{
echo 'OK';
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}
?>
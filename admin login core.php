<?php
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];

$db_email="mroki815@gmail.com";
$db_password="AaBbCc2580!!@@";

$encript_db_email=md5(sha1($db_email));

if($email==$db_email&&$password==$db_password){
	setcookie("currentUser",$encript_db_email,time()+(86400*7));
	header("location:admin panel.php");
}
else{
	header("location:admin login.php?wrong");
}

?>
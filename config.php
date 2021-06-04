<?php

    $host="localhost";
	$dbUser="rsrokiin_freelancerrokiwebsite";
	$dbPwd="AaBbCc2580!!@@";
	$dbName="rsrokiin_mywebsite";
			
	$connect=mysqli_connect($host,$dbUser,$dbPwd,$dbName);
			
	if($connect==false){
	echo "<font color='red'>Error Established Database Connection</font>";
	}

?>
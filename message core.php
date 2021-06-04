<?php

    require_once("config.php");

    $name=htmlentities($_REQUEST["name"]);
    $email=htmlentities($_REQUEST["email"]);
    $subject=htmlentities($_REQUEST["subject"]);
    $comment=htmlentities($_REQUEST["comment"]);
	
	$insertQuery="INSERT into my_users(name,email,subject,comment)VALUES('$name','$email','$subject','$comment')";
	
	$runQuery=mysqli_query($connect,$insertQuery);
	
	if($runQuery==true){
		header("location:message.php?right");
	}

?>
<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "userdetails";

	$con = mysqli_connect($host,$user,$pass,$db);
	if($con){
		echo "Success";
	} 
	else{
		echo "Fail";
	}
?>
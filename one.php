<?php
    include("config.php");
	$fn = $_POST['fn'];
	$ln = $_POST['ln'];
	$phno = $_POST['phno'];
	$pass = $_POST['pass'];

	$a = "INSERT INTO `register` VALUES ('$fn','$ln','$phno','$pass')";
	$res=mysqli_query($con,$a);
	header("Location:userlogin.html");
?>
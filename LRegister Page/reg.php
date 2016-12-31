<?php
	include '../config.php';
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	$gender=$_POST['Gender'];
	$dob=$_POST['DOB'];
	$address=$_POST['Address'];
	$query="INSERT INTO customer (Name, EmailID, Password, Gender,DOB, Address) VALUES ('$name','$email','$password','$gender','$dob','$address')";
	
	if($mysql->query($query) === false)
	{
	die("cannot enter data");
	}
	else
	{
		header('Location: afterreg.html');
	}
	




	
?>


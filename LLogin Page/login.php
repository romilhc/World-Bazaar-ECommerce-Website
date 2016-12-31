<?php
	include '../config.php';
	$uname=$_POST['Email'];
	$pass=$_POST['Password'];
	
	$query = "SELECT * from customer WHERE EmailID = '$uname'";

	$rs=$mysql->query($query);

	$rs->data_seek(0);

	$row = $rs->fetch_assoc();

	if($row['Password'] == $pass)
	{
		echo $pass;
		session_start();
		$_SESSION['EmailID'] = $row['EmailID'];
		echo $_SESSION['EmailID'];
		
		
	}
	
?>
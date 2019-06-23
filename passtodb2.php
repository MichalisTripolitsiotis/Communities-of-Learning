<?php
	include_once('connect.php');
	
	
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$first=mysqli_real_escape_string($con,$_POST['firstName']);
	$last=mysqli_real_escape_string($con,$_POST['lastName']);
	$password=md5($_POST['password']);
	$regnum=mysqli_real_escape_string($con,$_POST['regnum']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$role=mysqli_real_escape_string($con,$_POST['role']);
	
	
	//elengxos gia keno textfield
	if(empty($username)||empty($first)||empty($last)||empty($password)||empty($regnum)||empty($email)||empty($role)){
		header("Location: ../information.php?index==empty");
		exit();	
	}
	else{
		
		 $sql = "INSERT INTO student (username,fname, lname, password, regnum, email, role)
        VALUES ('$username','$first','$last','$password','$regnum','$email','$role')";
		
	mysqli_query($con,$sql);
		
	header("Location: ../information.php?signup==success");
		
	}
    ?>

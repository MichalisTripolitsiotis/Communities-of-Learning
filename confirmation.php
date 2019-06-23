<?php
	include_once('connect.php');
	
	
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$first=mysqli_real_escape_string($con,$_POST['fname']);
	$last=mysqli_real_escape_string($con,$_POST['lname']);
	$password = md5($_POST['password']);
	$regnum=mysqli_real_escape_string($con,$_POST['regnum']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$role=mysqli_real_escape_string($con,$_POST['role']);
	 
	
	//elengxos gia keno textfield
	if(empty($username)||empty($first)||empty($last)||empty($password)||empty($role)||empty($regnum)||empty($email)){
		header("Location: ../signup.php?index==empty");
		exit();	
	}
	else{
		
		 $sql = "INSERT INTO student (username,fname, lname, password, regnum, email, role)
        VALUES ('$username','$first','$last','$password','$regnum','$email','$role')";
		
	mysqli_query($con,$sql);
		
	header("Location: ../index.php?signup==success");
		
	}
    ?>

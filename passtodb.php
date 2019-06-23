<?php
	include_once('connect.php');
	
	
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$first=mysqli_real_escape_string($con,$_POST['firstName']);
	$last=mysqli_real_escape_string($con,$_POST['lastName']);
	$password=md5($_POST['password']);
	$role=mysqli_real_escape_string($con,$_POST['role']);
	//$section=mysqli_real_escape_string($con,$_POST['sectionUpload']);
	
	//elengxos gia keno textfield
	if(empty($username)||empty($first)||empty($last)||empty($password)||empty($role)){
		header("Location: ../information.php?index==empty");
		exit();	
	}
	else{
		
		 $sql = "INSERT INTO staff (username,fname, lname, password, role, upload)
        VALUES ('$username','$first','$last','$password','$role', '$section')";
		
	mysqli_query($con,$sql);
		
	header("Location: ../information.php?signup==success");
		
	}
    ?>

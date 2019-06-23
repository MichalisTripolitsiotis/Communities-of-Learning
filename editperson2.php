<?php
include_once('connect.php');


  if(isset($_POST['submit'])){
	$var_id=mysqli_real_escape_string($con,$_POST['id']);
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$first=mysqli_real_escape_string($con,$_POST['firstName']);
	$last=mysqli_real_escape_string($con,$_POST['lastName']);
	$reg = mysqli_real_escape_string($con,$_POST['regnum']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$role=mysqli_real_escape_string($con,$_POST['role']);




	//check for empty textfield
	if(empty($username)||empty($first)||empty($last)||empty($role)){
		header("Location: ../information.php?index==empty");
		exit();
	}
	else{

		 $sql = "UPDATE student SET
        username='$username', fname='$first', lname='$last',email='$email',regnum='$reg',role='$role' WHERE studentid = '$var_id' ";

	mysqli_query($con,$sql);

	header("location: information.php?edit=success");

	}
  }
    ?>



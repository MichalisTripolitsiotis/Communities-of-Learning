<?php 
include_once('connect.php');
	
	
  if(isset($_POST['submit'])){
	$var_id=mysqli_real_escape_string($con,$_POST['id']);
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$first=mysqli_real_escape_string($con,$_POST['firstName']);
	$last=mysqli_real_escape_string($con,$_POST['lastName']);
	
	
	
	
	
	//elengxos gia keno textfield
	if(empty($username)||empty($first)||empty($last)){
		header("Location: ../information.php?index==empty");
		exit();	
	}
	else{
		
		 $sql = "UPDATE staff SET
        username='$username', fname='$first', lname='$last',role='$role', upload='$section' WHERE id= '$var_id' ";
		
	mysqli_query($con,$sql);
		
	header("location: information.php?edit=success"); 
		
	}
  }
    ?>



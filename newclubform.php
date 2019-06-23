<?php
	include_once('connect.php');
	
	
	
	$name=mysqli_real_escape_string($con,$_POST['clubname']);
	$staff_id=mysqli_real_escape_string($con,$_POST['staff_id']);
	$textarea=mysqli_real_escape_string($con,$_POST['text']);

	
	//elengxos gia keno textfield
	if(empty($name)){
		header("Location: ../options.php?index==empty");
		exit();	
	}
	else{
		
		 $sql = "INSERT INTO club (clubName, staff_fk, textarea) VALUES ('$name','$staff_id', '$textarea')";
		
	mysqli_query($con,$sql);
	
	 $sql2 = "UPDATE staff SET upload ='$name' WHERE id = '$staff_id'";
		
	mysqli_query($con,$sql2);
		
	header("Location: ../options.php?add==success");
		
	}
    ?>
<?php
	include_once('connect.php');
	
	
	if(isset($_POST['submit'])){
	$name=mysqli_real_escape_string($con,$_POST['clubname']);
	$staff_id=mysqli_real_escape_string($con,$_POST['staff_id']);

	
	//elengxos gia keno textfield
	if(empty($name)){
		header("Location: ../options.php?index==empty");
		exit();	
	}
	if($name=="Select one:"){
		header("Location: ../staff.php?index==error");
		exit();	
	}
	else{
		
	 $sql3 = "UPDATE staff SET upload ='$name' WHERE id = '$staff_id'";
		
	mysqli_query($con,$sql3);
		
	header("Location: ../staff.php?change==success");
	}
		
	}
    ?>
<?php
	include_once('connect.php');
	$name=mysqli_real_escape_string($con,$_POST['clubname']);
	$staff=mysqli_real_escape_string($con,$_POST['staff_name']);
	$textarea=mysqli_real_escape_string($con,$_POST['text']);
	
	if(empty($name) || empty($staff)||empty($textarea)){
		header("Location: ../information.php?indexclub==empty");
		exit();	
	}else{
	
	$querry = mysqli_query($con,"SELECT id FROM staff WHERE username='$staff'");
	while($row = mysqli_fetch_array($querry)){  
			$staff_id=$row['id'];
		}
		
		//echo $staff_id;
	
	$sql = "INSERT INTO club (clubName, staff_fk, textarea) VALUES ('$name','$staff_id', '$textarea')";
		
	mysqli_query($con,$sql);
	
	 $sql2 = "UPDATE staff SET upload ='$name' WHERE id = '$staff_id'";
		
	mysqli_query($con,$sql2);
		
	header("Location: ../admin.php?assignclub==success");
			
	}
?>
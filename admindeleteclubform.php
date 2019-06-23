<?php
	include_once('connect.php');
	

	$name=mysqli_real_escape_string($con,$_POST['clubname']);

	
	//elegxos gia keno textfield
	if(empty($name)){
		header("Location: ../options.php?index==empty");
		exit();	
	}
	else{
		$sql = "DELETE FROM club WHERE clubName='$name'";
		
	mysqli_query($con,$sql);
		
		
	
	$sql3 = "UPDATE staff SET upload ='...' WHERE upload = '$name'";
		
	mysqli_query($con,$sql3);
		
	
	
	 $querry=mysqli_query($con,"SELECT * FROM club WHERE clubName='$name'");
	 while($row6 = mysqli_fetch_assoc($querry)) {
								$club_id= $row6['id'];
								$staff_id= $row6['staff_fk'];				
							}	
	 $sql2 = "DELETE FROM texts WHERE tag='$name'";
		
	mysqli_query($con,$sql2);
	
	
	$sql4 = "DELETE FROM posts WHERE club_fk='$club_id'";
		
	mysqli_query($con,$sql4);
	
	$sql1 = "DELETE FROM enroll WHERE club_fk='$club_id'";
		
	mysqli_query($con,$sql1);
	

	
	
	$sql = "DELETE FROM club WHERE clubName='$name'";
		
	mysqli_query($con,$sql);
	
	header("Location: ../information.php?delete==success");
		
	}
    ?>
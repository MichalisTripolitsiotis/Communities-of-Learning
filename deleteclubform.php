<?php
	include_once('connect.php');
	

	$name=mysqli_real_escape_string($con,$_POST['clubname']);
	$staff_id=mysqli_real_escape_string($con,$_POST['staff_id']);

	
	//elegxos gia keno textfield
	if(empty($name)){
		header("Location: ../options.php?index==empty");
		exit();	
	}
	else{
		
		
	$sql = "DELETE FROM club WHERE clubName='$name'";
		
	mysqli_query($con,$sql);
	
	 $querry=mysqli_query($con,"SELECT * FROM club WHERE clubName='$name'");
	 while($row6 = mysqli_fetch_assoc($querry)) {
								$club_id= $row6['id'];				
							}	
	
	
	 $sql2 = "DELETE FROM texts WHERE tag='$name'";
		
	mysqli_query($con,$sql2);
	
	 $sql3 = "UPDATE staff SET upload ='...' WHERE id = '$staff_id'";
		
	mysqli_query($con,$sql3);
	
	
	$sql4 = "DELETE FROM posts WHERE club_fk='$club_id'";
		
	mysqli_query($con,$sql4);
	
	$sql5 = "DELETE FROM enroll WHERE club_fk='$club_id'";
		
	mysqli_query($con,$sql5);
	
	 $mapme = mysqli_query($con,"SELECT * FROM staff_message WHERE staff_id = '$staff_id'");  
	   while($row9 = mysqli_fetch_assoc($mapme)) {
								$mid= $row9['m_id'];		
	   } 
		if(mysqli_num_rows($mapme)>=1)
       {
		   		$deleteMap = mysqli_query($con, "DELETE FROM message WHERE id = '$mid'");
			   $deleteMap = mysqli_query($con, "DELETE FROM staff_message WHERE staff_id = '$staff_id'");
	   }
	
	$sql = "DELETE FROM club WHERE clubName='$name'";
		
	mysqli_query($con,$sql);
	
	header("Location: ../options.php?delete==success");
		
	}
    ?>
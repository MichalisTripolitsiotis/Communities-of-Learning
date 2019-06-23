<?php
	include_once('connect.php');
	
	
	$username=$_POST['username'];
	
	//elengxos gia keno textfield
	if(empty($username)){
		header("Location: ../information.php?index==empty");
		exit();	
	}
	else{
	$q = mysqli_query($con, "SELECT id FROM staff WHERE username = '$username'");
	while($row7 = mysqli_fetch_assoc($q)) {
						$staff_id= $row7['id'];		       
	   }
	   $selectTexts=mysqli_query($con,"SELECT * FROM texts WHERE user_fk='$staff_id'");
	   	if(mysqli_num_rows($selectTexts)>=1)
       {
	   $deleteTexts=mysqli_query($con,"DELETE FROM texts WHERE user_fk='$staff_id'");
	   }
	   
	    $mapme = mysqli_query($con,"SELECT * FROM staff_message WHERE staff_id = '$staff_id'");  
	   while($row9 = mysqli_fetch_assoc($mapme)) {
								$mid= $row9['m_id'];		
	   } 
		if(mysqli_num_rows($mapme)>=1)
       {
		   		$deleteMap = mysqli_query($con, "DELETE FROM message WHERE id = '$mid'");
			   $deleteMap = mysqli_query($con, "DELETE FROM staff_message WHERE staff_id = '$staff_id'");
	   }
	   
	    $selectClub=mysqli_query($con,"SELECT * FROM club WHERE staff_fk='$staff_id'");
	   	if(mysqli_num_rows($selectClub)>=1)
       {
	   $deleteClub=mysqli_query($con,"DELETE FROM club WHERE staff_fk='$staff_id'");
	   }
	   
	$sql1 = "SELECT * FROM staff WHERE username = '$username'";
    $result = mysqli_query($con,$sql1);
    if(mysqli_num_rows($result)>=1)
       {
        $sql = "DELETE FROM staff
        WHERE username = '$username'";
	
	mysqli_query($con,$sql);
		
		header("Location: ../information.php?remove==success");
       }
		else{
			header("Location: ../information.php?remove==notfound");
		}
		
	}
    ?>
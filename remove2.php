<?php
	include_once('connect.php');
	
	
	$username=$_POST['username'];
	
	//elengxos gia keno textfield
	if(empty($username)){
		header("Location: ../information.php?index==empty");
		exit();	
	}
	else{
		$sql2 =mysqli_query($con, "SELECT studentid FROM student WHERE username = '$username'");
		
		while($row7 = mysqli_fetch_assoc($sql2)) {
								$stu_id= $row7['studentid'];		
       
	   }
	   $q = mysqli_query($con,"SELECT * FROM enroll WHERE user_fk = '$stu_id'");   
		while($row8 = mysqli_fetch_assoc($q)) {
								$enrolle_id= $row8['enroll_id'];		
	   }
	   
	   $mapme = mysqli_query($con,"SELECT * FROM stu_message WHERE stu_id = '$stu_id'");  
	   while($row9 = mysqli_fetch_assoc($mapme)) {
								$mid= $row9['mid'];		
	   } 
		if(mysqli_num_rows($mapme)>=1)
       {
		   		$deleteMap = mysqli_query($con, "DELETE FROM message WHERE id = '$mid'");
			   $deleteMap = mysqli_query($con, "DELETE FROM stu_message WHERE stu_id = '$stu_id'");
	   }
	  
	   
	   $deletePosts = mysqli_query($con, "DELETE FROM posts WHERE enroll_fk = '$enrolle_id'");
	   $deletePEnroll = mysqli_query($con, "DELETE FROM enroll WHERE enroll_id = '$enrolle_id'");
	   
	   
	$sql1 = "SELECT * FROM student WHERE username = '$username'";
    $result = mysqli_query($con,$sql1);
    if(mysqli_num_rows($result)>=1)
       {
        $sql = "DELETE FROM student
        WHERE username = '$username'";
	
	mysqli_query($con,$sql);
		
	header("Location: ../information.php?remove==success");
       }
		else{
			header("Location: ../information.php?remove==notfound");
		}
		
	}
    ?>
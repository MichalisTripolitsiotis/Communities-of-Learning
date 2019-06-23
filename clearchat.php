<?php
	
	session_start();
	include_once('connect.php');

	if (isset($_POST['delete'])){
	$name = $_POST['type'];
	$quer = mysqli_query($con,"SELECT id FROM message WHERE type='$name'");
	while($row = mysqli_fetch_array($quer)){  
			$message_id = $row['id'];
		}
	
	
	
		
	$querry8=mysqli_query($con,"SELECT * FROM stu_message WHERE mid='$message_id'");
		if(mysqli_num_rows($querry8)>=1)
           {
            $querry9=mysqli_query($con,"DELETE FROM stu_message WHERE mid='$message_id'");
           }else{
				echo "not here stu";   
		   }
		   
		   $querry4=mysqli_query($con,"SELECT * FROM staff_message WHERE m_id='$message_id'");
		if(mysqli_num_rows($querry4)>=1)
           {
            $querry5=mysqli_query($con,"DELETE FROM staff_message WHERE m_id='$message_id'");
           }else{
				echo "not here staff";   
		   }


	 $query= mysqli_query($con,"DELETE FROM message WHERE type = '$name'");	
	
	header("Location: ../staff.php?delete==success");
}

?>
<?php
session_start();
include_once('connect.php');
if(isset($_SESSION['log']))
{
    if (isset($_SESSION['username'])) {
        //username to be found
        $var_username = $_SESSION['username'];
        //print($var_username);
    }
	
	if (isset($_POST['submit'])){
		
		
		
		$clubid=mysqli_real_escape_string($con,$_POST['clubid']);
		$studentname=mysqli_real_escape_string($con,$_POST['studentname']);
		
		$qu = mysqli_query($con, "SELECT studentid FROM student WHERE username = '$studentname'");
		if (mysqli_num_rows($qu)!=0) { 
		 while($row6 = mysqli_fetch_assoc($qu)) {
								$studentid= $row6['studentid'];
												
							}	
		$querry6 = mysqli_query($con,"SELECT * FROM enroll WHERE user_fk='$studentid' AND club_fk = '$clubid' AND enrolled ='1'");
		if(mysqli_num_rows($querry6) > 0)
		{
			header("Location: ../staff.php?member=exists");
		}
		else
		{
					
		
		$querry5=mysqli_query($con,"INSERT INTO enroll (user_fk, club_fk, enrolled) VALUES ('$studentid','$clubid','1')");
		
		
		header("Location: ../staff.php?add==success");
	}
}else
 			header("Location: ../staff.php?=notFound");
		
	}
	
}
?>
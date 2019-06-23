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
		$studentid=mysqli_real_escape_string($con,$_POST['studentid']);
		$querry1=mysqli_query($con,"SELECT * FROM enroll WHERE club_fk='$clubid' AND user_fk='$studentid'");
		while($row8 = mysqli_fetch_assoc($querry1)) {
			echo $eid = $row8['enroll_id'];
		}
		
		$querry2=mysqli_query($con,"DELETE FROM posts WHERE club_fk='$clubid' AND enroll_fk='$eid'"); 
		$querry5=mysqli_query($con,"DELETE FROM enroll WHERE club_fk='$clubid' AND user_fk='$studentid'");
		header("Location: ../staff.php?kick==success");
		
	}
	
}
?>
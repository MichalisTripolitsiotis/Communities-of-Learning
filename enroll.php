<?php
session_start();
	include_once('connect.php');
	if (isset($_SESSION['username'])) {
	
    //username to be found
    $var_username = $_SESSION['username'];
   // print($var_username);
	$sql="SELECT role FROM student WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_role=$row[0];
   //print($var_role);
	
	
	if (isset($_POST['enroll'])) {
	$student_id=mysqli_real_escape_string($con,$_POST['studentid']);
	$club_id=mysqli_real_escape_string($con,$_POST['clubid']);
	
	
	 $sql = "INSERT INTO enroll (user_fk, club_fk, enrolled) VALUES ('$student_id','$club_id','1')";
		
	mysqli_query($con,$sql);
	
	if($var_role == 'csstudent'){
		header("Location: ../csstudent.php?enroll==success");
	}
	else if($var_role == 'bsstudent'){
		header("Location: ../bsstudent.php?enroll==success");
	}else if($var_role == 'esstudent'){
		header("Location: ../esstudent.php?enroll==success");
	}else if($var_role == 'psstudent'){
		header("Location: ../psstudent.php?enroll==success");
	}
	}
	
}

?>
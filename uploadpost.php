<?php 
session_start();
include_once('connect.php');
if (isset($_SESSION['username'])) {
	
    //username to be found
    $var_username = $_SESSION['username'];
    //print($var_username);
	
	 $sql="SELECT studentid FROM student WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_id=$row[0];
    //print($var_id);
	
	$sql="SELECT role FROM student WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_role=$row[0];
   //print($var_role);


if (isset($_POST['submit'])) {
		
	
	$var_clubid=mysqli_real_escape_string($con,$_POST['clubfk']);
	$var_enrollid=mysqli_real_escape_string($con,$_POST['enrollfk']);
	$var_date=date_create('now')->format('Y-m-d H:i:s');
	$var_title=mysqli_real_escape_string($con,$_POST['title']);
	$var_text=mysqli_real_escape_string($con,$_POST['myTextArea']);
	
	if (empty($var_title)||empty($var_text)) {
		
	 if($var_role == 'csstudent'){
		header("Location: ../csstudent.php?text==empty");
	}
	else if($var_role == 'bsstudent'){
		header("Location: ../bsstudent.php?text==empty");
	}else if($var_role == 'esstudent'){
		header("Location: ../esstudent.php?text==empty");
	}else if($var_role == 'psstudent'){
		header("Location: ../psstudent.php?text==empty");
	}
} else {
    $sql="INSERT INTO posts (club_fk, enroll_fk, date, title, text) 
	VALUES ('$var_clubid','$var_enrollid', '$var_date', '$var_title', '$var_text')";
    $result=mysqli_query($con, $sql);
	
	if($var_role == 'csstudent'){
		header("Location: ../csstudent.php?textupload==success");
	}
	else if($var_role == 'bsstudent'){
		header("Location: ../bsstudent.php?textupload==success");
	}else if($var_role == 'esstudent'){
		header("Location: ../esstudent.php?textupload==success");
	}else if($var_role == 'psstudent'){
		header("Location: ../psstudent.php?textupload==success");
	}
	}
	}
}
?>
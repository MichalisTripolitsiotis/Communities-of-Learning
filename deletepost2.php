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
	if(isset($_POST['delete'])){
		
		$var_id=$_POST['txtId2'];
		
		$sql=mysqli_query($con,"DELETE FROM posts WHERE post_id=$var_id");
		
		if($var_role == 'csstudent'){
		header("Location: ../csstudent.php?delete==success");
	}
	else if($var_role == 'bsstudent'){
		header("Location: ../bsstudent.php?delete==success");
	}else if($var_role == 'esstudent'){
		header("Location: ../esstudent.php?delete==success");
	}else if($var_role == 'psstudent'){
		header("Location: ../psstudent.php?delete==success");
	}
  }
}
?>
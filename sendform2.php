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
	
	 $sql2="SELECT role FROM student WHERE username='$var_username'";
    $result2=mysqli_query($con, $sql2);
    $row=mysqli_fetch_row($result2);
    $var_role=$row[0];

   

if (isset($_POST['submit'])) {
	
	$var_msg=mysqli_real_escape_string($con,$_POST['msg']);
	$var_date=date_create('now')->format('Y-m-d H:i:s');
	$var_type = $_POST['type'];
if (empty($var_msg)) {
  echo "empty";
  header("Location: ../chat.php?==error");
} else {
	
	
	
    $sql="INSERT INTO message (text, date, type) VALUES ('$var_msg', '$var_date','$var_type')";
    $result=mysqli_query($con, $sql);
	
	$q="SELECT MAX(id) FROM message";
	$res=mysqli_query($con,$q);
	$row=mysqli_fetch_row($res);
    $var_mid=$row[0];
	//print($var_mid);
	$sq = "INSERT INTO stu_message (stu_id, mid) VALUES ('$var_id', '$var_mid')";
	$resu = mysqli_query($con,$sq);
	
	
	if($var_type == 'general'){
	header("Location: ../chat.php?==success");
	}
	
	if($var_role == 'csstudent'){
		header("Location: ../csstudent.php?==success");
	}else if($var_role == 'bsstudent'){
		header("Location: ../bsstudent.php?==success");
	}else if($var_role == 'psstudent'){
		header("Location: ../psstudent.php?==success");
	}else if($var_role == 'esstudent'){
		header("Location: ../esstudent.php?==success");
	}
	
	}
}

}
?>
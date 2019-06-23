<?php 
session_start();
include_once('connect.php');
if (isset($_SESSION['username'])) {
	
    //username to be found
    $var_username = $_SESSION['username'];
    //print($var_username);
	
	 $sql="SELECT id FROM staff WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_id=$row[0];
    //print($var_id);


if (isset($_POST['submit'])) {
	
	$var_title=mysqli_real_escape_string($con,$_POST['title']);
	$var_tag=mysqli_real_escape_string($con,$_POST['tag']);
	$var_text=mysqli_real_escape_string($con,$_POST['myTextArea']);
	$var_date=date_create('now')->format('Y-m-d H:i:s');
	$var_program=mysqli_real_escape_string($con,$_POST['program']);
	$var_department=mysqli_real_escape_string($con,$_POST['department']);
	$var_level=mysqli_real_escape_string($con,$_POST['level']);
	
if ($var_tag=='Select one'||empty($var_title)||empty($var_text)||empty($var_program)) {
  echo "empty";
  header("Location: ../textEditor.php?==error");
} else {
    $sql="INSERT INTO texts (title, myTextArea, tag, date, program, department, level, user_fk) 
	VALUES ('$var_title','$var_text','$var_tag', '$var_date', '$var_program', '$var_department','$var_level','$var_id')";
    $result=mysqli_query($con, $sql);
	header("Location: ../textEditor.php?==successUploaded");
	}
}
}
?>
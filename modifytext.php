<?php 
session_start();
include_once('connect.php');
if (isset($_SESSION['username'])) {
	
    //username to be found
    $var_username = $_SESSION['username'];
    //print($var_username);

}

 $sql="SELECT role FROM staff WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_role=$row[0];
    //print($var_role);

//Update Information
if(isset($_POST['btn-update'])){
	$var_id=$_POST['id'];
 $var_title=$_POST['title'];
	$var_tag=$_POST['tag'];
	$var_text=$_POST['myTextArea'];
	$var_program=$_POST['program'];
	$var_department=$_POST['department'];
	$var_level=$_POST['level'];
 $update = "UPDATE texts SET title='$var_title', tag='$var_tag', myTextArea='$var_text', program='$var_program', department='$var_department', level='$var_level' WHERE id=$var_id";
 $up = mysqli_query($con, $update);
 if(!isset($update)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
	 if($var_role == 'admin'){
		 header("location: admin.php"); 
	 }else{
		 header("location: staff.php"); 
	 }
 }
}


?>
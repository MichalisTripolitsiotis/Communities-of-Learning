<?php 
session_start();
include_once('connect.php');
if (isset($_SESSION['username'])) {
	
    //username to be found
    $var_username = $_SESSION['username'];
    //print($var_username);

}

 $sql="SELECT role FROM student WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_role=$row[0];
    //print($var_role);

//Update Information
if(isset($_POST['btn-update'])){
	$var_id=$_POST['id'];
    $var_title=$_POST['title'];
	$var_text=$_POST['myTextArea'];
	
 $update = "UPDATE posts SET title='$var_title', text='$var_text' WHERE post_id=$var_id";
 $up = mysqli_query($con, $update);
 if(!isset($update)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
	 if($var_role == 'csstudent'){
		header("Location: ../csstudent.php?modify==success");
	}
	else if($var_role == 'bsstudent'){
		header("Location: ../bsstudent.php?modify==success");
	}else if($var_role == 'esstudent'){
		header("Location: ../esstudent.php?modify==success");
	}else if($var_role == 'psstudent'){
		header("Location: ../psstudent.php?modify==success");
	}
	
 }
}


?>
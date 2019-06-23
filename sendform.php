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

	$sql2="SELECT role FROM staff WHERE username='$var_username'";
    $result2=mysqli_query($con, $sql2);
    $row2=mysqli_fetch_row($result2);
    $var_role=$row2[0];

if (isset($_POST['delete'])){
	$var_type = $_POST['type'];
	$quer=mysqli_query($con,"DELETE FROM message");
	$querry2=mysqli_query($con,"DELETE FROM stu_message");
	$querry3=mysqli_query($con,"DELETE FROM staff_message");
		$quer=mysqli_query($con,"DELETE FROM message");
	 if($var_type == 'general'){
	header("Location: ../chat.php?==success");
	}


}

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
	$sq = "INSERT INTO staff_message (staff_id, m_id) VALUES ('$var_id', '$var_mid')";
	$resu = mysqli_query($con,$sq);

	if($var_type == 'general'){
	header("Location: ../chat.php?==success");
	}
	if($var_role == 'admin'){
		header("Location: ../admin.php?==success");
	}else if($var_role == 'staff'){
		header("Location: ../staff.php?==success");
	}

	}
}

}
?>
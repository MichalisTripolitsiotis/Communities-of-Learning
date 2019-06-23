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
   
   $sql="SELECT studentid FROM student WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_id=$row[0];
   //print($var_id);
	
	
	if (isset($_POST['disenroll'])) {
	$student_id=mysqli_real_escape_string($con,$_POST['studentid']);
	$club_id=mysqli_real_escape_string($con,$_POST['clubid']);
	
	
	$sql2=mysqli_query($con,"SELECT * FROM enroll WHERE user_fk='$student_id' AND club_fk = '$club_id'");	
			
			while($row2 = mysqli_fetch_assoc($sql2)){	
			$enrollid=$row2['enroll_id'];
			
		}
		
		echo $enrollid;
	
	 $sql1 = "DELETE FROM posts WHERE enroll_fk = '$enrollid' AND club_fk = '$club_id' ";
		
	mysqli_query($con,$sql1);
	
	
	 $sql = "DELETE FROM enroll WHERE user_fk = '$student_id' AND club_fk = '$club_id' ";
		
	mysqli_query($con,$sql);
	
	if($var_role == 'csstudent'){
		header("Location: ../csstudent.php?disenroll==success");
	}
	else if($var_role == 'bsstudent'){
		header("Location: ../bsstudent.php?disenroll==success");
	}else if($var_role == 'esstudent'){
		header("Location: ../esstudent.php?disenroll==success");
	}else if($var_role == 'psstudent'){
		header("Location: ../psstudent.php?disenroll==success");
	}
	}
	
}

?>
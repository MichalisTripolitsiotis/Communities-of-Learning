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
   
   
   $sql="SELECT role FROM student WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_role=$row[0];
  

if(isset($_POST['delete'])){
	
		$sql = "UPDATE student SET
       ProfilePicture='' WHERE username = '$var_username' ";
		
	mysqli_query($con,$sql);
	
	if($var_role == 'csstudent'){
		
		header("location: csstudent.php?delete=success"); 
	  
	  } else if($var_role == 'bsstudent'){
		  header("location: bsstudent.php?delete=success"); 
	  }else if($var_role == 'psstudent'){
		  header("location: psstudent.php?delete=success"); 
	  }else if($var_role == 'esstudent'){
		  header("location: esstudent.php?delete=success"); 
	  }
	}
}

?>
<?php
session_start();
include_once("connect.php");
//Getting Input value
if(isset($_POST['login'])){
  $username=mysqli_real_escape_string($con,$_POST['username']);
  $password=md5($_POST['password']);
  $select = $_POST['select'];
  
  //if both empty
  if(empty($username)||empty($password)){
  header("Location: ../index.php?index==empty");
  exit();
  
  }else{
	  
	  if($select == 'staff'){
 //Checking Login Detail
 $result=mysqli_query($con,"SELECT*FROM staff WHERE username='$username' AND password='$password'");
 $row=mysqli_fetch_assoc($result);
 $count=mysqli_num_rows($result);
 if($password != $row['password']){
	 header("Location: ../index.php?index==error");   
 }
 if($count==1){
	 $_SESSION['log']=1;
      $_SESSION['username'] = $username;
      $_SESSION['staff']=array(
   'username'=>$row['username'],
   'password'=>$row['password'],
   'role'=>$row['role']
   );
   $role=$_SESSION['staff']['role'];
   //Redirecting User Based on Role
    switch($role){
   case 'staff':
  header('location:staff.php?');
  break;
  case 'admin':
  header('location:admin.php?');
  break;
	}
 }
	  }else if($select == 'student'){
	 
	 //Checking Login Detail
 $result=mysqli_query($con,"SELECT*FROM student WHERE username='$username' AND password='$password'");
 $row=mysqli_fetch_assoc($result);
 $count=mysqli_num_rows($result);
 if($count==1){
	 $_SESSION['log']=1;
      $_SESSION['username'] = $username;
      $_SESSION['student']=array(
   'username'=>$row['username'],
   'password'=>$row['password'],
   'role'=>$row['role']
   );
   $role=$_SESSION['student']['role'];
   //Redirecting User Based on Role
    switch($role){
		case 'csstudent':
  //h student.php
  header('location:csstudent.php?');
  break;
  case 'bsstudent':
  header('location:bsstudent.php?');
  break;
  case 'psstudent':
  header('location:psstudent.php?');
  break;
  case 'esstudent':
  header('location:esstudent.php?');
  break;	
		}
	  
 	   }else{
			header("Location: ../index.php?index==error");   
	   }
 	
 }else{
			echo "log in error";
			header("Location: ../index.php?index==error");
			session_destroy();
		}
	}
}

?>
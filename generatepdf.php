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
   

if (isset($_POST['generate'])) {
	
	$title= $_REQUEST['title'];
$myTextArea = $_REQUEST['myTextArea'];
$tag = $_REQUEST['tag'];
$program = $_REQUEST['program'];
$department = $_REQUEST['department'];
$level = $_REQUEST['level'];

	   require("fpdf.php");
	   $pdf = new FPDf('p','mm','A4');
	   $pdf -> AddPage();
	   $pdf -> SetFont('Arial', 'B', 14);
	   //WIDTH,HEIGHT,TEXT,BORDER,NEXT LINE,ALIGN 
	   $pdf ->cell(90,10,"Title",1,0,'C');
	   $pdf ->cell(30,10,"Program",1,0,'C');
	   $pdf ->cell(90,10,"Department",1,1,'C');
	   $pdf ->cell(40,10,"Level",1,0,'C');
	   $pdf ->cell(60,10,"Date",1,1,'C');
	   

	   $pdf -> SetFont('Arial','',14);
	   
	   
  $query = "SELECT * FROM texts WHERE title LIKE '%$title%'";


   if($myTextArea!=null){
     $query .= "AND myTextArea LIKE '%$myTextArea%'";
   }
   if($tag != null){
     $query .= "AND tag='$tag'";
   }
   
   if($program != null){
     $query .= "AND program='$program'";
   }
   
   if($department != null){
     $query .= "AND department='$department'";
   }
   
   if($level != null){
     $query .= "AND level='$level'";
   }

//



$result = mysqli_query($con,$query);

  while($row2 = mysqli_fetch_assoc($result)){
	  $query = mysqli_query($con, "SELECT * FROM diss.staff WHERE id =".$row2['user_fk']); 
  while($row4 = mysqli_fetch_assoc($query)) {
							$username = $row4['username'];
							}	
  

		 $pdf ->cell(90,10,$row2['title'],1,0,'C'); 
		  $pdf ->cell(30,10,$row2['program'],1,0,'C');
		   $pdf ->cell(80,10,$row2['department'],1,1,'C');
		    $pdf ->cell(40,10,$row2['level'],1,0,'C');
			$pdf ->cell(60,10,$row2['date'],1,1,'C');
	     }
			    
	   }
	   $pdf -> OutPut();
	
}
	   
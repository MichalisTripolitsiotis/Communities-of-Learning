<?php 
session_start();
include_once('connect.php');
if (isset($_SESSION['username'])) {
	
    //username to be found
    $var_username = $_SESSION['username'];
    //print($var_username);
	?>

<!doctype html>
<html><head>
<!-- bootstrap-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<meta charset="utf-8">
<title>Search</title>
<link rel="icon" href="images/tablogo.png">
<script src="general.js" type="text/javascript"></script>

</head>
<body>
<?php

if (isset($_POST['submit'])) {  
    
$title= $_REQUEST['title'];
$myTextArea = $_REQUEST['myTextArea'];
$tag = $_REQUEST['tag'];
$program = $_REQUEST['program'];
$department = $_REQUEST['department'];
$level = $_REQUEST['level'];
	
	?>
 
	

<div class="col-md">
      <header class="py-4 bg-image" style="background-color:rgba(47, 132, 192);">
			<center><p style="color:white; font-size:170%;"> Communities of Learning (C.o.L.)</p></center>
		 </header>
  </div>
<br>

    <!---------------------------------------End of NavBar ------------------------------------------------------------->
<script>
function goBack() {
    window.history.back();
}
</script>
<div class="container">
  <div class="row">
  
  <div class="col-1">
  <button  type='button' name='back' id='back' class='btn btn-outline-info' Onclick='return goBack()'>Back</button>
  </div>
	 <div class="col-md-8">
        <div class="table-responsive">
			<style>
            img{ width: 70%; height: 70%;}
            </style> 
	<?php
	
		


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
	echo"<table class='table table-striped table-dark'>". "<span>"."<tr>"."<td>"."<strong>".
	"<a href='articles.php?id={$row2['id']}&title={$row2['title']}'>"."<center>".$row2['title']."</center>"."</a>"."</strong>"."</td>"."</tr>".
	"<tr>"."<td>"."Program: ".$row2['program']."<br>"."Department: ".$row2['department']."<br>"."Level: ".$row2['level']."<br>".
	"Author: "."<a href='author.php?username={$username}'>".$username."</a>"."</td>"."</tr>"."</span>".
	"<span>"."<tr>"."<td>".$row2['myTextArea']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>".
	"<hr>"."<textarea hidden name='txtId'/>".$row2['id']."</textarea>";
  }
			?>             
         </div>                       
    </div>
    <?php 
	}
}
?>
</div>
</div>

</body>
</html>
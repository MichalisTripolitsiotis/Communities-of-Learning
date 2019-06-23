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
    //last name to be found
    $sql="SELECT lname FROM student WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_lastname=$row[0];
    //print($var_lastname);
    //first name to be found
    $sql="SELECT fname FROM student WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_firstname=$row[0];
    //print($var_firstname);
	
	 $sql="SELECT studentid FROM student WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_id=$row[0];
    //print($var_id);
	
	 $sql="SELECT role FROM student WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_role=$row[0];
  // print($var_role);
   
   $page_role="esstudent"; 


if($var_role!=$page_role) 
{
    header("Location: ../index.php?index==authError");
}
?>


<!doctype html>
<html>
<head>
<!-- bootstrap-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<meta charset="utf-8">
<link rel="stylesheet" href="main.css">
<script src="general.js" type="text/javascript"></script>
<link rel="icon" href="images/tablogo.png">
<title>esstudent</title>
</head>

<body>
<?php
//Checking User Logged or Not
if(empty($_SESSION['student'])){
 header('index.php?index==empty');
 exit();
}
?>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-circle-up" aria-hidden="true" style="font-size:36px"></i></button>
<!-------------------------- Banner ----------------------------------------------------------------------------->

  
    <div class="col-md">
      <header class="py-4 bg-image" style="background-color:rgba(47, 132, 192);">
			<center><p style="color:white; font-size:170%;"><img class="visible-lg visible-md" id="logo" src="images/logo.png"> Communities of Learning (C.o.L.)</p></center>
		 </header>
  </div>  

<br>
<div class="container">
  <div class="row">
  <!-------------------------- NavBar ----------------------------------------------------------------------------->
    <div class="col-sm-3 ">
    <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a>
      <a class="nav-link" data-toggle="collapse" data-target="#expand" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Activities</a>
      		 <div id="expand" class="collapse">
            <ul class="list-group list-group-flush">
                <li class="list-group-item " ><a href="companyvisits.php"<i class="fa fa-building" aria-hidden="true"></i>&nbsp;Company Visits</a></li>
                <li class="list-group-item"><a href="professionalseminars.php"<i class="fas fa-chalkboard-teacher"></i>&nbsp;Professional Seminars</a></li>
                <li class="list-group-item"><a href="pressentations_talks.php"<i class="fa fa-comments" aria-hidden="true"></i>&nbsp;Pressentations/Talks</a></li>
                <li class="list-group-item"><a href="carreerday.php"<i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;Carreer Day</a></li>
                <li class="list-group-item"><a href="csu.php"<i class="fa fa-users" aria-hidden="true"></i>&nbsp;C.S.U.</a></li>
                <br>
            </ul>
        </div> 
                      <a class="nav-link" data-toggle="collapse" data-target="#expand2" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Clubs</a>
      		 <div id="expand2" class="collapse">
            <ul class="list-group list-group-flush">
            <?php $sql=mysqli_query($con,"SELECT * FROM club");
			while($row2 = mysqli_fetch_assoc($sql)){
				echo   "<li class='list-group-item'><a href='club.php?clubname={$row2['clubName']}'>"."&nbsp;".$row2['clubName']."</a> </li>";
			}
			?>
            </ul>
        </div> 
         <a class="nav-link" data-toggle="collapse" data-target="#expand3" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Enrolled Clubs</a>
      		 <div id="expand3" class="collapse">
            <ul class="list-group list-group-flush">
            
             <?php 
			 $quer = mysqli_query($con,"SELECT user_fk, club_fk, clubName, id FROM enroll, club WHERE club.id=enroll.club_fk");
				if(mysqli_num_rows($quer)>0){
				 while($row3 = mysqli_fetch_assoc($quer)){
				 	$userfk=$row3['user_fk'];
					$clubfk=$row3['club_fk'];
				 	$clubid = $row3['id'];
					$clubname=$row3['clubName'];
				 
				 if($var_id == $userfk && $clubfk == $clubid)
				 
			echo   "<li class='list-group-item'><a href='club.php?clubname={$row3['clubName']}'>"."&nbsp;".$clubname."</a> Enrolled </li>";
				}
				}
			?>
    
            </ul>
            </div> 
      <a class="nav-link" id="v-pills-settings-tab"  href="search.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</a>
      <a class="nav-link" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> 

      </nav>
      <br>
      <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
    </div>
   <!-----------------------------------------End of NavBar ------------------------------------------------------------->
  <!--------------------------------Home Page ----------------------------------------------------------------------->
    <div class="col-md-5">
        <div class="table-responsive">

		<!--change code. write html and open php -->
		<?php
			$limit = 3;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  



			$sql=mysqli_query($con,"SELECT * FROM texts WHERE tag='home' ORDER BY date DESC LIMIT $start_from, $limit");
			while($row2 = mysqli_fetch_assoc($sql)){
				//join the tables in order to find the name of the author and not the id.
				$query = mysqli_query($con, "SELECT * FROM diss.staff WHERE id =".$row2['user_fk']);

							while($row4 = mysqli_fetch_assoc($query)) {
							$username = $row4['username'];
							}	
			echo"<table class='table table-striped table-dark'>". "<span>"."<tr>"."<td>"."<strong>"."<a href='articles.php?id={$row2['id']}&title={$row2['title']}'>"."<center>".$row2['title']."</center>"."</a>"."</strong>"."</td>"."</tr>"."<tr>"."<td>"."Program: ".$row2['program']."<br>"."Department: ".$row2['department']."<br>"."Level: ".$row2['level']."<br>"."Author: "."<a href='author.php?username={$username}'>".$username."</a>"."</td>"."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['myTextArea']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>"."<hr>";
			?>             
          <?php }?>
            </div>
             <?php  
$sql2 = "SELECT COUNT(id) FROM texts WHERE tag='home'";  
$rs_result = mysqli_query($con,$sql2);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<a href='esstudent.php?page=".$i."'>".$i."</a>";  
};  
echo $pagLink . "</div>";  
?>
             </div>
                                
    
    
<!---------------------------------------End of Home Page --------------------------------------------------------------->    <!-------------------------------------Personal Data ---------------------------------------------------------------->
<div class="col-md-4">
      <div class="container justify-content-center">
       <div class="help">
    	<a class="far fa-question-circle" href="help.php"> Help</a>
    </div>
        <div class="table-responsive">
          <table class="table-bordered">
            <thead>
            <h3 class="font-weight-light">Personal Data:</h3>
              </thead>
            
            <tbody>
              <tr>
                <td><h3>
                    <center>
                      Welcome: <?php echo "<i>".$_SESSION['student']['username']."</i>";?>
                    </center>
                  </h3></td>
              </tr>
              <?php  // Get images from the database
               $sql="SELECT * FROM student where username='$var_username'";
                     $result=mysqli_query($con, $sql);
                         while($row = mysqli_fetch_assoc($result)){
                         ?>
              <tr>
                <td><label>
                    <center>
                      <?php if($row['ProfilePicture'] == ""){ echo "<img src='images_profile/profpic.png' class='rounded' alt='Default Profile Pic'>";} else {  echo "<img  src='images_profile/".$row['ProfilePicture']."' alt='Profile Pic'>"; } }  ?>
                    </center>
                  </label></td>
              </tr>
              <tr>
                <td>
                  <li class="list-group-item">
                    <h5>Your Role is: <?php echo $_SESSION['student']['role'];?></h5>
                  </li>
                  <li class="list-group-item">
                    <h5>Name: <?php print($var_firstname);?> </h5>
                    </li>
                    <li class="list-group-item">
                    <h5>Surname: <?php print($var_lastname);?></h5>
                  </li>
                  <li class="list-group-item">
                    <label class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter">
                      <center>
                        <img src="images/upload.png" title="Change profile picture" style="height: 25%; width: 25%;">
                      </center>
                    </label>
                  </li>
                  <li class="list-group-item">    
                      <center>
                      <form action="deleteImage2.php" method="post" name="delete">
                        <button class="btn btn-outline-danger" name="delete" id="delete" title="Delete profile image">Delete</button>
                        </form>
                      </center>
                    
                  </li>
                  </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>  
             </div>    
                                  
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Change Profile Picture</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="content">
                                        <form action="upload2.php" method="post" enctype="multipart/form-data" class="uploadform" style="text-   align: center">
                                            <input type="file" name="file">
                                            <br><br>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" name="submit" class="btn btn-info">Change</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                
             
          </div>
      </div>
     <!-------------------------End of Persona Data --------------------------------------------------------------------->
</body>
</html>
<?php
}else{
	echo "log in error";
	header("Location: ../index.php?index==error");
}

?>
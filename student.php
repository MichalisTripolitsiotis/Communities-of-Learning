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
    $sql="SELECT lname FROM user WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_lastname=$row[0];
   // print($var_lastname);
    //first name to be found
    $sql="SELECT fname FROM user WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_firstname=$row[0];
   // print($var_firstname);
   
    $sql="SELECT role FROM user WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_role=$row[0];
   //print($var_role);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sports Club</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="icon" href="images/tablogo.png">
<link rel="stylesheet" type="text/css" href="general.css">
<script src="general.js" type="text/javascript"></script>

</head>

<body>


<div class="col-md">
      <header class="py-4 bg-image" style="background-color:rgba(47, 132, 192);">
			<center><p style="color:white; font-size:170%;"> Communities of Learning (C.o.L.)</p></center>
		 </header>
  </div>
<br>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-circle-up" aria-hidden="true" style="font-size:36px"></i></button>
<!-------------------------------- cs student ------------------------------------------------------------>
<?php if($var_role == 'csstudent') : ?>

<?php
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('index.php?index==empty');
 exit();
}
?>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-circle-up" aria-hidden="true" style="font-size:36px"></i></button>

<div class="container">
  <div class="row">
  <!-------------------------- NavBar ----------------------------------------------------------------------------->
    <div class="col-sm-3 ">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a>
       <a class="nav-link" id="v-pills-settings-tab"  href="javacafe.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fab fa-java"></i>&nbsp;Java Cafe</a>
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
            <li class="list-group-item " ><a href="sportsclub.php"> <i class="fas fa-futbol"></i>&nbsp;Sports Club</a></li>
                <li class="list-group-item " ><a href="companyvisits.php"> <i class="fas fa-book-open"></i>&nbsp;Book Club</a></li>
                <li class="list-group-item"><a href="professionalseminars.php"> <i class="fas fa-marker"></i>&nbsp;Marketing Club</a></li>
                 <li class="list-group-item"><a href="professionalseminars.php"> <i class="fas fa-chart-bar"></i>&nbsp;Finance Club</a></li>
                 <li class="list-group-item"><a href="professionalseminars.php"> <i class="fas fa-people-carry"></i>&nbsp;SUNRISE Movement for Social Responsibility</a></li>
                <li class="list-group-item"><a href="pressentations_talks.php"> <i class="fas fa-robot"></i>&nbsp;Robotics Club</a></li>
                <li class="list-group-item"><a href="pressentations_talks.php"> <i class="fas fa-swatchbook"></i>&nbsp;Research Club</a></li>
                <li class="list-group-item"><a href="carreerday.php"> <i class="fas fa-music"></i>&nbsp;Music Club</a></li>
                 <li class="list-group-item"><a href="carreerday.php"> <i class="fas fa-drum"></i>&nbsp;Dance Club</a></li>
                  <li class="list-group-item"><a href="carreerday.php"> <i class="fas fa-leaf"></i>&nbsp;Go Green Club</a></li>
                   <li class="list-group-item"><a href="carreerday.php"> <i class="fas fa-infinity"></i>&nbsp;INFINITY Club</a></li>
                    <li class="list-group-item"><a href="carreerday.php"> <i class="fab fa-fort-awesome"></i>&nbsp;Strategic Board Games Club</a></li>
                    <li class="list-group-item"><a href="carreerday.php"> <i class="fas fa-video"></i>&nbsp;A/V Club</a></li>
                <li class="list-group-item"><a href="csu.php"> <i class="fas fa-users" aria-hidden="true"></i>&nbsp;C.S.U.</a></li>
                <br>
            </ul>
        </div> 
      <a class="nav-link" id="v-pills-settings-tab"  href="search.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</a>
      </div>
      <br>
      <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
    </div>
   <!-----------------------------------------End of NavBar ------------------------------------------------------------->
  <!--------------------------------Home Page ----------------------------------------------------------------------->
    <div class="col-md-5">
        <div class="table-responsive">

		<!--change code. write html and open php -->
		<?php
			$querry=mysqli_query($con,"SELECT * FROM texts WHERE tag='home' ORDER BY date DESC");	
			while($row2 = mysqli_fetch_assoc($querry)){	
			echo"<table class='table table-bordered'>". "<span>"."<tr>"."<td>"."<strong>"."<a href='articles.php?id={$row2['id']}&title={$row2['title']}'>"."<center>".$row2['title']."</center>"."</a>"."</strong>"."</td>"."</tr>"."<tr>"."<td>".$row2['program']."<br>".$row2['department']."<br>".$row2['level']."</td>"."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['myTextArea']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>";
			?>             
          <?php }?>
             </div>
                                
    </div> 
    
<!---------------------------------------End of Home Page --------------------------------------------------------------->    <!-------------------------------------Personal Data ---------------------------------------------------------------->
<div class="col-md-4">
  <div class="container justify-content-center">
  <div class="table-responsive">   
  <table class="table-bordered">
    <tbody>
      <tr>
        <td> <h2><center>Welcome <?php echo $_SESSION['user']['username'];?></h2></center></td>
      </tr>
      <tr>
        <td> <center><h5>User name is: <?php print($var_username);?> and Your Role is: <?php echo $_SESSION['user']['role'];?></h5></center>
</td>
      </tr>
      <tr>
        <td><center><h6>Name: <?php print($var_firstname);?> Surname: <?php print($var_lastname);?></h6></center></td>
      </tr>
            
           <?php  // Get images from the database
               $sql="SELECT * FROM user where username='$var_username'";
                     $result=mysqli_query($con, $sql);
                         while($row = mysqli_fetch_assoc($result)){
                         ?>
  
                </tr>
                <tr>
                <td>
                	<label><center>
                <?php if($row['ProfilePicture'] == ""){ echo "<img src='images_profile/profpic.png' class='rounded' alt='Default Profile Pic'>";} else {  echo "<img  src='images_profile/".$row['ProfilePicture']."' alt='Profile Pic'>"; }  } ?></center>
                </label>
                </td>
                </tr>
                
                <tr>
                <td>
                <label class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter">
                    <center> <img src="images/upload.png" title="Change profile picture" style="height: 25%; width: 25%;"></center>
                    </label>
          </td>
      	</tr>
       </tbody>
     </table>
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
                                        <form action="upload.php" method="post" enctype="multipart/form-data" class="uploadform" style="text-   align: center">
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
     <?php elseif ($var_role == 'staff'): ?>
<?php endif; ?>

 </body>
   </html>
   <?php
}else{
	echo "log in error";
	header("Location: ../index.php?index==error");
}

?>
<?php
session_start();
include_once('connect.php');
//if (isset($_SESSION['username'])) {
    //username to be found
  //  $var_username = $_SESSION['username'];
   // print($var_username);
$var_username=$_GET['username'];
$var_username2=$_REQUEST['username'];
//echo $var_username;
//}
?>
<!doctype html>
<html>
<head>

<!-- bootstrap-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="icon" href="images/tablogo.png">
<meta charset="utf-8">
<title>Author</title>
</head>
<body>
<!-------------------------- Banner ----------------------------------------------------------------------------->
<div class="col-md">
  <header class="py-4 bg-image" style="background-color:rgba(47, 132, 192);">
    <center>
      <img class="visible-lg visible-md" style="height:150px; width:150px;" id="logo" src="images/logo.png"><p style="color:white; font-size:170%;">Communities of Learning (C.o.L.)</p>
    </center>
  </header>
</div>
<script>
function goBack() {
    window.history.back();
}
</script>
<div class="container">
  <div class="row">
    <div class="col-sm"> <br>
      <button  type='button' name='back' id='back' class='btn btn-outline-info' Onclick='return goBack()'>Back</button>
      <?php
			$querry=mysqli_query($con,"SELECT * FROM staff WHERE username='$var_username'");	
			while($row2 = mysqli_fetch_assoc($querry)){	
			?>
      <div class="table-responsive">
      <center>
        <table class="table-bordered">
          <span>
          <tr>
            <td><strong>
              <center>
                <?php echo " <h3 class='blog-post-title'>". $row2['username']."</h3>"?>
                <hr>
              </center>
              </strong> <?php echo "<p class='font-weight-light'>"."Name: ".$row2['fname']."</p>"?> <?php echo "<p class='font-weight-light'>"."Surname: ".$row2['lname']."</p>";?> <?php echo "<p class='font-weight-light'>"."Role: ".$row2['role']."</p>";?></td>
          </tr>
          <tr>
            <td><center>
                <style>
				img{
					width:40%;
					height:40%;	
				}
				</style>
                <?php if($row2['ProfilePicture'] == ""){ echo "<img src='images_profile/profpic.png' class='rounded' alt='Default Profile Pic' >";} else {  echo "<img  src='images_profile/".$row2['ProfilePicture']."' alt='Profile Pic'>";  }  ?>
              </center></td>
          </tr>
          </span> <br>
          <br>
        </table>
        <?php }?>
        </center>
      </div>
      <br>
    </div>
  </div>
</div>
</body>
</html>
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
    $sql="SELECT lname FROM staff WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_lastname=$row[0];
   // print($var_lastname);
    //first name to be found
    $sql="SELECT fname FROM staff WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_firstname=$row[0];
   // print($var_firstname);
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
<title>Annual Report</title>
</head>

<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-circle-up" aria-hidden="true" style="font-size:36px"></i></button>

<!-------------------------- Banner ----------------------------------------------------------------------------->

<div class="col-md">
  <header class="py-4 bg-image" style="background-color:rgba(47, 132, 192);">
    <center>
      <p style="color:white; font-size:170%;"><img class="visible-lg visible-md" id="logo" src="images/logo.png"> Communities of Learning (C.o.L.)</p>
    </center>
  </header>
</div>
<br>
<div class="container">
  <div class="row"> 
    <!-------------------------- NavBar ----------------------------------------------------------------------------->
    <div class="col-sm-3 ">
      <nav class="flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> 
      <a class="nav-link" id="v-pills-home-tab" href="admin.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a>
      
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
        <a class="nav-link" id="v-pills-settings-tab"  href="textEditor.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Upload text</a> 
        <a class="nav-link" id="v-pills-settings-tab"  href="information.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-info" aria-hidden="true"></i>&nbsp;Information</a> 
        <a class="nav-link" id="v-pills-settings-tab"  href="search.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</a> 
        <a class="nav-link active" id="v-pills-settings-tab"  href="anreport.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-balance-scale" aria-hidden="true"></i>&nbsp;Annual Report</a> 
         <a class="nav-link" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> 
        </nav>
      <br>
      <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
</div>
    <!-----------------------------------------End of NavBar -------------------------------------------------------------> 
    <!--------------------------------Report Generator ----------------------------------------------------------------------->
   	<div class="col-7 col-lg-6 col-sm-8 col-12">
    <h3 class="text-center">Generate PDF</h3>
     <form action="generatepdf.php" name="myform" id="myform" method="post">
          <div class="input-group" id="adv-search">
            <input type="text" class="form-control form-control-search" placeholder="Title" name="title" id="title" />
            </div><br>
            
            <div class="input-group" id="adv-search">
            <input type="text" class="form-control form-control-search" placeholder="Text" name="myTextArea" id="myTextArea" />
            </div><br>
            
             <div class="form-group">
              <?php $query = "SELECT * FROM club "; 
		$result = mysqli_query($con,$query);
		
 ?>
             
            			<label for="category" class="text-dark" required>Tag:</label>
                        <select class="form-control" id="category" name="tag">
                         <option></option>
                   		 <option value="home">Home</option>
                         <option value="Company Visits">Company Visits</option>
                         <option value="Professional Seminars">Professional Seminars</option>
                         <option value="Pressentations/Talks">Pressentations/Talks</option>
                         <option value="Carreer Day">Carreer Day</option>
                         <option value="C.S.U.">C.S.U.</option>
                          <?php
		  	while($row = mysqli_fetch_array($result)){  
			echo "<option>".$row['clubName']."</option>";
		}?>
                                </select>
                     
                     <br> 
                      
                        <label for="category" class="text-dark">Program:</label>
                        <select class="form-control" id="category" name="program">
                          <option></option>
                           <option value="General">-General-</option>
                    	  <option value="Bachelor">Bachelor</option>
                    	  <option value="Master">Master</option>
                    	  <option value="PHD">Doctoral</option>
                        </select>
                     
                     <br> 
                     
                        <label for="category" class="text-dark">Department:</label>
                        <select class="form-control" id="category" name="department">
                          <option></option>
                  		  <option value="General">-General-</option>
                  		  <option value="Business Administration & Economics">Business Administration & Economics</option>
                  		  <option value="Psychology Department">Psychology Department</option>
                  		  <option value="Computer Science">Computer Science</option>
                  		  <option value="English Studies">English Studies Department</option>
                  		  <option value="MBA">MBA</option>
                        </select>
                     	<br>
                      
                        <div class="form-group">
                        <label for="category" class="text-dark">Level:</label>
                        <select class="form-control" id="category" name="level">
                          <option></option>
                           <option value="General">-General-</option>
                  		  <option value="Level 1">Level 1</option>
                  		  <option value="Level 1 Year 1">Level 1 Year 1</option>
                          <option value="Level 1 Year 2">Level 1 Year 2</option>
                          <option value="Level 2">Level 2</option>
                          <option value="Level 3">Level 3</option>
                        </select>
                      </div>
                      
                      <div class="form-group text-center">
                        <button type="generate" name="generate" id="generate" class="btn btn-primary">Generate</button>
                      </div>
            	</form>
            </div>
    </div>
  </div>
</div>
<!-------------------------End --------------------------------------------------------------------->
</body>
</html>
<?php
}else{
	echo "log in error";
	header("Location: ../index.php?index==error");
}

?>
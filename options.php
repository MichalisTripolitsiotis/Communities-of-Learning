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
   
    $sql2="SELECT id FROM staff WHERE username='$var_username'";
    $result2=mysqli_query($con, $sql2);
    $row2=mysqli_fetch_row($result2);
    $var_id=$row2[0];
   // print($var_id);
    
	$sql3="SELECT upload FROM staff WHERE username='$var_username'";
    $result3=mysqli_query($con, $sql3);
    $row3=mysqli_fetch_row($result3);
    $var_upload=$row3[0];
   //print($var_upload);
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
<title>Options</title>
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
       <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   
        <a class="nav-link" id="v-pills-home-tab"  href="staff.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a>
       
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
				$idStaff_fk= $row2['staff_fk'];
				if($idStaff_fk == $var_id){
				echo   "<li class='list-group-item'><a href='club.php?clubname={$row2['clubName']}'>"."&nbsp;".$row2['clubName']."</a> Manager</li>";
				}else
				echo   "<li class='list-group-item'><a href='club.php?clubname={$row2['clubName']}'>"."&nbsp;".$row2['clubName']."</a> </li>";
			}
			?>
            </ul>
        </div> 
         
      <a class="nav-link" id="v-pills-settings-tab"  href="textEditor.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Upload text</a>
      <a class="nav-link" id="v-pills-settings-tab"  href="search.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</a>
      <a class="nav-link" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> 
      <a class="nav-link active" id="v-pills-settings-tab"  href="options.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;Options</a>

      </nav>
      <br>
      <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
    </div>
    <script>
function ConfirmDelete() {
  return confirm("Are you sure you want to delete?");
}
</script>
    <div class="col-md-5">
    
    <p><strong>Currently selected:</strong> <?php echo $var_upload?></p>
      <h2>Create new club</h2>
      <form id="newclubform" name="newclubform" action="newclubform.php" method="POST" style="border: 2px solid #111; background: rgb(222,184,135,0.5);">
        <div class="col-sm-12 my-4">
          <label for="registerUserName">Club Name</label>
          <input type="text" class="form-control" Name="clubname" placeholder="Club Name" required>
          <input type="text" class="form-control" Name="staff_id" value="<?php echo htmlspecialchars($var_id); ?>" hidden required>
		 <br>
         <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
		
  //]]>
  </script>
          <textarea  id="text" name="text" style="width:300px; height: 200px;">
			<br>
			<p>Specify the rules:
            <br>
            Specify the goals:
            <br>
            Specify the outcomes:
            
 
            </p>
            		
        </textarea>
		<br>
        </div>
        <center><button type="submit" name="submit" class="btn btn-light">Create</button></center>
        <br>
      </form>
      <br>
      <br>
       <h2>Delete club</h2>
      <form id="deleteclubform" name="deleteclubform" action="deleteclubform.php" method="POST" style="border: 2px solid #111; background: rgb(222,184,135,0.5);">
        <div class="col-sm-12 my-4">
          <label for="registerUserName">Club Name</label>
          <?php
		  	if($var_upload == 'Select one' || $var_upload == 'Company Visits' || $var_upload == 'Professional Seminars' || $var_upload == 'Pressentations/Talks' ||
			$var_upload == 'Carreer Day' || $var_upload == 'C.S.U.'){
				echo  "<input type='text'. class='form-control'. Name='clubname'. value='' readonly required>";
			}
			else{
		  ?>
          <input type="text" class="form-control" Name="clubname" value="<?php echo htmlspecialchars($var_upload); ?>" readonly required>
          <input type="text" class="form-control" Name="staff_id" value="<?php echo htmlspecialchars($var_id); ?>" hidden required>

<?php } ?>
        </div>
        <center><button type="submit" name="delete" class="btn btn-light" onClick="return confirm('Are you sure you want to delete this club?');">Delete</button></center>
        <br>
      </form>
      <br>
      <br>

    </div>
  </div>
</div>
</body>
</html>
<?php
}else{
	echo "log in error";
	header("Location: ../index.php?index==error");
}

?>
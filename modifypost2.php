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
   // print($var_lastname);
    //first name to be found
    $sql="SELECT fname FROM student WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);

    $var_firstname=$row[0];
   // print($var_firstname);
   
    $sql3="SELECT studentid FROM student WHERE username='$var_username'";
    $result3=mysqli_query($con, $sql3);
    $row=mysqli_fetch_row($result3);

    $var_studentid=$row[0];
    //print($var_studentid);
   
    $sql="SELECT role FROM student WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_role=$row[0];
   //print($var_role);
   
   if(isset($_POST['modify'])){
		
		$var_id=$_POST['txtId'];
 $sql = "SELECT * FROM posts WHERE post_id =" .$var_id;
 $result = mysqli_query($con, $sql);
  
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Text Editor</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="texteditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<script src="nicEdit.js" type="text/javascript"></script>
<link rel="icon" href="images/tablogo.png">
<link rel="stylesheet" href="main.css">
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</head>
<body>

 <div class="col-md">
      <header class="py-4 bg-image" style="background-color:rgba(47, 132, 192);">
			<center><p style="color:white; font-size:170%;"> Communities of Learning (C.o.L.)</p></center>
		 </header>
  </div>
<br>
<?php if ($var_role == 'csstudent') : ?>
<div class="container">
  <div class="row">
  <div class="col-sm-3 ">
        <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link" id="v-pills-home-tab"  href="csstudent.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a> <a class="nav-link" data-toggle="collapse" data-target="#expand" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Activities</a>
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
          <a class="nav-link active" data-toggle="collapse" data-target="#expand2" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Clubs</a>
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
				 
				 if($var_studentid == $userfk && $clubfk == $clubid)
				 
			echo   "<li class='list-group-item'><a href='club.php?clubname={$row3['clubName']}'>"."&nbsp;".$clubname."</a> Enrolled </li>";
				}
				}
			?>
    
            </ul>
            </div> 
          <a class="nav-link" id="v-pills-settings-tab"  href="search.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</a> <a class="nav-link" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> </nav>
        <br>
        <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
        <br>
        <br>
        <iframe src="https://calendar.google.com/calendar/embed?src=mtripolitsiotis%40citycollege.sheffield.eu&ctz=Europe%2FAthens" width="75%" height="30%" frameborder="0" scrolling="yes"></iframe>
        <br>
        <br>
        <br>
      </div>
   
    
    <!------------------------------------- End of Nav----------------------------------------------------------------->
  
  
  <div class="col-md-5">
  <?php 
 while($row = mysqli_fetch_assoc($result)){	
 
 ?>
		<form action="modifypostact2.php" method="post">
        
 
       <input hidden name="id" id="id" value="<?php echo $row['post_id'];?>">
       		<p>Entry Title: <input name="title" id="title" type="text" value="<?php echo $row['title']; ?>" style="border:#000000 1px solid; width:100%; height:30px;"/></p>

            
     
      <!------------------------ text editor---------------------------------------------------------------->      
        <div id="sample">
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
		
  //]]>
  </script>

<style>

img{ width: 70%; height: 70%;}
</style> 

		  <textarea id="myTextArea" name="myTextArea" style="width:100%; height: 200px;">
			 <?php echo $row['text']; } ?>
        
		</textarea>
		<br>
		</div>		
    		<button type="submit" class="btn btn-primary" name="btn-update" id="btn-update" value="submit" onClick="update()">Submit</button>
            <br><br>
    
    <script>
function update(){
 var x;
 if(confirm("Updated data Sucessfully") == true){
 x= "update";
 }
}
</script>
    </form>
  </div>
  
 </div>
</div>

<?php elseif ($var_role == 'bsstudent') : ?>
<div class="container">
  <div class="row">
   <div class="col-sm-3 ">
        <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link" id="v-pills-home-tab" href="bsstudent.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a> <a class="nav-link" data-toggle="collapse" data-target="#expand" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Activities</a>
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
          <a class="nav-link active" data-toggle="collapse" data-target="#expand2" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Clubs</a>
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
				 
				 if($var_studentid == $userfk && $clubfk == $clubid)
				 
			echo   "<li class='list-group-item'><a href='club.php?clubname={$row3['clubName']}'>"."&nbsp;".$clubname."</a> Enrolled </li>";
				}
				}
			?>
    
            </ul>
            </div> 
          <a class="nav-link" id="v-pills-settings-tab"  href="search.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</a> <a class="nav-link" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> </nav>
        <br>
        <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
        <br>
        <br>
        <iframe src="https://calendar.google.com/calendar/embed?src=mtripolitsiotis%40citycollege.sheffield.eu&ctz=Europe%2FAthens" width="75%" height="30%" frameborder="0" scrolling="yes"></iframe>
        <br>
        <br>
        <br>
      </div>
   
    
    <!------------------------------------- End of Nav----------------------------------------------------------------->
  
  
  <div class="col-md-5">
  <?php 
 while($row = mysqli_fetch_assoc($result)){	
 
 ?>
		<form action="modifypostact2.php" method="post">
        
 
       <input hidden name="id" id="id" value="<?php echo $row['post_id'];?>">
       		<p>Entry Title: <input name="title" id="title" type="text" value="<?php echo $row['title']; ?>" style="border:#000000 1px solid; width:100%; height:30px;"/></p>

            
     
      <!------------------------ text editor---------------------------------------------------------------->      
        <div id="sample">
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
		
  //]]>
  </script>

<style>

img{ width: 70%; height: 70%;}
</style> 

		  <textarea id="myTextArea" name="myTextArea" style="width:100%; height: 200px;">
			 <?php echo $row['text']; } ?>
        
		</textarea>
		<br>
		</div>		
    		<button type="submit" class="btn btn-primary" name="btn-update" id="btn-update" value="submit" onClick="update()">Submit</button>
            <br><br>
    
    <script>
function update(){
 var x;
 if(confirm("Updated data Sucessfully") == true){
 x= "update";
 }
}
</script>
    </form>
  </div>
  
 </div>
</div>

<?php elseif ($var_role == 'esstudent') : ?>
<div class="container">
  <div class="row">
   <div class="col-sm-3 ">
        <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link" id="v-pills-home-tab" href="bsstudent.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a> <a class="nav-link" data-toggle="collapse" data-target="#expand" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Activities</a>
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
          <a class="nav-link active" data-toggle="collapse" data-target="#expand2" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Clubs</a>
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
				 
				 if($var_studentid == $userfk && $clubfk == $clubid)
				 
			echo   "<li class='list-group-item'><a href='club.php?clubname={$row3['clubName']}'>"."&nbsp;".$clubname."</a> Enrolled </li>";
				}
				}
			?>
    
            </ul>
            </div> 
          <a class="nav-link" id="v-pills-settings-tab"  href="search.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</a> <a class="nav-link" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> </nav>
        <br>
        <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
        <br>
        <br>
        <iframe src="https://calendar.google.com/calendar/embed?src=mtripolitsiotis%40citycollege.sheffield.eu&ctz=Europe%2FAthens" width="75%" height="30%" frameborder="0" scrolling="yes"></iframe>
        <br>
        <br>
        <br>
      </div>
   
    
    <!------------------------------------- End of Nav----------------------------------------------------------------->
  
  
  <div class="col-md-5">
  <?php 
 while($row = mysqli_fetch_assoc($result)){	
 
 ?>
		<form action="modifypostact2.php" method="post">
        
 
       <input hidden name="id" id="id" value="<?php echo $row['post_id'];?>">
       		<p>Entry Title: <input name="title" id="title" type="text" value="<?php echo $row['title']; ?>" style="border:#000000 1px solid; width:100%; height:30px;"/></p>

            
     
      <!------------------------ text editor---------------------------------------------------------------->      
        <div id="sample">
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
		
  //]]>
  </script>

<style>

img{ width: 70%; height: 70%;}
</style> 

		  <textarea id="myTextArea" name="myTextArea" style="width:100%; height: 200px;">
			 <?php echo $row['text']; } ?>
        
		</textarea>
		<br>
		</div>		
    		<button type="submit" class="btn btn-primary" name="btn-update" id="btn-update" value="submit" onClick="update()">Submit</button>
            <br><br>
    
    <script>
function update(){
 var x;
 if(confirm("Updated data Sucessfully") == true){
 x= "update";
 }
}
</script>
    </form>
  </div>
  
 </div>
</div>

<?php elseif ($var_role == 'psstudent') : ?>
<div class="container">
  <div class="row">
    <div class="col-sm-3 ">
        <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link" id="v-pills-home-tab" href="bsstudent.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a> <a class="nav-link" data-toggle="collapse" data-target="#expand" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Activities</a>
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
          <a class="nav-link active" data-toggle="collapse" data-target="#expand2" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Clubs</a>
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
				 
				 if($var_studentid == $userfk && $clubfk == $clubid)
				 
			echo   "<li class='list-group-item'><a href='club.php?clubname={$row3['clubName']}'>"."&nbsp;".$clubname."</a> Enrolled </li>";
				}
				}
			?>
    
            </ul>
            </div> 
          <a class="nav-link" id="v-pills-settings-tab"  href="search.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</a> <a class="nav-link" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> </nav>
        <br>
        <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
        <br>
        <br>
        <iframe src="https://calendar.google.com/calendar/embed?src=mtripolitsiotis%40citycollege.sheffield.eu&ctz=Europe%2FAthens" width="75%" height="30%" frameborder="0" scrolling="yes"></iframe>
        <br>
        <br>
        <br>
      </div>
   
    
    <!------------------------------------- End of Nav----------------------------------------------------------------->
  
  
  <div class="col-md-5">
  <?php 
 while($row = mysqli_fetch_assoc($result)){	
 
 ?>
		<form action="modifypostact2.php" method="post">
        
 
       <input hidden name="id" id="id" value="<?php echo $row['post_id'];?>">
       		<p>Entry Title: <input name="title" id="title" type="text" value="<?php echo $row['title']; ?>" style="border:#000000 1px solid; width:100%; height:30px;"/></p>

            
     
      <!------------------------ text editor---------------------------------------------------------------->      
        <div id="sample">
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
		
  //]]>
  </script>

<style>

img{ width: 70%; height: 70%;}
</style> 

		  <textarea id="myTextArea" name="myTextArea" style="width:100%; height: 200px;">
			 <?php echo $row['text']; } ?>
        
		</textarea>
		<br>
		</div>		
    		<button type="submit" class="btn btn-primary" name="btn-update" id="btn-update" value="submit" onClick="update()">Submit</button>
            <br><br>
    
    <script>
function update(){
 var x;
 if(confirm("Updated data Sucessfully") == true){
 x= "update";
 }
}
</script>
    </form>
  </div>
  
 </div>
</div>

<?php endif; ?>
</body>
</html>
<?php
}else{
	echo "log in error";
	header("Location: ../index.php?index==error");
}
?>
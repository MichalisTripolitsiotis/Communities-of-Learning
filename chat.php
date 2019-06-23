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
   
   $sql="SELECT role FROM staff WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_role=$row[0];
   //print($var_role);
   
    $sql2="SELECT id FROM staff WHERE username='$var_username'";
    $result2=mysqli_query($con, $sql2);
    $row2=mysqli_fetch_row($result2);
    $var_id=$row2[0];
   // print($var_id);
   
   
   $sql="SELECT upload FROM staff WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_upload=$row[0];
   //print($var_role);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chat</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="icon" href="images/tablogo.png">
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="chat.css">
<script src="general.js" type="text/javascript"></script>
</head>

<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-circle-up" aria-hidden="true" style="font-size:36px"></i></button>
    <div class="col-md">
      <header class="py-4 bg-image" style="background-color:rgba(47, 132, 192);">
			<center><p style="color:white; font-size:170%;"><img class="visible-lg visible-md" id="logo" src="images/logo.png"> Communities of Learning (C.o.L.)</p></center>
		 </header>
  </div>
<br>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-circle-up" aria-hidden="true" style="font-size:36px"></i></button>
<!-------------------------------- cs student ------------------------------------------------------------>

						<!--$$$$$$$$$$$$$$$$$$----->
<!------------------------------Admin-------------------------------------------------------------->
<?php if ($var_role == 'admin') : ?>
<div id="content2">
     <div class="container">
  <div class="row">
    <div class="col-sm-3 ">
    <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   
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
      <a class="nav-link" id="v-pills-settings-tab"  href="anreport.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-balance-scale" aria-hidden="true"></i>&nbsp;Annual Report</a> 
      <a class="nav-link active" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> 

      </nav>
      <br>
      <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
    </div>
   <!-----------------------------------------End of NavBar ------------------------------------------------------------->
   <div class="col-md-6">
   <h3>Chat</h3>
  <h6>This is a general chat where all the registered members can communicate between them.</h6>

    
     <script>
function ConfirmDelete() {
  return confirm("Are you sure you want to delete the messages?");
}
</script>
    
    <div id="chat-wrap"><div id="chat-area">
	<?php 
			$query3 = mysqli_query($con, 
			"SELECT u.id, u.text, u.username, u.date
			FROM (
			   SELECT s.username, m.text, m.id, m.date, m.type
			   FROM message AS m 
			   JOIN stu_message AS sm ON m.id=sm.mid
			   JOIN student AS s ON s.studentid = sm.stu_id WHERE m.type='general'
				UNION ALL
				SELECT s.username, m.text, m.id, m.date, m.type
				FROM message AS m
				JOIN staff_message AS sm ON m.id = sm.m_id
				JOIN staff AS s ON s.id = sm.staff_id WHERE m.type='general'
			) AS u
			ORDER BY u.id DESC ");
			
			while($row6 = mysqli_fetch_assoc($query3)) {
				echo $row6['date']."<strong> ".$row6['username']."</strong> ".$row6['text']."<br>";				
			}	
			  ?>
              </div>
            </div>
    <form action="sendform.php" name="sendform" id="sendform" method="post">
        <p>Your message: </p>
        <input type="hidden" value="general" id="type" name="type">
        <textarea id="msg" name="msg" maxlength = '700'></textarea>
        <br>
        <button type="submit" id="submit" name="submit" class="btn btn-outline-info">Send</button>
        <button type="delete" id="delete" name="delete" class="btn btn-outline-danger" Onclick='return ConfirmDelete()'>Delete</button>
    </form>
    </div>
   </div>
   </div>
   </div>



<?php elseif ($var_role == 'staff') :?>

<div class="content3">
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
      <a class="nav-link active" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> 
      <a class="nav-link" id="v-pills-settings-tab"  href="options.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;Options</a>

      </nav>
      <br>
      <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
    </div>
   <!-----------------------------------------End of NavBar ------------------------------------------------------------->
<div class="col-md-6">
  <h3>Chat</h3>
  <h6>This is a general chat where all the registered members can communicate between them.</h6>
    <p id="name-area"><?php echo $var_username ?></p>
    
    <div id="chat-wrap"><div id="chat-area"><?php 
			
			
							$query3 = mysqli_query($con, 
							"SELECT u.id, u.text, u.username, u.date
							FROM (
							   SELECT s.username, m.text, m.id, m.date
							   FROM message AS m 
							   JOIN stu_message AS sm ON m.id=sm.mid
							   JOIN student AS s ON s.studentid = sm.stu_id WHERE m.type='general'
								UNION ALL
								SELECT s.username, m.text, m.id, m.date
								FROM message AS m
								JOIN staff_message AS sm ON m.id = sm.m_id
								JOIN staff AS s ON s.id = sm.staff_id WHERE m.type='general'
							) AS u
							ORDER BY u.id DESC ");
							
							while($row6 = mysqli_fetch_assoc($query3)) {
								echo $row6['date']."<strong> ".$row6['username']."</strong> ".$row6['text']."<br>";				
							}	
			
			  ?></div></div>
    <form action="sendform.php" name="sendform" id="sendform" method="post">
        <p>Your message: </p>
        <input type="hidden" value="general" id="type" name="type">
        <textarea id="msg" name="msg" maxlength = '700'></textarea>
        <br>
        <button type="submit" id="submit" name="submit" class="btn btn-outline-info">Send</button>
    </form>
    </div>
   </div>
   </div>

</div>

<?php endif; ?>

 
   <?php
}else{
	echo "log in error";
	header("Location: ../index.php?index==error");
}

?>

<?php
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

    $var_id=$row[0];
    //print($var_studentid);
   
    $sql="SELECT role FROM student WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_role=$row[0];
   //print($var_role);
?>




<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-circle-up" aria-hidden="true" style="font-size:36px"></i></button>

<!-------------------------------- cs student ------------------------------------------------------------>
<?php if($var_role == 'csstudent') : ?>
<div id="content1">
     <div class="container">
  <div class="row">
     <!-------------------------- NavBar ----------------------------------------------------------------------------->
    <div class="col-sm-3 ">
    <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   
      <a class="nav-link" id="v-pills-home-tab"  href="csstudent.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a>
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
      <a class="nav-link active" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> 

      </nav>
      <br>
      <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
    </div>
    <!-------------------------------end of nav ------------------------------------->  
   <div class="col-md-6">
   <h3>Chat</h3>
     <h6>This is a general chat where all the registered members can communicate between them.</h6>

    <p id="name-area"><?php echo $var_username ?></p>
    
    <div id="chat-wrap"><div id="chat-area"><?php 
			
			
							$query3 = mysqli_query($con, 
							"SELECT u.id, u.text, u.username, u.date
							FROM (
							   SELECT s.username, m.text, m.id, m.date
							   FROM message AS m 
							   JOIN stu_message AS sm ON m.id=sm.mid
							   JOIN student AS s ON s.studentid = sm.stu_id WHERE m.type='general'
								UNION ALL
								SELECT s.username, m.text, m.id, m.date
								FROM message AS m
								JOIN staff_message AS sm ON m.id = sm.m_id
								JOIN staff AS s ON s.id = sm.staff_id WHERE m.type='general'
							) AS u
							ORDER BY u.id DESC");
							
							while($row6 = mysqli_fetch_assoc($query3)) {
								echo $row6['date']."<strong> ".$row6['username']."</strong> ".$row6['text']."<br>";				
							}	
			
			  ?></div></div>
    
    <form action="sendform2.php" name="sendform" id="sendform" method="post">
        <p>Your message: </p>
        <input type="hidden" value="general" id="type" name="type">
        <textarea id="msg" name="msg" maxlength = '700'></textarea>
        <br>
        <button type="submit" id="submit" name="submit" class="btn btn-outline-info">Send</button>
    </form>
    </div>
       </div>
     </div>
   </div>

<!------bs------->
<?php elseif ($var_role == 'bsstudent') : ?>
<div id="content4">
 <div class="container">
  <div class="row">

<div class="col-sm-3 ">
    <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   
      <a class="nav-link" id="v-pills-home-tab" href="bsstudent.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a>
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
      <a class="nav-link active" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> 


      </nav>
      <br>
      <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
    </div>
   <!-----------------------------------------End of NavBar ------------------------------------------------------------->
    <!-------------------------------end of nav ------------------------------------->  
   <div class="col-md-6">
   <h3>Chat</h3>
     <h6>This is a general chat where all the registered members can communicate between them.</h6>

    <p id="name-area"><?php echo $var_username ?></p>
    
    <div id="chat-wrap"><div id="chat-area"><?php 
			
			
							$query3 = mysqli_query($con, 
							"SELECT u.id, u.text, u.username, u.date
							FROM (
							   SELECT s.username, m.text, m.id, m.date
							   FROM message AS m 
							   JOIN stu_message AS sm ON m.id=sm.mid
							   JOIN student AS s ON s.studentid = sm.stu_id WHERE m.type='general'
								UNION ALL
								SELECT s.username, m.text, m.id, m.date
								FROM message AS m
								JOIN staff_message AS sm ON m.id = sm.m_id
								JOIN staff AS s ON s.id = sm.staff_id WHERE m.type='general'
							) AS u
							ORDER BY u.id ");
							
							while($row6 = mysqli_fetch_assoc($query3)) {
								echo $row6['date']."<strong> ".$row6['username']."</strong> ".$row6['text']."<br>";				
							}	
			
			  ?></div></div>
    
    <form action="sendform2.php" name="sendform" id="sendform" method="post">
        <p>Your message: </p>
        <input type="hidden" value="general" id="type" name="type">
        <textarea id="msg" name="msg" maxlength = '700'></textarea>
        <br>
        <button type="submit" id="submit" name="submit" class="btn btn-outline-info">Send</button>
    </form>
    </div>
       </div>
     </div>
   </div>
   <!--------------es student----------------------->
   <?php elseif ($var_role == 'esstudent') : ?>
<div id="content4">
 <div class="container">
  <div class="row">

<div class="col-sm-3 ">
    <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   
      <a class="nav-link" id="v-pills-home-tab" href="esstudent.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a>
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
      <a class="nav-link active" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> 


      </nav>
      <br>
      <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
    </div>
   <!-----------------------------------------End of NavBar ------------------------------------------------------------->
    <!-------------------------------end of nav ------------------------------------->  
   <div class="col-md-6">
   <h3>Chat</h3>
    <p id="name-area"><?php echo $var_username ?></p>
    
    <div id="chat-wrap"><div id="chat-area"><?php 
			
			
							$query3 = mysqli_query($con, 
							"SELECT u.id, u.text, u.username, u.date
							FROM (
							   SELECT s.username, m.text, m.id, m.date
							   FROM message AS m 
							   JOIN stu_message AS sm ON m.id=sm.mid
							   JOIN student AS s ON s.studentid = sm.stu_id WHERE m.type='general'
								UNION ALL
								SELECT s.username, m.text, m.id, m.date
								FROM message AS m
								JOIN staff_message AS sm ON m.id = sm.m_id
								JOIN staff AS s ON s.id = sm.staff_id WHERE m.type='general'
							) AS u
							ORDER BY u.id DESC");
							
							while($row6 = mysqli_fetch_assoc($query3)) {
								echo $row6['date']."<strong> ".$row6['username']."</strong> ".$row6['text']."<br>";				
							}	
			
			  ?></div></div>
    <form action="sendform2.php" name="sendform" id="sendform" method="post">
        <p>Your message: </p>
        <input type="hidden" value="general" id="type" name="type">
        <textarea id="msg" name="msg" maxlength = '700'></textarea>
        <br>
        <button type="submit" id="submit" name="submit" class="btn btn-outline-info">Send</button>
    </form>
    </div>
                                
   		 </div> 
       </div>
   </div>
   <!---------------ps student--->
   <?php elseif ($var_role == 'psstudent') : ?>
<div id="content4">
 <div class="container">
  <div class="row">

<div class="col-sm-3 ">
    <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   
      <a class="nav-link" id="v-pills-home-tab" href="psstudent.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a>
      <a class="nav-link " data-toggle="collapse" data-target="#expand" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Activities</a>
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
<a class="nav-link active" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> 

      </nav>
      <br>
      <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
    </div>
   <!-----------------------------------------End of NavBar ------------------------------------------------------------->
    <!-------------------------------end of nav ------------------------------------->  
   <div class="col-md-6">
   <h3>Chat</h3>
     <h6>This is a general chat where all the registered members can communicate between them.</h6>

    <p id="name-area"><?php echo $var_username ?></p>
    
    <div id="chat-wrap"><div id="chat-area"><?php 
			
			
							$query3 = mysqli_query($con, 
							"SELECT u.id, u.text, u.username, u.date
							FROM (
							   SELECT s.username, m.text, m.id, m.date
							   FROM message AS m 
							   JOIN stu_message AS sm ON m.id=sm.mid
							   JOIN student AS s ON s.studentid = sm.stu_id WHERE m.type='general'
								UNION ALL
								SELECT s.username, m.text, m.id, m.date
								FROM message AS m
								JOIN staff_message AS sm ON m.id = sm.m_id
								JOIN staff AS s ON s.id = sm.staff_id WHERE m.type='general'
							) AS u
							ORDER BY u.id DESC");
							
							while($row6 = mysqli_fetch_assoc($query3)) {
								echo $row6['date']."<strong> ".$row6['username']."</strong> ".$row6['text']."<br>";				
							}	
			
			  ?></div></div>
    <form action="sendform2.php" name="sendform" id="sendform" method="post">
        <p>Your message: </p>
        <input type="hidden" value="general" id="type" name="type">
        <textarea id="msg" name="msg" maxlength = '700'></textarea>
        <br>
        <button type="submit" id="submit" name="submit" class="btn btn-outline-info">Send</button>
    </form>
    </div>
                                
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
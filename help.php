<?php
session_start();
include_once('connect.php');
//hide errors
error_reporting(0);

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
<title>Help</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="icon" href="images/tablogo.png">
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="chatgeneral.css">
<script src="general.js" type="text/javascript"></script>
<script src="divcontent.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="nicEdit.js" type="text/javascript"></script>
</head>

<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-circle-up" aria-hidden="true" style="font-size:36px"></i></button>
<div class="col-md">
  <header class="py-4 bg-image" style="background-color:rgba(47, 132, 192);">
    <center>
      <p style="color:white; font-size:170%;"><img class="visible-lg visible-md" id="logo" src="images/logo.png"> Communities of Learning (C.o.L.)</p>
    </center>
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
        <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link" id="v-pills-home-tab" href="admin.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a> <a class="nav-link" data-toggle="collapse" data-target="#expand" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Activities</a>
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
          <a class="nav-link" id="v-pills-settings-tab"  href="textEditor.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Upload text</a> <a class="nav-link" id="v-pills-settings-tab"  href="information.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-info" aria-hidden="true"></i>&nbsp;Information</a> <a class="nav-link" id="v-pills-settings-tab"  href="search.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</a> <a class="nav-link" id="v-pills-settings-tab"  href="anreport.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-balance-scale" aria-hidden="true"></i>&nbsp;Annual Report</a> <a class="nav-link" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> </nav>
        <br>
        <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
        <br>
        <br>
        <iframe src="https://calendar.google.com/calendar/embed?src=mtripolitsiotis%40citycollege.sheffield.eu&ctz=Europe%2FAthens" width="75%" height="30%" frameborder="0" scrolling="yes"></iframe>
        <br>
        <br>
        <br>
      </div>
      <!-----------------------------------------End of NavBar ------------------------------------------------------------->
      <div class="col-md-9">
    <nav class="nav nav-pills nav-justified">
  <a class="nav-item nav-link scroll-link" href="#section1">Home</a>
  <a class="nav-item nav-link scroll-link" href="#section2">Activities</a>
  <a class="nav-item nav-link scroll-link" href="#section3">Clubs</a>
  <a class="nav-item nav-link scroll-link" href="#section4">Upload Text</a>
  <a class="nav-item nav-link scroll-link" href="#section5">Information</a>
  <a class="nav-item nav-link scroll-link" href="#section6">Search</a>
  <a class="nav-item nav-link scroll-link" href="#section7">Annual Report</a>
  <a class="nav-item nav-link scroll-link" href="#section8">Chat</a>
</nav>
<br>
  <div id="section1" class="container-fluid">
  <h1>Home</h1>
  <p>The home page is the first screen that you see when you login to the Communities of Learning. Here you can see articles that are might be important or articles 
  that they do not have any category to be categorized. You will also see a "card" with your personal details. <br><img style="height:30%; width:30%;"src="images/personal data.png"><br><br>
  As the admin of the page you can edit or delete all the texts from the system.  
  </p>
</div>
<br>
<div id="section2" class="container-fluid">
  <h1>Activities</h1>
  <p>In that section there are all the activities that the University organizes. There are standards activites and you can not add or delete any category.</p>
</div><br>
<div id="section3" class="container-fluid">
  <h1>Clubs</h1>
  <p>In that section there are all the clubs that the University has. You can create and then assign a club to a staff (a lecturer for example) or you can delete them from the <strong>Information</strong> section.
  	 A club has either texts that are uploaded from the admin or the coordinator of the club or posts that are uploaded from the enrolled students to a club. There is a chat area where someone can communicate with
     enrolled students, the manager of the club or the admin. Have in mind that the chat is visible to everyone. A student than wants to enroll to a club can communicate from the chat but he cannot upload a post.
     Finally you can upload, modify or delete a text. You can also modify or delete a post from a student.
  </p>
</div><br>
<div id="section4" class="container-fluid">
  <h1>Upload Text</h1>
  <p>You can upload your texts from that area. You have to specify a title, where the text will be uploaded through the tag, the porgram the department and finally the level that concern the text.
  	  You will also find the main body that contains a text editor in order to manipulate the text and the Shefield Graduate Attributes that could be assigned to a text. 
  	  Finally on the right you can see the most recent texts that have been uploaded.
  </p>
</div><br>
<div id="section5" class="container-fluid">
  <h1>Information</h1>
  <p>This is a very important section for the system. There you can see all the students from all the departments and all the lecturers where you can also edit them if you press on their Username.
  	 From there you can also add or delete a student or a staff member and create or delete a club.
  </p>
</div><br>
<div id="section6" class="container-fluid">
  <h1>Search</h1>
  <p>You can search a text that has been uploaded to the system by specifying one or many attributes. </p>
</div><br>
<div id="section7" class="container-fluid">
  <h1>Annual Report</h1>
  <p>The Annual Report can generate PDF file by specifying again one or many attributes. It is quite similar with the Search section. </p>
</div><br>
<div id="section8" class="container-fluid">
  <h1>Chat</h1>
  <p>The last section is a general chat where <strong> everyone</strong> can communicate between them meaning all the staff and all the students. The messages are visible to everyone.</p>
</div><br>
    
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
        <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link" id="v-pills-home-tab"  href="staff.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a> <a class="nav-link" data-toggle="collapse" data-target="#expand" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Activities</a>
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
          <a class="nav-link" id="v-pills-settings-tab"  href="textEditor.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Upload text</a> <a class="nav-link" id="v-pills-settings-tab"  href="search.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</a> <a class="nav-link" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> 
                <a class="nav-link" id="v-pills-settings-tab"  href="options.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;Options</a>

          </nav>
        <br>
        <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
        <br>
        <br>
        <iframe src="https://calendar.google.com/calendar/embed?src=mtripolitsiotis%40citycollege.sheffield.eu&ctz=Europe%2FAthens" width="75%" height="30%" frameborder="0" scrolling="yes"></iframe>
        <br>
        <br>
        <br>
      </div>
      <!-----------------------------------------End of NavBar ------------------------------------------------------------->
      <div class="col-md-9">
    <nav class="nav nav-pills nav-justified">
  <a class="nav-item nav-link scroll-link" href="#section1">Home</a>
  <a class="nav-item nav-link scroll-link" href="#section2">Activities</a>
  <a class="nav-item nav-link scroll-link" href="#section3">Clubs</a>
  <a class="nav-item nav-link scroll-link" href="#section4">Upload Text</a>
  <a class="nav-item nav-link scroll-link" href="#section5">Search</a>
  <a class="nav-item nav-link scroll-link" href="#section6">Chat</a>
  <a class="nav-item nav-link scroll-link" href="#section7">Options</a>
</nav>
<br>
  <div id="section1" class="container-fluid">
  <h1>Home</h1>
  <p>The home page is the first screen that you see when you login to the Communities of Learning. Here you can see articles that are might be important or articles 
  that they do not have any category to be categorized. You will also see a "card" with your personal details. <br><img style="height:30%; width:30%;"src="images/personal_data_staff.png"><br><br>
  *The most important thing here is that you can interchange between the Activities or the Clubs (that you are managing) in order to upload, delete or edit a text. In order for example to upload a text
  to one of your clubs you have to select it from the drop down menu, press change and then you can make all the opperations that are available (C.R.U.D.).*<br>
  Always remember that this is one of the most important things on the system.
  </p>
  </div>
<br>
<div id="section2" class="container-fluid">
  <h1>Activities</h1>
  <p>In that section there are all the activities that the University organizes. There are standards activites and you can not add or delete any category. Again in order to upload a text for an upcoming activity you have to select the activity
  from your personal detail's card and change it. Then you can go to Upload text section if you want to upload a text or to the Activity and manipulate all the texts that hou have uploaded.</p>
</div><br>
<div id="section3" class="container-fluid">
  <h1>Clubs</h1>
   <p>In that section there are all the clubs that the University has. You can create a club from the <strong>Options</strong> section.
  	 A club has either texts that are uploaded from the admin or the coordinator of the club or posts that are uploaded from the enrolled students to a club. There is a chat area where someone can communicate with
     enrolled students, the manager of the club or the admin. Have in mind that the chat is visible to everyone. A student than wants to enroll to a club can communicate from the chat but he cannot upload a post.
     Finally you can upload, modify or delete a text, you can also modify or delete a post from a student (if you have selected to manage the club from the Personal Detail's card).
  </p>
  </div><br>
<div id="section4" class="container-fluid">
  <h1>Upload Text</h1>
   <p>You can upload your texts from that area. You have to specify a title, where the text will be uploaded will be filled depending what you are currently managing, the porgram the department and finally the level that concern the text.
  	  You will also find the main body that contains a text editor in order to manipulate the text and the Shefield Graduate Attributes that could be assigned to a text. 
  	  Finally on the right you can see the most recent texts that you have uploaded.
  </p>
</div><br>
<div id="section5" class="container-fluid">
   <h1>Search</h1>
  <p>You can search a text that has been uploaded to the system by specifying one or many attributes. </p>
</div><br>
<div id="section6" class="container-fluid">
 <h1>Chat</h1>
  <p>This section is a general chat where <strong> everyone</strong> can communicate between them meaning all the staff and all the students. The messages are visible to everyone.</p>
</div><br>
<div id="section7" class="container-fluid">
  <h1>Options</h1>
  <p>In the last section you can can create or delete a new club. Remember that you have to fill all the requirement fields in order to create a new club. </p>
</div><br>
    
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
      <!-------------------------------end of nav ------------------------------------->
     <div class="col-md-9">
    <nav class="nav nav-pills nav-justified">
  <a class="nav-item nav-link scroll-link" href="#section1">Home</a>
  <a class="nav-item nav-link scroll-link" href="#section2">Activities</a>
  <a class="nav-item nav-link scroll-link" href="#section3">Clubs</a>
  <a class="nav-item nav-link scroll-link" href="#section4">Search</a>
  <a class="nav-item nav-link scroll-link" href="#section5">Chat</a>
</nav>
<br>
  <div id="section1" class="container-fluid">
  <h1>Home</h1>
  <p>The home page is the first screen that you see when you login to the Communities of Learning. Here you can see articles that are might be important or articles 
  that they do not have any category to be categorized. You will also see a "card" with your personal details. <br><img style="height:30%; width:30%;"src="images/personal data.png"><br><br>
 	From here you can also upload or delete you profile picture.
  </p>
  </div>
<br>
<div id="section2" class="container-fluid">
 <h1>Activities</h1>
  <p>In that section there are all the activities that the University organizes. You can see the activities depending your department but not your current level of studies.
  </p>
</div><br>
<div id="section3" class="container-fluid">
  <h1>Clubs</h1>
   <p>In that section there are all the clubs that the University has. You can enroll to one or many clubs.
  	 A club has either texts that are uploaded from the admin or the coordinator of the club or posts that are uploaded from the enrolled students to a club. There is a chat area where someone can communicate with
     enrolled students, the manager of the club or the admin. Have in mind that the chat is visible to everyone. A student than wants to enroll to a club can communicate from the chat but he cannot upload a post.
     Finally you can upload, modify or delete your posts.
  </p>
  </div><br>
<div id="section4" class="container-fluid">
   <h1>Search</h1>
  <p>You can search a text that has been uploaded to the system by specifying one or many attributes. </p>
</div><br>
<div id="section5" class="container-fluid">
  <h1>Chat</h1>
  <p>This section is a general chat where <strong> everyone</strong> can communicate between them meaning all the staff and all the students. The messages are visible to everyone.</p>
</div><br>
    
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
				 
				 if($var_id == $userfk && $clubfk == $clubid)
				 
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
      <!-----------------------------------------End of NavBar -------------------------------------------------------------> 
      <!-------------------------------end of nav ------------------------------------->
       <div class="col-md-9">
    <nav class="nav nav-pills nav-justified">
  <a class="nav-item nav-link scroll-link" href="#section1">Home</a>
  <a class="nav-item nav-link scroll-link" href="#section2">Activities</a>
  <a class="nav-item nav-link scroll-link" href="#section3">Clubs</a>
  <a class="nav-item nav-link scroll-link" href="#section4">Search</a>
  <a class="nav-item nav-link scroll-link" href="#section5">Chat</a>
</nav>
<br>
  <div id="section1" class="container-fluid">
  <h1>Home</h1>
  <p>The home page is the first screen that you see when you login to the Communities of Learning. Here you can see articles that are might be important or articles 
  that they do not have any category to be categorized. You will also see a "card" with your personal details. <br><img style="height:30%; width:30%;"src="images/personal data.png"><br><br>
 	From here you can also upload or delete you profile picture.
  </p>
  </div>
<br>
<div id="section2" class="container-fluid">
 <h1>Activities</h1>
  <p>In that section there are all the activities that the University organizes. You can see the activities depending your department but not your current level of studies.
  </p>
</div><br>
<div id="section3" class="container-fluid">
  <h1>Clubs</h1>
   <p>In that section there are all the clubs that the University has. You can enroll to one or many clubs.
  	 A club has either texts that are uploaded from the admin or the coordinator of the club or posts that are uploaded from the enrolled students to a club. There is a chat area where someone can communicate with
     enrolled students, the manager of the club or the admin. Have in mind that the chat is visible to everyone. A student than wants to enroll to a club can communicate from the chat but he cannot upload a post.
     Finally you can upload, modify or delete your posts.
  </p>
  </div><br>
<div id="section4" class="container-fluid">
   <h1>Search</h1>
  <p>You can search a text that has been uploaded to the system by specifying one or many attributes. </p>
</div><br>
<div id="section5" class="container-fluid">
  <h1>Chat</h1>
  <p>This section is a general chat where <strong> everyone</strong> can communicate between them meaning all the staff and all the students. The messages are visible to everyone.</p>
</div><br>
    
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
        <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link" id="v-pills-home-tab" href="esstudent.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a> <a class="nav-link" data-toggle="collapse" data-target="#expand" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Activities</a>
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
      <!-----------------------------------------End of NavBar -------------------------------------------------------------> 
      <!-------------------------------end of nav ------------------------------------->
      <div class="col-md-9">
   <nav class="nav nav-pills nav-justified">
  <a class="nav-item nav-link scroll-link" href="#section1">Home</a>
  <a class="nav-item nav-link scroll-link" href="#section2">Activities</a>
  <a class="nav-item nav-link scroll-link" href="#section3">Clubs</a>
  <a class="nav-item nav-link scroll-link" href="#section4">Search</a>
  <a class="nav-item nav-link scroll-link" href="#section5">Chat</a>
</nav>
<br>
  <div id="section1" class="container-fluid">
  <h1>Home</h1>
  <p>The home page is the first screen that you see when you login to the Communities of Learning. Here you can see articles that are might be important or articles 
  that they do not have any category to be categorized. You will also see a "card" with your personal details. <br><img style="height:30%; width:30%;"src="images/personal data.png"><br><br>
 	From here you can also upload or delete you profile picture.
  </p>
  </div>
<br>
<div id="section2" class="container-fluid">
 <h1>Activities</h1>
  <p>In that section there are all the activities that the University organizes. You can see the activities depending your department but not your current level of studies.
  </p>
</div><br>
<div id="section3" class="container-fluid">
  <h1>Clubs</h1>
   <p>In that section there are all the clubs that the University has. You can enroll to one or many clubs.
  	 A club has either texts that are uploaded from the admin or the coordinator of the club or posts that are uploaded from the enrolled students to a club. There is a chat area where someone can communicate with
     enrolled students, the manager of the club or the admin. Have in mind that the chat is visible to everyone. A student than wants to enroll to a club can communicate from the chat but he cannot upload a post.
     Finally you can upload, modify or delete your posts.
  </p>
  </div><br>
<div id="section4" class="container-fluid">
   <h1>Search</h1>
  <p>You can search a text that has been uploaded to the system by specifying one or many attributes. </p>
</div><br>
<div id="section5" class="container-fluid">
  <h1>Chat</h1>
  <p>This section is a general chat where <strong> everyone</strong> can communicate between them meaning all the staff and all the students. The messages are visible to everyone.</p>
</div><br>
    
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
        <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link" id="v-pills-home-tab" href="psstudent.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a> <a class="nav-link" data-toggle="collapse" data-target="#expand" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Activities</a>
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
      <!-----------------------------------------End of NavBar -------------------------------------------------------------> 
      <!-------------------------------end of nav ------------------------------------->
        <div class="col-md-9">
   <nav class="nav nav-pills nav-justified">
  <a class="nav-item nav-link scroll-link" href="#section1">Home</a>
  <a class="nav-item nav-link scroll-link" href="#section2">Activities</a>
  <a class="nav-item nav-link scroll-link" href="#section3">Clubs</a>
  <a class="nav-item nav-link scroll-link" href="#section4">Search</a>
  <a class="nav-item nav-link scroll-link" href="#section5">Chat</a>
</nav>
<br>
  <div id="section1" class="container-fluid">
  <h1>Home</h1>
  <p>The home page is the first screen that you see when you login to the Communities of Learning. Here you can see articles that are might be important or articles 
  that they do not have any category to be categorized. You will also see a "card" with your personal details. <br><img style="height:30%; width:30%;"src="images/personal data.png"><br><br>
 	From here you can also upload or delete you profile picture.
  </p>
  </div>
<br>
<div id="section2" class="container-fluid">
 <h1>Activities</h1>
  <p>In that section there are all the activities that the University organizes. You can see the activities depending your department but not your current level of studies.
  </p>
</div><br>
<div id="section3" class="container-fluid">
  <h1>Clubs</h1>
   <p>In that section there are all the clubs that the University has. You can enroll to one or many clubs.
  	 A club has either texts that are uploaded from the admin or the coordinator of the club or posts that are uploaded from the enrolled students to a club. There is a chat area where someone can communicate with
     enrolled students, the manager of the club or the admin. Have in mind that the chat is visible to everyone. A student than wants to enroll to a club can communicate from the chat but he cannot upload a post.
     Finally you can upload, modify or delete your posts.
  </p>
  </div><br>
<div id="section4" class="container-fluid">
   <h1>Search</h1>
  <p>You can search a text that has been uploaded to the system by specifying one or many attributes. </p>
</div><br>
<div id="section5" class="container-fluid">
  <h1>Chat</h1>
  <p>This section is a general chat where <strong> everyone</strong> can communicate between them meaning all the staff and all the students. The messages are visible to everyone.</p>
</div><br>
    
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
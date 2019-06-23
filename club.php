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

$var_clubname=$_GET['clubname'];

//echo $var_clubname;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $var_clubname;?></title>
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

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138080315-1"></script>

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
      <div class="col-md-6">
        <h3><?php echo $var_clubname;?></h3>
        <!--<div class="table-responsive">-->
        <style>

img{ width: 70%; height: 70%;}
</style>
        <?php $sql=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
			while($row5 = mysqli_fetch_assoc($sql)){
				$club_id= $row5['id'];
				$textarea = $row5['textarea'];
			}
				?>
        <div class="info"><?php echo $textarea ?></div>
        <script>
function ConfirmDelete() {
  return confirm("Are you sure you want to delete?");
}
</script>
        <center>
          <form name="myform" method="post" action="">
            <label title="Texts that have been uploaded from the manager of the club or the admin">
                <input type="radio" class="option-input radio" name="rb" id="texts" checked/>
                Texts </label>
              <label title="Texts that have been uploaded from the members of the club">
                <input type="radio" class="option-input radio" name="rb" id="posts" />
                Posts </label>
          </form>
        </center>
        <br>
        <div class="texts">
          <?php


			$sql=mysqli_query($con,"SELECT * FROM texts WHERE tag='$var_clubname' ORDER BY date DESC");
			while($row2 = mysqli_fetch_assoc($sql)){
			$query = mysqli_query($con, "SELECT * FROM diss.staff WHERE id =".$row2['user_fk']);

							while($row4 = mysqli_fetch_assoc($query)) {
							$username = $row4['username'];
							}

echo"<table class='table table-striped table-dark'>". "<span>"."<tr>"."<td>"."<strong>"."<a href='articles.php?id={$row2['id']}&title={$row2['title']}'>"."<center>".$row2['title']."</center>"."</a>"."</strong>"."</td>"."</tr>"."<tr>"."<td>".$row2['program']."<br>".$row2['department']."<br>".$row2['level']."<br>".$row2['tag']."<br>"."Author: "."<a href='author.php?username={$username}'>".$username."</a>"."</td>"."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['myTextArea']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>".
"<hr>"."<form action='modify.php' method='post' enctype='multipart/form-data'>"."<textarea hidden name='txtId'/>".$row2['id']."</textarea>"."<button  type='modify' name='modify' id='modify' class='btn btn-warning'>Edit</button>"."</form>".
			"<br>"."<form action='delete.php' method='post' enctype='multipart/form-data'>"."<textarea hidden name='txtId2'/>".$row2['id']."</textarea>"."<button  type='delete' name='delete' id='delete' class='btn btn-danger' Onclick='return ConfirmDelete()'>Delete</button>"."</form>"."<hr>";
			?>
          <?php }?>
        </div>
        <div class="posts">
          <?php


			$sql=mysqli_query($con,"SELECT * FROM posts WHERE club_fk='$club_id' ORDER BY date DESC");

			while($row2 = mysqli_fetch_assoc($sql)){
			$enrollfk=$row2['enroll_fk'];
			$post_id=$row2['post_id'];
			$sql5=mysqli_query($con,"SELECT user_fk FROM enroll WHERE enroll_id='$enrollfk'");
			while($row12 = mysqli_fetch_assoc($sql5)){
					$ufk= $row12['user_fk'];
			}


			$sql3=mysqli_query($con,"SELECT * FROM student WHERE studentid ='$ufk'");
			while($row10 = mysqli_fetch_assoc($sql3)){
					$uname = $row10['username'];
			}

			echo"<table class='table table-striped table-dark'>".
			"<span>"."<tr>"."<td>"."Title: "."<strong>".$row2['title']."</strong>"."</td>"."</tr>".
			"<tr>"."<td>"."Author: ".$uname."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['text']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>".
			"<hr>"."<form action='modifypost.php' method='post' enctype='multipart/form-data'>"."<textarea hidden name='txtId'/>".$post_id."</textarea>"."<button  type='modify' name='modify' id='modify' class='btn btn-warning'>Edit</button>"."</form>"."<br>".
			"<form action='deletepost.php' method='post' enctype='multipart/form-data'>"."<textarea hidden name='txtId2'/>".$post_id."</textarea>"."<button  type='delete' name='delete' id='delete' class='btn btn-danger' Onclick='return ConfirmDelete()'>Delete</button>"."</form>"."<hr>";
			?>
          <?php }?>
        </div>

        <!--</div>-->
      </div>
      <div class="col-md-3">
        <h3>Chat</h3>
        <div id="chat-wrap">
          <div id="chat-area">
            <?php

							$query3 = mysqli_query($con,
							"SELECT u.id, u.text, u.username, u.date
							FROM (
							   SELECT s.username, m.text, m.id, m.date, m.type
							   FROM message AS m
							   JOIN stu_message AS sm ON m.id=sm.mid
							   JOIN student AS s ON s.studentid = sm.stu_id WHERE m.type='$var_clubname'
								UNION ALL
								SELECT s.username, m.text, m.id, m.date, m.type
								FROM message AS m
								JOIN staff_message AS sm ON m.id = sm.m_id
								JOIN staff AS s ON s.id = sm.staff_id WHERE m.type='$var_clubname'
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
          <input type="hidden" value="<?php echo htmlspecialchars($var_clubname); ?>" id="type" name="type">
          <textarea id="msg" name="msg" maxlength = '700'></textarea>
          <br>
          <button type="submit" id="submit" name="submit" class="btn btn-outline-info">Send</button>
        </form>
         <div class="enrolled">
          <?php $querry=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
	 while($row6 = mysqli_fetch_assoc($querry)) {
								$staff_fk= $row6['staff_fk'];
							}

							$querry2=mysqli_query($con,"SELECT * FROM staff WHERE id='$staff_fk'");
	 while($row7 = mysqli_fetch_assoc($querry2)) {
								$username= $row7['username'];

							}


	?>
          <br>
          <h5>Coordinator: <?php echo $username?></h5>
          <table class="table table1">
            <thead class="thead-dark">
              <tr>

                <th scope="col">Reg. Number</th>
                <th scope="col">Username</th>
              </tr>
            </thead>
            <tbody>
              <?php
	$sql =mysqli_query($con, "SELECT * FROM enroll WHERE club_fk='$club_id'");
		 while($row7 = mysqli_fetch_assoc($sql)) {
								$enrolledStudentId= $row7['user_fk'];
	$sql2 =mysqli_query($con, "SELECT * FROM student WHERE studentid='$enrolledStudentId'");
         while($row8 = mysqli_fetch_assoc($sql2)) { ?>
              <tr>

                <td><?php echo $row8['regnum']; ?></td>
                <td><?php echo $row8['username']; }  }?></td>
              </tr>
            </tbody>
          </table>

      </div>
    </div>
  </div>
</div>
<?php elseif ($var_role == 'staff' AND $var_upload==$var_clubname ): ?>
<div class="content3">
  <div class="container">
    <div class="row">
      <!-------------------------- NavBar ----------------------------------------------------------------------------->
      <div class="col-sm-3 ">
        <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link" id="v-pills-home-tab"  href="staff.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a> <a class="nav-link" data-toggle="collapse" data-target="#expand" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Activities</a>
          <div id="expand" class="collapse">
            <ul class="list-group list-group-flush">
              <li class="list-group-item " ><a href="companyvisits.php"<i class="fa fa-building" aria-hidden="true"></i>&nbsp;Sports Club</a></li>
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
      <div class="col-md-6">
        <h3><?php echo $var_clubname;?></h3>
        <div class="table-responsive">
          <style>

img{ width: 70%; height: 70%;}



</style>
          <?php $sql=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
			while($row5 = mysqli_fetch_assoc($sql)){
				$club_id= $row5['id'];
			$textarea = $row5['textarea'];
			}
				?>
          <div class="info"><?php echo $textarea ?></div>
          <script>
function ConfirmDelete() {
  return confirm("Are you sure you want to delete?");
}
</script>
		<br>
          <center>
            <form name="myform" method="post" action="">
              <label title="Texts that have been uploaded from the manager of the club or the admin">
                <input type="radio" class="option-input radio" name="rb" id="texts" checked/>
                Texts </label>
              <label title="Texts that have been uploaded from the members of the club">
                <input type="radio" class="option-input radio" name="rb" id="posts" />
                Posts </label>
            </form>
          </center>
          <br>

          <div class="texts">

            <?php


			$sql=mysqli_query($con,"SELECT * FROM texts WHERE tag='$var_clubname' ORDER BY date DESC");
			while($row2 = mysqli_fetch_assoc($sql)){
			$query = mysqli_query($con, "SELECT * FROM diss.staff WHERE id =".$row2['user_fk']);

							while($row4 = mysqli_fetch_assoc($query)) {
							$username = $row4['username'];
							}
echo"<table class='table table-striped table-dark'>". "<span>"."<tr>"."<td>"."<strong>"."<a href='articles.php?id={$row2['id']}&title={$row2['title']}'>"."<center>".$row2['title']."</center>"."</a>"."</strong>"."</td>"."</tr>"."<tr>"."<td>".$row2['program']."<br>".$row2['department']."<br>".$row2['level']."<br>".$row2['tag']."<br>"."Author: "."<a href='author.php?username={$username}'>".$username."</a>"."</td>"."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['myTextArea']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>".
"<hr>"."<form action='modify.php' method='post' enctype='multipart/form-data'>"."<textarea hidden name='txtId'/>".$row2['id']."</textarea>"."<button  type='modify' name='modify' id='modify' class='btn btn-warning'>Edit</button>"."</form>".
			"<br>"."<form action='delete.php' method='post' enctype='multipart/form-data'>"."<textarea hidden name='txtId2'/>".$row2['id']."</textarea>"."<button  type='delete' name='delete' id='delete' class='btn btn-danger' Onclick='return ConfirmDelete()'>Delete</button>"."</form>"."<hr>";
			?>
            <?php }?>
          </div>
          <div class="posts">
            <?php


			$sql=mysqli_query($con,"SELECT * FROM posts WHERE club_fk='$club_id' ORDER BY date DESC");

			while($row2 = mysqli_fetch_assoc($sql)){
			$enrollfk=$row2['enroll_fk'];
			$post_id=$row2['post_id'];
			$sql5=mysqli_query($con,"SELECT user_fk FROM enroll WHERE enroll_id='$enrollfk'");
			while($row12 = mysqli_fetch_assoc($sql5)){
					$ufk= $row12['user_fk'];
			}


			$sql3=mysqli_query($con,"SELECT * FROM student WHERE studentid ='$ufk'");
			while($row10 = mysqli_fetch_assoc($sql3)){
					$uname = $row10['username'];
			}

			echo"<table class='table table-striped table-dark'>".
			"<span>"."<tr>"."<td>"."Title: "."<strong>".$row2['title']."</strong>"."</td>"."</tr>".
			"<tr>"."<td>"."Author: ".$uname."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['text']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>".
			"<hr>"."<form action='modifypost.php' method='post' enctype='multipart/form-data'>"."<textarea hidden name='txtId'/>".$post_id."</textarea>"."<button  type='modify' name='modify' id='modify' class='btn btn-warning'>Edit</button>"."</form>"."<br>".
			"<form action='deletepost.php' method='post' enctype='multipart/form-data'>"."<textarea hidden name='txtId2'/>".$post_id."</textarea>"."<button  type='delete' name='delete' id='delete' class='btn btn-danger' Onclick='return ConfirmDelete()'>Delete</button>"."</form>"."<hr>";
			?>
            <?php }?>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <h3>Chat</h3>
        <div id="chat-wrap">
          <div id="chat-area">
            <?php

							$query3 = mysqli_query($con,
							"SELECT u.id, u.text, u.username, u.date
							FROM (
							   SELECT s.username, m.text, m.id, m.date, m.type
							   FROM message AS m
							   JOIN stu_message AS sm ON m.id=sm.mid
							   JOIN student AS s ON s.studentid = sm.stu_id WHERE m.type='$var_clubname'
								UNION ALL
								SELECT s.username, m.text, m.id, m.date, m.type
								FROM message AS m
								JOIN staff_message AS sm ON m.id = sm.m_id
								JOIN staff AS s ON s.id = sm.staff_id WHERE m.type='$var_clubname'
							) AS u
							ORDER BY u.id DESC");

							while($row6 = mysqli_fetch_assoc($query3)) {
								echo $row6['date']."<strong> ".$row6['username']."</strong> ".$row6['text']."<br>";
							}

			  ?>
          </div>
        </div>
        <form action="sendform.php" name="sendform" id="sendform" method="post">
          <p>Your message: </p>
          <input type="hidden" value="<?php echo htmlspecialchars($var_clubname); ?>" id="type" name="type">
          <textarea id="msg" style="width:100%; height:100%;" name="msg" maxlength = '700'></textarea>
          <br>
          <button type="submit" id="submit" name="submit" class="btn btn-outline-info">Send</button>
        </form>
        <div class="enrolled">
          <?php $querry=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
	 while($row6 = mysqli_fetch_assoc($querry)) {
								$club_id= $row6['id'];
							}
	?>
          <br>
          <table class="table table1">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Action</th>
                <th scope="col">Reg. Number</th>
                <th scope="col">Username</th>
              </tr>
            </thead>
            <tbody>
              <?php
	$sql =mysqli_query($con, "SELECT * FROM enroll WHERE club_fk='$club_id'");
		 while($row7 = mysqli_fetch_assoc($sql)) {
								$enrolledStudentId= $row7['user_fk'];
	$sql2 =mysqli_query($con, "SELECT * FROM student WHERE studentid='$enrolledStudentId'");
         while($row8 = mysqli_fetch_assoc($sql2)) { ?>
              <tr>
                <td><form action="kick.php" name="kick" id="kick" method="post">
                    <input hidden value="<?php echo htmlspecialchars($club_id); ?>" id="clubid" name="clubid">
                    <input  hidden value="<?php echo htmlspecialchars($enrolledStudentId); ?>" id="studentid" name="studentid">
                    <button type="submit" id="submit" name="submit" class="btn btn-danger">Delete</button>
                  </form></td>
                <td><?php echo $row8['regnum']; ?></td>
                <td><?php echo $row8['username']; }  }?></td>
              </tr>
            </tbody>
          </table>
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add member</button>
          <br><br>
          <?php echo   "<a href='statistics.php?clubname={$var_clubname}'>"."Statistics</a>";
          ?>

          </br>
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <script>
					$(function() {
						$("#studentname").autocomplete({
							source: "studname.php",
						});
					});
					</script>
                    <style>
						.ui-autocomplete{
							z-index:1050;
						}
						</style>
                <div class="modal-body">
                <form action="add.php" name="add" id="add" method="post">
                  <div class="form-group">
                    <input hidden value="<?php echo htmlspecialchars($club_id); ?>" id="clubid" name="clubid">
                    <label for="Username">Username: </label>
                    <input class="form-control" placeholder="Add student's name"  type="text" id="studentname" name="studentname">
                  </div>
                  </div>
                  <div class="modal-footer">
                  <button type="submit" id="submit" name="submit" class="btn btn-info">Add member</button>
                </form>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
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
          <a class="nav-link active" data-toggle="collapse" data-target="#expand2" style="cursor:pointer" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Clubs</a>
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
      <div class="col-md-6">
        <h3><?php echo $var_clubname;?></h3>
        <div class="table-responsive">
          <style>

img{ width: 70%; height: 70%;}
</style>
          <?php $sql=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
			while($row5 = mysqli_fetch_assoc($sql)){
				$club_id= $row5['id'];
			$textarea = $row5['textarea'];
			}
				?>
          <div class="info"><?php echo $textarea ?></div>
          <center>
            <form name="myform" method="post" action="">
               <label title="Texts that have been uploaded from the manager of the club or the admin">
                <input type="radio" class="option-input radio" name="rb" id="texts" checked/>
                Texts </label>
              <label title="Texts that have been uploaded from the members of the club">
                <input type="radio" class="option-input radio" name="rb" id="posts" />
                Posts </label>
            </form>
          </center>
          <br>
          <div class="texts">
            <?php


			$sql=mysqli_query($con,"SELECT * FROM texts WHERE tag='$var_clubname' ORDER BY date DESC");
			while($row2 = mysqli_fetch_assoc($sql)){
			$query = mysqli_query($con, "SELECT * FROM diss.staff WHERE id =".$row2['user_fk']);

							while($row4 = mysqli_fetch_assoc($query)) {
							$username = $row4['username'];
							}
			echo"<table class='table table-striped table-dark'>". "<span>"."<tr>"."<td>"."<strong>"."<a href='articles.php?id={$row2['id']}&title={$row2['title']}'>"."<center>".$row2['title']."</center>"."</a>"."</strong>"."</td>"."</tr>"."<tr>"."<td>"."Program: ".$row2['program']."<br>"."Department: ".$row2['department']."<br>"."Level: ".$row2['level']."<br>".$row2['tag']."<br>"."Author: "."<a href='author.php?username={$username}'>".$username."</a>"."</td>"."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['myTextArea']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>"."<hr>";
			?>
            <?php }?>
          </div>
          <div class="posts">
            <?php


			$sql=mysqli_query($con,"SELECT * FROM posts WHERE club_fk='$club_id' ORDER BY date DESC");

			while($row2 = mysqli_fetch_assoc($sql)){
			$enrollfk=$row2['enroll_fk'];
			$post_id=$row2['post_id'];
			$sql5=mysqli_query($con,"SELECT user_fk FROM enroll WHERE enroll_id='$enrollfk'");
			while($row12 = mysqli_fetch_assoc($sql5)){
					$ufk= $row12['user_fk'];
			}


			$sql3=mysqli_query($con,"SELECT * FROM student WHERE studentid ='$ufk'");
			while($row10 = mysqli_fetch_assoc($sql3)){
					$uname = $row10['username'];
			}

			echo"<table class='table table-striped table-dark'>".
			"<span>"."<tr>"."<td>"."Title: "."<strong>".$row2['title']."</strong>"."</td>"."</tr>".
			"<tr>"."<td>"."Author: ".$uname."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['text']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>".
			"<hr>";
			?>
            <?php }?>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <h3>Chat</h3>
        <div id="chat-wrap">
          <div id="chat-area">
            <?php


							$query3 = mysqli_query($con,
							"SELECT u.id, u.text, u.username, u.date
							FROM (
							   SELECT s.username, m.text, m.id, m.date, m.type
							   FROM message AS m
							   JOIN stu_message AS sm ON m.id=sm.mid
							   JOIN student AS s ON s.studentid = sm.stu_id WHERE m.type='$var_clubname'
								UNION ALL
								SELECT s.username, m.text, m.id, m.date, m.type
								FROM message AS m
								JOIN staff_message AS sm ON m.id = sm.m_id
								JOIN staff AS s ON s.id = sm.staff_id WHERE m.type='$var_clubname'
							) AS u
							ORDER BY u.id DESC");

							while($row6 = mysqli_fetch_assoc($query3)) {
								echo $row6['date']."<strong> ".$row6['username']."</strong> ".$row6['text']."<br>";
							}

			  ?>
          </div>
        </div>
        <form action="sendform.php" name="sendform" id="sendform" method="post">
          <p>Your message: </p>
          <input type="hidden" value="<?php echo htmlspecialchars($var_clubname); ?>" id="type" name="type">
          <textarea id="msg" name="msg" maxlength = '700'></textarea>
          <br>
          <button type="submit" id="submit" name="submit" class="btn btn-outline-info">Send</button>
        </form>
                 <div class="enrolled">
          <?php $querry=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
	 while($row6 = mysqli_fetch_assoc($querry)) {
								$staff_fk= $row6['staff_fk'];
							}

							$querry2=mysqli_query($con,"SELECT * FROM staff WHERE id='$staff_fk'");
	 while($row7 = mysqli_fetch_assoc($querry2)) {
								$username= $row7['username'];

							}


	?>
          <br>
          <h5>Coordinator: <?php echo $username?></h5>
          <table class="table table1">
            <thead class="thead-dark">
              <tr>

                <th scope="col">Reg. Number</th>
                <th scope="col">Username</th>
              </tr>
            </thead>
            <tbody>
              <?php
	$sql =mysqli_query($con, "SELECT * FROM enroll WHERE club_fk='$club_id'");
		 while($row7 = mysqli_fetch_assoc($sql)) {
								$enrolledStudentId= $row7['user_fk'];
	$sql2 =mysqli_query($con, "SELECT * FROM student WHERE studentid='$enrolledStudentId'");
         while($row8 = mysqli_fetch_assoc($sql2)) { ?>
              <tr>

                <td><?php echo $row8['regnum']; ?></td>
                <td><?php echo $row8['username']; }  }?></td>
              </tr>
            </tbody>
          </table>

      </div>
      </div>
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

    $var_studentid=$row[0];
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
      <!-------------------------------end of nav ------------------------------------->
      <div class="col-md-6">
        <h3><?php echo $var_clubname;?></h3>
        <div class="table-responsive">
          <style>

img{ width: 70%; height: 70%;}
</style>
          <?php $sql=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
			while($row5 = mysqli_fetch_assoc($sql)){
				$club_id= $row5['id'];
			$textarea = $row5['textarea'];
			}
				?>
          <div class="info"><?php echo $textarea ?></div>
          <br>
          <?php $sql=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
			while($row5 = mysqli_fetch_assoc($sql)){
				$club_id= $row5['id'];
			}
				?>
          <?php $sql=mysqli_query($con,"SELECT * FROM enroll WHERE club_fk='$club_id' AND user_fk='$var_studentid'");
			while($row5 = mysqli_fetch_assoc($sql)){
				$enrolled= $row5['enrolled'];
				$user_fk=$row5['user_fk'];
				$enroll_id=$row5['enroll_id'];
			}
				?>
          <?php if ($enrolled != '1' AND $user_fk != $var_studentid) : ?>
          <div class="enroll">
            <form id="enroll" name="enroll" action="enroll.php" method="POST">
              <input type="number" class="form-control" name="clubid" value="<?php echo htmlspecialchars($club_id); ?>" hidden required>
              <input type="number" class="form-control" name="studentid" value="<?php echo htmlspecialchars($var_studentid); ?>" hidden required>
              <button type="submit" name="enroll" class="btn btn-info">Enroll</button>
            </form>
          </div>
          <br>
          <?php elseif ($enrolled == '1' AND $user_fk == $var_studentid  ) : ?>
          <p>You have been enrolled</p>
          <form id="disenroll" name="disenroll" action="disenroll.php" method="POST">
            <input type="number" class="form-control" name="clubid" value="<?php echo htmlspecialchars($club_id); ?>" hidden required>
            <input type="number" class="form-control" name="studentid" value="<?php echo htmlspecialchars($var_studentid); ?>" hidden required>
            <button type="submit" name="disenroll" class="btn btn-outline-danger">Disenroll</button>
          </form>
          <br>
          <br>

          <center>
            <form name="myform" method="post" action="">
               <label title="Texts that have been uploaded from the manager of the club or the admin">
                <input type="radio" class="option-input radio" name="rb" id="texts" checked/>
                Texts </label>
              <label title="Texts that have been uploaded from the members of the club">
                <input type="radio" class="option-input radio" name="rb" id="posts" />
                Posts </label>
            </form>
          </center>


          <div class="texts">
            <?php
			$sql=mysqli_query($con,"SELECT * FROM texts WHERE tag='$var_clubname' ORDER BY date DESC");
			while($row2 = mysqli_fetch_assoc($sql)){
			$query = mysqli_query($con, "SELECT * FROM diss.staff WHERE id =".$row2['user_fk']);

							while($row4 = mysqli_fetch_assoc($query)) {
							$username = $row4['username'];
							}
			echo"<table class='table table-striped table-dark'>". "<span>"."<tr>"."<td>"."<strong>"."<a href='articles.php?id={$row2['id']}&title={$row2['title']}'>"."<center>".$row2['title']."</center>"."</a>"."</strong>"."</td>"."</tr>"."<tr>"."<td>"."Program: ".$row2['program']."<br>"."Department: ".$row2['department']."<br>"."Level: ".$row2['level']."<br>".$row2['tag']."<br>"."Author: "."<a href='author.php?username={$username}'>".$username."</a>"."</td>"."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['myTextArea']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>"."<hr>";
			?>
            <?php }?>
          </div>



          <div class="posts">
          <br>
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Upload new Post
  </button>
  <br>
  <div class="collapse" id="collapseExample">
  <div class="card card-body">
          <!--post upload-->
          <div class="post-upload">
            <form action="uploadpost.php" name="myform" id="myform" method="post">
              <p>Entry Title:
                <input name="title" id="title" type="text" style="border:#000000 1px solid; width:100%; height:30px;"/>
              </p>
              <input name="clubfk" type="hidden" value="<?php echo htmlspecialchars($club_id);?>">
              </input>
              <bt>
              <input name="enrollfk" type="hidden" value="<?php echo htmlspecialchars($enroll_id);?>">
              </input>
              <div id="sample">
                <style>

img{ width: 70%; height: 70%;}
</style>
                <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
bkLib.onDomLoaded(function() {
    nicEditors.editors.push(
        new nicEditor().panelInstance(
            document.getElementById('myTextArea')
        )
    );
});
//]]>
  </script>
                <center>
                  <textarea id="myTextArea" name="myTextArea" style="width:60vh; height: 60vh;">
        </textarea>
                </center>
                <br>
              </div>
              <div class="foot">
                <center><button type="submit" name="submit" class="btn btn-primary">Submit</button></center>
              </div>
            </form>

            </div>
            </div>
            </div>
            <!--end of post upload-->

            <?php

			$sql=mysqli_query($con,"SELECT * FROM posts WHERE club_fk='$club_id' ORDER BY date DESC");

			while($row2 = mysqli_fetch_assoc($sql)){
			$enrollfk=$row2['enroll_fk'];
			$post_id=$row2['post_id'];
			$sql5=mysqli_query($con,"SELECT user_fk FROM enroll WHERE enroll_id='$enrollfk'");
			while($row12 = mysqli_fetch_assoc($sql5)){
					$ufk= $row12['user_fk'];
			}


			$sql3=mysqli_query($con,"SELECT * FROM student WHERE studentid ='$ufk'");
			while($row10 = mysqli_fetch_assoc($sql3)){
					$uname = $row10['username'];
					$role = $row10['role'];
			}
				if($role != $var_role){
			echo"<table class='table table-striped table-dark'>".
			"<span>"."<tr>"."<td>"."Title: "."<strong>".$row2['title']."</strong>"."</td>"."</tr>".
			"<tr>"."<td>"."Author: ".$uname."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['text']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>"."<hr>";

             }
    else{
        echo"<table class='table table-striped table-dark'>".
			"<span>"."<tr>"."<td>"."Title: "."<strong>".$row2['title']."</strong>"."</td>"."</tr>".
			"<tr>"."<td>"."Author: ".$uname."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['text']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>"."<hr>".
			"<form action='modifypost2.php' method='post' enctype='multipart/form-data'>"."<textarea hidden name='txtId'/>".$post_id."</textarea>"."<button  type='modify' name='modify' id='modify' class='btn btn-warning'>Edit</button>"."</form>"."<br>".
			"<form action='deletepost2.php' method='post' enctype='multipart/form-data'>"."<textarea hidden name='txtId2'/>".$post_id."</textarea>"."<button  type='delete' name='delete' id='delete' class='btn btn-danger' Onclick='return ConfirmDelete()'>Delete</button>"."</form>"."<hr>";;

    }
	?>
            <?php }?>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-md-3">
        <h3>Chat</h3>
        <div id="chat-wrap">
          <div id="chat-area">
            <?php


							$query3 = mysqli_query($con,
							"SELECT u.id, u.text, u.username, u.date
							FROM (
							   SELECT s.username, m.text, m.id, m.date
							   FROM message AS m
							   JOIN stu_message AS sm ON m.id=sm.mid
							   JOIN student AS s ON s.studentid = sm.stu_id WHERE m.type='$var_clubname'
								UNION ALL
								SELECT s.username, m.text, m.id, m.date
								FROM message AS m
								JOIN staff_message AS sm ON m.id = sm.m_id
								JOIN staff AS s ON s.id = sm.staff_id WHERE m.type='$var_clubname'
							) AS u
							ORDER BY u.id DESC");

							while($row6 = mysqli_fetch_assoc($query3)) {
								echo $row6['date']."<strong> ".$row6['username']."</strong> ".$row6['text']."<br>";
							}

			  ?>
          </div>
        </div>
        <form action="sendform2.php" name="sendform" id="sendform" method="post">
          <p>Your message: </p>
          <input type="hidden" value="<?php echo htmlspecialchars($var_clubname); ?>" id="type" name="type">
          <textarea id="msg" name="msg" maxlength = '700'></textarea>
          <br>
          <button type="submit" id="submit" name="submit" class="btn btn-outline-info">Send</button>
        </form>
                  <div class="enrolled">
          <?php $querry=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
	 while($row6 = mysqli_fetch_assoc($querry)) {
								$staff_fk= $row6['staff_fk'];
							}

							$querry2=mysqli_query($con,"SELECT * FROM staff WHERE id='$staff_fk'");
	 while($row7 = mysqli_fetch_assoc($querry2)) {
								$username= $row7['username'];

							}


	?>
          <br>
          <h5>Coordinator: <?php echo $username?></h5>
          <table class="table table1">
            <thead class="thead-dark">
              <tr>

                <th scope="col">Reg. Number</th>
                <th scope="col">Username</th>
              </tr>
            </thead>
            <tbody>
              <?php
	$sql =mysqli_query($con, "SELECT * FROM enroll WHERE club_fk='$club_id'");
		 while($row7 = mysqli_fetch_assoc($sql)) {
								$enrolledStudentId= $row7['user_fk'];
	$sql2 =mysqli_query($con, "SELECT * FROM student WHERE studentid='$enrolledStudentId'");
         while($row8 = mysqli_fetch_assoc($sql2)) { ?>
              <tr>

                <td><?php echo $row8['regnum']; ?></td>
                <td><?php echo $row8['username']; }  }?></td>
              </tr>
            </tbody>
          </table>

      </div>

      </div>
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
      <!-----------------------------------------End of NavBar ------------------------------------------------------------->
      <!-------------------------------end of nav ------------------------------------->
      <div class="col-md-6">
        <h3><?php echo $var_clubname;?></h3>
        <div class="table-responsive">
          <style>

img{ width: 70%; height: 70%;}
</style>
          <?php $sql=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
			while($row5 = mysqli_fetch_assoc($sql)){
				$club_id= $row5['id'];
			$textarea = $row5['textarea'];
			}
				?>
          <div class="info"><?php echo $textarea ?></div>
          <br>
          <?php $sql=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
			while($row5 = mysqli_fetch_assoc($sql)){
				$club_id= $row5['id'];
			}
				?>
          <?php $sql=mysqli_query($con,"SELECT * FROM enroll WHERE club_fk='$club_id' AND user_fk='$var_studentid'");
			while($row5 = mysqli_fetch_assoc($sql)){
				$enrolled= $row5['enrolled'];
				$user_fk=$row5['user_fk'];
				$enroll_id=$row5['enroll_id'];
			}
				?>
          <?php if ($enrolled != '1' AND $user_fk != $var_studentid) : ?>
          <div class="enroll">
            <form id="enroll" name="enroll" action="enroll.php" method="POST">
              <input type="number" class="form-control" name="clubid" value="<?php echo htmlspecialchars($club_id); ?>" hidden required>
              <input type="number" class="form-control" name="studentid" value="<?php echo htmlspecialchars($var_studentid); ?>" hidden required>
              <button type="submit" name="enroll" class="btn btn-info">Enroll</button>
            </form>
          </div>
          <?php elseif ($enrolled == '1' AND $user_fk == $var_studentid  ) : ?>
          <p>You have been enrolled</p>
          <form id="disenroll" name="disenroll" action="disenroll.php" method="POST">
            <input type="number" class="form-control" name="clubid" value="<?php echo htmlspecialchars($club_id); ?>" hidden required>
            <input type="number" class="form-control" name="studentid" value="<?php echo htmlspecialchars($var_studentid); ?>" hidden required>
            <button type="submit" name="disenroll" class="btn btn-outline-danger">Disenroll</button>
          </form>
          <br>

          <center>
            <form name="myform" method="post" action="">
              <label title="Texts that have been uploaded from the manager of the club or the admin">
                <input type="radio" class="option-input radio" name="rb" id="texts" checked/>
                Texts </label>
              <label title="Texts that have been uploaded from the members of the club">
                <input type="radio" class="option-input radio" name="rb" id="posts" />
                Posts </label>
            </form>
          </center>
          <div class="texts">
            <?php


			$sql=mysqli_query($con,"SELECT * FROM texts WHERE tag='$var_clubname' ORDER BY date DESC");
			while($row2 = mysqli_fetch_assoc($sql)){
			$query = mysqli_query($con, "SELECT * FROM diss.staff WHERE id =".$row2['user_fk']);

							while($row4 = mysqli_fetch_assoc($query)) {
							$username = $row4['username'];
							}
			echo"<table class='table table-striped table-dark'>". "<span>"."<tr>"."<td>"."<strong>"."<a href='articles.php?id={$row2['id']}&title={$row2['title']}'>"."<center>".$row2['title']."</center>"."</a>"."</strong>"."</td>"."</tr>"."<tr>"."<td>"."Program: ".$row2['program']."<br>"."Department: ".$row2['department']."<br>"."Level: ".$row2['level']."<br>".$row2['tag']."<br>"."Author: "."<a href='author.php?username={$username}'>".$username."</a>"."</td>"."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['myTextArea']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>"."<hr>";
			?>
            <?php }?>
          </div>
          <!--------posts-------------->
          <div class="posts">

          <br>
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Upload new Post
  </button>
  <br>
  <div class="collapse" id="collapseExample">
  <div class="card card-body">
          <!--post upload-->
          <div class="post-upload">
            <form action="uploadpost.php" name="myform" id="myform" method="post">
              <p>Entry Title:
                <input name="title" id="title" type="text" style="border:#000000 1px solid; width:100%; height:30px;"/>
              </p>
              <input name="clubfk" type="hidden" value="<?php echo htmlspecialchars($club_id);?>">
              </input>
              <bt>
              <input name="enrollfk" type="hidden" value="<?php echo htmlspecialchars($enroll_id);?>">
              </input>
              <div id="sample">
                <style>

img{ width: 70%; height: 70%;}
</style>
                <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
bkLib.onDomLoaded(function() {
    nicEditors.editors.push(
        new nicEditor().panelInstance(
            document.getElementById('myTextArea')
        )
    );
});
//]]>
  </script>
                <center>
                  <textarea id="myTextArea" name="myTextArea" style="width:60vh; height: 60vh; overflow:auto;">
        </textarea>
                </center>
                <br>
              </div>
              <div class="foot">
                <center><button type="submit" name="submit" class="btn btn-primary">Submit</button></center>
              </div>
            </form>

            </div>
            </div>
            </div>
            <!--end of post upload-->
            <?php


			$sql=mysqli_query($con,"SELECT * FROM posts WHERE club_fk='$club_id' ORDER BY date DESC");

			while($row2 = mysqli_fetch_assoc($sql)){
			$enrollfk=$row2['enroll_fk'];
			$post_id=$row2['post_id'];
			$sql5=mysqli_query($con,"SELECT user_fk FROM enroll WHERE enroll_id='$enrollfk'");
			while($row12 = mysqli_fetch_assoc($sql5)){
					$ufk= $row12['user_fk'];
			}


			$sql3=mysqli_query($con,"SELECT * FROM student WHERE studentid ='$ufk'");
			while($row10 = mysqli_fetch_assoc($sql3)){
					$uname = $row10['username'];
					$role = $row10['role'];
			}
				if($role != $var_role){
			echo"<table class='table table-striped table-dark'>".
			"<span>"."<tr>"."<td>"."Title: "."<strong>".$row2['title']."</strong>"."</td>"."</tr>".
			"<tr>"."<td>"."Author: ".$uname."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['text']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>"."<hr>";

             }
    else{
       echo"<table class='table table-striped table-dark'>".
			"<span>"."<tr>"."<td>"."Title: "."<strong>".$row2['title']."</strong>"."</td>"."</tr>".
			"<tr>"."<td>"."Author: ".$uname."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['text']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>"."<hr>".
			"<form action='modifypost2.php' method='post' enctype='multipart/form-data'>"."<textarea hidden name='txtId'/>".$post_id."</textarea>"."<button  type='modify' name='modify' id='modify' class='btn btn-warning'>Edit</button>"."</form>"."<br>".
			"<form action='deletepost2.php' method='post' enctype='multipart/form-data'>"."<textarea hidden name='txtId2'/>".$post_id."</textarea>"."<button  type='delete' name='delete' id='delete' class='btn btn-danger' Onclick='return ConfirmDelete()'>Delete</button>"."</form>"."<hr>";;

    }
	?>
            <?php }?>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-md-3">
        <h3>Chat</h3>
        <div id="chat-wrap">
          <div id="chat-area">
            <?php


							$query3 = mysqli_query($con,
							"SELECT u.id, u.text, u.username, u.date
							FROM (
							   SELECT s.username, m.text, m.id, m.date
							   FROM message AS m
							   JOIN stu_message AS sm ON m.id=sm.mid
							   JOIN student AS s ON s.studentid = sm.stu_id WHERE m.type='$var_clubname'
								UNION ALL
								SELECT s.username, m.text, m.id, m.date
								FROM message AS m
								JOIN staff_message AS sm ON m.id = sm.m_id
								JOIN staff AS s ON s.id = sm.staff_id WHERE m.type='$var_clubname'
							) AS u
							ORDER BY u.id DESC");

							while($row6 = mysqli_fetch_assoc($query3)) {
								echo $row6['date']."<strong> ".$row6['username']."</strong> ".$row6['text']."<br>";
							}

			  ?>
          </div>
        </div>
        <form action="sendform2.php" name="sendform" id="sendform" method="post">
          <p>Your message: </p>
          <input type="hidden" value="<?php echo htmlspecialchars($var_clubname); ?>" id="type" name="type">
          <textarea id="msg" name="msg" maxlength = '700'></textarea>
          <br>
          <button type="submit" id="submit" name="submit" class="btn btn-outline-info">Send</button>
        </form>
                 <div class="enrolled">
          <?php $querry=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
	 while($row6 = mysqli_fetch_assoc($querry)) {
								$staff_fk= $row6['staff_fk'];
							}

							$querry2=mysqli_query($con,"SELECT * FROM staff WHERE id='$staff_fk'");
	 while($row7 = mysqli_fetch_assoc($querry2)) {
								$username= $row7['username'];

							}


	?>
          <br>
          <h5>Coordinator: <?php echo $username?></h5>
          <table class="table table1">
            <thead class="thead-dark">
              <tr>

                <th scope="col">Reg. Number</th>
                <th scope="col">Username</th>
              </tr>
            </thead>
            <tbody>
              <?php
	$sql =mysqli_query($con, "SELECT * FROM enroll WHERE club_fk='$club_id'");
		 while($row7 = mysqli_fetch_assoc($sql)) {
								$enrolledStudentId= $row7['user_fk'];
	$sql2 =mysqli_query($con, "SELECT * FROM student WHERE studentid='$enrolledStudentId'");
         while($row8 = mysqli_fetch_assoc($sql2)) { ?>
              <tr>

                <td><?php echo $row8['regnum']; ?></td>
                <td><?php echo $row8['username']; }  }?></td>
              </tr>
            </tbody>
          </table>

      </div>
      </div>
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
      <!-----------------------------------------End of NavBar ------------------------------------------------------------->
      <!-------------------------------end of nav ------------------------------------->
      <div class="col-md-6">
        <h3><?php echo $var_clubname;?></h3>
        <style>

img{ width: 70%; height: 70%;}
</style>
        <?php $sql=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
			while($row5 = mysqli_fetch_assoc($sql)){
				$club_id= $row5['id'];
			$textarea = $row5['textarea'];
			}
				?>
        <div class="info"><?php echo $textarea ?></div>
        <br>
        <?php $sql=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
			while($row5 = mysqli_fetch_assoc($sql)){
				$club_id= $row5['id'];
			}
				?>
        <?php $sql=mysqli_query($con,"SELECT * FROM enroll WHERE club_fk='$club_id' AND user_fk='$var_studentid'");
			while($row5 = mysqli_fetch_assoc($sql)){
				$enrolled= $row5['enrolled'];
				$user_fk=$row5['user_fk'];
				$enroll_id=$row5['enroll_id'];
			}
				?>
        <?php if ($enrolled != '1' AND $user_fk != $var_studentid) : ?>
        <div class="enroll">
          <form id="enroll" name="enroll" action="enroll.php" method="POST">
            <input type="number" class="form-control" name="clubid" value="<?php echo htmlspecialchars($club_id); ?>" hidden required>
            <input type="number" class="form-control" name="studentid" value="<?php echo htmlspecialchars($var_studentid); ?>" hidden required>
            <button type="submit" name="enroll" class="btn btn-info">Enroll</button>
          </form>
        </div>
        <?php elseif ($enrolled == '1' AND $user_fk == $var_studentid  ) : ?>
        <p>You have been enrolled</p>
        <form id="disenroll" name="disenroll" action="disenroll.php" method="POST">
          <input type="number" class="form-control" name="clubid" value="<?php echo htmlspecialchars($club_id); ?>" hidden required>
          <input type="number" class="form-control" name="studentid" value="<?php echo htmlspecialchars($var_studentid); ?>" hidden required>
          <button type="submit" name="disenroll" class="btn btn-outline-danger">Disenroll</button>
        </form>
        <br>

        <br>
        <center>
          <form name="myform" method="post" action="">
             <label title="Texts that have been uploaded from the manager of the club or the admin">
                <input type="radio" class="option-input radio" name="rb" id="texts" checked/>
                Texts </label>
              <label title="Texts that have been uploaded from the members of the club">
                <input type="radio" class="option-input radio" name="rb" id="posts" />
                Posts </label>
          </form>
        </center>
        <div class="texts">
          <?php


			$sql=mysqli_query($con,"SELECT * FROM texts WHERE tag='$var_clubname' ORDER BY date DESC");
			while($row2 = mysqli_fetch_assoc($sql)){
			$query = mysqli_query($con, "SELECT * FROM diss.staff WHERE id =".$row2['user_fk']);

							while($row4 = mysqli_fetch_assoc($query)) {
							$username = $row4['username'];
							}
			echo"<table class='table table-striped table-dark'>". "<span>"."<tr>"."<td>"."<strong>"."<a href='articles.php?id={$row2['id']}&title={$row2['title']}'>"."<center>".$row2['title']."</center>"."</a>"."</strong>"."</td>"."</tr>"."<tr>"."<td>"."Program: ".$row2['program']."<br>"."Department: ".$row2['department']."<br>"."Level: ".$row2['level']."<br>".$row2['tag']."<br>"."Author: "."<a href='author.php?username={$username}'>".$username."</a>"."</td>"."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['myTextArea']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>"."<hr>";
			?>
          <?php }?>
        </div>
        <div class="posts">

          <br>
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Upload new Post
  </button>
  <br>
  <div class="collapse" id="collapseExample">
  <div class="card card-body">
          <!--post upload-->
          <div class="post-upload">
            <form action="uploadpost.php" name="myform" id="myform" method="post">
              <p>Entry Title:
                <input name="title" id="title" type="text" style="border:#000000 1px solid; width:100%; height:30px;"/>
              </p>
              <input name="clubfk" type="hidden" value="<?php echo htmlspecialchars($club_id);?>">
              </input>
              <bt>
              <input name="enrollfk" type="hidden" value="<?php echo htmlspecialchars($enroll_id);?>">
              </input>
              <div id="sample">
                <style>

img{ width: 70%; height: 70%;}
</style>
                <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
bkLib.onDomLoaded(function() {
    nicEditors.editors.push(
        new nicEditor().panelInstance(
            document.getElementById('myTextArea')
        )
    );
});
//]]>
  </script>
                <center>
                  <textarea id="myTextArea" name="myTextArea" style="width:60vh; height: 60vh; overflow:auto;">
        </textarea>
                </center>
                <br>
              </div>
              <div class="foot">
                <center><button type="submit" name="submit" class="btn btn-primary">Submit</button></center>
              </div>
            </form>

            </div>
            </div>
            </div>
            <!--end of post upload-->
          <?php


			$sql=mysqli_query($con,"SELECT * FROM posts WHERE club_fk='$club_id' ORDER BY date DESC");

			while($row2 = mysqli_fetch_assoc($sql)){
			$enrollfk=$row2['enroll_fk'];
			$post_id=$row2['post_id'];
			$sql5=mysqli_query($con,"SELECT user_fk FROM enroll WHERE enroll_id='$enrollfk'");
			while($row12 = mysqli_fetch_assoc($sql5)){
					$ufk= $row12['user_fk'];
			}


			$sql3=mysqli_query($con,"SELECT * FROM student WHERE studentid ='$ufk'");
			while($row10 = mysqli_fetch_assoc($sql3)){
					$uname = $row10['username'];
					$role = $row10['role'];
			}
				if($role != $var_role){
			echo"<table class='table table-striped table-dark'>".
			"<span>"."<tr>"."<td>"."Title: "."<strong>".$row2['title']."</strong>"."</td>"."</tr>".
			"<tr>"."<td>"."Author: ".$uname."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['text']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>"."<hr>";

             }
    else{
       echo"<table class='table table-striped table-dark'>".
			"<span>"."<tr>"."<td>"."Title: "."<strong>".$row2['title']."</strong>"."</td>"."</tr>".
			"<tr>"."<td>"."Author: ".$uname."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['text']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>"."<hr>".
			"<form action='modifypost2.php' method='post' enctype='multipart/form-data'>"."<textarea hidden name='txtId'/>".$post_id."</textarea>"."<button  type='modify' name='modify' id='modify' class='btn btn-warning'>Edit</button>"."</form>"."<br>".
			"<form action='deletepost2.php' method='post' enctype='multipart/form-data'>"."<textarea hidden name='txtId2'/>".$post_id."</textarea>"."<button  type='delete' name='delete' id='delete' class='btn btn-danger' Onclick='return ConfirmDelete()'>Delete</button>"."</form>"."<hr>";;

    }
	?>
          <?php }?>
        </div>
        <?php endif; ?>
      </div>
      <div class="col-md-3">
        <h3>Chat</h3>
        <div id="chat-wrap">
          <div id="chat-area">
            <?php


							$query3 = mysqli_query($con,
							"SELECT u.id, u.text, u.username, u.date
							FROM (
							   SELECT s.username, m.text, m.id, m.date
							   FROM message AS m
							   JOIN stu_message AS sm ON m.id=sm.mid
							   JOIN student AS s ON s.studentid = sm.stu_id WHERE m.type='$var_clubname'
								UNION ALL
								SELECT s.username, m.text, m.id, m.date
								FROM message AS m
								JOIN staff_message AS sm ON m.id = sm.m_id
								JOIN staff AS s ON s.id = sm.staff_id WHERE m.type='$var_clubname'
							) AS u
							ORDER BY u.id DESC");

							while($row6 = mysqli_fetch_assoc($query3)) {
								echo $row6['date']."<strong> ".$row6['username']."</strong> ".$row6['text']."<br>";
							}

			  ?>
          </div>
        </div>
        <form action="sendform2.php" name="sendform" id="sendform" method="post">
          <p>Your message: </p>
          <input type="hidden" value="<?php echo htmlspecialchars($var_clubname); ?>" id="type" name="type">
          <textarea id="msg" name="msg" maxlength = '700'></textarea>
          <br>
          <button type="submit" id="submit" name="submit" class="btn btn-outline-info">Send</button>
        </form>
                 <div class="enrolled">
          <?php $querry=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
	 while($row6 = mysqli_fetch_assoc($querry)) {
								$staff_fk= $row6['staff_fk'];
							}

							$querry2=mysqli_query($con,"SELECT * FROM staff WHERE id='$staff_fk'");
	 while($row7 = mysqli_fetch_assoc($querry2)) {
								$username= $row7['username'];

							}


	?>
          <br>
          <h5>Coordinator: <?php echo $username?></h5>
          <table class="table table1">
            <thead class="thead-dark">
              <tr>

                <th scope="col">Reg. Number</th>
                <th scope="col">Username</th>
              </tr>
            </thead>
            <tbody>
              <?php
	$sql =mysqli_query($con, "SELECT * FROM enroll WHERE club_fk='$club_id'");
		 while($row7 = mysqli_fetch_assoc($sql)) {
								$enrolledStudentId= $row7['user_fk'];
	$sql2 =mysqli_query($con, "SELECT * FROM student WHERE studentid='$enrolledStudentId'");
         while($row8 = mysqli_fetch_assoc($sql2)) { ?>
              <tr>

                <td><?php echo $row8['regnum']; ?></td>
                <td><?php echo $row8['username']; }  }?></td>
              </tr>
            </tbody>
          </table>

      </div>
      </div>
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
      <!-----------------------------------------End of NavBar ------------------------------------------------------------->
      <!-------------------------------end of nav ------------------------------------->
      <div class="col-md-6">
        <h3><?php echo $var_clubname;?></h3>
        <div class="table-responsive">
          <style>

img{ width: 70%; height: 70%;}
</style>
          <?php $sql=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
			while($row5 = mysqli_fetch_assoc($sql)){
				$club_id= $row5['id'];
			$textarea = $row5['textarea'];
			}
				?>
          <div class="info"><?php echo $textarea ?></div>
          <br>
          <?php $sql=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
			while($row5 = mysqli_fetch_assoc($sql)){
				$club_id= $row5['id'];
			}
				?>
          <?php $sql=mysqli_query($con,"SELECT * FROM enroll WHERE club_fk='$club_id' AND user_fk='$var_studentid'");
			while($row5 = mysqli_fetch_assoc($sql)){
				$enrolled= $row5['enrolled'];
				$user_fk=$row5['user_fk'];
				$enroll_id=$row5['enroll_id'];
			}
				?>
          <?php if ($enrolled != '1' AND $user_fk != $var_studentid) : ?>
          <div class="enroll">
            <form id="enroll" name="enroll" action="enroll.php" method="POST">
              <input type="number" class="form-control" name="clubid" value="<?php echo htmlspecialchars($club_id); ?>" hidden required>
              <input type="number" class="form-control" name="studentid" value="<?php echo htmlspecialchars($var_studentid); ?>" hidden required>
              <button type="submit" name="enroll" class="btn btn-info">Enroll</button>
            </form>
          </div>
          <?php elseif ($enrolled == '1' AND $user_fk == $var_studentid  ) : ?>
          <p>You have been enrolled</p>
          <form id="disenroll" name="disenroll" action="disenroll.php" method="POST">
            <input type="number" class="form-control" name="clubid" value="<?php echo htmlspecialchars($club_id); ?>" hidden required>
            <input type="number" class="form-control" name="studentid" value="<?php echo htmlspecialchars($var_studentid); ?>" hidden required>
            <button type="submit" name="disenroll" class="btn btn-outline-danger">Disenroll</button>
          </form>
          <br>

          <br>
          <center>
            <form name="myform" method="post" action="">
               <label title="Texts that have been uploaded from the manager of the club or the admin">
                <input type="radio" class="option-input radio" name="rb" id="texts" checked/>
                Texts </label>
              <label title="Texts that have been uploaded from the members of the club">
                <input type="radio" class="option-input radio" name="rb" id="posts" />
                Posts </label>
            </form>
          </center>
          <div class="texts">
            <?php


			$sql=mysqli_query($con,"SELECT * FROM texts WHERE tag='$var_clubname' ORDER BY date DESC");
			while($row2 = mysqli_fetch_assoc($sql)){
			$query = mysqli_query($con, "SELECT * FROM diss.staff WHERE id =".$row2['user_fk']);

							while($row4 = mysqli_fetch_assoc($query)) {
							$username = $row4['username'];
							}
			echo"<table class='table table-striped table-dark'>". "<span>"."<tr>"."<td>"."<strong>"."<a href='articles.php?id={$row2['id']}&title={$row2['title']}'>"."<center>".$row2['title']."</center>"."</a>"."</strong>"."</td>"."</tr>"."<tr>"."<td>"."Program: ".$row2['program']."<br>"."Department: ".$row2['department']."<br>"."Level: ".$row2['level']."<br>".$row2['tag']."<br>"."Author: "."<a href='author.php?username={$username}'>".$username."</a>"."</td>"."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['myTextArea']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>"."<hr>";
			?>
            <?php }?>
          </div>
           <div class="posts">

          <br>
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Upload new Post
  </button>
  <br>
  <div class="collapse" id="collapseExample">
  <div class="card card-body">
          <!--post upload-->
          <div class="post-upload">
            <form action="uploadpost.php" name="myform" id="myform" method="post">
              <p>Entry Title:
                <input name="title" id="title" type="text" style="border:#000000 1px solid; width:100%; height:30px;"/>
              </p>
              <input name="clubfk" type="hidden" value="<?php echo htmlspecialchars($club_id);?>">
              </input>
              <bt>
              <input name="enrollfk" type="hidden" value="<?php echo htmlspecialchars($enroll_id);?>">
              </input>
              <div id="sample">
                <style>

img{ width: 70%; height: 70%;}
</style>
                <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
bkLib.onDomLoaded(function() {
    nicEditors.editors.push(
        new nicEditor().panelInstance(
            document.getElementById('myTextArea')
        )
    );
});
//]]>
  </script>
                <center>
                  <textarea id="myTextArea" name="myTextArea" style="width:60vh; height: 60vh; overflow:auto;">
        </textarea>
                </center>
                <br>
              </div>
              <div class="foot">
                <center><button type="submit" name="submit" class="btn btn-primary">Submit</button></center>
              </div>
            </form>

            </div>
            </div>
            </div>
            <!--end of post upload-->
            <?php


			$sql=mysqli_query($con,"SELECT * FROM posts WHERE club_fk='$club_id' ORDER BY date DESC");

			while($row2 = mysqli_fetch_assoc($sql)){
			$enrollfk=$row2['enroll_fk'];
			$post_id=$row2['post_id'];
			$sql5=mysqli_query($con,"SELECT user_fk FROM enroll WHERE enroll_id='$enrollfk'");
			while($row12 = mysqli_fetch_assoc($sql5)){
					$ufk= $row12['user_fk'];
			}


			$sql3=mysqli_query($con,"SELECT * FROM student WHERE studentid ='$ufk'");
			while($row10 = mysqli_fetch_assoc($sql3)){
					$uname = $row10['username'];
					$role = $row10['role'];
			}
				if($role != $var_role){
			echo"<table class='table table-striped table-dark'>".
			"<span>"."<tr>"."<td>"."Title: "."<strong>".$row2['title']."</strong>"."</td>"."</tr>".
			"<tr>"."<td>"."Author: ".$uname."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['text']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>"."<hr>";

             }
    else{
      echo"<table class='table table-striped table-dark'>".
			"<span>"."<tr>"."<td>"."Title: "."<strong>".$row2['title']."</strong>"."</td>"."</tr>".
			"<tr>"."<td>"."Author: ".$uname."</tr>"."</span>"."<span>"."<tr>"."<td>".$row2['text']."</td>"."<br>"."</tr>"."<br>"."</span>"."</table>"."<hr>".
			"<form action='modifypost2.php' method='post' enctype='multipart/form-data'>"."<textarea hidden name='txtId'/>".$post_id."</textarea>"."<button  type='modify' name='modify' id='modify' class='btn btn-warning'>Edit</button>"."</form>"."<br>".
			"<form action='deletepost2.php' method='post' enctype='multipart/form-data'>"."<textarea hidden name='txtId2'/>".$post_id."</textarea>"."<button  type='delete' name='delete' id='delete' class='btn btn-danger' Onclick='return ConfirmDelete()'>Delete</button>"."</form>"."<hr>";;

    }
	?>
            <?php }?>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-md-3">
        <h3>Chat</h3>
        <div id="chat-wrap">
          <div id="chat-area">
            <?php


							$query3 = mysqli_query($con,
							"SELECT u.id, u.text, u.username, u.date
							FROM (
							   SELECT s.username, m.text, m.id, m.date
							   FROM message AS m
							   JOIN stu_message AS sm ON m.id=sm.mid
							   JOIN student AS s ON s.studentid = sm.stu_id WHERE m.type='$var_clubname'
								UNION ALL
								SELECT s.username, m.text, m.id, m.date
								FROM message AS m
								JOIN staff_message AS sm ON m.id = sm.m_id
								JOIN staff AS s ON s.id = sm.staff_id WHERE m.type='$var_clubname'
							) AS u
							ORDER BY u.id DESC");
							while($row6 = mysqli_fetch_assoc($query3)) {
								echo $row6['date']."<strong> ".$row6['username']."</strong> ".$row6['text']."<br>";
							}
			  ?>
          </div>
        </div>
        <form action="sendform2.php" name="sendform" id="sendform" method="post">
          <p>Your message: </p>
          <input type="hidden" value="<?php echo htmlspecialchars($var_clubname); ?>" id="type" name="type">
          <textarea id="msg" name="msg" maxlength = '700'></textarea>
          <br>
          <button type="submit" id="submit" name="submit" class="btn btn-outline-info">Send</button>
        </form>
                 <div class="enrolled">
          <?php $querry=mysqli_query($con,"SELECT * FROM club WHERE clubName='$var_clubname'");
	 while($row6 = mysqli_fetch_assoc($querry)) {
								$staff_fk= $row6['staff_fk'];
							}

							$querry2=mysqli_query($con,"SELECT * FROM staff WHERE id='$staff_fk'");
	 while($row7 = mysqli_fetch_assoc($querry2)) {
								$username= $row7['username'];

							}


	?>
          <br>
          <h5>Coordinator: <?php echo $username?></h5>
          <table class="table table1">
            <thead class="thead-dark">
              <tr>

                <th scope="col">Reg. Number</th>
                <th scope="col">Username</th>
              </tr>
            </thead>
            <tbody>
              <?php
	$sql =mysqli_query($con, "SELECT * FROM enroll WHERE club_fk='$club_id'");
		 while($row7 = mysqli_fetch_assoc($sql)) {
								$enrolledStudentId= $row7['user_fk'];
	$sql2 =mysqli_query($con, "SELECT * FROM student WHERE studentid='$enrolledStudentId'");
         while($row8 = mysqli_fetch_assoc($sql2)) { ?>
              <tr>

                <td><?php echo $row8['regnum']; ?></td>
                <td><?php echo $row8['username']; }  }?></td>
              </tr>
            </tbody>
          </table>

      </div>
      </div>
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
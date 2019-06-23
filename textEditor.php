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
	
	$sql="SELECT upload FROM staff WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_upload=$row[0];
    //print($var_upload);
	
	 $sql="SELECT id FROM staff WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_id=$row[0];
    //print($var_id);
	
	 $sql="SELECT MAX(id)+1 FROM texts";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_tid=$row[0];
   //print($var_tid);
   
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
			<center> 
            <p style="color:white; font-size:170%;"><img class="visible-lg visible-md" id="logo" src="images/logo.png"> Communities of Learning (C.o.L.)</p>
			</center>
		 </header>
  </div>
<br>
<?php if($var_role == 'admin') : ?>
<div class="container">
  <div class="row">
 <div class="col-sm-3 ">
    <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   
      <a class="nav-link" id="v-pills-home-tab" href="admin.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a>
       
       <a class="nav-link" data-toggle="collapse" data-target="#expand" style="cursor:pointer;" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;Activities</a>
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
      <a class="nav-link active" id="v-pills-settings-tab"  href="textEditor.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Upload text</a>
      <a class="nav-link" id="v-pills-settings-tab"  href="information.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-info" aria-hidden="true"></i>&nbsp;Information</a>
      <a class="nav-link" id="v-pills-settings-tab"  href="search.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</a>
       <a class="nav-link" id="v-pills-settings-tab"  href="anreport.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-balance-scale" aria-hidden="true"></i>&nbsp;Annual Report</a>
       <a class="nav-link" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> 
     
      </nav>
      <br>
      <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
    </div>
    
    <!------------------------------------- End of Nav----------------------------------------------------------------->
  <div class="col-lg-6">
		<form action="parse_file.php" name="myform" id="myform" method="post">
       		<p>Entry Title: <input name="title" id="title" type="text" style="border:#000000 1px solid; width:100%; height:30px;"/></p>
            <p>Tag: <select style="width:40%;" name="tag">
            		<option>Select one</option>
                  <option value="home">Home</option>
                  <optgroup label="Activites">
                    <option value="Company Visits">Company Visits</option>
                    <option value="Professional Seminars">Professional Seminars</option>
                    <option value="Pressentations/Talks">Pressentations/Talks</option>
                    <option value="Carreer Day">Carreer Day</option>
                    <option value="C.S.U.">C.S.U.</option>
                   </optgroup>
                    <optgroup label="Clubs">
                    <?php $sql=mysqli_query($con,"SELECT * FROM club");
			while($row2 = mysqli_fetch_assoc($sql)){
				echo   "<option value='{$row2['clubName']}'>".$row2['clubName']."</option>";
			}
			?>
            </optgroup>
                  </select>  
            </p>
           
             <p>Program: <select style="width:40%;" id="program" name="program">
            		<option>Select one:</option>
                    <option value="General">All Programs</option>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Master">Master</option>
                    <option value="PHD">Doctoral</option>
                  </select>  
            </p>
            
            <p>Department: <select style="width:40%;" id="department" name="department">
                  <option>Select one:</option>
                  <option value="General">All Departments</option>
                  <option value="Business Administration & Economics">Business Administration & Economics</option>
                  <option value="Psychology Department">Psychology Department</option>
                  <option value="Computer Science">Computer Science</option>
                  <option value="English Studies">English Studies Department</option>
                  <option value="MBA">MBA</option>
                  </select>  
            </p>
            
            <p>Level: <select style="width:40%;" id="level" name="level">
                  <option>Select one:</option>
                  <option value="General">All Levels</option>
                  <option value="Level 1">Level 1</option>
                  <option value="Level 1 Year 1">Level 1 Year 1</option>
                  <option value="Level 1 Year 2">Level 1 Year 2</option>
                  <option value="Level 2">Level 2</option>
                  <option value="Level 3">Level 3</option>
                  
                  </select>
            </p>
            
     
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
			<br>
			<p><br>
            <img src="badges/image1.png" style="height:70px; width:70px;"/>
           <img src="badges/image2.png" style="height:70px; width:70px;"/>
           <img src="badges/image4.png" style="height:70px; width:70px;"/>
           <img src="badges/image5.png" style="height:70px; width:70px;"/>
           <img src="badges/image6.png" style="height:70px; width:70px;"/>
           <img src="badges/image7.png" style="height:70px; width:70px;"/>
           <img src="badges/image8.png" style="height:70px; width:70px;"/>
           <img src="badges/image9.png" style="height:70px; width:70px;"/>
           <img src="badges/image10.png" style="height:70px; width:70px;"/>
           <img src="badges/image11.png" style="height:70px; width:70px;"/>
           <img src="badges/image12.png" style="height:70px; width:70px;"/>
           <img src="badges/image13.png" style="height:70px; width:70px;"/>
           <img src="badges/image14.png" style="height:70px; width:70px;"/>
           <img src="badges/image15.png" style="height:70px; width:70px;"/>
           <img src="badges/image16.png" style="height:70px; width:70px;"/>
           <img src="badges/image17.png" style="height:70px; width:70px;"/>
           <img src="badges/image18.png" style="height:70px; width:70px;"/>
           <img src="badges/image19.png" style="height:70px; width:70px;"/>
           <img src="badges/image20.png" style="height:70px; width:70px;"/>
           <img src="badges/image21.png" style="height:70px; width:70px;"/>
            
            </p>
            		
        </textarea>
		<br>
		</div>		
    		<button type="submit" class="btn btn-primary" name="submit" value="submit" onClick="javascript:submit_form();">Submit</button>
            <br><br>
    </form>
  </div>
  
 <!------------------------------------- End of second----------------------------------------------------------------->
	<div class="col-lg-3 col-sm-12 col-12 col-md-12" align="center" style="background-color:rgba(169,205,255,1.00); width: 30%; height: 300px; overflow: auto;">
	<h5><u>Latest texts</u></h5>
    <?php $querry=mysqli_query($con,"SELECT * FROM texts ORDER BY date DESC");	
			while($row2 = mysqli_fetch_assoc($querry)){	
			echo"<table class='table table-bordered'>". "<span>"."<tr>"."<td>"."<strong>"."<a href='articles.php?id={$row2['id']}&title={$row2['title']}'>"."<center>".$row2['title']."</center>"."</a>"."</strong>"."</td>"."</tr>"."</table>";
			?>             
          <?php }?>
  </div>
 </div>
</div>


<!------------------------------STAFF-------------------------------------------------------------->
<?php elseif ($var_role == 'staff') : ?>
<div id="content2">
     <div class="container">
  <div class="row">
    <div class="col-sm-3 ">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   
      <a class="nav-link" id="v-pills-home-tab" href="staff.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a>
       
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
      <a class="nav-link active" id="v-pills-settings-tab"  href="textEditor.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Upload text</a>
      <a class="nav-link" id="v-pills-settings-tab"  href="search.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</a>
      <a class="nav-link" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> 
            <a class="nav-link" id="v-pills-settings-tab"  href="options.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;Options</a>

      </div>
      <br>
      <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
    </div>
     <!------------------------------------- End of Nav----------------------------------------------------------------->
  <div class="col-lg-6">
		<form action="parse_file.php" name="myform" id="myform" method="post">
       		<p>Entry Title: <input name="title" id="title" type="text" style="border:#000000 1px solid; width:100%; height:30px;"/></p>
            
            <p>Tag: <select style="width:40%;" name="tag">
            		<option> <?php echo $var_upload ?> </option>
                  </select>  
            </p>
           
             <p>Program: <select style="width:40%;" id="program" name="program">
            		<option>Select one:</option>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Master">Master</option>
                    <option value="PHD">Doctoral</option>
                  </select>  
            </p>
            
            <p>Department: <select style="width:40%;" id="department" name="department">
                  <option>Select one:</option>
                  <option value="General">-General-</option>
                  <option value="Business Administration & Economics">Business Administration & Economics</option>
                  <option value="Psychology Department">Psychology Department</option>
                  <option value="Computer Science">Computer Science</option>
                  <option value="English Studies">English Studies Department</option>
                  <option value="MBA">MBA</option>
                  </select>  
            </p>
            
            <p>Level: <select style="width:40%;" id="level" name="level">
                  <option>Select one:</option>
                  <option value="General">-General-</option>
                  <option value="Level 1">Level 1</option>
                  <option value="Level 1 Year 1">Level 1 Year 1</option>
                  <option value="Level 1 Year 2">Level 1 Year 2</option>
                  <option value="Level 2">Level 2</option>
                  <option value="Level 3">Level 3</option>
                  
                  </select>
            </p>
            
     
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
			<br>
			<p><br>
            <img src="badges/image1.png" style="height:70px; width:70px;"/>
           <img src="badges/image2.png" style="height:70px; width:70px;"/>
           <img src="badges/image4.png" style="height:70px; width:70px;"/>
           <img src="badges/image5.png" style="height:70px; width:70px;"/>
           <img src="badges/image6.png" style="height:70px; width:70px;"/>
           <img src="badges/image7.png" style="height:70px; width:70px;"/>
           <img src="badges/image8.png" style="height:70px; width:70px;"/>
           <img src="badges/image9.png" style="height:70px; width:70px;"/>
           <img src="badges/image10.png" style="height:70px; width:70px;"/>
           <img src="badges/image11.png" style="height:70px; width:70px;"/>
           <img src="badges/image12.png" style="height:70px; width:70px;"/>
           <img src="badges/image13.png" style="height:70px; width:70px;"/>
           <img src="badges/image14.png" style="height:70px; width:70px;"/>
           <img src="badges/image15.png" style="height:70px; width:70px;"/>
           <img src="badges/image16.png" style="height:70px; width:70px;"/>
           <img src="badges/image17.png" style="height:70px; width:70px;"/>
           <img src="badges/image18.png" style="height:70px; width:70px;"/>
           <img src="badges/image19.png" style="height:70px; width:70px;"/>
           <img src="badges/image20.png" style="height:70px; width:70px;"/>
           <img src="badges/image21.png" style="height:70px; width:70px;"/>
            
            </p>
	
        </textarea>
		<br>
		</div>		
    		<button type="submit" class="btn btn-primary" name="submit" value="submit" onClick="javascript:submit_form();">Submit</button>
            <br><br>
    </form>
  </div>
  
 <!------------------------------------- End of second----------------------------------------------------------------->
	<div class="col-lg-3 col-sm-12 col-12 col-md-12" align="center" style="background-color:rgba(169,205,255,1.00); width: 30%; height: 300px; overflow: auto;">
	<h5><u>Latest texts</u></h5>
    <?php $querry=mysqli_query($con,"SELECT * FROM texts WHERE user_fk = '$var_id' ORDER BY date DESC");	
			while($row2 = mysqli_fetch_assoc($querry)){	
			echo"<table class='table table-bordered'>". "<span>"."<tr>"."<td>"."<strong>"."<a href='articles.php?id={$row2['id']}&title={$row2['title']}'>"."<center>".$row2['title']."</center>"."</a>"."</strong>"."</td>"."</tr>"."</table>";
			?>             
          <?php }?>
  </div>
 </div>
</div>

<?php else : ?>
<div id="content3">
     <div>No Access</div>
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
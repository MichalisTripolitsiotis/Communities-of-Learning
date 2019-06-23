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
<meta charset="utf-8">
<title>Information</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="icon" href="images/tablogo.png">
<link rel="stylesheet" href="main.css">
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
      <a class="nav-link active" id="v-pills-settings-tab"  href="information.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-info" aria-hidden="true"></i>&nbsp;Information</a>
      <a class="nav-link" id="v-pills-settings-tab"  href="search.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</a>
      <a class="nav-link" id="v-pills-settings-tab"  href="anreport.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-balance-scale" aria-hidden="true"></i>&nbsp;Annual Report</a>
       <a class="nav-link" id="v-pills-settings-tab"  href="chat.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-comments" aria-hidden="true"></i>&nbsp;Chat</a> 
      </nav>
      <br>
      <div id="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></div>
    </div>
    
 <!--------------------------------------- end of nav---------------------------------------------------->   
   <div class="col-sm">
   <h3> Information about persons</h3><br>
   <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">Show/Hide administrators
  </button>
  <div class="collapse" id="collapseExample1">
  <br>
  	<div class="table-responsive"> 
		<?php 
		$query = "SELECT * FROM staff WHERE role='admin'"; 
$result = mysqli_query($con,$query);

echo "<table class='table table-hover ' >"; 
echo "<th>Username</th><th>First name</th><th>Last name</th><th>Role</th>";
while($row = mysqli_fetch_array($result)){  
echo "<tr><td>" ."<a href='edit.php?username={$row['username']}'>". $row['username'] ."</a>". "</td><td>" . $row['fname'] . "</td><td>" . $row['lname'] . "</td><td>" . $row['role'] . "</td></tr>";  
}

echo "</table>"; 
?>
			</div>
		</div>
        <br><br>
        <!------------------------------------------------------------------------------------------->
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">Show/Hide staff
  </button>
 
  <div class="collapse" id="collapseExample2">
  <br>
  	<div class="table-responsive"> 
		<?php 
		$query = "SELECT * FROM staff WHERE role='staff'"; 
$result = mysqli_query($con,$query);

echo "<table class='table table-hover' >"; 
echo "<th>Username</th><th>First name</th><th>Last name</th><th>Role</th>";
while($row = mysqli_fetch_array($result)){  
echo "<tr><td>" ."<a href='edit.php?username={$row['username']}'>". $row['username'] ."</a>".  "</td><td>" . $row['fname'] . "</td><td>" . $row['lname'] . "</td><td>" . $row['role'] . "</td></tr>";  
}

echo "</table>"; 
?>
			</div>
		</div>
         <br><br>
        <!------------------------------------------------------------------------------------------->
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">Show/Hide Computer Studies Students
  </button>

  <div class="collapse" id="collapseExample3">
  <br>
  	<div class="table-responsive"> 
		<?php 
		$query = "SELECT * FROM student WHERE role='csstudent'"; 
$result = mysqli_query($con,$query);

echo "<table class='table table-hover'>"; 
echo "<th>Username</th><th>First name</th><th>Last name</th><th>Role</th>";
while($row = mysqli_fetch_array($result)){  
echo "<tr><td>" . "<a href='edit.php?username={$row['username']}'>". $row['username'] ."</a>" . "</td><td>" . $row['fname'] . "</td><td>" . $row['lname'] . "</td><td>" . $row['role'] . "</td></tr>";  
}

echo "</table>"; 
?>
			</div>
		</div>
        <br><br>                                
   <!----------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------->
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">Show/Hide Business Studies Students
  </button>

  <div class="collapse" id="collapseExample4">
  <br>
  	<div class="table-responsive"> 
		<?php 
		$query = "SELECT * FROM student WHERE role='bsstudent'"; 
$result = mysqli_query($con,$query);

echo "<table class='table table-hover'>"; 
echo "<th>Username</th><th>First name</th><th>Last name</th><th>Role</th>";
while($row = mysqli_fetch_array($result)){  
echo "<tr><td>" . "<a href='edit.php?username={$row['username']}'>". $row['username'] ."</a>" . "</td><td>" . $row['fname'] . "</td><td>" . $row['lname'] . "</td><td>" . $row['role'] . "</td></tr>";  
}

echo "</table>"; 
?>
			</div>
		</div>                                
   <!----------------------------------------------------------------------------------------------------------->
    <br><br>                                
   <!----------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------->
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5">Show/Hide Psychology Studies Students
  </button>

  <div class="collapse" id="collapseExample5">
  <br>
  	<div class="table-responsive"> 
		<?php 
		$query = "SELECT * FROM student WHERE role='psstudent'"; 
$result = mysqli_query($con,$query);

echo "<table class='table table-hover'>"; 
echo "<th>Username</th><th>First name</th><th>Last name</th><th>Role</th>";
while($row = mysqli_fetch_array($result)){  
echo "<tr><td>" . "<a href='edit.php?username={$row['username']}'>". $row['username'] ."</a>" . "</td><td>" . $row['fname'] . "</td><td>" . $row['lname'] . "</td><td>" . $row['role'] . "</td></tr>";  
}

echo "</table>"; 
?>
			</div>
		</div>                                
   <!----------------------------------------------------------------------------------------------------------->
    <br><br>                                
   <!----------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------->
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample6">Show/Hide English Studies Students
  </button>
  
  <div class="collapse" id="collapseExample6">
  <br>
  	<div class="table-responsive"> 
		<?php 
		$query = "SELECT * FROM student WHERE role='esstudent'"; 
$result = mysqli_query($con,$query);

echo "<table class='table table-hover'>"; 
echo "<th>Username</th><th>First name</th><th>Last name</th><th>Role</th>";
while($row = mysqli_fetch_array($result)){  
echo "<tr><td>" . "<a href='edit.php?username={$row['username']}'>". $row['username'] ."</a>" . "</td><td>" . $row['fname'] . "</td><td>" . $row['lname'] . "</td><td>" . $row['role'] . "</td></tr>";  
}

echo "</table>"; 
?>
			</div>
		</div>                                
   <!---------------------------------------ADD/REMOVE CLUB------------------------------------------------------------------>
   <hr>
   <h3>Create/Delete Club</h3>
   <br>
   	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample9" aria-expanded="false" aria-controls="collapseExample6">Create Club
  </button>
  
  <div class="collapse" id="collapseExample9">
  <br>
  	 <h2>Create new club</h2>
      <form id="adminclubform" name="adminclubform" action="adminclubform.php" method="POST" style="border: 2px solid #111; background: rgb(222,184,135,0.5);">
        <div class="col-sm-12 my-4">
          <label for="registerUserName">Club Name</label>
          <input type="text" class="form-control" Name="clubname" placeholder="Club Name" required><br>

           <label for="registerUserName">Staff Manager's Name</label>
          <select class="form-control" name="staff_name">
          <option>Select one</option>
          	<?php $sql=mysqli_query($con,"SELECT * FROM staff WHERE role='staff'");
			while($row2 = mysqli_fetch_assoc($sql)){
				echo   "<option value='{$row2['username']}'>".$row2['username']."</option>";
			}
			?>
          </select>
          
           <br>
         <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
		
  //]]>
  </script>
          <textarea  id="text" name="text" style="width:50vh; height: 200px;">
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
  </div>
  <br><br>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample10" aria-expanded="false" aria-controls="collapseExample6">Delete Club
  </button>
  
  <div class="collapse" id="collapseExample10">
  <br>
  	<h2>Delete club</h2>
      <form id="admindeleteclubform" name="admindeleteclubform" action="admindeleteclubform.php" method="POST" style="border: 2px solid #111; background: rgb(222,184,135,0.5);">
        <div class="col-sm-12 my-4">
          <label for="registerUserName">Club Name</label>
          <input type="text" class="form-control" Name="clubname" placeholder="Club Name" required>
         

        </div>
        <center><button type="delete" name="delete" class="btn btn-light">Delete</button></center>
        <br>
      </form>
      <br>
  </div>
   <hr>
   <!-------------------------------------ADD/REMOVE STAFF------------------------------------------------------------------>
   <h3> Add and remove staff</h3><br>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample7">Add..
  </button> 

  
  <div class="collapse" id="collapseExample7">
  <br>
   <form id="signupform" name="signup" action="passtodb.php" method="POST" onsubmit="return(validate2());" style="border: 2px solid #111; background: rgb(222,184,135,0.5);">
                            <div class="form-group" style="text-align: center; align-content: center;">
                                <div class="col-sm-12 my-4">
                                    <h3>Sign Up</h3>
                                </div>
                                <div class="col-sm-12 my-4">
                                    <label for="registerUserName">User Name</label>
                                    <input type="text" class="form-control" Name="username" placeholder="Username" required>
                                </div>
                                <div class="col-sm-12 my-3">
                                    <label for="registerFName">First Name</label>
                                    <input type="text" class="form-control" Name="firstName" placeholder="First Name" required>
                                </div>
                                <div class="col-sm-12 my-3">
                                    <label for="registerLName">Last Name</label>
                                    <input type="text" class="form-control" Name="lastName" placeholder="Last Name" required>
                                </div>            
                                <div class="col-sm-12 my-3">
                                    <label for="registerPassword">Password</label>
                                    <input type="password" class="form-control" Name="password" placeholder="Enter password" required>
                                </div>
                                
                               
                                <div class="col-sm-12 my-3">
                                    <label for="registerRole">Role</label>
                                    <select class="selectpicker form-control" id="mySelect" name="role" required>
                                        
                                        <option>admin</option>
                                        <option>staff</option>
                                        
                                    </select>
                                    
                                </div>
                             
                                
                                <!--<div class="col-sm-12 my-3">
                                    <label for="section">Staff will upload texts for:</label>
                                    <select  class="selectpicker form-control" id="sectionUpload" name="sectionUpload" required>
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
                                    
                                </div>-->
                                
                                <button type="submit" name="submit" class="btn btn-light">Sign up</button>
                            </div>
                            
                            <!--Sign Up Validation Script-->
                            <script>
                                function validate2()
                                {
                                    if(document.signup.username.value =="")
                                    {
                                        alert("Provide a username");
                                        return false;
                                    }
                                    if(document.signup.password.value =="")
                                    {
                                        alert("Provide a password");
                                        return false;
                                    }
									 if(document.signup.firstName.value =="")
                                    {
                                        alert("Provide a first name");
                                        return false;
                                    }
									 if(document.signup.lastName.value =="")
                                    {
                                        alert("Provide a last name");
                                        return false;
                                    }
									if(document.signup.role.value =="...")
                                    {
                                        alert("Provide a role");
                                        return false;
                                    }
                                    return (true);
                                }
                            </script>
                        </form>
                    </div>
                    <br><br>
                    
 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample8" aria-expanded="false" aria-controls="collapseExample8">Remove
  </button> 
   <div class="collapse" id="collapseExample8">
  <br>
  <form id="removeform" name="remove" action="remove.php" method="POST" style="border: 2px solid #111; background: rgb(222,184,135,0.5);"  >
  <div class="form-group" style="text-align: center; align-content: center;">
                                <div class="col-sm-12 my-4">
                                    <h3>Remove</h3>
                                </div>
                                <div class="col-sm-12 my-4">
                                <p><b>Before removing delete the club(s) that the user manages </b></p>
                                    <label for="registerUserName">User Name</label>
                                    <input type="text" class="form-control" Name="username" placeholder="Username" required>
                                </div>
  <button type="submit" name="submit" class="btn btn-light" onclick="return confirm('Are you sure you would like to remove the user?');">Remove</button>
  </div>
  
  </form>
  
  </div>
  
  <!------------------------------------------------------------------------------------------------------------------------------------->
  <hr>
   <h3> Add and remove student</h3><br>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample11" aria-expanded="false" aria-controls="collapseExample9">Add..
  </button> 
  
  <div class="collapse" id="collapseExample11">
  <br>
   <form id="signupform" name="signup" action="passtodb2.php" method="POST" onsubmit="return(validate2());" style="border: 2px solid #111; background: rgb(222,184,135,0.5);">
                            <div class="form-group" style="text-align: center; align-content: center;">
                                <div class="col-sm-12 my-4">
                                    <h3>Sign Up</h3>
                                </div>
                                     
                                <div class="col-sm-12 my-4">
                                    <label for="registerUserName">User Name</label>
                                    <input type="text" class="form-control" Name="username" placeholder="Username" required>
                                </div>
                                <div class="col-sm-12 my-3">
                                    <label for="registerFName">First Name</label>
                                    <input type="text" class="form-control" Name="firstName" placeholder="First Name" required>
                                </div>
                                <div class="col-sm-12 my-3">
                                    <label for="registerLName">Last Name</label>
                                    <input type="text" class="form-control" Name="lastName" placeholder="Last Name" required>
                                </div>
                                            
                                <div class="col-sm-12 my-3">
                                    <label for="registerPassword">Password</label>
                                    <input type="password" class="form-control" Name="password" placeholder="Enter password" required>
                                </div>
                                 <div class="col-sm-12 my-3">
                                    <label for="registerRNum">Reg. Number</label>
                                    <input type="text" class="form-control" Name="regnum" placeholder="Reg. Number" required>
                                </div>     
                                <div class="col-sm-12 my-3">
                                    <label for="registerRNum">City's Email</label>
                                    <input type="text" class="form-control" Name="email" placeholder="City's Email" required>
                                </div>     
                                <div class="col-sm-12 my-3">
                                    <label for="registerRole">Role</label>
                                    <select class="selectpicker form-control" id="mySelect" name="role" required>
                                        <option>...</option>
                                        <option  title="Computer Studies Department">csstudent</option>
                                        <option title="Business Studies Department">bsstudent</option>
                                        <option title="Psychology Studies Department">psstudent</option>
                                        <option title="English Studies Department">esstudent</option>
                                        
                                    </select>
                                    
                                </div>
                             
                                
                                <button type="submit" name="submit" class="btn btn-light">Sign up</button>
                            </div>
                            
                            <!--Sign Up Validation Script-->
                            <script>
                                function validate2()
                                {
                                    if(document.signup.username.value =="")
                                    {
                                        alert("Provide a username");
                                        return false;
                                    }
                                    if(document.signup.password.value =="")
                                    {
                                        alert("Provide a password");
                                        return false;
                                    }
									 if(document.signup.firstName.value =="")
                                    {
                                        alert("Provide a first name");
                                        return false;
                                    }
									 if(document.signup.lastName.value =="")
                                    {
                                        alert("Provide a last name");
                                        return false;
                                    }
									
                                    return (true);
                                }
                            </script>
                        </form>
                    </div>
                    <br><br>
                    
 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample12" aria-expanded="false" aria-controls="collapseExample10">Remove
  </button> 

   <div class="collapse" id="collapseExample12">
  <br>
  <form id="removeform" name="remove" action="remove2.php" method="POST" style="border: 2px solid #111; background: rgb(222,184,135,0.5);"  >
  <div class="form-group" style="text-align: center; align-content: center;">
                                <div class="col-sm-12 my-4">
                                    <h3>Remove</h3>
                                </div>
                                <div class="col-sm-12 my-4">
                                
                                    <label for="registerUserName">User Name</label>
                                    <input type="text" class="form-control" Name="username" placeholder="Username" required>
                                </div>
  <button type="submit" name="submit" class="btn btn-light" onclick="return confirm('Are you sure you would like to remove the user?');">Remove</button>
  </div>
  
  </form>
  
  </div>
  <br>
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
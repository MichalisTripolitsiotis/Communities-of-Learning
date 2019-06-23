<?php
session_start();
include_once('connect.php');

$var_username=$_GET['username'];

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
<link rel="stylesheet" href="articlesstyle.css">
<meta charset="utf-8">
<title>Edit</title>
</head>
<body>
<!-------------------------- Banner ----------------------------------------------------------------------------->
<div class="col-md">
  <header class="py-4 bg-image" style="background-color:rgba(47, 132, 192);">
    <center>
      <p style="color:white; font-size:170%;"><img class="visible-lg visible-md" id="logo" src="images/logo.png"> Communities of Learning (C.o.L.)</p>
    </center>
  </header>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <?php
			$querry=mysqli_query($con,"SELECT * FROM staff WHERE username = '$var_username' ");	
			while($row2 = mysqli_fetch_assoc($querry)){	
			?>
      <br>
      <form id="editperson" name="editperson" action="editperson.php" method="POST" onsubmit="return(validate2());" style="border: 2px solid #111; background: rgb(222,184,135,0.5);">
        <div class="form-group" style="text-align: center; align-content: center;">
          <div class="col-sm-12 my-4">
            <h3>Sign Up</h3>
          </div>
          <div class="col-sm-12 my-4">
            <input type="text" Name="id" value="<?php echo $row2['id']?>" hidden>
          </div>
          <div class="col-sm-12 my-4">
            <label for="registerUserName">User Name</label>
            <input type="text" class="form-control" Name="username" value="<?php echo $row2['username']?>" required>
          </div>
          <div class="col-sm-12 my-3">
            <label for="registerFName">First Name</label>
            <input type="text" class="form-control" Name="firstName" placeholder="First Name" value="<?php echo $row2['fname']?>" required>
          </div>
          <div class="col-sm-12 my-3">
            <label for="registerLName">Last Name</label>
            <input type="text" class="form-control" Name="lastName" placeholder="Last Name" value="<?php echo $row2['lname']?>" required>
          </div>
          <button type="submit" name="submit" class="btn btn-light">Modify</button>
        </div>
        <?php } ?>
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
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <?php
			$querry=mysqli_query($con,"SELECT * FROM student WHERE username = '$var_username' ");	
			while($row2 = mysqli_fetch_assoc($querry)){	
			?>
      <br>
      <form id="editperson" name="editperson" action="editperson2.php" method="POST" onsubmit="return(validate2());" style="border: 2px solid #111; background: rgb(222,184,135,0.5);">
        <div class="form-group" style="text-align: center; align-content: center;">
          <div class="col-sm-12 my-4">
            <h3>Sign Up</h3>
          </div>
          <div class="col-sm-12 my-4">
            <input type="text" Name="id" value="<?php echo $row2['studentid']?>" hidden>
          </div>
          <div class="col-sm-12 my-4">
            <label for="registerUserName">User Name</label>
            <input type="text" class="form-control" Name="username" value="<?php echo $row2['username']?>" required>
          </div>
          <div class="col-sm-12 my-3">
            <label for="registerFName">First Name</label>
            <input type="text" class="form-control" Name="firstName" placeholder="First Name" value="<?php echo $row2['fname']?>" required>
          </div>
          <div class="col-sm-12 my-3">
            <label for="registerLName">Last Name</label>
            <input type="text" class="form-control" Name="lastName" placeholder="Last Name" value="<?php echo $row2['lname']?>" required>
          </div>
          <div class="col-sm-12 my-3">
            <label for="registernum">Reg. Number</label>
            <input type="text" class="form-control" Name="regnum" placeholder="Reg. Num" value="<?php echo $row2['regnum']?>" required>
          </div>
          <div class="col-sm-12 my-3">
            <label for="email">City's Email</label>
            <input type="text" class="form-control" Name="email" placeholder="City's Email" value="<?php echo $row2['email']?>" required>
          </div>
          <div class="col-sm-12 my-3">
            <label for="registerRole">Role</label>
            <select class="selectpicker form-control" id="role" name="role" required>
              <option><?php echo $row2['role']?></option>
              <option>...</option>
              <option  title="Computer Studies Department">csstudent</option>
              <option title="Business Studies Department">bsstudent</option>
              <option title="Psychology Studies Department">psstudent</option>
              <option title="English Studies Department">esstudent</option>
            </select>
          </div>
          <button type="submit" name="submit" class="btn btn-light">Modify</button>
        </div>
        <?php } ?>
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
    <br>
    <br>
  </div>
</div>
</body>
</html>
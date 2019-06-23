<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Communitites of Learning</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="icon" href="images/tablogo.png">
<link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>
<div class="body">
  <div class="top"> <br>
    <div class="topintro">
      <div class="d-flex justify-content-between">
        <div><a href="index.php"> <img class="visible-lg visible-md" src="images/logo.png"></a> </div>
        <div>
          <h1 class="titletext">Welcome to the Communities of Learning</h1>
          <h4 class="titletext visible-lg visible-md"> A community for City College International Faculty</h4>
        </div>
      </div>
      <br>
    </div>
  </div>
  <br>
  <br>
  <div class="container col-xl-11" id="section2">
  <div class="text-center"><strong><i>Already have an account?</i></strong> <a href="index.php">Login here</a>.</div>
    <div class="row">
      <div class="signup-form">
        <form action="confirmation.php" method="post">
          <h2>Create Account</h2>
          <div class="form-group">
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
              <input type="text" class="form-control" name="regnum" placeholder="City's Reg. Number" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control" name="username" placeholder="City's Username" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control" name="fname" placeholder="Name" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control" name="lname" placeholder="Last name" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
              <input type="email" class="form-control" name="email" placeholder="City's Email Address" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="form-control" name="password" placeholder="City's Password" required="required">
            </div>
          </div>
          <div class="form-group">
          
             <select class="custom-select" id="mySelect" name="role" style="height:30px;" required name="Program">
                                        <option>Select Department:</option>
                                        <option title="Computer Studies Department">csstudent</option>
                                        <option title="Business Studies Department">bsstudent</option>
                                        <option title="Psychology Studies Department">psstudent</option>
                                        <option title="English Studies Department">esstudent</option>
                                        
                                    </select>
                                  
         
          </div>
         
          <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
          <br>
        </form>
        
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
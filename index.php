<!-- Michalis Tripolitsiotis
	-- Dissertation Project --
    	The University of Sheffield International Faculty, City College
         Computer Science Department
         2018-2019
         -->
<?php
session_start();
include_once("connect.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Communities of Learning</title>
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
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<link rel="icon" href="images/tablogo.png">
<link rel="stylesheet" type="text/css" href="index.css">
   

<script>
$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 850, function(){
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }
  });
});
</script>
</head>
<body onLoad="typeWriter()">
<!--
<script>
//$(window).scroll(function(){
  //  $(".top").css("opacity", 1 - $(window).scrollTop() / 820);
//  });
</script>
-->
<div class="body">
<div class="top">
<br>
<div class="topintro">
<div class="d-flex justify-content-between">
      <div>
      <img class="visible-lg visible-md" src="images/logo.png">
      </div>
      <div class="texts">
      <h1 class="titletext">Welcome to the Communities of Learning</h1>
        <h4 class="titletext visible-lg visible-md"> A community for City College International Faculty</h4>
      </div>
 </div>
<br>
</div>
  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="false" id="bs-carousel">
  <ol class="carousel-indicators visible-lg visible-md" >
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1">
      <center><a href="#form"><button class="btn btn-hero btn-lg" role="button" >Sign in</button></a></center>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"><center><a href="#form"><button class="btn btn-hero btn-lg" role="button">Sign in</button></a></center>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"><center><a href="#form"><button class="btn btn-hero btn-lg" role="button">Sign in</button></a></center>   
      </div>
    </div>
  </div> 
  <a class="carousel-control-prev" href="#bs-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#bs-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
</div>

<br>
<br>

<div class="container col-xl-11" id="section2">
  <div class="row">
    <h3 class="visible-sm visible-xs">
      Log in in order to see a variety of interesting things about out University!</h3><br>
    <div class="col-md-7 col-xl-7 visible-lg visible-md">
      <br>
      <br>
      <p id="par"></p>
      
       <script>
			var i = -40;
			var txt = 'Hello! Log in, in order to see a variety of interesting things about our University!';
			var speed = 50;
			function typeWriter() {
			  if (i < txt.length) {
				document.getElementById("par").innerHTML += txt.charAt(i);
				i++;
				setTimeout(typeWriter, speed);
			  }
			}
		</script>
      <br>
      <br>
      <div id="div1"><h3>This web application categorizes all the learning communities into specific sections and informs the students and the staff for the activities that the International Faculty organizes. <br><br>Also it brings closer the students between them and with the academic staff of the College and incorporates all these activities with the Sheffield Graduate Attributes.</h3></div>
  <script>
      $(document).ready(function () {
          // Hide the div
          $("#div1").hide();
          // Show the div after 5s
          $("#div1").delay(6800).fadeIn(100);  
      });    
  </script>
    </div>
    
        
        
    <div class="col col-md-5" id="form"><br>
      <form action="login.php" method="POST">
        <h4>Log in</h4>
        <div class="form-group"> 
          <!--check email-->
          <label for="email">Username:</label>
          <input type="text" class="form-control input-lg" id="uname" placeholder="Enter username" name="username">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control input-lg" id="pwd" placeholder="Enter password" name="password">
        </div>
        <input type="radio" name="select" id="select" value="student" checked>
        Student<br>
        <input type="radio" name="select" id="select" value="staff">
        Staff<br>
        <br>
        <button type="submit" class="btn btn-block btn-md" name="login" value="Login">Submit</button>
        <br>
        </form>
        <div>
 <p>Not already user? Sign up!</p>
    <center><a href="signup.php" class="btn btn-md btn-link">Sign up</a></center>
    

 </div>
 </div>
  </div>
</div>


<br>
<br>
<br>
<!-- Footer -->
<footer class="page-footer font-small indigo" id="footer">
  <div class="container text-center text-md-left"> 
    <!-- Grid row -->
    <div class="row"> 
      
      <!-- Grid column -->
      <div class="col-md-4 mx-auto"> 
        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-5 mb-4">Links</h5>
        <ul class="list-unstyled">
          <li> <a href="http://citycollege.sheffield.eu/frontend/">City College</a> </li>
          <li> <a href="https://mole.citycollege.sheffield.eu/">MOLE</a> </li>
          <li> <a href="https://www.sheffield.ac.uk/">The University of Sheffield</a> </li>
          <li> <a href="https://www.seerc.org/new/">South East European Research Center</a> </li>
        </ul>
      </div>
      <hr class="clearfix w-100 d-md-none">
      <div class="col-md-3 mx-auto"> 
        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-5 mb-4">Social Media</h5>
        <ul class="list-unstyled">
          <li> <a href="https://www.facebook.com/citycollegethessalonki/"><i class="fa fa-facebook-official"></i></a> </li>
          <li> <a href="https://www.instagram.com/citycollege_sheffield/"><i class="fa fa-instagram"></i></a> </li>
          <li> <a href="https://www.linkedin.com/company/shefuni-city-college/"><i class="fa fa-linkedin-square"></i></a> </li>
          <li> <a href="https://www.youtube.com/user/citycollegethess"><i class="fa fa-youtube-play"></i></a> </li>
        </ul>
      </div>
    </div>
    <!-- Footer Links --> 
  </div>
  <br>
  <br>
  <!-- Copyright -->
  <div class="footer-copyright text-center alert-dark	 py-3">© <?php echo date("Y");?> Copyright: Michalis Tripolitsiotis </div>
  <!-- Copyright --> 
  
</footer>
<!-- Footer -->
  </div>
</div>
</body>
</html>
<?php
session_destroy();
?>
<?php
session_start();
include_once('connect.php');
//if (isset($_SESSION['username'])) {
    //username to be found
  //  $var_username = $_SESSION['username'];
   // print($var_username);
$var_id=$_GET['id'];
$var_id2=$_REQUEST['id'];
//echo $var_id2;
//}
?>
<!doctype html>
<html><head>

<!-- bootstrap-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="icon" href="images/tablogo.png">
<link rel="stylesheet" href="articlesstyle.css">
<script async src="https://static.addtoany.com/menu/page.js"></script>
<meta charset="utf-8">
<title>Article</title>
</head>
<body>
<!-------------------------- Banner ----------------------------------------------------------------------------->
<div class="col-md">
   <header class="py-4 bg-image" style="background-color:rgba(47, 132, 192);">
	  <center><p style="color:white; font-size:170%;"> Communities of Learning (C.o.L.)</p></center>
   </header>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm">
		<?php
			$querry=mysqli_query($con,"SELECT * FROM texts WHERE id=$var_id");
			while($row2 = mysqli_fetch_assoc($querry)){
			?>
        <div class="table-responsive">
         <table class="table table-bordered">
            <span>
               <tr>
                  <td>
                     <strong>
                     	<center>
						<?php echo " <h4 class='blog-post-title'>". $row2['title']."</h3>"?>
                            </center>
                      </strong>
                      <?php echo "<p class='blog-post-meta'>".$row2['date']."</p>"?>
                 </td>
             </tr>
             <tr>
             	<td>
               <?php echo "Program: ".$row2['program'];?> <br>
               <?php echo "Department: ". $row2['department'];?> <br>
               <?php echo "Level: ". $row2['level'];?>
                </td>
               </tr>
         </span>

          <span>
             <tr>
                <td>
                	<?php echo "<p class='blog-description'>". $row2['myTextArea']."</p>"?>
                </td>
              </tr>
         </span>
        <br>
        <br>

   </table>
             <?php }?>
              </div>
         <hr>
        <?php
			$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

			//print($actual_link);
		?>
   <div class="row">
 <!-- Print -->
    <a href="javascript:;" onclick="window.print()">
        <img src="images/print.png" alt="Print" style="width:50px; height:50px;" />
    </a>
<!-- Email -->
    <a  href="mailto:?Subject=Simple Share Buttons&amp;Body="<?php $actual_link ?>>
        <img src="images/email.png" alt="Email"  style="width:50px; height:50px;" />
    </a>

    <!-- Facebook WORKS!! -->
    <a href="http://www.facebook.com/sharer.php?u=<?php $actual_link?>" target="_blank">
        <img src="images/facebook.png" alt="Facebook" style="width:50px; height:50px;" />
    </a>
	
    
    <div class="a2a_kit">
    <a class="a2a_button_linkedin_share" data-url="<?php $actual_link?>" style="width:50px; height:50px;">
         <img src="images/linkedin.png" alt="LinkedIn" style="width:50px; height:50px;" />
    </a>
</div>

<div class="a2a_kit">
    <a class="a2a_button_twitter_tweet" data-lang="es" data-url="<?php $actual_link?>"></a>
</div>
         <hr>
    </div>
</div>
</div>
</body>
</html>

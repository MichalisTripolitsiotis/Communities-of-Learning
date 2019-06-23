<?php
	$con=mysqli_connect("localhost","root","") or die("not connected to xampp(?)");
	mysqli_select_db($con,"diss")  or die("not connected to database!");

	if($con){
		//echo("database found!!");
	}
	else{
		echo("not connected!!");
	}

	?>

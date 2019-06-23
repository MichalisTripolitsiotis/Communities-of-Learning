<?php
session_start();
include_once ('connect.php');
// File upload path
$statusMsg = '';
if (isset($_SESSION['username'])) {
    //username to be found
    $var_username = $_SESSION['username'];
    //print($var_username);
}

 $sql="SELECT role FROM student WHERE username='$var_username'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
    $var_role=$row[0];
   //print($var_role);

// File upload path
    $targetDir = "images_profile/";
    $fileName = basename($_FILES["file"]["name"]);

    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                // Insert image file name into database
                print($fileName);
                $insert = "Update  student  set ProfilePicture='$fileName' where Username='$var_username'";
                print($insert);
                if ($con->query($insert) === TRUE) {
                    $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
					
					if($var_role == 'csstudent'){
					header("Location: ../csstudent.php?==success");
					} else if($var_role == 'psstudent'){
						header("Location: ../csstudent.php?==success");
						
					}else if($var_role == 'esstudent'){
						header("Location: ../esstudent.php?==success");
						
					}else if($var_role == 'bsstudent'){
						header("Location: ../bsstudent.php?==success");
					}
                } else {
                    $statusMsg = "File upload failed, please try again.";
                }
            } else {
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    } else {
        $statusMsg = 'Please select a file to upload.';
    }

// Display status message
echo $statusMsg;

?>
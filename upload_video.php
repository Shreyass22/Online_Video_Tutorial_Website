<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
         error_reporting(0);
	 $course1    = $_POST["course"];
         $course = strtoupper($course1);
	  $branch    = $_POST["branch"];
	$name = $_FILES['file']['name'];
    $temp_name = $_FILES['file']['tmp_name'];
    
	if(move_uploaded_file($temp_name, "courses//".$branch."//".$course."//". $name)){
           echo "<script type = 'text/javascript'>alert('Video Uploaded Successfully!');</script>"; 
           include 'video1.php';
           }
        else{
        echo "<script type = 'text/javascript'>alert('Course Does Not Exists!');</script>"; 
        include 'video1.php';
        }
   ?>

</body>
</html>

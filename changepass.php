
<?php
	 @session_start();

   $server     = "fdb21.awardspace.net";
   $username   = "3095051_mydatabase";
   $password   = "krishna10";
   $database   = "3095051_mydatabase";
 	 $con = mysqli_connect($server, $username, $password, $database);

   //echo "Connection Established <br>";

     $email   = $_SESSION["email"];
     $password = $_POST['password'];
     
      $sql = "UPDATE register SET password='$password' where email='$email'";
   if($con->query($sql)==TRUE){
    echo "<script>window.alert('Successful.');window.document.location='index.php'</script>";

	}
     else {
     echo "<script>window.alert('Please Try Again.');window.document.location='index.php'</script>";

     }
     
?>



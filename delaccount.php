<?php
	 session_start();

  
   $server     = "fdb21.awardspace.net";
   $username   = "3095051_mydatabase";
   $password   = "krishna10";
   $database   = "3095051_mydatabase";
 	 $con = mysqli_connect($server, $username, $password, $database);

   //echo "Connection Established <br>";

     $email   = $_SESSION["email"];
     
     
      $sql = "DELETE FROM register where email='$email'";
   if($con->query($sql)==True){
    @session_start();
        unset($_SESSION["email"]);
        session_destroy();

header("Location:registerpage.php");  
	}
  else{
    echo "<script>window.alert('WRONG CREDENTIALS');window.document.location='index.php'</script>";
  }
?>


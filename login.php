<?php
	 session_start();

   $server     = "fdb21.awardspace.net";
   $username   = "3095051_mydatabase";
   $password   = "krishna10";
   $database   = "3095051_mydatabase";
 	 $con = mysqli_connect($server, $username, $password, $database);

   if(!$con){
      die("Error : " . $con->connect_error);
   }
   //echo "Connection Established <br>";

     $email   = $_POST["email"];
     $password = $_POST['pwd'];
      $sql = "select * from register where email='$email' and password='$password' ";
   $result = $con->query($sql);  
   $row  = mysqli_fetch_array($result);
     if($email=='admin@siesgst.ac.in'&& $password=='admin'){
      $_SESSION["email"] = $email;
      if(isset($_SESSION["email"])) {
      header("location:./admin.php");
    }
     }
     elseif(is_array($row)){
        $_SESSION["email"] = $row['email'];
        if(isset($_SESSION["email"])) {
        header("Location:index.php");
      }
     }
   else{
    
      echo "<script>window.alert('User Not found');window.document.location='./registerpage.php'</script>";
 
   }
	
?>




<?php
  
   
   $server     = "fdb21.awardspace.net";
   $username   = "3095051_mydatabase";
   $password   = "krishna10";
   $database   = "3095051_mydatabase";
   $con = mysqli_connect($server, $username, $password, $database);

   if($con){
      
      //echo "<h4>Have Any query?</h4>";
   }

     $name    = $_POST["name"];
      $email    = $_POST["email"];
     $comment = $_POST['comment'];
     
  
  
    $sql = "insert into comment(name,email,comment) values('$name', '$email','$comment')";

   if($con->query($sql) == TRUE){
    
      echo "<script>window.alert('Will Get Back To With_In 48Hrs.');window.document.location='./#contactus'</script>";

    
      
   }else{
      
   }
?>


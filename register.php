<?php
	
      $server     = "fdb21.awardspace.net";
    $username   = "3095051_mydatabase";
    $password   = "krishna10";
    $database   = "3095051_mydatabase";

 	 $con = mysqli_connect($server, $username, $password, $database);

     $f_name    = $_POST["fname"];
      $l_name    = $_POST["lname"];
     $roll = $_POST['prn'];
     
     $branch = $_POST['branch'];
      $email    = $_POST["email"];
     $password = $_POST['password'];
  
      $gender    = $_POST["gender"];
  
    $sql = "insert into register(f_name,l_name,roll,branch,email,password,gender) values('$f_name', '$l_name','$roll','$branch','$email', '$password', '$gender')";
    $sql1 = "select * from register where email='$email'";
    $res1 = mysqli_query($con, $sql1);
   
   if (mysqli_num_rows($res1) > 0){
   echo "<script>window.alert('Account Already Exits!');window.document.location='registerpage.php'</script>";
   
   }
   elseif($con->query($sql) == TRUE){
       echo "<script>window.alert('Registration Successful');window.document.location='registerpage.php'</script>";
   }else{
     echo "<script>window.alert('Registration Failed! Please RE-Register.');window.document.location='registerpage.php'</script>";
   }
?>


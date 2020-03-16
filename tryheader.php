<?php
ob_start();
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/cdcea4e792.js" crossorigin="anonymous"></script>


  <link rel="stylesheet" type="text/css" href="style/header.css">
  <script src="script/main.js"></script>
  
  <title>Online Portal</title>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-sm-start sticky-top">
   
  <img src="img/logo.png" class="logo order-1 order-lg-0 ml-lg-1 ml-2 " alt="logo" style="width: 70px">
  <button class="navbar-toggler open align-self-start" type="button">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse bg-dark mobileMenu d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end p-3 p-lg-0 mt-5 mt-lg-0  hp" id="navbarSupportedContent">
    <ul class="navbar-nav align-self-stretch top-nav">
      <li class="nav-item">
          <a class="nav-link " href="index.php" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./#testimonial" style="color: white;">Testimonial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./#contactus" style="color: white;">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#aboutus" style="color: white;">About us</a>
        </li>
        <?php
        if(!empty($_SESSION["email"])) {
        ?>
        <li class="nav-item">
          <a class="nav-link" href="courses.php" style="color:white;">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="main_forum.php" style="color:white;">Forum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color:white;">Logout</a>
        </li>
        <?php
        if($_SESSION["email"]!="admin@siesgst.ac.in"){
        ?>

        <li class="nav-item">

          <a class="nav-link " data-toggle="dropdown" href="#" style="color:white;"><i class="fas fa-caret-square-down"></i></a>
           <div class="dropdown-menu">
            <a  class="nav-link bg-dark"  data-toggle="modal" data-target="#myModal" style="color: white;">Change Password</a>
            <a  class="nav-link bg-dark"  data-toggle="modal" data-target="#myModal1" style="color: white;">Delete Account</a>
          </div>
        </li>
        <?php
      }
        if($_SESSION["email"]=="admin@siesgst.ac.in"){
        ?>
        <li class="nav-item">
          <a class="nav-link" href="admin.php" style="color:white;">Admin</a>
        </li>
      <?php
      }

        
      }
        else{
        ?>
        <li class="nav-item">
          <a class="nav-link" href="registerpage.php" style="color: white;">Login</a>
        </li>
        <?php
      }
      ?>
    </ul>
  </div>
</nav>

<div class="overlay" style="z-index: 999"></div>


<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header " style="background-color: #2f4e71;">
        <h5 class="modal-title" style="color: #f5d76e;">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body ">
       <form action="changepass.php" method="POST">
        <center>
        <table>
          <tr><td style="padding-top: 5px;"><input type="password" name="password" placeholder="Enter new password"></td></tr>
          <tr><td style="padding-top: 5px;"><input type="password" name="repassword" placeholder="Confirm password"></td></tr>
          <tr><td style="padding-top: 5px;"><button  class="btn btn-success"type="submit">Submit</button></td></tr>
        </table>
      </center>
       </form>
      </div>
    </div>
  </div>
</div>



  <div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header " style="background-color: #2f4e71;">
        <h5 class="modal-title" style="color: #f5d76e;">DELETE ACCOUNT</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="zzz">
        <h1>ARE YOU SURE?</h1>
        <table>
          <tr>
            <td>
        <button class="btn btn-success">NO</button>
        </td>
        <td style="padding-left: 10px;">
        <form action="delaccount.php">
        <button class="btn btn-danger" >YES</button>
      </form>
    </td>
    </tr>
    </table>  
      </div>
    </div>
  </div>
</div>



</body>
</html>
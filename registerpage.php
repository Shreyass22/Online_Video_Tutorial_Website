 <?php include ("tryheader.php");?>
 <!DOCTYPE html>

 <html style="scroll-behavior: smooth;">
 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <script src="https://kit.fontawesome.com/cdcea4e792.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="style/registerpage.css">


  <style type="text/css">
   
    form{
      
      padding:40px;
      -webkit-box-shadow: 9px 15px 39px -9px rgba(0,0,0,0.75);
      -moz-box-shadow: 9px 15px 39px -9px rgba(0,0,0,0.75);
      box-shadow: 9px 15px 39px -9px rgba(0,0,0,0.75);
      color: white;
      border-radius: 10px
    }
    .nav-tabs{
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 20px;
      margin-top: 20px;
    }
    .nav-tabs>li>a{
      border-radius: 5px;
   
      color: white;
    }
  </style>
  <title>Online Portal - Registration</title>
</head>


<body style="background-image: url('img/br.png');  background-repeat: no-repeat; background-position: center;  background-size: auto;">
  <?php
  if(empty($_SESSION["email"])) {
    ?>


    <div class="" style="top: 15px;" >
      <h2 class="text-light" style="text-align: center;"><strong>Welcome to SEES Engineering College</strong></h2>
      <h4 class="text-light" style="text-align: center;">Login or Signin to get access</h4>
      <div class="row justify-content-center align-items-center" id="center1">
        <div class="">
          <!--nav tab-->
          <ul class="nav nav-tabs justify-content-center align-items-center" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
            </li>
          </ul>
          <!--tab content--->
          <div class="tab-content" id="myTabContent">
            <!--login start-->
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">

              <form action="login.php" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@siesgst.ac.in"placeholder="eg:xyz@siesgst.ac.in" name="email" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control"  placeholder="Enter password" name="pwd"id="pwd" required>
                </div>
                <center>
                  <a href="#" class="text-center">Forgot Password?</a> <br>
                  <button type="submit" class="btn btn-primary justify-content-center">Login</button>
                </center>

              </form>
            </div>
            <!--login end-->
            <!--register start-->
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">

             <form method="POST" action="register.php" onsubmit="return Validate()" name="myform" id="myform" >
              <div class="container">
                <div class="form-row">
                  <!--first name-->
                  <div class="form-group col-md-6 col-sm-6 col-6" id="fname_div">
                    <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">
                    <div id="fname_error"></div>
                  </div>
                  <!--last name-->
                  <div class="form-group col-md-6 col-sm-6 col-6" id="lname_div">
                    <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name">
                    <div id="lname_error"></div>
                  </div>
                </div>
                <div class="form-row">
                  <!--PRN-->
                  <div class="form-group col-md-6 col-sm-6 col-6" id="prn_div">
                    <input type="text" name="prn" id="prn" class="form-control" placeholder="117A3017" pattern="^[[1-9]{3}[A]{1}[1-9]{4}]">
                    <div id="prn_error"></div>
                  </div>
                  <!--Branch-->
                  <div class="form-group col-md-6 col-sm-6 col-6">
                    <select  class="form-control" name="branch" id="branch" required>
                     <option disabled="" default selected="selected" style="color: grey;">Select Option</option>
                     <option head>IT</option>
                     <option>CE</option>
                     <option>MECH</option>
                     <option>EXTC</option>
                   </select>
                 </div>
               </div>
               <div class="form-row">
                <!--Email-->
                <div class="form-group col-md-6 col-sm-6 col-6" id="email_div">
                  <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@siesgst.ac.in" placeholder="Email">
                  <div id="email_error"></div>
                </div>
                <!--Mobile No.-->
                <div class="form-group col-md-6 col-sm-6 col-6" id="mob_div">
                  <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number">
                  <div id="mobile_error"></div>
                </div>
              </div>
              <!--password-->
              <div class="form-row">
               <div class="form-group col-md-6 col-sm-6 col-6" id="password_div">
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
              <!--confirm password-->
              <div class="form-group col-md-6 col-sm-6 col-6" id="pass_confirm_div">
               <input type="password" name="password_confirm" class="form-control" placeholder="Confirm Password">
               <div id="password_error"></div>
             </div>
           </div>
           <!--Gender-->
           <center>
            <div class="form-group form-check">
              <center>
                <label class="form-check-label col-md-3 col-sm-3 col-4">
                  <input class="form-check-input" type="radio" name="gender" value="Male" id="gender" required>Male</label>
                  <label class="form-check-label col-md-3 col-sm-3 col-4">
                    <input class="form-check-input" type="radio" name="gender" value="Female" id="gender" required>Female</label>
                    <label class="form-check-label col-md-3 col-sm-3 col-4">
                      <input class="form-check-input" type="radio" name="gender" value ="Other" id="gender" required>Other
                    </label>
                  </center>
                </div>
                <div>
                  <input type="submit" class="btn btn-primary text-light" name="register" value="Submit" class="btn">
                </div>
              </center>
            </div> 
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--form end-->


<!--demo begin-->
<div class="container" style="margin-top: 30px;" >
  <div class="row">
    <div class="col-sm-10" style="border-left-width:10px ;border-left-style: solid;border-left-color: #f5d76e;padding: 0px 0px 0px 25px;">
      <h2 class="text-light" style="font-weight: 750;"><span style="font-size: 30px;">DEMO</span><br>LECTURES</h2>
    </div>
    
    <p class=" text-light"style="margin-left: 15px; margin-top:10px;">Phasellus non dolor nibh. Nullam elementum tellus pretium feugiat.</p>
    <p class=" text-light"style="margin-left: 15px;">Cras dictum tellus dui, vitae sollicitudin ipsum tincidunt in. Sed tincidunt tristique enim sed sollcitudin.</p>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="card-transparent col-sm-10 col-md-6 col-lg-6" >
     <video width="100%" height="auto" controls>
      <source src="upload/lecture-2.mp4" type="video/mp4">
      </video> 
      <div class="card-body">
        <h4 class="card-title text-light">Machine Learning</h4>
        <p class="card-text text-light">Some example text.</p>
        <a href="#" class="text-light btn btn-primary">See Profile</a>
      </div>
    </div>

    <div class="card-transparent col-12 col-md-6 col-lg-6" >
     <video width="100%" height="auto" controls>
      <source src="upload/lecture-2.mp4" type="video/mp4">
      </video> 
      <div class="card-body">
        <h4 class="card-title text-light">Web Development</h4>
        <p class="card-text text-light">Some example text.</p>
        <a href="#" class="btn btn-primary text-light">See Profile</a>
      </div>
    </div>

    <div class="card-transparent col-sm-10 col-md-6 col-lg-6" >
      <video width="100%" height="auto" controls>
        <source src="upload/lecture-2.mp4" type="video/mp4">
        </video> 

        <div class="card-body">
          <h4 class="card-title text-light">Internet Of Things</h4>
          <p class="card-text text-light">Some example text.</p>
          <a href="#" class="btn btn-primary text-light ">See Profile</a>
        </div>
      </div>
      <div class="card-transparent col-sm-10 col-md-6 col-lg-6" >
       <video width="100%" height="auto" controls>
        <source src="upload/lecture-1-.mp4" type="video/mp4">
        </video> 

        <div class="card-body">
          <h4 class="card-title text-light">Python</h4>
          <p class="card-text text-light">Some example text.</p>
          <a href="#" class="btn btn-primary text-light">See Profile</a>
        </div>
      </div>
    </div>
  </div>

  <!--demo end-->

  <script>
   // SELECTING ALL TEXT ELEMENTS
   var fname = document.forms['myform']['fname'];
   var lname = document.forms['myform']['lname'];
   var prn = document.forms['myform']['prn'];
   var email = document.forms['myform']['email'];
   var mobile = document.forms['myform']['mobile'];
   var password = document.forms['myform']['password'];
   var password_confirm = document.forms['myform']['password_confirm'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var fname_error = document.getElementById('fname_error');
var lname_error = document.getElementById('lname_error');
var prn_error = document.getElementById('prn_error');
var email_error = document.getElementById('email_error');
var mobile_error = document.getElementById('mobile_error');
var password_error = document.getElementById('password_error');
// SETTING ALL EVENT LISTENERS
fname.addEventListener('blur', fnameVerify, true);
lname.addEventListener('blur', lnameVerify, true);
prn.addEventListener('blur', prnVerify, true)
email.addEventListener('blur', emailVerify, true);
mobile.addEventListener('blur', mobileVerify, true);
password.addEventListener('blur', passwordVerify, true);
// validation function
function Validate() {
  // validate fname
  if (fname.value == "") {
    fname.style.border = "1px solid red";
    document.getElementById('fname_div').style.color = "red";
    fname_error.textContent = "First Name is required";
    fname.focus();
    return false;
  }
  //if(!isNaN(fname.value)){
    //fname.style.border = "1px solid red";
    //document.getElementById('fname_div').style.color = "red";
    //fname_error.textContent = "Only characters is required";
    //fname.focus();
    //return false;
  //}

    // validate lname
    if (lname.value == "") {
      lname.style.border = "1px solid red";
      document.getElementById('lname_div').style.color = "red";
      lname_error.textContent = "Last Name is required";
      lname.focus();
      return false;
    }
    //if(!isNaN(lname.value)){
      //lname.style.border = "1px solid red";
      //document.getElementById('lname_div').style.color = "red";
      //lname_error.textContent = "Only characters is required";
      //lname.focus();
      //return false;
    //}
  // validate email
  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }

  // validate password
  if (password.value == "") {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.textContent = "Password is required";
    password.focus();
    return false;
  }
  // validate passward 
  if (password.value.length < 6) {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_error.textContent = "Password must be at least length 6";
    password.focus();
    return false;
  }
  //password checking
  
  // check if the two passwords match
  if (password.value != password_confirm.value) {
    password.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "The two passwords do not match";
    return false;
  }
}

// event handler functions
function fnameVerify() {
  if (fname.value != "") {
   fname.style.border = "1px solid #5e6e66";
   document.getElementById('fname_div').style.color = "#5e6e66";
   fname_error.innerHTML = "";
   return true;
 }
}
function lnameVerify() {
  if (lname.value != "") {
   lname.style.border = "1px solid #5e6e66";
   document.getElementById('lname_div').style.color = "#5e6e66";
   lname_error.innerHTML = "";
   return true;
 }
}
function emailVerify() {
  if (email.value != "") {
    email.style.border = "1px solid #5e6e66";
    document.getElementById('email_div').style.color = "#5e6e66";
    email_error.innerHTML = "";
    return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
    password.style.border = "1px solid #5e6e66";
    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
    document.getElementById('password_div').style.color = "#5e6e66";
    password_error.innerHTML = "";
    return true;
  }
  if (password.value === password_confirm.value) {
    password.style.border = "1px solid #5e6e66";
    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
    password_error.innerHTML = "";
    return true;
  }
}
</script>

<script >
  $("#fname").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z]{3,16}$') ) {
    } else {
      fname.style.border = "1px solid red";
      document.getElementById('fname_div').style.color = "red";
      fname_error.textContent = "Only Characters is required";
      fname.focus();
      return false;
    }
  });

  $("#lname").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z]{3,16}$') ) {
    } else {
      lname.style.border = "1px solid red";
      document.getElementById('lname_div').style.color = "red";
      lname_error.textContent = "Only Characters is required";
      lname.focus();
      return false;
    }
  });

/*  $('#myform').submit(function(e) {
    e.preventDefault();
    if(!$('#mobile').val().match('[0-9]{10}'))  {
      mobile.style.border = "1px solid red";
      document.getElementById('mobile_div').style.color = "red";
      mobile_error.textContent = "Only 10 digit number is required";
      mobile.focus();
      return false;
    }
  });


  $("#prn").on("blur", function() {
    if ( $(this).val().match('^[[1-9]{3}[A]{1}[1-9]{4}$') ) {
    } else {
      prn.style.border = "1px solid red";
      document.getElementById('prn_div').style.color = "red";
      prn_error.textContent = "Follow the pattern";
      prn.focus();
      return false;
    }
  });
  */
</script>

<?php
}else echo "<script>window.alert('SESSION NOT EXPIRED YET');window.document.location='./index.php'</script>";
?>
</body>
</html
<?php include ("footer.html");?>
<?php include ("tryheader.php"); 

?>
<!DOCTYPE html >
<html style="scroll-behavior: smooth;">
<head>
	    <meta charset="utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/cdcea4e792.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style> 
.slider {
	  background: red;
  width: 100px;
  height: 1000px ;

  -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
  transition: width 2s;
}

.slider:hover {
  width: 300px;
}
</style>
	<title></title>
</head>



<body>
	  	   
<?php
if(!empty($_SESSION["email"])) {
?>
      

<center>
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <div class="dropdown">
     <a href="#" class=" w3-bar-item w3-button dropdown-toggle"  data-toggle="dropdown">IT<span class="caret"></span></a>
     <ul class="dropdown-menu">
     <?php
$files = scandir('courses/IT');
for($i = 0; $i < count($files); $i++)
        if($files[$i] !='.' && $files[$i] !='..')
        {
          {echo "<li><a href='#' onclick=loadDoc('$files[$i]')>$files[$i]</a></li>";
            echo "<br>";
        }
}

?>
 </ul>
     
</div>
<div class="dropdown">
     <a href="#" class=" w3-bar-item w3-button dropdown-toggle" data-toggle="dropdown">CE<span class="caret"></span></a>
      <ul class="dropdown-menu">
     <?php
$files = scandir('courses/CE');
for($i = 0; $i < count($files); $i++)
        if($files[$i] !='.' && $files[$i] !='..')
        {
          {echo "<li><a href='#' onclick=loadDoc1('$files[$i]')>$files[$i]</a></li>";
            echo "<br>";
        }
}

?>
 </ul>
</div>
 <div class="dropdown">
     <a href="#" class=" w3-bar-item w3-button dropdown-toggle" data-toggle="dropdown">MECH<span class="caret"></span></a>
     <ul class="dropdown-menu">
     <?php
$files = scandir('courses/MECH');
for($i = 0; $i < count($files); $i++)
        if($files[$i] !='.' && $files[$i] !='..')
        {
          {echo "<li><a href='#' onclick=loadDoc2('$files[$i]')>$files[$i]</a></li>";
            echo "<br>";
        }
}

?>
 </ul>
</div>

 <div class="dropdown">
     <a href="#" class=" w3-bar-item w3-button dropdown-toggle" data-toggle="dropdown">EXTC<span class="caret"></span></a>
       <ul class="dropdown-menu">
     <?php
$files = scandir('courses/EXTC');
for($i = 0; $i < count($files); $i++)
        if($files[$i] !='.' && $files[$i] !='..')
        {
          {echo "<li><a href='#' onclick=loadDoc3('$files[$i]')>$files[$i]</a></li>";
            echo "<br>";
        }
}

?>
 </ul>
</div>

</div>
</center>

  

<div class="">
  <button class="w3-button  w3-xlarge" onclick="w3_open()">☰</button>
  </div>

<div id="demo">
  
  <div class="container" style="margin-top: 30px;">
  <div class="row">
    <div class="col-sm-10" style="border-left-width:10px ;border-left-style: solid;border-left-color: #f5d76e;padding: 0px 0px 0px 25px;">
      <h2 class="text-dark" style="font-weight: 750;"><span style="font-size: 30px;">DEMO</span><br>LECTURES</h2>
    </div>
    
    <p class=" text-secondary"style="margin-left: 15px; margin-top:10px;">Phasellus non dolor nibh. Nullam elementum tellus pretium feugiat.</p>
    <p class=" text-secondary"style="margin-left: 15px;">Cras dictum tellus dui, vitae sollicitudin ipsum tincidunt in. Sed tincidunt tristique enim sed sollcitudin.</p>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="card col-sm-10 col-md-6 col-lg-6" >
     <video width="100%" height="auto" controls>
      <source src="upload/lecture-2.mp4" type="video/mp4">
      </video> 
      <div class="card-body">
        <h4 class="card-title">Machine Learning</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>

    <div class="card col-12 col-md-6 col-lg-6" >
     <video width="100%" height="auto" controls>
      <source src="upload/lecture-2.mp4" type="video/mp4">
      </video> 
      <div class="card-body">
        <h4 class="card-title">Web Development</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>

    <div class="card col-sm-10 col-md-6 col-lg-6" >
      <video width="100%" height="auto" controls>
        <source src="upload/lecture-2.mp4" type="video/mp4">
        </video> 

        <div class="card-body">
          <h4 class="card-title">Internet Of Things</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
      <div class="card col-sm-10 col-md-6 col-lg-6" >
       <video width="100%" height="auto" controls>
        <source src="upload/lecture-1-.mp4" type="video/mp4">
        </video> 

        <div class="card-body">
          <h4 class="card-title">Python</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
    </div>
  </div>
</div>

   

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

function loadDoc(folder) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "video.php?folder="+folder, true);
  xhttp.send();
}

function loadDoc1(folder) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "videoCE.php?folder="+folder, true);
  xhttp.send();
}
function loadDoc2(folder) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "videoMECH.php?folder="+folder, true);
  xhttp.send();
}
function loadDoc3(folder) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "videoEXTC.php?folder="+folder, true);
  xhttp.send();
}
</script>

<?php
}else echo "<script>window.alert('SESSION EXPIRED');window.document.location='./registerpage.php'</script>";
?>

</body>

</html>
<?php include ("footer.html"); ?>
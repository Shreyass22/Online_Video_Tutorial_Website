  <?php include ("tryheader.php") ;
  ?>
  <!DOCTYPE html>
  <html>
  <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/cdcea4e792.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="style/style.css">
   <link rel="stylesheet" type="text/css" href="style/admin.css">

   <title>Admin Page</title>
 </head>

 <body>
  <?php
  if(!empty($_SESSION["email"])&&($_SESSION["email"]=="admin@siesgst.ac.in") ){ 

    ?>


    <!-- NAV BAR HERE -->

    <div id="adminB">
      <center>
        <table>
          <tr>
            <td>
              <button href="#" onclick="loadDoc()" id="css" style="font-size: 6vh;"><h5>Add Course</h5></button>
            </td>
            <td style="padding:  10px;">
              <button href="#" onclick="loadDoc1()" id="css"><h5>Delete Course</h5></button>
            </td>

            <td style="padding:  10px;" >
              <button onclick="loadDoc2()" id="css"><h5>Add Video</h5></button>
            </td>

            <td style="padding:  10px;">
              <button onclick="loadDoc3()" id="css"><h5>Delete Video</h5></button>
            </td>
          </tr>

        </table>
      </center>
    </div>
    <div id="DEMO1">
      <center>
        <h1 style="font-size: 4vw;"><i>Select The Above Options</i></h1>
      </center>
    </div>
    <div class="adminT">
      <center>
        <table id="tablecss">
          <button onclick="reload()" id="refresh">REFRESH</button><br><br>
          <tr><th >IT</th><th >CE</th><th >EXTC</th><th >MECH</th></tr>
          <tr>
            <td ><?php
            $files = scandir('courses/IT/');
            for($i = 0; $i < count($files); $i++)
              if($files[$i] !='.' && $files[$i] !='..')
              {
                {echo $files[$i];
                  echo "<br>";
                }
              }

              ?></td>
              <td  ><?php
              $files = scandir('courses/CE/');
              for($i = 0; $i < count($files); $i++)
                if($files[$i] !='.' && $files[$i] !='..')
                {
                  {echo $files[$i];
                    echo "<br>";
                  }
                }

                ?></td>
                <td ><?php
                $files = scandir('courses/EXTC/');
                for($i = 0; $i < count($files); $i++)
                  if($files[$i] !='.' && $files[$i] !='..')
                  {
                    {echo $files[$i];
                      echo "<br>";
                    }
                  }

                  ?></td>
                  <td ><?php
                  $files = scandir('courses/MECH/');
                  for($i = 0; $i < count($files); $i++)
                    if($files[$i] !='.' && $files[$i] !='..')
                    {
                      {echo $files[$i];
                        echo "<br>";
                      }
                    }

                    ?></td>
                  </tr>
                </table>
              </center>
            </div>
            <div class="adminT"><br><br>
              <center>


                <?php
               $server     = "fdb21.awardspace.net";
   $username   = "3095051_mydatabase";
   $password   = "krishna10";
   $database   = "3095051_mydatabase";
                $con = mysqli_connect($server, $username, $password, $database);

                if(!$con){
                  include "index.php";
                  echo "<script>alert('Please try again!..')</script>";
                }

                $sql = " select name,email,comment from comment";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                  echo "<table id='table1css'><tr><th>Name</th><th>Email</th><th>Comment</th></tr>";
    // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $zz=$row["email"];
                    echo "<tr><td>". $row["name"]."</td><td>". $row["email"]."</td><td>". $row["comment"] . "</td><td><a id='reply'  data-toggle='modal' data-target='#myModal11' data-myvalue='$zz' value='$zz' onclick='zzz1($zz)' name='$zz' >reply</a></td></tr>";
                  }
                  echo "</table>";
                } else {
                  echo "0 results";
                }

                $con->close();
                ?>

              </center>
            </div>
<!--
<div id="here">

<center>
   <button onclick="reload()">REFRESH</button><br>

<?php
$files = scandir('courses/IT/');
for($i = 0; $i < count($files); $i++)
        if($files[$i] !='.' && $files[$i] !='..')
        {
          {echo $files[$i];
            echo "<br>";
        }
}

?>
</center>
</div>
-->

<div class="modal" id="myModal11">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header " style="background-color: #243c58;">
        <h5 class="modal-title" style="color: white;">Reply</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="zzz11" style="background: #f5d76e;">
      <form action="send.php" method="POST">
      
        <h5 style="font-size:auto;">  <span id="modal-myvalue"></span></h5>
        <table>
        <tr><td><textarea type="text" name="message" placeholder="Type message" style="width: 75%" required></textarea></td></tr>
          <tr id="zzzz">
            <td>
              
                <button class="btn btn-danger" data-dismiss="modal" style="border-radius: 15px;">Back</button>
              </form>
            </td>
            <td style="padding-left: 10px;">
              <button class="btn btn-success" style="border-radius: 15px;">Send</button>
            </td>
          </tr>
        </table>  
      </div>
    </div>
  </div>
</div>









<script type="text/javascript">


  function reload(){
    location.reload(); 
  }

  function loadDoc() {
    document.getElementById('DEMO1').innerHTML = '<object type="text/html" style="width: 100%;" data="./dir.php"></object>';

  }

  function loadDoc1() {
    document.getElementById('DEMO1').innerHTML = '<object type="text/html" style="width: 100%;" data="./rmdir.php"></object>';

  }

  function loadDoc2() {
    document.getElementById('DEMO1').innerHTML = '<object type="text/html" style="width: 100%;" data="./video1.php"></object>';

  }
  function loadDoc3() {
    document.getElementById('DEMO1').innerHTML = '<object type="text/html" style="width: 100%;" data="./delvideo.php"></object>';

  }



  var ATTRIBUTES = ['myvalue'];

  $('[data-toggle="modal"]').on('click', function (e) {
  // convert target (e.g. the button) to jquery object
  var $target = $(e.target);
  // modal targeted by the button
  var modalSelector = $target.data('target');
  
  // iterate over each possible data-* attribute
  ATTRIBUTES.forEach(function (attributeName) {
    // retrieve the dom element corresponding to current attribute
    var $modalAttribute = $(modalSelector + ' #modal-' + attributeName);
    var dataValue = $target.data(attributeName);
    
    // if the attribute value is empty, $target.data() will return undefined.
    // In JS boolean expressions return operands and are not coerced into
    // booleans. That way is dataValue is undefined, the left part of the following
    // Boolean expression evaluate to false and the empty string will be returned
    $modalAttribute.text(dataValue || '');
  });
});
</script>

<?php
}else echo "<script>window.alert('SESSION EXPIRED');window.document.location='./index.php'</script>";
?>
<br><br><br>



</body>


<!-- FOOTER BAR HERE -->
</html>

<?php include ("footer.html") ?>
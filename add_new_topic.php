<?php

	$host    = "fdb21.awardspace.net";
   $username   = "3095051_mydatabase";
   $password   = "krishna10";
   $db_name   = "3095051_mydatabase";
$tbl_name="fquestions"; // Table name 

// Connect to server and select database.
$conn = new mysqli($host, $username, $password, $db_name);
//mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");

// get data that sent from form 
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=$conn->query($sql);

if($result){
	header("Location:main_forum.php");

}
else {
echo "ERROR";
}
$conn->close();
?>
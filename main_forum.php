<?php include "tryheader.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(0,255,149,1) 51%, rgba(9,94,121,1) 100%);">
<?php
 //include "tryheader.php";

$host    = "fdb21.awardspace.net";
   $username   = "3095051_mydatabase";
   $password   = "krishna10";
   $db_name   = "3095051_mydatabase"; 
$tbl_name="fquestions"; // Table name 

// Connect to server and select databse.
$conn = new mysqli($host, $username, $password, $db_name);

//mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result=$conn->query($sql);
?>
<div style="margin-top:10%;margin-bottom:10%;">
<center>
<table  width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC" >
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php

// Start looping table row
while($rows = $result->fetch_assoc())
{
	?>
<tr>
<td bgcolor="#FFFFFF" align="center"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF" ><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection 
}
$conn->close();
?>

<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="new_topic.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table>
</center>
</div>
</body>
</html>

<?php
include "footer.html";
?>
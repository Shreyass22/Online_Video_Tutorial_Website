<?php
include "tryheader.php";
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body  style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(0,255,149,1) 51%, rgba(9,94,121,1) 100%)";>
<div style="maring-top:15%; margin-bottom:10%;">
<center>
<table  border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form id="form1" name="form1" method="post" action="add_new_topic.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
</tr>
<tr>
<td width="14%" style="padding-bottom:15px;"><strong>Topic</strong></td>
<td width="2%">:</td>
<td width="84%" ><input name="topic" type="text" id="topic" size="25%" /></td>
</tr>
<tr>
<td valign="top" style="padding-bottom:15px;"><strong>Detail</strong></td>
<td valign="top">:</td>
<td><textarea name="detail" cols="25%" rows="3" id="detail"></textarea></td>
</tr>
<tr>
<td style="padding-bottom:15px;"><strong>Name</strong></td>
<td>:</td>
<td><input name="name" type="text" id="name" size="25%" /></td>
</tr>
<tr>
<td style="padding-bottom:15px;"><strong>Email</strong></td>
<td>:</td>
<td><input name="email" type="text" id="email" size="25%" /></td>
</tr>
<tr >
<td>&nbsp;</td>
<td>&nbsp;</td>
<td style="padding-bottom:15px;" ><input type="submit" name="Submit" value="Submit" /> 
<input type="reset" name="Submit2" value="Reset" /><a type="button" href="main_forum.php" style="margin-left:70px;">Back</a></td>
<td></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</center>
</div>
</body>
</html>
<?php
include "footer.html";
?>
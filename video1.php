<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>

	<form action="upload_video.php" method="post" enctype="multipart/form-data" style="font-size: 2vw;">
		<table>
			<tr>
					
				<td bgcolor = "lightgreen" style = "font-weight: bold"> 
					SELECT BRANCH: 
				</td> 
				
				<td> 
					<select  style = "width: 20vw; font-size: 1.5vw; " class="form-control" name="branch" id="branch" required>
     <option disabled="" default selected="selected" style="color: grey;">Select Option</option>
     <option head>IT</option>
    <option>CE</option>
    <option>MECH</option>
    <option>EXTC</option>
  </select>
    
				</td> 
			</tr> 
			<tr>
				<td bgcolor = "lightgreen" style = "font-weight: bold">
					SELECT COURSE: </td><td><input type = "text" style = "width: 20vw;"
					class = "form-control" name = "course" id = "course"placeholder="Eg: 'IT'" required> 
				</td></tr>
			<tr>
				<td bgcolor = "lightgreen" style = "font-weight: bold">
		video:</td>
		<td>
		<input type="file" name="file" required >
		</td></tr>
		<tr>
			<td></td>
			<td>
		<input type="submit" name="submit" value="submit" >
</td>
</tr>
	</form>
	</center>
</body>
</html>
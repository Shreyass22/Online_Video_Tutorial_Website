<!DOCTYPE html> 
<?php 
        error_reporting(0);
	function createDirectory() { 
		$branch = $_POST["branch"]; 
		$folder1 = $_POST["add"];
                $folder = strtoupper($folder1);
 		$lecture = $_POST["lecture"];
 		$file = ("courses//".$branch."//".$folder."//".$lecture.".mp4");
//Get a list of all of the file names in the folder.
 		

 
        //Use the unlink function to delete the file.
                if(unlink($file)){
                echo "<script type = 'text/javascript'>alert('LECTURE Deleted!');</script>"; 
                }
                else{
                echo "<script type = 'text/javascript'>alert('LECTURE Does Not Exists!');</script>"; 
                }
		
		
		//echo "<script type = 'text/javascript'>alert('Done!');</script>"; 
	}
?> 
<html> 
	<head> 
		<title> 
			Create directory with HTML button and PHP 
		</title> 
	</head> 
	
	<body> 
		<center>
	<?php 
		if (isset($_POST['submit']) && !empty($_POST['submit'])) {
		createDirectory();
		} 
	?> 
		<form method = "post" style="font-size: 2vw;"> 
			
			<table> 
				<tr>
					
				<td bgcolor = "lightgreen" style = "font-weight: bold"> 
					SELECT BRANCH: 
				</td> 
				
				<td> 
					<select style = "width: 20vw; font-size: 1.5vw; " class="form-control" name="branch" id="branch" required>
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
					SELECT COURSE
				</td>
				<td > 
					<input type = "text" style = "width: 20vw;" placeholder="Eg: 'python'" 
					class = "form-control" name = "add" id = "add" required> 
				</td> 
				</tr>
			<tr> 
				

				<td bgcolor = "lightgreen" style = "font-weight: bold"> 
					DELETE LECTURE
				</td> 
				
				<td > 
					<input type = "text"  style = "width: 20vw;" placeholder="Eg: lecture-1" 
					class = "form-control" name = "lecture" id = "lecture" required> 
				</td> 
				</tr>
				<tr>
					<td></td>

				<td > 
					<input type = "submit" name = "submit"
						value = "DELETE" /> 
				</td> 
			</tr> 
			</table> 
		</form>
	</center>
	</body> 
</html> 

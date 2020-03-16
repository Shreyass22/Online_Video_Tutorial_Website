<!DOCTYPE html> 
<?php 
        error_reporting(0);
	function createDirectory() { 
		//$add = $_POST["add"]; 
		$folder1 = $_POST["add"];
                $folder =  strtoupper($folder1);
 		$branch = $_POST["branch"];
//Get a list of all of the file names in the folder.
$files = glob("courses//".$branch."//".$folder . '/*');
 
//Loop through the file list.
foreach($files as $file){
    //Make sure that this is a file and not a directory.
    if(is_file($file)){
        //Use the unlink function to delete the file.
        unlink($file);
    }
}
                if(rmdir("courses//".$branch."//".$folder)){
                
                echo "<script type = 'text/javascript'>alert('Course Deleted,Please Refresh The Page!');</script>"; 
                }
                else{
		
		echo "<script type = 'text/javascript'>alert('Course Does Not Exists!');</script>"; 
	}
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
		<form method = "post"> 
			
			<table style="font-size: 2vw;">
			<tr>
					<td style = " border-style: none;"></td> 
				<td bgcolor = "lightgreen" style = "font-weight: bold"> 
					SELECT BRANCH: 
				</td> 
				
				<td> 
					<select    style="width: 20vw;font-size: 1vw;" class="form-control" name="branch" id="branch" required>
     <option disabled="" default selected="selected" style="color: grey;">Select Option</option>
     <option head>IT</option>
    <option>CE</option>
    <option>MECH</option>
    <option>EXTC</option>
  </select>
    
				</td> 
			</tr> 
			<tr> 
				<td style = " border-style: none;"></td> 
				<td bgcolor = "lightgreen" style = "font-weight: bold"> 
					DELETE COURSE
				</td> 
				
				<td > 
					<input type = "text" style="width: 20vw;" placeholder="Eg: 'IT'" 
					class = "form-control" name = "add" id = "add" required> 
				</td> 
				</tr>
				<tr>
				<td></td><td></td>
				<td > 
					<input   type = "submit" name = "submit"
						value = "DELETE " > 
				</td> 
			</tr> 
			</table> 
		</form>
	</center>
	</body> 
</html> 

<!DOCTYPE html> 
<?php 
        error_reporting(0);
	function createDirectory() { 
		$branch = $_POST["branch"];
		$add1 = $_POST["add"];
                $add=  strtoupper($add1);
                if( mkdir("courses//".$branch."//".$add)) {
                
                echo "<script type = 'text/javascript'>alert('Course Added, Please Refresh The Page!');</script>"; 
                       
		}
                else{
		
                        echo "<script type = 'text/javascript'>alert('Course Already Exists!');</script>"; 
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
		<form method = "post" style="font-size: 2vw;"> 
			
			<table> 
				<tr>
					<td style = " border-style: none;"></td> 
				<td bgcolor = "lightgreen" style = "font-weight: bold"> 
					SELECT BRANCH: 
				</td> 
				
				<td> 
					<select   style="width: 20vw;font-size: 1vw;" class="form-control" name="branch" id="branch" required>
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
					CREATE NEW COURSE
				</td> 
				
				<td > 
					<input type = "text" style="width: 20vw;" placeholder="Eg: 'IT'" 
					class = "form-control" name = "add" id = "add" required> 
				</td> 
				</tr>
				<tr>
					<td></td><td></td>
				<td > 
					<input type = "submit" name = "submit"
						value = "ADD" > 
				</td> 
			</tr> 
			</table> 
		</form>
	</center>
	</body> 
</html> 

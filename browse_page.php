<html>
	<head>
		<meta charset = "utf-8" />
		<link href="style.css" rel="stylesheet">
		<title>Home</title>
	</head>

	<?php include "head.php" ?><br/><br/><br/><br/><br/>
	<hr/>
	
	<body>
		<h1>FASHION STATEMENT - Browse</h1>
		<form action="connection.php" >
		
				<select type= "type" name = "type">
					<option value="TORSO">Tops</option>
					<option value="LOWER">Lower</option>
					<option value="HEAD">Head Wear</option>
					<option value="FOOTWEAR">Footwear</option>
					<option value="FULL">Outfits</option>
				</select>
					
				<tr>
					<td><input type="radio" name="rdoGender" value="M"/>Male    
					<input type="radio"name="rdoGender"value="F" /> Female</td>
					<input type = "submit" value = "Search">
				</tr>
				
						
			    <div style="width:720px;height:360px;line-height:3em;overflow:scroll;padding:5px;">
					
					
				</div>
		</form>
	</body>


</html>
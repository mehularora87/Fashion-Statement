<! DOCTYPE = Html>

<html>
	<head>
		<meta charset = "utf-8" />
		<title>Profile</title>
		<link href="style.css" rel="stylesheet">
		<style>											<!--using <style> tag differently from css to style form-->
		form { width: 400px; }
		label { float: left; width: 150px; }
		input[type=text] { float: left; width: 250px; }
		input[type=date] { float: left; width: 150px; }
		</style>
		
	</head>
	<?php include "head.php" ?><br/><br/><br/><br/><br/>
	<hr/>
	<body>
	<h1>Reset Username</h1>
	<form action = "poststatusprocess.php" method = "post">			<!--using post method to submit form-->

	<label for="oldusername" >Old Username: </label> 		
				<input required type = "text"  name = "oldusername" title = "Username"><br /><br />
	<label for="newusername" >New Username: </label> 		
				<input required type = "text"  name = "newusername" title = "Username"><br /><br />
	<label for="reusername" >Re-Enter Username: </label> 		
				<input required type = "text"  name = "reusername" title = "Username"><br /><br />		
	<input type = "Submit" value = "Update" name = "save" style = "width:100px; padding: 4px;">	
	<input type="button" value="Back" onClick="history.go(-1);return true;" style="width:100px; padding: 4px;" >
				</form>				
				
		
	</body>
</html>
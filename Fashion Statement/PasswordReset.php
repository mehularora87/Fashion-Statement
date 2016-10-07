<! DOCTYPE = Html>
<!--Password Reset Page-->
<html>
	<head>
		<meta charset = "utf-8" />
		<title>Profile</title>
		<link href="style.css" rel="stylesheet">
		<style>									<!--using <style> tag differently from css to style form-->
		form { width: 800px; }
		label { float: left; width: 150px; }
		input[type=text] { float: left; width: 350px; }
		input[type=date] { float: left; width: 150px; }
		</style>
		
	</head>
	<!--including the header file-->
	<?php include "head.php" ?><br/><br/><br/><br/><br/>
	<hr/>
	<body>
		<h1>Reset Password</h1>
		<form action = "poststatusprocess.php" method = "post">			<!--using post method to submit form-->

		<label for="oldpassword" >Old Password: </label> 		
		<input required type = "password"  name = "oldpassword" title = "Password"><br /><br />
		<label for="newpassword" >New Password: </label> 	
		<!--Restricting user input using REGEX-->	
		<input required type = "password"  name = "newpassword" pattern = "[a-zA-Z0-9\,\.\!\?\s]{1,}"  placeholder="alphanumeric , . ! ? allowed" title = "Password"><br /><br />
		<label for="newrepassword" >Re Enter Password: </label> 		
		<input required type = "password"  name = "newrepassword" pattern = "[a-zA-Z0-9\,\.\!\?\s]{1,}"  placeholder="alphanumeric , . ! ? allowed" title = "Password"><br /><br />
		<input type = "Submit" value = "Update" name = "save" style = "width:100px; padding: 4px;">
		<input Type="button" value="Back" onClick="history.go(-1);return true;" style="width:100px; padding: 4px;" >				
		
		</form>
	</body>
</html>

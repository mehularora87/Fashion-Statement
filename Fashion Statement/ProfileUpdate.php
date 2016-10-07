<! DOCTYPE = Html>
<!--Profile Update Page-->
<html>
	<head>
		<meta charset = "utf-8" />
		<title>Profile</title>
		<link href="style.css" rel="stylesheet">
		<style>							<!--using <style> tag differently from css to style form-->
		form { width: 800px; }
		label { float: left; width: 150px; }
		input[type=text] { float: left; width: 350px; }
		input[type=date] { float: left; width: 150px; }
		</style>	
	</head>
	<!--including header file-->
	<?php include "head.php" ?><br/><br/><br/><br/><br/>
	<hr/>
	<body>
	
	<h1>Profile</h1>
	<form action = "" method = "post">			<!--using post method to submit form-->
		<table id="update">
			<tr>
				<td><label for="username" >Username: </label><td/>	
				<td><input required type = "Text" style="width: 200px;" name = "username"  placeholder="Enter Username here"  title = "Username with which you will login"><td/>
				<td><a href="UsernameReset.php" > Reset Username <a/><td/>
			<tr/>
			<tr>
				<td><label for="password" >Password: </label> <td/>
				<td><input required type = "password"  style="width: 200px;" name = "password" title = "Password"><td/>
				<!--link to the resetPassword function-->
				<td><a href="PasswordReset.php"> Reset Password <a/><td/>
			<tr/>
			<tr>
				<td><label for="rdoGender" >Gender: </label><td/>
				<td><input type="radio" name="rdoGender" value="male"/>Male    
				<input type="radio"name="rdoGender"value="female" />Female<td/>
			<tr/>
			<tr>
				<td><label for="age" >Age: </label>	<td/>
				<td><input type="number" max="100" min="0" name="age"/><td/>
			<tr/>
			<tr>
				<td><label for="email" >Email: </label><td/>
				<td><input type="email" name="email" /><td/>
			<tr/>
		<table/>		
			<input type = "Submit" value = "Update" name = "save" style = "width:100px; padding: 4px;"/>						<!--Submit Button-->
			<input type = "Reset" value = "Reset Form" style = " margin:20px; width:100px; padding: 4px;"/>
	</form>	
	</body>
</html>

<html>
	<head>
		<meta charset = "utf-8" />
		<link href="style.css" rel="stylesheet">
		<title>Sign Up</title>
	</head>
	<div id="title">
	<h1><img src="images/T.PNG" alt="Level 1 Header" /></h1> 	<!--Using image as Heading-->
	</div>
	<?php include "head.php" ?><br/><br/><br/><br/><br/>
	<br/><br/><br/>
	<body>
		<h1>Sign Up</h1>
		<!--<form action = "" method = "post">-->
		<form onsubmit="return validate();" method="post" action="connection.php" >
		<fieldset class = "fldSignup">
			<table id="sign_up">
						<tr>
							<td>Username</td>
							<td><input type="text" id="txtUsername" name="txtUsername" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" id="pwdPass1" name="pwdPass1" /></td>
						</tr>
						<tr>
							<td>Re-password</td>
							<td><input type="password" id="pwdPass2" name="pwdPass2" /></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><input type="radio" name="rdoGender" value="male"/>Male    
							<input type="radio"name="rdoGender"value="female" /> Female</td>
						</tr>
						<tr>
							<td>Age</td>
							<td><input type="number" max="100" min="0"/ name="age"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="email" name="email" /></td>
						</tr>
			</table>
			<br />
			<input type="reset" name="reset" value="Reset" />
			<input type="submit"name="subSign"value="Sign Up" />
			</fieldset>
		</form>
	</body>
</html>
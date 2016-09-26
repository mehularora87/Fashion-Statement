<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8" />
		<link href="style.css" rel="stylesheet">
		<title>Welcome Page</title>
	</head>
	<?php include "head.php" ?><br/><br/><br/><br/><br/>
	<hr/>
	
	<body>
		
		
			<div id = "login">
			<h1>Login</h1>
			<form <form action = "poststatusprocess.php" method = "post">
			
			<input type = "text" placeholder = "Username" >
			<input type = "password" placeholder = "Password" ><br/><br/>
			
			<button type = "submit" id = "login_button">Login</button>

			<button onclick="location.href='ProfileUpdate.php'">Back to Home</button>
			</form>
			</div>
			
		
	</body>
</html>
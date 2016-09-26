
<?php
	$user = $_POST["txtUsername"];
	$password = md5($_POST["pwdPass1"]);
	$password2 = md5($_POST["pwdPass2"]);
	$age = $_POST["age"];
	$email = $_POST["email"];
	$gender = $_POST["rdoGender"];
	
	//need database info
	$connect = mysqli_connect("localhost", "root", "","fashion") or die ("Unable to connect to MySQL database");
	$connectdb = mysqli_select_db($connect, "fashion");
		$queryAdd = "INSERT INTO accounts(username, password, email, gender, age)
						VALUES('$user', '$password', '$email', '$gender', '$age')";
		mysqli_query($connect,$queryAdd);
		
		mysqli_close($connect);	
		
	
	
?>
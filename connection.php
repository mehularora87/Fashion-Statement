<?php

	$user = trim($_POST['txtUsername']);
	$password = trim(md5($_POST['pwdPass1']));
	$password2 = trim(md5($_POST['pwdPass2']));
	$age = trim($_POST['txtEmail']);
	$email = trim($_POST['txtEmail']);
	$gender = trim($_POST['rdoGender']);
	
	//need database info
	$connect = mysql_connect("localhost", "root", "") or die ("Unable to connect to MySQL database");
	$connectdb = mysql_select_db("root", $connect);


		$queryAdd = "INSERT INTO accounts(username, password, email, gender, age)
						VALUES('$user', '$password', '$email', '$gender', '$age')";
		$resultAdd = mysql_query($queryAdd);
	
		mysql_close($connect);	

		header("location:./sign_up.php");
	
	
?>

<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "fashion_statement_database";

$connection = mysqli_connect("$db_host", "$db_username", "$db_password") or die ("Unable to connect to MySQL database");
mysqli_query($connection, "Create Temporary Table");

echo"Connection successful"
?>
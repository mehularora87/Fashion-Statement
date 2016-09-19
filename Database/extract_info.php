<?php

include_once "mysql_connect.php";

$sql = mysqli_query("SELECT * FROM clothing WHERE id='1'");
while($row = mysqli_fetch_array($sql)){
$id = $row["id"];
$name = $row["name"];
$ = $row["id"];
}
?>
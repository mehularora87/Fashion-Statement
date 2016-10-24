<?

$type = $_POST['type'];
$gender = $_POST["rdoGender"];

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "fashion_statement_database";

$connection = mysqli_connect("$db_host", "$db_username", "$db_password") or die ("Unable to connect to MySQL database");
@mysqli_select_db($fashion_statement_database) or die ("Unable to connect to FASHION STATEMENT database");

$query = "SELECT * FROM 'gender' WHERE 'gender' = $gender";


?>
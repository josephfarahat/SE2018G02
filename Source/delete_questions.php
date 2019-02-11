<?php
// CONNECT TO THE DATABASE
$DB_HOST = "localhost";
$DB_NAME = "poll";
$DB_USER = "root";
$DB_PASS = "";

$dbc = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME)
or die('Error connecting to MySQL server');

if(isset($_POST['delete'])){
$query = "TRUNCATE TABLE `question` "; // replace yourTable with one to delete
$result = mysqli_query($dbc,$query)
or die('Error deleting table.');
}
else {
echo "Sorry";
}
?>
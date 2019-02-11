<html>
<body>
	<title>
</title>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poll";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$questions = $_GET['questions'];


$sql = "INSERT INTO inquiry(question) VALUES ('$questions')";
$res =$conn->query($sql);

echo "thank you your question inserted successifuly :)'";

?> 
</body>
</html>

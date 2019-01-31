<html>
<body>
	<title>
</title>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "questions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$question = $_GET['questions'];
$answer1  = $_GET['answers1'];
$answer2  = $_GET['answers2'];
$answer3  = $_GET['answers3'];
$answer4  = $_GET['answers4'];
$answer5  = $_GET['answers5'];
$answer6  = $_GET['answers6'];

$sql = "INSERT INTO question(question ,A ,B ,C ,D ,E ,F) VALUES ('$question', '$answer1', '$answer2','$answer3','$answer4','$answer5','$answer6')";
$res =$conn->query($sql);

echo "thank you your question inserted successifuly :)'";

?> 
</body>
</html>

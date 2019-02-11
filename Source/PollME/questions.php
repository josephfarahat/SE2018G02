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
$answer1  = $_GET['answers1'];
$answer2  = $_GET['answers2'];
$answer3  = $_GET['answers3'];
$answer4  = $_GET['answers4'];
$answer5  = $_GET['answers5'];
$answer6  = $_GET['answers6'];

$sql = "INSERT INTO question(questions ,answer1 ,answer2 ,answer3 ,answer4 ,answer5 ,answer6) VALUES ('$questions', '$answer1', '$answer2','$answer3','$answer4','$answer5','$answer6')";
$res =$conn->query($sql);

echo "thank you your question inserted successifuly :)'";

?> 

<br>
<a href='logged.php'>want to go home</a> <br>
<a href='Admin.html'>want another poll/question</a>
</body>
</html>
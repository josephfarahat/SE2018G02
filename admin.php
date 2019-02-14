<!DOCTYPE html>
<html>
<head>
	<title>feedback result</title>
</head>
<body>
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


//select from db likes , dislikes 

$sql = "SELECT likee, dislike FROM mrmr";
$result2 = $conn->query($sql);

if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
        $like = $row["likee"];
        $dislike = $row["dislike"];
    }
} 
echo "the number of likes is " .$like."<br>";
echo "the number of dislikes is ". $dislike."<br>";
?>
</body>
</html>

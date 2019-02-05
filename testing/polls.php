//code is linked to table created in myphpadmin 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poll";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID, questions,answer1,answer2,answer3,answer4,answer5,answer6 FROM yomna";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["ID"]. " - Name: ". $row["questions"].  "answer 1".$row["answer1"]. "answer 2".$row["answer2"]. "answer 3".$row["answer3"]. "answer 4".$row["answer4"]. "answer 5".$row["answer5"]. "answer 6".$row["answer6"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
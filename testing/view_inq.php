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
$questions=$_GET['question'];
$sql = "INSERT INTO inquiry(question) VALUES ('$questions')";
$res =$conn->query($sql);
$sql = "SELECT ID, question FROM inquiry";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["ID"]. " - Name: ". $row["question"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
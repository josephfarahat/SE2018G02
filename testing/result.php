<?php
$like=0;
$dislike=0;
$result = $_GET['radio'];

$servername = "localhost";
$username = "root";
$password = "";

$dbname = "new";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//select from db likes , dislikes 

$sql = "SELECT likee, dislike FROM first";
$result2 = $conn->query($sql);

if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
        $like = $row["likee"];
        $dislike = $row["dislike"];
    }
} 

if($result == "like")
{
	$like++;
}
else{
	
	$dislike++;
}
 
//echo "the like" . $like."<br>";
//echo "the dislike" . $dislike."<br>";
$sql = "UPDATE first
SET likee = '$like', dislike ='$dislike'";
$result3 = $conn->query($sql);
echo "<h1>thanks for your feedback</h1><br>want to go home <a href='http://team2pollme.herokuapp.com/testing/mnofy.html?fbclid=IwAR0wySHcws--vihRQ0_897A9PZptHipcogSfhIptnK6PgDhF-9D401LKUik'>home</a>";
?>
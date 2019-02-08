<?php
$r1=0;
$r2=0;
$r3=0;
$r4=0;
$r5=0;
$r6=0;
$no=0;
$result = $_GET['radio'];

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

$sql = "SELECT r1,r2,r3,r4,r5,r6,no FROM yomna";
$result2 = $conn->query($sql);

if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
        $r1=$row["r1"];
        $r2=$row["r2"];
        $r3=$row["r3"];
	    $r4=$row["r4"];
	    $r5=$row["r5"];
	    $r6=$row["r6"];
	    $no=$row["no"];
    }
} 

if($result == "r1")
{
	$r1++;
}
if($result == "r2")
{
	$r2++;
}
if($result == "r3")
{
	$r3++;
}
if($result == "r4")
{
	$r4++;
}
if($result == "r5")
{
	$r5++;
}
if($result == "r6")
{
	$r6++;
}
 
echo "no of people answered no 1" . $r1."<br>";
echo "no of people answered no 2" . $r2."<br>";
echo "no of people answered no 3" . $r3."<br>";
echo "no of people answered no 4" . $r4."<br>";
echo "no of people answered no 5" . $r5."<br>";
echo "no of people answered no 6" . $r6."<br>";
$sql = "UPDATE yomna
SET r1 = '$r1', r2 = '$r2', r3 = '$r3', r4 = '$r4', r5 = '$r5', r6 = '$r6'";
$result3 = $conn->query($sql);
/*echo "<h1>thanks for your feedback</h1><br>want to go home <a href='http://team2pollme.herokuapp.com/testing/mnofy.html?fbclid=IwAR0wySHcws--vihRQ0_897A9PZptHipcogSfhIptnK6PgDhF-9D401LKUik'>home</a>";*/
?>
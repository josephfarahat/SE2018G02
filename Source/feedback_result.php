<?php
$like=0;
$dislike=0;
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

$sql = "SELECT likee, dislike FROM feedback";
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
$sql = "UPDATE feedback
SET likee = '$like', dislike ='$dislike'";
$result3 = $conn->query($sql);
echo '
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>
          Feedback Submission
    
    	</title>
    	<link rel="stylesheet"
    		       type = "text/css"
    		       href="bootstrap.css"

    		   />
			   <style>
			   .fnt {
				     position: absolute;
                     top: 220px;
                     left: 130px;
                     font-size: 65px;
			   }
			   </style>
           <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
           <link rel="stylesheet"
               type = "text/css"
               href="index.css"
               
           /><ul class="topnav">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="answer_question.php"> Take Poll</a></li>
  <li><a href="feedback2.html">Give feedback</a></li>
  
  <li><a href="inquiry.html">Inquiry</a></li>
  <li><a href="Attachmentdownload.php">Download files</a></li>

  <li class="right"><a href="login.php">Are you Speaker?</a></li>
   
  </ul>
  <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<p class="bottomleft"> Copyright 2019, Software Engineering Course, POLL ME. </p>
<p class="fnt"> Thank you for your feedback!</p>';
?>
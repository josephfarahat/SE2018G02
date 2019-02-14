<?php
include ('security.php');
?>
<!DOCTYPE html>

<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>
          View Feedback
    
    	</title>
    	<link rel="stylesheet"
    		       type = "text/css"
    		       href="bootstrap.css"

    		   />
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
               
           />
           
	</head> 
	<body>
<ul class="topnav">
  <li><a class="active" href="logged.php">Home</a></li>
  <li><a href="Admin.php">Create Poll</a></li>
  <li><a href="view.php">View Answers</a></li>
  <li><a href="view_feedback.php">View Feedback</a></li>
  <li><a href="view_inq.php">View Inquiry</a></li>
   <li><a href="Attachmentupload.php">Upload files</a></li>
  <li class="right"><a href="logout.php">Logout </a></li>
  </ul>
   
<p class="bottomleft"> Copyright 2019, Software Engineering Course, POLL ME. </p>




<?php
$servername = "sql202.epizy.com";
$username = "epiz_23357401";
$password = "jpvgo0IE";
$dbname = "epiz_23357401_Poll";


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
echo "<h2 style=margin-left:10px; > The number of likes is " .$like."</h2>";
echo "<h2 style=margin-left:10px;> The number of dislikes is ". $dislike."</h2>";
?>
<br><br>
<h4 style=margin-left:10px;>If you want to reset the numbers to zero please click on clear</h4>
<form method="post" action="delete.php">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" id='delete' class="button button1" name="delete" value='clear'></input>
</form>
</body>
</html>

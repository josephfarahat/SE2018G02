<?php
// CONNECT TO THE DATABASE
$DB_HOST = "localhost";
$DB_NAME = "poll";
$DB_USER = "root";
$DB_PASS = "";

$dbc = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME)
or die('Error connecting to MySQL server');

if(isset($_POST['delete'])){
$query = "TRUNCATE TABLE `instantanswers` "; // replace yourTable with one to delete
$result = mysqli_query($dbc,$query)
or die('Error deleting table.');
}
else {
echo "Sorry";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>
          Reset Inquiry
    
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
  <li class="right"><a href="logout.php">logout </a></li>
  </ul>
   <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<p class="bottomleft"> Copyright 2019, Software Engineering Course, POLL ME. </p>
<p class="topleft"> Poll Me</p>
<p class="paragraph">You have cleared the inquiries sent to you by your audience</p>
      
  

	</body>
</html>
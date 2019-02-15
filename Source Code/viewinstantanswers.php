<?php  include ('security.php'); ?>


<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>
          View Inquiry
    
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
    <li><a href="viewinstantanswers.php">Quick Answers</a></li>
	  <li><a href="InstantQ.php">Quick Question</a></li>
   <li><a href="Attachmentupload.php">Upload files</a></li>
  <li class="right"><a href="logout.php">Logout </a></li>
  </ul>
   



      
  <br><br>

	</body>
</html>



<?php
$servername = "sql202.epizy.com";
$username = "epiz_23357401";
$password = "jpvgo0IE";
$dbname = "epiz_23357401_Poll";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, Answer FROM instantanswers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	 echo"<h1> The answers to your quick question are:</h1>" ;
    while($row = $result->fetch_assoc()) {
		
          
		  echo "<h4>" .$row["id"]. "-". $row["Answer"]."</h4>" ;
    }
} else {
    echo "<h3>&nbsp;There is no answers saved</h3>";
}

$conn->close();
?>

<html> <body>
<br>
<h4>&nbsp;&nbspIf you wish to clear the answers of the audience to your quick question, please click on the clear button</h4>
<form method="post" action="deleteinsta.php">
<input type="submit" id='delete' class="button button1" style="margin-left:50px;" name="delete" value='clear'></input>
</body>
</html>
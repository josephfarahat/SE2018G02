<?php
// CONNECT TO THE DATABASE
$DB_HOST = "sql202.epizy.com";
$DB_NAME = "epiz_23357401_Poll";
$DB_USER = "epiz_23357401";
$DB_PASS = "jpvgo0IE";


$dbc = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME)
or die('Error connecting to MySQL server');

if(isset($_POST['delete'])){
$query = "TRUNCATE TABLE `inquiry` "; // replace yourTable with one to delete
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
      <meta name="viewport" content="width=device-width, initial-scale=1">
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


    	<title>
          Delete Inquiry
    
    	</title>
    	<link rel="stylesheet"
    		       type = "text/css"
    		       href="bootstrap.css"

    		   />
           <!-- Latest compiled and minified CSS -->
<style>
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  line-height: 60px; /* Vertically center the text there */
  background-color: #f5f5f5;
}


/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */

body > .container {
  padding: 60px 15px 0;
}

.footer > .container {
  padding-right: 15px;
  padding-left: 15px;
}

code {
  font-size: 80%;
}




.topleft {
  top: 100px;
  left: 130px;
  font-size: 110px;
}
.paragraph{
  top: 230px;
  left: 135px;
  font-size: 20px;
  font-weight: 10;
}




		   .para{
  top: 270px;
  left: 135px;
  font-size: 20px;
  font-weight: 10;
}
		   .topp {
	
  top: 150px;
  left: 130px;
  font-size: 90px;
}




</style>
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


<p class="para">You have cleared the inquiries sent to you by your audience.<br> You can still  receive more inquiries and questions from your audience in the view inquiry page.</p>
      
  

	</body>
</html>
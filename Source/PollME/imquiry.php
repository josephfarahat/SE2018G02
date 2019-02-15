<html>
<body>
	<title>
</title>
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

$questions = $_GET['questions'];


$sql = "INSERT INTO inquiry(question) VALUES ('$questions')";
$res =$conn->query($sql);

echo '
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
          Poll me 
    
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




</style><ul class="topnav">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="answer_question.php"> Take Poll</a></li>
  <li><a href="feedback2.html">Give feedback</a></li>
  
  <li><a href="inquiry.html">Inquiry</a></li>
  <li><a href="Attachmentdownload.php">Download files</a></li>

  <li class="right"><a href="login.php">Are you Speaker?</a></li>
   
  </ul>

<p class="para">Your question was sent to the speaker. </p>'

?> 
</body>
</html>

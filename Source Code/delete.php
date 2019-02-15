<?php  include ('security.php'); ?>


<?php
$link = mysqli_connect("sql202.epizy.com", "epiz_23357401", "jpvgo0IE", "epiz_23357401_Poll"); 
  
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error()); 
} 
  
$sql = "UPDATE feedback SET likee='0' "; 
if(mysqli_query($link, $sql)){ 
    echo ""; 
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link); 
?> 
<?php
$link = mysqli_connect("sql202.epizy.com", "epiz_23357401", "jpvgo0IE", "epiz_23357401_Poll"); 
  
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error()); 
} 
  
$sql = "UPDATE feedback SET dislike='0' "; 
if(mysqli_query($link, $sql)){ 
    echo ""; 
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link); 
?> 


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



<p class="para">You have reset the numbers of likes and dislikes to zero.<br> Your feedback counter is ready for a new part that your audience will give you feedback on it.</p>
      
  

	</body>
</html>
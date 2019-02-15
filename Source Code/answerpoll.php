<?php
$a=0;
$b=0;
$c=0;
$d=0;
$e=0;
$f=0;
$no=0;
$servername = "sql202.epizy.com";
$username = "epiz_23357401";
$password = "jpvgo0IE";
$dbname = "epiz_23357401_Poll";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT COUNT(ID) As count FROM question";
$result2 = $conn->query($sql);
if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
        $id=$row["count"];
    }
} 
$mystring = $_SERVER['REQUEST_URI'];
$findme = '?';
$findme2 = '=';
$pos = strpos($mystring, $findme);
$arr = array();
//echo substr($mystring,$pos+1);
$string=substr($mystring,$pos+1);
$x = 7;
$y = 0;
$hamada=$_GET['amir'];
for ($i=0;$i<$id;$i++)
{
    $arr[$y] =  substr($string,$x,2);
    $x = $x +10;
    $s = $y+1;
    $sql = "SELECT r1,r2,r3,r4,r5,r6,no FROM question WHERE ID =".$s;
$result2 = $conn->query($sql);
if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
        $a=$row["r1"];
        $b=$row["r2"];
        $c=$row["r3"];
        $d=$row["r4"];
        $e=$row["r5"];
        $f=$row["r6"];
        $no=$row["no"];
    }
} 
if($arr[$y]=='a1')
{
    $a++;
}
if($arr[$y]=='a2')
{
    $b++;
}if($arr[$y]=='a3')
{
    $c++;
}if($arr[$y]=='a4')
{
    $d++;
}if($arr[$y]=='a5')
{
    $e++;
}if($arr[$y]=='a6')
{
    $f++;
}if($hamada=='submit')
{
    $no++;
}
$sql = "UPDATE question
SET r1 = '$a', r2 = '$b', r3 = '$c', r4 = '$d', r5 = '$e', r6 = '$f',no='$no' WHERE id=".$s;
$result3 = $conn->query($sql);
$y++;
}


echo '
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
           
	</head><ul class="topnav">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="answer_question.php"> Take Poll</a></li>
  <li><a href="feedback2.html">Give feedback</a></li>
  <li><a href="inquiry.html">Inquiry</a></li>
  <li><a href="instantanswr.php">Text Answer</a></li>
  <li><a href="Attachmentdownload.php">Download files</a></li>
   <li><a href="About.html">About</a></li>
  <li class="right"><a href="login.php">Are you Speaker?</a></li>
   
  </ul>


<p class="para"> Thank you for your answer. It will increase the number of times each answer was submitted in this session.<br></p>'
?>
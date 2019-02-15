<?php
session_start();
if(isset($_SESSION['login']) )
if($_SESSION['login'] === 1)
	header('Location: logged.php');
$user = "user";
$pass = "pass";
if(!empty($_POST["user"]) && !empty($_POST["pass"]) )
  {
  $valid = ( $_POST["user"] == $user) && ($_POST["pass"] == $pass);
  if($valid)
    {
    echo "login successful";
    $_SESSION['login'] = 1;
	header('Location: logged.php');
	
    }
  else
    {
    echo "user and password combination is invalid";
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>
          LOGIN
    
    	</title>
           <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
           <link rel="stylesheet"
               type = "text/css"
               href="index.css"
               
           />
           
	</head>
	<ul class="topnav">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="answer_question.php"> Take Poll</a></li>
  <li><a href="feedback2.html">Give feedback</a></li>
  <li><a href="inquiry.html">Inquiry</a></li>
  <li><a href="instantanswr.php">Text Answer</a></li>
  <li><a href="Attachmentdownload.php">Download files</a></li>
   <li><a href="About.html">About</a></li>
  <li class="right"><a href="login.php">Are you Speaker?</a></li>
   
  </ul>
	<body class="loginbody">
    <form class="login" method="post">
    <p  style="font-size:15pt">User name:</p><br>
    <input type="text" size="40"  style="height : 35px;"  name="user">
    <br> <br>
   <p  style="font-size:15pt">password:</p><br>
   <input type="password"  size="40"  style="height : 35px;" name="pass">
   <br><br><br>
   <input class="button button1" type="submit" value="Submit">
  </form>
  

	</body>
</html>
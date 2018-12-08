<?php
session_start();
if(isset( $_SESSION['login'] ) && $_SESSION['login'] != 1)
	header('Location: login.php');
if(isset($_GET['logout']) && !empty($_GET['logout'] ) )
{
	session_destroy();
	header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PollMe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">PollMe</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
	      <li class="active"><a href="#">Insert Poll</a></li>
	  <li class="active"><a href="#">Settings</a></li>
	  <li class="active"><a href="#">View Answers</a></li>
	  <li class="active"><a href="#">My Feedback</a></li>
      <li><a href="?logout=true">Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <div class="header">
  <img src="logo.jpg" alt="logo" />
  <h2><dt><br>HELLO!</br>Welcome to PollMe...</dt></h2>
</div>
  <h2><dt>you can ask your questions and receive answers from others instantly!</dt></h2>
  <h2><dt>Don't hesitate to join our community ... We care about your opinion.</dt></h2>
</div>

</body>
</html>

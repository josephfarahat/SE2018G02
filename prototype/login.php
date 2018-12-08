<?php
session_start();

if(isset($_SESSION['login']) )
if($_SESSION['login'] === 1)
	header('Location: index.php');

if(isset($_POST['user']) && isset($_POST['pass'] ))
if($_POST['user'] === 'admin' && $_POST['pass'] === 'admin' )
{
	$_SESSION['login'] = 1;
	header('Location: index.php');
	
}
else 
{
	
	echo '<script language="javascript">';
echo 'alert("Please Enter Correct User and pass")';
echo '</script>';
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
<div class="container">
  <h2 style="color:LightBlue;">Login Page</h2>
  <form method="post">
    <div class="form-group">
      <label style="color:LightGreen;" for="usr">User Name:</label>
      <input   type="text" class="form-control" name="user" id="usr">
    </div>
    <div class="form-group">
      <label style="color:LightGreen;" for="pwd">Password:</label>
      <input  type="password" class="form-control" name="pass" id="pwd">
    </div>
	<div class="form-group">
      
      <input type="submit" class="form-control">
    </div>
  </form>
</div>
	</nav>
</body>
</html>

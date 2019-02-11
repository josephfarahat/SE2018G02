<?php
session_start();
if(isset($_SESSION['login']) )
if($_SESSION['login'] === 1)
	header('Location: index.php');
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
    	<link rel="stylesheet"
    		       type = "text/css"
    		       href="index.css"

    		   />
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
	<body class="loginbody">
    <form class="login" method="post">
    User name:<br>
    <input type="text" name="user">
    <br>
   password:<br>
   <input type="password" name="pass">
   <br><br>
   <input class="button button1" type="submit" value="Submit">
  </form>
  

	</body>
</html>
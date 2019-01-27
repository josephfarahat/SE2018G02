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
	header('Location: index.php');
	
    }
  else
    {
    echo "user and password combination is invalid";
    }
  }
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Login Page
      </title>
    </head>
  <body>
    <form method="post">
      <input name="user" type="text"/>
      <input name="pass" type="password"/>
      <input type="submit"/>
      </form>
    </body>
  </html>

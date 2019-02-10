<html>
<body>
	<title>
</title>
<?php 
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "poll";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$questions = $_GET['questions'];
$answer1  = $_GET['answers1'];
$answer2  = $_GET['answers2'];
$answer3  = $_GET['answers3'];
$answer4  = $_GET['answers4'];
$answer5  = $_GET['answers5'];
$answer6  = $_GET['answers6'];

$sql = "INSERT INTO yomna(questions ,answer1 ,answer2 ,answer3 ,answer4 ,answer5 ,answer6) VALUES ('$questions', '$answer1', '$answer2','$answer3','$answer4','$answer5','$answer6')";
$res =$conn->query($sql);

//echo "thank you your question inserted successifuly :)'";

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Thank You</title>
	<style >
		body {
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
    font-size: 1rem;
    line-height: 1.5;
    color: #373a3c;
    background-color: #fff;
    height: 100%;
    margin: 0;
}
.text-xs-center {
    text-align: center!important;
}
.display-3 {
    font-size: 4.5rem;
    font-weight: 300;
        margin-top: 0;
}
.lead {
    font-size: 1.25rem;
    font-weight: 300;
}
.btn-group-sm>.btn, .btn-sm {
    padding: .25rem .5rem;
    font-size: .875rem;
    border-radius: .2rem;
}
.btn-primary {
    color: #fff;
    background-color: #0275d8;
    border-color: #0275d8;
}
.btn {
    display: inline-block;
    font-weight: 400;
    line-height: 1.25;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .5rem 1rem;
    font-size: 1rem;
    border-radius: .25rem;
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
}a{
	text-decoration: none !important;
}
.btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover, .open>.btn-primary.dropdown-toggle.focus, .open>.btn-primary.dropdown-toggle:focus, .open>.btn-primary.dropdown-toggle:hover {
    color: #fff;
    background-color: #014682;
    border-color: #01315a;
}
.btn-primary.active, .btn-primary:active, .open>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #025aa5;
    border-color: #01549b;
    background-image: none;
}
.jumbotron {
    -webkit-box-pack: center!important;
    -ms-flex-pack: center!important;
    justify-content: center!important;
    display: -webkit-box!important;
    display: -ms-flexbox!important;
    display: flex!important;
        -webkit-box-align: center!important;
    -ms-flex-align: center!important;
    align-items: center!important;
        -webkit-box-orient: vertical!important;
    -webkit-box-direction: normal!important;
    -ms-flex-direction: column!important;
    flex-direction: column!important;
    height: 100%;
}
html {
    height: 100%;
}
	</style>
</head>
<body>
<div class="jumbotron text-xs-center">
  <h1 class="display-3">Thank You!</h1>

 
 
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="mnofy.html" role="button">Continue to homepage</a>
     <a class="btn btn-primary btn-sm" href="Admin.html" role="button">Another Question !</a>
  </p>
</div>
</body>
</html>
</body>
</html>

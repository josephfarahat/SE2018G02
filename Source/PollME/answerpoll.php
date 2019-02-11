<?php
$a=0;
$b=0;
$c=0;
$d=0;
$e=0;
$f=0;
$no=0;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poll";
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
    <a class="btn btn-primary btn-sm" href="index.php" role="button">Continue to homepage</a>
  </p>
</div>
</body>
</html>
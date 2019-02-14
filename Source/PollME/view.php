<?php  include ('security.php'); ?>
<?php
echo '<!DOCTYPE html>
<html>
<head>
    <title>Answers </title>
    <style >
        
        #contenitore{
posi<?php  include ('security.php'); ?>
<?php
echo '<!DOCTYPE html>
<html>
<head>
    <title>Answers </title>
    <style >
        
        #contenitore{
position: relative;
width: 100%;
margin: 20px auto;
text-align:center;
overflow:hidden;
font: 14px "Trebuchet MS", sans serif;
}
.grafico{
    position: relative;
    height: 300px;
    border-left: 2px solid #ddd;
    border-bottom: 2px solid #ddd;
    width: 100%;
    margin-top: 0;
}
.riga{
position:absolute;
left:0;
height: 1px;
background-color:#ddd;
width: 100%;
}
.riga div{
float:left;
margin: -8px 0 0 -40px;
}
table{
width:27%;
    border: 1px solid #eee;
color: #000;
margin: 20px auto;
 
}
table caption{
background-color: #fff;
color: #004156;
text-align: center;
    padding: 5px;
    border: 1px solid #eee;
}
table tr:nth-child(2n){
background-color: #fff;
}
table tr:nth-child(2n+1){
    background-color: #dde3e9;
    border: 1px solid #eee;
}
table td{
text-align:left;
border-bottom: 1px solid #CDCDCD;
padding: 6px;
width: 40%;
}
.column{
position:absolute;
width: 4%;
bottom: 0;
background-color: #003366;
margin-left:1%;
}
div.button {
    margin: 0 auto;
    text-align: center;
    width: 100px;
    background-color:#003366;
    border: 1px solid #003366;
    border-radius: 5px;
    padding: 8px;
    color: #E1E2CF;
    cursor: pointer;
}
.column div{
margin-top:-20px;
height:20px;
}
html {
    height: 100%;
}
body {
    font-family: sans-serif;
    background-color: #F6FAFD !important;
    height: 100%;
    font-size: 14px;
    margin: 0;
}
.SurveyRow{
        display: -ms-flexbox!important;
    display: flex!important;
        -ms-flex-align: center!important;
    align-items: center!important;
        -ms-flex-pack: center!important;
    justify-content: center!important;
        border-bottom: 1px solid #ddd;
    margin-bottom: 20px;
    padding-bottom: 20px;
}
.RightBar{width: 40%;    padding: 0 40px;     margin-right: auto;}
.NoUser {
    color: #fff;
    background: #363692;
    position: absolute;
    right: 10%;
    padding: 15px;
    font-size: 20px;
    border-radius: 5px;
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function viewGraph(){
$(".column").css("height","0");
$("table tr").each(function(index) {
var ha = $(this).children("td").eq(1).text().split("%")[0];
$(".col"+index).animate({height: ha+"%"}, 1500).html("<div>"+ha+"%</div>");
});
}
$(document).ready(function(){
viewGraph();
});
    </script>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
           <link rel="stylesheet"
               type = "text/css"
               href="index.css"
<body>
<ul class="topnav">
  <li><a class="active" href="logged.php">Home</a></li>
  <li><a href="Admin.php">Create Poll</a></li>
  <li><a href="view.php">View Answers</a></li>
  <li><a href="view_feedback.php">View Feedback</a></li>
  <li><a href="view_inq.php">View Inquiry</a></li>
   <li><a href="Attachmentupload.php">Upload files</a></li>
  <li class="right"><a href="logout.php">logout </a></li>
  </ul>
  </body>';
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
for ($i=0;$i<$id;$i++)
{
    $s = $i+1;
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
        echo'<div id="contenitore">
    <div class="NoUser">
        '.$no.' audience
        
    </div>
    <!-- make for loop here   -->
<div class="SurveyRow">
<table>
<caption>Question '.$s.' as precentage (%)</caption>
<tbody>
<tr><td>Answer 1</td><td>'.ceil($a*100/$no).'%</td><td style="background-color:#6dca64"></td></tr>
<tr><td>Answer 2</td><td>'.ceil($b*100/$no).'%</td><td style="background-color:#6867db"></td></tr>
<tr><td>Answer 3</td><td>'.ceil($c*100/$no).'%</td><td style="background-color:#d2d742"></td></tr>
<tr><td>Answer 4</td><td>'.ceil($d*100/$no).'%</td><td style="background-color:#0940BE"></td></tr>
<tr><td>Answer 5</td><td>'.ceil($e*100/$no).'%</td><td style="background-color:#ee82ee"></td></tr>
<tr><td>Answer 6</td><td>'.ceil($f*100/$no).'%</td><td style="background-color:#dd465e"></td></tr>
</tbody></table>
<div class="RightBar">
<div class="grafico">
<div class="riga" style="top:25%"><div>75%</div></div>
<div class="riga" style="top:50%"><div>50%</div></div>
<div class="riga" style="top:75%"><div>25%</div></div>
';
if($i == 0)
{echo '
<div class="col0 column" style="left:0; background-color:#6dca64;" ></div>
<div class="col1 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col2 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col3 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col4 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col5 column" style="left:85%; background-color:#dd465e;" ></div>';
}
if($i == 1)
{echo '
<div class="col6 column" style="left:0; background-color:#6dca64;" ></div>
<div class="col7 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col8 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col9 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col10 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col11 column" style="left:85%; background-color:#dd465e;" ></div>';
}
if($i == 2)
{echo '
<div class="col12 column" style="left:0; background-color:#3cb371;" ></div>
<div class="col13 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col14 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col15 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col16 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col17 column" style="left:85%; background-color:#dd465e;" ></div>';
}
if($i == 3)
{echo '
<div class="col18 column" style="left:0; background-color:#3cb371;" ></div>
<div class="col19 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col20 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col21 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col22 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col23 column" style="left:85%; background-color:#dd465e;" ></div>';
}
if($i == 4)
{echo '
<div class="col24 column" style="left:0; background-color:#3cb371;" ></div>
<div class="col25 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col26 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col27 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col28 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col29 column" style="left:85%; background-color:#dd465e;" ></div>';
}
if($i == 5)
{echo '
<div class="col30 column" style="left:0; background-color:#3cb371;" ></div>
<div class="col31 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col32 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col33 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col34 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col35 column" style="left:85%; background-color:#dd465e;" ></div>';
}
if($i == 6)
{echo '
<div class="col36 column" style="left:0; background-color:#3cb371;" ></div>
<div class="col37 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col38 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col39 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col40 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col41 column" style="left:85%; background-color:#dd465e;" ></div>';
}
if($i == 7)
{echo '
<div class="col42 column" style="left:0; background-color:#021C59;" ></div>
<div class="col43 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col44 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col45 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col46 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col47 column" style="left:85%; background-color:#dd465e;" ></div>';
}
if($i == 8)
{echo '
<div class="col48 column" style="left:0; background-color:#3cb371;" ></div>
<div class="col49 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col50 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col51 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col52 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col53 column" style="left:85%; background-color:#dd465e;" ></div>';
}
echo '
</div>
</div>
</div>  
    <!-- end for loop here   -->
</div>
';
    }
} 
}
echo '</body>
</html>';
?>tion: relative;
width: 100%;
margin: 20px auto;
text-align:center;
overflow:hidden;
font: 14px "Trebuchet MS", sans serif;
}
.grafico{
    position: relative;
    height: 300px;
    border-left: 2px solid #ddd;
    border-bottom: 2px solid #ddd;
    width: 100%;
    margin-top: 0;
}
.riga{
position:absolute;
left:0;
height: 1px;
background-color:#ddd;
width: 100%;
}
.riga div{
float:left;
margin: -8px 0 0 -40px;
}
table{
width:27%;
    border: 1px solid #eee;
color: #000;
margin: 20px auto;
 
}
table caption{
background-color: #fff;
color: #004156;
text-align: center;
    padding: 5px;
    border: 1px solid #eee;
}
table tr:nth-child(2n){
background-color: #fff;
}
table tr:nth-child(2n+1){
    background-color: #dde3e9;
    border: 1px solid #eee;
}
table td{
text-align:left;
border-bottom: 1px solid #CDCDCD;
padding: 6px;
width: 40%;
}
.column{
position:absolute;
width: 4%;
bottom: 0;
background-color: #003366;
margin-left:1%;
}
div.button {
    margin: 0 auto;
    text-align: center;
    width: 100px;
    background-color:#003366;
    border: 1px solid #003366;
    border-radius: 5px;
    padding: 8px;
    color: #E1E2CF;
    cursor: pointer;
}
.column div{
margin-top:-20px;
height:20px;
}
html {
    height: 100%;
}
body {
    font-family: sans-serif;
    background-color: #F6FAFD !important;
    height: 100%;
    font-size: 14px;
    margin: 0;
}
.SurveyRow{
        display: -ms-flexbox!important;
    display: flex!important;
        -ms-flex-align: center!important;
    align-items: center!important;
        -ms-flex-pack: center!important;
    justify-content: center!important;
        border-bottom: 1px solid #ddd;
    margin-bottom: 20px;
    padding-bottom: 20px;
}
.RightBar{width: 40%;    padding: 0 40px;     margin-right: auto;}
.NoUser {
    color: #fff;
    background: #363692;
    position: absolute;
    right: 10%;
    padding: 15px;
    font-size: 20px;
    border-radius: 5px;
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function viewGraph(){
$(".column").css("height","0");
$("table tr").each(function(index) {
var ha = $(this).children("td").eq(1).text();
$(".col"+index).animate({height: ha+"%"}, 1500).html("<div>"+ha+"</div>");
});
}
$(document).ready(function(){
viewGraph();
});
    </script>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
           <link rel="stylesheet"
               type = "text/css"
               href="index.css"
<body>
<ul class="topnav">
  <li><a class="active" href="logged.php">Home</a></li>
  <li><a href="Admin.php">Create Poll</a></li>
  <li><a href="view.php">View Answers</a></li>
  <li><a href="view_feedback.php">View Feedback</a></li>
  <li><a href="view_inq.php">View Inquiry</a></li>
   <li><a href="Attachmentupload.php">Upload files</a></li>
  <li class="right"><a href="logout.php">logout </a></li>
  </ul>
  </body>';
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
for ($i=0;$i<$id;$i++)
{
    $s = $i+1;
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
        echo'<div id="contenitore">
    <div class="NoUser">
        '.$no.' audience
        
    </div>
    <!-- make for loop here   -->
<div class="SurveyRow">
<table>
<caption>Question '.$s.' as precentage (%)</caption>
<tbody>
<tr><td>Answer 1</td><td>'.ceil($a*100/$no).'</td><td style="background-color:#6dca64">%</td></tr>
<tr><td>Answer 2</td><td>'.ceil($b*100/$no).'</td><td style="background-color:#6867db">%</td></tr>
<tr><td>Answer 3</td><td>'.ceil($c*100/$no).'</td><td style="background-color:#d2d742">%</td></tr>
<tr><td>Answer 4</td><td>'.ceil($d*100/$no).'</td><td style="background-color:#0940BE">%</td></tr>
<tr><td>Answer 5</td><td>'.ceil($e*100/$no).'</td><td style="background-color:#ee82ee">%</td></tr>
<tr><td>Answer 6</td><td>'.ceil($f*100/$no).'</td><td style="background-color:#dd465e">%</td></tr>
</tbody></table>
<div class="RightBar">
<div class="grafico">
<div class="riga" style="top:25%"><div></div></div>
<div class="riga" style="top:50%"><div></div></div>
<div class="riga" style="top:75%"><div></div></div>
';
if($i == 0)
{echo '
<div class="col0 column" style="left:0; background-color:#6dca64;" ></div>
<div class="col1 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col2 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col3 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col4 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col5 column" style="left:85%; background-color:#dd465e;" ></div>';
}
if($i == 1)
{echo '
<div class="col6 column" style="left:0; background-color:#6dca64;" ></div>
<div class="col7 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col8 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col9 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col10 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col11 column" style="left:85%; background-color:#dd465e;" ></div>';
}
if($i == 2)
{echo '
<div class="col12 column" style="left:0; background-color:#3cb371;" ></div>
<div class="col13 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col14 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col15 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col16 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col17 column" style="left:85%; background-color:#dd465e;" ></div>';
}
if($i == 3)
{echo '
<div class="col18 column" style="left:0; background-color:#3cb371;" ></div>
<div class="col19 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col20 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col21 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col22 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col23 column" style="left:85%; background-color:#dd465e;" ></div>';
}
if($i == 4)
{echo '
<div class="col24 column" style="left:0; background-color:#3cb371;" ></div>
<div class="col25 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col26 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col27 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col28 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col29 column" style="left:85%; background-color:#dd465e;" ></div>';
}
if($i == 5)
{echo '
<div class="col30 column" style="left:0; background-color:#3cb371;" ></div>
<div class="col31 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col32 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col33 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col34 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col35 column" style="left:85%; background-color:#dd465e;" ></div>';
}
if($i == 6)
{echo '
<div class="col36 column" style="left:0; background-color:#3cb371;" ></div>
<div class="col37 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col38 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col39 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col40 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col41 column" style="left:85%; background-color:#dd465e;" ></div>';
}
if($i == 7)
{echo '
<div class="col42 column" style="left:0; background-color:#021C59;" ></div>
<div class="col43 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col44 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col45 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col46 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col47 column" style="left:85%; background-color:#dd465e;" ></div>';
}
if($i == 8)
{echo '
<div class="col48 column" style="left:0; background-color:#3cb371;" ></div>
<div class="col49 column" style="left:18%; background-color:#6867db;" ></div>
<div class="col50 column" style="left:30%; background-color:#d2d742;" ></div>
<div class="col51 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col52 column" style="left:65%; background-color:#ee82ee;" ></div>
<div class="col53 column" style="left:85%; background-color:#dd465e;" ></div>';
}
echo '
</div>
</div>
</div>  
    <!-- end for loop here   -->
</div>
';
    }
} 
}
echo '</body>
</html>';
?>

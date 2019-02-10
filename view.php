<?php
echo '<!DOCTYPE html>
<html>
<head>
    <title>survey</title>
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
var ha = $(this).children("td").eq(1).text();
$(".col"+index).animate({height: ha+"%"}, 1500).html("<div>"+ha+"</div>");
});
}
$(document).ready(function(){
viewGraph();
});

    </script>
</head>
<body>';
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "poll";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT COUNT(ID) As count FROM yomna";

$result2 = $conn->query($sql);

if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
        $id=$row["count"];
    }
} 

for ($i=0;$i<$id;$i++)
{
    $s = $i+1;
    $sql = "SELECT r1,r2,r3,r4,r5,r6,no FROM yomna WHERE ID =".$s;
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
<caption>Question '.$s.'</caption>
<tbody>
<tr><td>Answer 1</td><td>'.$a.'</td><td style="background-color:#021C59">&nbsp;</td></tr>
<tr><td>Answer 2</td><td>'.$b.'</td><td style="background-color:#042778">&nbsp;</td></tr>
<tr><td>Answer 3</td><td>'.$c.'</td><td style="background-color:#063195">&nbsp;</td></tr>
<tr><td>Answer 4</td><td>'.$d.'</td><td style="background-color:#0940BE">&nbsp;</td></tr>
<tr><td>Answer 5</td><td>'.$e.'</td><td style="background-color:#1F55D0">&nbsp;</td></tr>
<tr><td>Answer 6</td><td>'.$f.'</td><td style="background-color:#396bdf">&nbsp;</td></tr>
</tbody></table>

<div class="RightBar">
<div class="grafico">
<div class="riga" style="top:25%"><div>30</div></div>
<div class="riga" style="top:50%"><div>20</div></div>
<div class="riga" style="top:75%"><div>10</div></div>
<div class="col0 column" style="left:0; background-color:#021C59;" ></div>
<div class="col1 column" style="left:18%; background-color:#042778;" ></div>
<div class="col2 column" style="left:30%; background-color:#063195;" ></div>
<div class="col3 column" style="left:50%; background-color:#0940BE;" ></div>
<div class="col2 column" style="left:65%; background-color:#1F55D0;" ></div>
<div class="col3 column" style="left:85%; background-color:#396bdf;" ></div>
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
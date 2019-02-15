<?php
echo"<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
    <meta name='description' />
    <meta name='author' />
    <!--<link rel='icon' href='imgs/favicon.ico' />-->
    <title>
        Answer Question
    </title>
    <!-------------------------------------------------------------------------------->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

<!-- jQuery library -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

<!-- Latest compiled JavaScript -->
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>
           <link rel='stylesheet'
               type = 'text/css'
               href='index.css'
               
           />
    <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
    <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->
    <style>
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
        .survey-question-wrapper {
            -webkit-box-pack: center !important;
            -webkit-justify-content: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
            display: -webkit-box !important;
            display: -webkit-flex !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-box-align: center !important;
            -webkit-align-items: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
            
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -webkit-flex-direction: column !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
                margin-bottom: 30px;
        }
            .survey-question-wrapper h2 {
                font-size: 36px;
                color: #1b87e6;
                font-weight: 200;
            }
            .survey-question-wrapper form {
                box-shadow: rgba(0, 0, 0, 0.2) 0px -1px 1px 0px, rgba(0, 0, 0, 0.3) 0px 3px 5px 0px;
                z-index: 2;
                background: rgb(255, 255, 255);
                border-bottom: none;
                border-left: 4px solid rgb(10, 134, 234);
                padding-left: 40px;
                padding-right: 40px;
                padding-top: 55px;
                position: relative;
                width: 60%;
                display: inline-block;
                padding-bottom: 13px;
            }
span.QNo {
   
    color: #000;
    font-size: 25px;
}
        form .form-group .form-control {
           
            height: calc(2.25rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 0px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            outline: none;
            border: 0;
           
            -webkit-transition: background 0s ease-out;
            -o-transition: background 0s ease-out;
            transition: background 0s ease-out;
            float: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 0;
            padding: 0;
            color: #000;
            font-size: 25px;
                margin-bottom: 10px;
        }
            form .form-group .form-control:focus {
                outline: none;
                background-image: -webkit-gradient(linear, left top, left bottom, from(#002757), to(#002757)), -webkit-gradient(linear, left top, left bottom, from(#747c8a), to(#747c8a));
                background-image: -webkit-linear-gradient(#002757, #002757), -webkit-linear-gradient(#747c8a, #747c8a);
                background-image: -o-linear-gradient(#002757, #002757), -o-linear-gradient(#747c8a, #747c8a);
                background-image: linear-gradient(#002757, #002757), linear-gradient(#747c8a, #747c8a);
                -webkit-background-size: 100% 2px, 100% 1px;
                background-size: 100% 2px, 100% 1px;
                -webkit-box-shadow: none;
                box-shadow: none;
                -webkit-transition-duration: 0.3s;
                -o-transition-duration: 0.3s;
                transition-duration: 0.3s;
            }
        .answer-container {
                padding-left: 15px;
             padding-bottom: 15px;
    margin-bottom: 10px;
        }
        .control-indicator {
            width: 16px;
            height: 16px;
            left: 0px;
            margin-top: -8px;
            position: absolute;
            top: 60%;
            background: rgb(255, 255, 255);
            border-width: 1px;
            border-style: solid;
            border-color: rgb(85, 85, 85);
            border-image: initial;
            
        }
        .answer-options {
            position: relative;
                padding-bottom: 5px;
        }
            .answer-options .form-group {
                width: 80%;
                padding-left: 35px;
                margin-bottom: 15px;
            }
        .add-question-btn {
            width: auto;
          
            color: rgb(255, 255, 255);
            font-size: 15px;
            line-height: 15px;
            transform: translate(0px, -50%);
            z-index: 1;
            background: rgb(10, 134, 234);
            border-width: 1px;
            border-style: solid;
            border-color: rgb(10, 134, 234);
            border-image: initial;
            border-radius: 2px;
            outline: 0px;
            padding: 7px 20px;
            cursor: pointer;
            margin: 0px auto;
            display: block;
        }
        .add-question-btn:hover {
             background: rgb(255, 255, 255);
             color: rgb(10, 134, 234);
        }
          .QuestionRow{
            position:relative;
          }
        .QuestionRow:before{
            content:'';
            position:absolute;
            width:20%;
            height:4px;
            background-color: rgb(10, 134, 234);
             bottom:0px;
            right: calc(-75px + 50%);
        }
        .QuestionRow:nth-last-child(2):before {
          display:none;
        }
       
 .custom-control {
    position: relative;
    display: block;
    min-height: 1.5rem;
  
}
[type=radio]:checked, [type=radio]:not(:checked) {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}
.custom-control-label {
    position: relative;
    margin-bottom: 0;
    vertical-align: top;
        cursor: pointer;
        padding-left: 25px;
}
.custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #007bff;
    background-color: #007bff;
}
.custom-radio .custom-control-input:checked~.custom-control-label::after{
            position: absolute;
    top: 4px;
    left: 5px;
    display: block;
    width: 7px;
    height: 7px;
    border-radius: 50%;
    content: '';
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%;
    background-color: #fff;
}
.custom-radio .custom-control-label::before {
    border-radius: 50%;
}
.custom-control-label::before {
    position: absolute;
    top: -.1rem;
    left: 0rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: '';
    background-color: #fff;
    border: #adb5bd solid 1px;
}
    </style>
</head>
<body>
<ul class='topnav'>
  <li><a class='active' href='index.php'>Home</a></li>
  <li><a href='answer_question.php'> Take Poll</a></li>
  <li><a href='feedback2.html'>Give feedback</a></li>
  
  <li><a href='inquiry.html'>Inquiry</a></li>
   <li><a href='Attachmentdownload.php'>Download files</a></li>
  <li class='right'><a href='login.php'>Are you Speaker?</a></li>
 <div class='survey-question-wrapper  multiple-choice-question '>
 </ul>
        <h2>
            Answer Question!
        </h2>
<form action ='answerpoll.php' method='GET' >
    ";
$q = "";
$z = "";
$x = "";
$c = "";
$v = "";
$b = "";
$n = "";
$d = "";
$servername = "sql202.epizy.com";
$username = "epiz_23357401";
$password = "jpvgo0IE";
$dbname = "epiz_23357401_Poll";
// Create connect
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql1="SELECT ID,questions,answer1,answer2,answer3,answer4,answer5,answer5,answer6
FROM question ";
$result = $conn->query($sql1);
$I=1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $q = $row["questions"];
       $z = $row["answer1"];
       $x = $row["answer2"];
       $c = $row["answer3"];
       $v = $row["answer4"];
       $b = $row["answer5"];
       $n = $row["answer6"];
       $d =$row["ID"];
        echo        "
       

	   <div class='QuestionRow'>
 
            <div class='form-group '>
            <span class='QNo'>Q$I:</span>
                <input type='text' style='width:1320px;' class='form-control' required='' name='questions".$d."' value='".$q."' disabled>
            </div>
            <div class='answer-container drag-answer col-1x'>
                <div class='answer-options  '>
                   
                    <div class='custom-control custom-radio'>
                        <input type='radio' class='custom-control-input' required='' id='radio1".$I."' name='radio".$d."' placeholder='Option 1'value='a1'>
                        <label class='custom-control-label' for='radio1".$I."'>$z</label>
                    </div>
                </div>
                <div class='answer-options  '>
                   
                    <div class='custom-control custom-radio '>
                        <input type='radio' class='custom-control-input' required='' id='radio2".$I."' name='radio".$d."' placeholder='Option 2'value='a2'>
                        <label class='custom-control-label' for='radio2".$I."'>$x</label>
                      
                    </div>
                </div>
                <div class='answer-options  '>
                   
                    <div class='custom-control custom-radio '>
                        <input type='radio' class='custom-control-input' required='' id='radio3".$I."' name='radio".$d."' placeholder='Option 3'value='a3'>
                        <label class='custom-control-label' for='radio3".$I."'>$c</label>
                       
                    </div>
                </div>
                <div class='answer-options  '>
                  
                    <div class='custom-control custom-radio '>
                        <input type='radio' class='custom-control-input' required='' id='radio4".$I."' name='radio".$d."' placeholder='Option 4'value='a4'>
                        <label class='custom-control-label' for='radio4".$I."'>$v</label>
                    </div>
                </div>
                 <div class='answer-options  '>
                   
                    <div class='custom-control custom-radio '>
                        <input type='radio' class='custom-control-input' required='' id='radio5".$I."' name='radio".$d."' placeholder='Option 5'value='a5'>
                        <label class='custom-control-label' for='radio5".$I."'>$b</label>
                        
                    </div>
                </div>
                  <div class='answer-options  '>
                     
                      <div class='custom-control custom-radio '>
                        <input type='radio' class='custom-control-input' required='' id='radio6".$I."' name='radio".$d."' placeholder='Option 6'value='a6'>
                        <label class='custom-control-label' for='radio6".$I."'>$n</label>
                        
                    </div>
                </div>
           
       
<span name='Question'></span>
</div>
 </div>
 ";
 $I++;
    }
} else {
    echo "0 results";
}
 echo "
   <input class='add-question-btn' name='amir' value='submit' type='submit'></input>
    </form>
        </div>
 </body>
</html>";
     
?>

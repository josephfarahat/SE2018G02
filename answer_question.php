
<?php
$q = "";
$a = "";
$b = "";
$c = "";
$d = "";
$e = "";
$f = "";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "questions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql1="SELECT *
FROM question WHERE id=1";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $q = $row["question"];
       $a = $row["A"];
       $b = $row["B"];
       $c = $row["C"];
       $d = $row["D"];
       $e = $row["E"];
       $f = $row["F"];
    }
} else {
    echo "0 results";
}

echo"<!DOCTYPE html>

<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
    <meta name='description' />
    <meta name='author' />
    <!--<link rel='icon' href='imgs/favicon.ico' />-->
    <title>

        Admin

    </title>

    <!-------------------------------------------------------------------------------->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
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
            height: 100%;
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -webkit-flex-direction: column !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
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

        form .form-group .form-control {
            display: block;
            width: 100%;
            height: calc(2.25rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            outline: none;
            border: 0;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#002757), to(#002757)), -webkit-gradient(linear, left top, left bottom, from(#747c8a), to(#747c8a));
            background-image: -webkit-linear-gradient(#002757, #002757), -webkit-linear-gradient(#747c8a, #747c8a);
            background-image: -o-linear-gradient(#002757, #002757), -o-linear-gradient(#747c8a, #747c8a);
            background-image: linear-gradient(#002757, #002757), linear-gradient(#747c8a, #747c8a);
            -webkit-background-size: 0 2px, 100% 1px;
            background-size: 0 2px, 100% 1px;
            background-repeat: no-repeat;
            background-position: center bottom, center -webkit-calc(100% - 1px);
            background-position: center bottom, center calc(100% - 1px);
            background-color: rgba(0, 0, 0, 0);
            -webkit-transition: background 0s ease-out;
            -o-transition: background 0s ease-out;
            transition: background 0s ease-out;
            float: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 0;
            padding: 0;
            color: #a9a9a9;
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
            margin-top: 30px;
            padding-bottom:20px;
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
    </style>
</head>
<body>
    <div class='survey-question-wrapper  multiple-choice-question '>
        <h2>
            Answer Question!
        </h2>
        <form action ='answerpoll.php' method='GET'>

            <div class='form-group '>
                <input type='text' class='form-control' required='' name='questions' value='".$q."' disabled>
            </div>

            <div class='answer-container drag-answer col-1x'>
                <div class='answer-options  '>
                    <div class='control-indicator'></div>
                    <div class='form-group '>
                        <input type='option' class='form-control' required='' name='answers1' placeholder='Option 1'  value='".$a."
                        ' disabled>
                    </div>
                </div>
                <div class='answer-options  '>
                    <div class='control-indicator'></div>
                    <div class='form-group '>
                        <input type='option' class='form-control' required='' name='answers2' placeholder='Option 2'value='".$b."' disabled>
                    </div>
                </div>
                <div class='answer-options  '>
                    <div class='control-indicator'></div>
                    <div class='form-group '>
                        <input type='option' class='form-control' required='' name='answers3' placeholder='Option 3'value='".$c."' disabled>
                    </div>
                </div>
                <div class='answer-options  '>
                    <div class='control-indicator'></div>
                    <div class='form-group '>
                        <input type='option' class='form-control' required='' name='answers4' placeholder='Option 4'value='".$d."' disabled>
                    </div>
                </div>
                 <div class='answer-options  '>
                    <div class='control-indicator'></div>
                    <div class='form-group '>
                        <input type='option' class='form-control' required='' name='answers5' placeholder='Option 5'value='".$e."' disabled>
                    </div>
                </div>
                  <div class='answer-options  '>
                      <div class='control-indicator'></div>
                      <div class='form-group '>
                        <input type='option' class='form-control' required='' name='answers6' placeholder='Option 6'value='".$f."' disabled>
                    </div>
                </div>
            </div>
            <button class='add-question-btn' type='submit'>Submit</button>
        </form>
    </div>


<span name='Question'></span>



</body>
</html> ";


?>
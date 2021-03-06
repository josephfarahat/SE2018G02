
<?php  include ('security.php'); ?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" />
    <meta name="author" />
    <!--<link rel="icon" href="imgs/favicon.ico" />-->
    <title>

        Create Poll

    </title>

    <!-------------------------------------------------------------------------------->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet"
    		       type = "text/css"
    		       href="bootstrap.css"

    		   />
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
               
           />
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
                border-left: black;
                padding-left: 40px;
                padding-right: 40px;
                padding-top: 55px;
                position: relative;
                width: 60%;
                display: inline-block;
                padding-bottom: 13px;
            }
			.truncate{
	color:black;
	font-size: 20px;
	font-weight:bold;

	margin-left:20px;
}
			
#delete
{
margin-left:320px;
color:white;
}


        form .form-group .form-control {
            display: block;
            width: 100%;
            height: calc(2.25rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 2rem;
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
 <ul class="topnav">
  <li><a class="active" href="logged.php">Home</a></li>
  <li><a href="Admin.php">Create Poll</a></li>
  <li><a href="view.php">View Answers</a></li>
  <li><a href="view_feedback.php">View Feedback</a></li>
  <li><a href="view_inq.php">View Inquiry</a></li>
    <li><a href="viewinstantanswers.php">Quick Answers</a></li>
	  <li><a href="InstantQ.php">Quick Question</a></li>
   <li><a href="Attachmentupload.php">Upload files</a></li>
  <li class="right"><a href="logout.php">Logout </a></li>
  </ul>
  <br>
  <h2>Please enter your quick question for your audience.<br> You don't need to give answer choices.</h2>
<div class="survey-question-wrapper  multiple-choice-question ">

        <form action ='instantquestions.php' method='GET'>

            <div class="form-group ">
                <input type="text" class="form-control" required="" name="questions" placeholder="Question Text">
            </div>

            <br>
            <button class="add-question-btn" type="submit">Submit</button>
			
			
        </form>
    </div>





</div>
</body>
</html>

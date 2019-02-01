<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" />
    <meta name="author" />
	<title>feedback</title>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <style>
        .feedback {
            background-image: url('img/feedback.jpg');
            width: 100%;
            height: 100%;
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        *,
        *:after,
        *:before {
            box-sizing: border-box;
        }

        body {
            background: whitesmoke;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        input.check {
            position: absolute;
            opacity: 0;
        }

            input.check:checked + label svg path {
                stroke-dashoffset: 0;
            }

            input.check:focus + label {
                transform: scale(1.03);
            }

        .check + label {
            display: block;
            border: 5px solid #fff;
            width: var(--d);
            height: var(--d);
            border-radius: 14px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

            .check + label:active {
                transform: scale(1.05);
                border-radius: 30px;
            }

            .check + label svg {
                pointer-events: none;
            }

                .check + label svg path {
                    fill: none;
                    stroke: #fff;
                    stroke-width: 4px;
                    stroke-linecap: round;
                    stroke-linejoin: round;
                    stroke-dasharray: 100;
                    stroke-dashoffset: 101;
                    transition: all 350ms cubic-bezier(1, 0, 0.37, 0.91);
                }

        .checkTitle {
            font-size: 40px;
            font-family: 'Amatic SC', cursive;
            font-weight: bolder;
            text-transform: uppercase;
            padding-right: 25px;
            color: #fff;
            -webkit-align-self: center !important;
            -ms-flex-item-align: center !important;
            -ms-grid-row-align: center !important;
            align-self: center !important;
            font-style: italic;
        }
		input.submit {
		    background-color: transparent;
		    color: #fff;
		    border: 1px solid;
		    box-shadow: none;
		    padding: 5px 30px;
		    margin: 15px auto;
		    font-size: 40px;
		    font-family: "Amatic SC",cursive;
		    font-weight: bolder;
		    text-transform: uppercase;
		    cursor: :pointer;
		}
		input.submit:hover {
			background-color: #fff;
			color: green
		}

        form.form {
            -webkit-box-align: end !important;
            -webkit-align-items: flex-end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important;
            -webkit-box-align: end !important;
            -webkit-align-items: flex-end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important;
            display: -webkit-box !important;
            display: -webkit-flex !important;
            display: -ms-flexbox !important;
            display: flex !important;
            height: 100%;
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -webkit-flex-direction: column !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }

        .checkbox {
            display: -webkit-box !important;
            display: -webkit-flex !important;
            display: -ms-flexbox !important;
            display: flex !important;
            margin-bottom: 65px;
            margin-right: 135px;
        }

            .checkbox:first-child {
                margin-top: auto !important;
            }
    </style>
</head>
<body >


 <div class="feedback">

        <form class="form" action="result.php" method="GET">
            <div class="checkbox">
                <label class="checkTitle">
                    Like It
                </label>

                <input type="radio" name="radio" id="Like" class="check" value="like" required/>


                <label for="Like" style="--d: 100px;">
                    <svg viewBox="0,0,50,50">
                        <path d="M5 30 L 20 45 L 45 5"></path>
                    </svg>
                </label>
            </div>
            <div class="checkbox">
                <label class="checkTitle">
                    Don't Like It
                </label>
                <input type="radio" name="radio" id="NotLike" class="check" value="dislike" required/>
                <label for="NotLike" style="--d: 100px;">
                    <svg viewBox="0,0,50,50">
                        <path d="M5 30 L 20 45 L 45 5"></path>
                    </svg>
                </label>
            </div>


            	<input type="submit" class="submit" value="Submit">
        </form>
    </div>











</body>
</html>
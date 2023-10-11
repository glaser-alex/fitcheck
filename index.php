<?php
// require "./inc/db_init.php";
// require "./inc/checkLogin.php";
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/burger.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <title>Hier entsteht FitCheck</title>
    <style>
        @font-face {
            font-family: Ubuntu;
            src: url(./font/Ubuntu/Ubuntu-Light.ttf);
        }

        .the-box {
            width: 100%;
			text-align: center;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -60%);
            -webkit-transform: translate(-50%, -60%);
            -ms-transform: translate(-50%, -60%);
        }

        .the-logo {
            width: 200px;
            border-radius: 30px;
        }

        .the-title {
            padding: 5px;
            font-size: 2em;
            text-align: center; 
        }
        @media (max-width: 700px) {
            .the-logo {
                width: 100px;
                border-radius: 10px;
            }
        }
    </style>
</head>
<body>

<?php include_once "./inc/nav.php" ?>

<div class="the-box">
	<img class="the-logo" src="./img/logo.png">
    <div class="the-title">Hier entsteht FitCheck</div>
</div>
</body>
</html>

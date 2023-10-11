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
			text-align: center;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -60%);
            -webkit-transform: translate(-50%, -60%);
            -ms-transform: translate(-50%, -60%);
        }

        .the-title {
            padding: 5px;
            font-size: 3em;
            text-align: center; 
        }
    </style>
</head>
<body>

<?php include_once "./inc/nav.php" ?>

<div class="the-box">
	<img style="border-radius: 30px;" src="./img/logo.png" width="200">
    <div class="the-title">Hier entsteht FitCheck</div>
</div>
</body>
</html>

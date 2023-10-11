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
    <!-- <link rel="stylesheet" href="./css/style.css" type="text/css"> -->
    <title>Hier entsteht FitCheck</title>
    <style>
        @font-face {
            font-family: Ubuntu;
            src: url(./font/Ubuntu/Ubuntu-Light.ttf);
        }
        html {
            width: 100%;
            height: 100%;
            background-color: #88001b;
            color: #fff;
            font-family: Ubuntu, GeoSlb712MdBT, Georgia, serif;
            font-style: normal;
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
		img {
			border-radius: 30px
		}
    </style>
</head>
<body>

<?php include_once "./inc/nav.php" ?>

<div class="the-box">
	<img src="./img/logo.png" width="200">
    <div class="the-title">Hier entsteht FitCheck</div>
</div>
</body>
</html>

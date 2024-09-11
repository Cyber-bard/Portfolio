<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>| Online Quiz System |</title>
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel="shortcut icon" type="image/png" href="images/image.png" />
        <style type="text/css">
            body {
                width: 100%;
                background: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(images/quiz.jpeg) ;
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;

            }
            .navbar{
                width: 85%;
                margin: auto;
                padding: 35px 0;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .logo{
                position: relative;
                height: 50%;
                width: 80px;
                cursor: pointer;
            }
            .navbar ul li{
                list-style: none;
                display: inline-block;
                margin: 0 20px;
                position: relative;
            }
            .navbar ul li a{
                text-decoration: none;
                color: #fff;
                text-transform: uppercase;
            }
            .navbar ul li::after{
                content: '';
                height: 3px;
                width: 0;
                background: #009688;
                position:absolute;
                left: 0;
                bottom: -10px;
                transition: 0.5s;
            }
            .navbar ul li:hover::after{
                width: 100%;
            }
            .btn{
                display: center;
                background: #009688;
                color: black;
            }
            .btn:hover{
                color:blue;
                background: #ff004f;
            }
        </style>
    </head>
    <body>
    <div class="banner">
        <div class="navbar">
            <img src="images/logo2.jpg" class="logo">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="index.html">Back</a></li>
                <li><a href="#">Sign in / up to continue 💖💖😊</a></li>
            </ul>
        </div>
        <center>
            <div class="intro">
                <h1 style="color: white;"> online quiz system </h1>
                <a href="login.php" class="btn"> login </a> &emsp;
                <a href="register.php" class="btn"> register </a>
                <h2> Good &nbsp;Luck My G. </h2>
            </div>
        </center>
    </body>
</html>
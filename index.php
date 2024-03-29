<?php
    session_start();
    if(!empty($_SESSION['email'])){
        header('Location: home.php');
    }

?>
<html>
<head>
    <meta charset="utf-8">
    <title>Sarahah</title>
    <link rel="stylesheet" href="bootstrap-3.1.1-dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header1.css">

</head>
<div class="">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="home">
                    <a class="" href="index.php">
                        <img src="img/Logo.png" alt=""> Sarahah
                    </a>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <!---->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="register.php">Sign Up</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="honest">
            <span>Get honest feedback from your coworkers and friends</span>
        </div>
        <div class="infor clearfix">
            <div class="col-lg-6 col-md-6 col-xs-12 at-work pull-left">
                <h3>At Work</h3>
                <ul>
                    <li>Enhance your areas of strength</li>
                    <li>Strengthen Areas for Improvement</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 with-friends pull-left">
                <h3>With Your Friends</h3>
                <ul>
                    <li>Improve your friendship by discovering your strengths and areas for improvement
                    </li>
                    <li>Let your friends be honest with you</li>
                </ul>
            </div>
        </div>
        <div class="login-register">
            <a href="register.php">Register |</a>
            <a href="login.php"> Login</a>
        </div>
    </div>
    <div class="footer">
    </div>
</div>
</html>
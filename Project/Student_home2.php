<?php
    include('dbconnection.php');
    session_start();
    $id = $_SESSION['id'];
    ?>
   


<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'poppins', sans-serif;
            }
            .hero
            {
                margin: auto;
                width: 100%;
                min-height: 100vh;
                background-image: url(image/bg1.png);
                background-position: center;
                background-size: cover;
                padding: 5px 5%;
                overflow: hidden;
                position: relative;
            }
            nav{
                padding: 5px 0;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .logo
            {
                width: 85px;
                

            }
            nav ul li 
            {
                display: inline-block;
                list-style:none;
                margin: 10px 15px;

            }
            nav ul li a
            {
                text-decoration: none;
                color:#333;
                font-weight: 400;
            }
            .login-btn
            {
                text-decoration: none;
                color: #333;
                margin-right: 15px;
                font-weight: 400;

            }
            .btn
            {
                display: inline-block;
                text-decoration: none;
                padding: 14px 40px;
                color: #fff;
                background-image: linear-gradient(45deg, #4707bd, #ce0ad5);
                font-size: 14px;
                border-radius: 30px;
                border-top-right-radius: 0;
                transition: 0.5s;

                
                
            }

            .btn1
            {
                display: inline-block;
                text-decoration: none;
                padding: 8px 20px;
                color: #fff;
                background-image: linear-gradient(45deg, #1fbd07, #ddc809);
                font-size: 14px;
                border-radius: 50px;
                border-top-right-radius: 10;
                transition: 0.5s;
            }
            .content{
                margin-top: 10%;
                max-width: 600px;
            }
            .content h1{
                font-size: 70px;
                color: #222;

            }
            .content p{
                margin: 10px 0 30px;
                color: #333;
                animation-delay: 0.5s;
            }
            .content .btn{
                padding: 15px;
                font-size: 15px;
                animation-delay: 1s;
            }
            .btn:hover {
                border-top-right-radius: 30px;
                
            }
            .feature-img
            {
                width: 350px;
                position: absolute;
                bottom: 0;
                right: 10%;
                
            }
            .feature-img.anim{
                animation-delay: 0.5s;
            }
            .anim{
                opacity: 0;
                transform:translateY(30px);
                animation: moveup 0.5s linear forwards;
            }
            @keyframes moveup{
                100%{
                    opacity: 1;
                    transform:translateY(30px);
                }
            }
            .course-font{
                margin: 10%;
                padding: 8px;

            }

            .cour1
            {
                color: rgb(6, 230, 28);
            }
            .cour2
            {
                padding: 20;
                color: rgb(122, 41, 236);
            }
            .shopping-cart
            {
                margin: 10px;
                width: 20%;
            }
            input[type=search] {
                width: 350px;
                padding: 8px 20px 8px 45px;
                border: #4d3f3f solid 2px;
                font-size: 18px;
                border-radius: 25px;
                background-position: 2% 50%;
                background-repeat: no-repeat;
                background-size: 30px;
                background-color: #fff;
            }
        </style>
        </head>
        <body>
            <div class="hero">
                <nav>
                    <img src="image/logo orig.png" class="logo">
                    <ul>
                    <li><a href="Student_home2.php">Home</a></li>
                    <li><a href="cousedetail.php">Course</a></li>
                    <li><a href="cousedetail">Categories</a></li>
                    </ul>
                    <form class="search-form">
                        <input type="search" id="search-box" placeholder="Search Course..">
                        <label for="search-box" class="search-icon"></label>
                        <a href="#" class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </form>

                    
                    
                    <div>
                        <a href="dash.php" class="btn1">Dashboard</a>
                        <a href="login.php" class="btn">Logout</a>
                    </div>
                </nav>
                <div class="content">
                    <H1 class="anim">Build Your Career</H1>
                    <p class="anim">Learning New Technology </p>
                    <a href="cousedetail.php" class="btn anim">Emroll Now</a>
                </div>
                <img src="image/s1.png" class="feature-img  anim">
            </div>
            <div class="course-font">
                <center><h3 class="cour1">COURSES</H3></center>
                <center><H1 class="cour2">Explore Popular Courses</H1></center>
            </div>
        </body>
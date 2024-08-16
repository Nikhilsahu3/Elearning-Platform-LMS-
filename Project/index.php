<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/courselist.css" /> 
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'poppins', sans-serif;
            }
            body {
                background-color: #fff;
                color: #333;
            }
            .hero {
                margin: auto;
                width: 100%;
                min-height: 100vh;
                background-image: url(image/bgimg.png);
                background-position: center;
                background-size: cover;
                padding: 5px 5%;
                overflow: hidden;
                position: relative;
            }
            nav {
                padding: 5px 0;
                display: flex;
                flex-wrap: nowrap;
                align-items: center;
                justify-content:space-evenly;
            }
            .logo {
                width: 85px;
            }
            
            nav ul {
                list-style: none;
                display: flex;
            }
            
            nav ul li {
                margin: 10px 15px;
            }
            
            nav ul li a {
                text-decoration: none;
                color: #333;
                font-weight: 400;
            }
            
            .login-btn,
            .btn {
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




            .content {
                margin-top: 10%;
                max-width: 600px;
                text-align: center;
            }
            
            .content h1 {
                font-size: 70px;
                color: #222;
            }
            
            .content p {
                margin: 10px 0 30px;
                color: #333;
                animation-delay: 0.5s;
            }
            
            .content .btn {
                padding: 15px;
                font-size: 15px;
                animation-delay: 1s;
            }

            .btn:hover {
                border-top-right-radius: 30px;
                
            }
            
            .feature-img {
                width: 100%;
                position: absolute;
                max-width: 350px;
                margin: 10px auto;

            }
            
            .course-font {
                margin: 10%;
                padding: 8px;
            }
            
            .cour1 {
                color: rgb(6, 230, 28);
            }
            
            .cour2 {
                padding: 20px; 
                color: rgb(122, 41, 236);
            }
            
           


          
            
            input[type=search] {
                width: 100%;
                max-width: 350px;
                padding: 8px 20px 8px 45px;
                font-size: 18px;
                border-radius: 25px;
                background-position: 2% 50%;
                background-repeat: no-repeat;
                background-size: 30px;
                background-color: #fff;
            }

            
            
          
            
            @media screen and (max-width: 768px) {
                body {
                    background-color: #333;
                    color: #3498db;
                }
            
                .hero {
                    padding: 10px 0px;
                }
            
                .content {
                    margin-top: 5%;
                }
            }
            












        
        </style>
        </head>
        <body>
            <div class="hero">
                <nav>
                    <img src="image/logo orig.png" class="logo">
                    <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="course.html">Course</a></li>
                    <li><a href="">Categories</a></li>
                    </ul>
                    <form class="search-form">
                        <input type="search" id="search-box" placeholder="Search Course..">
                        <label for="search-box" class="search-icon"></label>
                    </form>
                    
                    <div>
                        <a href="login.php" class="login-btn">Log in</a>
                        <a href="Registration.php" class="btn">Sign In</a>
                    </div>
                </nav>
                <div class="content">
                    <H1 class="anim">Build Your Career</H1>
                    <p class="anim">Learning New Technology </p>
                    <a href="course.html" class="btn anim">Enroll Now</a>
                </div>
              
            </div>
            <div class="course-font">
                <center><h3 class="cour1">COURSES</H3></center>
                <center><H1 class="cour2">Explore Popular Courses</H1></center>
            </div>



            <div class="container">
                <div class="product-card">
                  <div class="product-image">
                    <img src="image/html.jpg" alt="Product Image" onclick="window.location.href='login.html';">
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>HTML</center></h2>
                    <p class="product-price">FREE</p>
                    <p class="product-description">Learn the basics of HTML, the language of the web, in this introductory course.</p>
                    <div class="buttons">
                      <button onclick="window.location.href='login.html';" class="add-to-cart">Enrol</button>
                    </div>
                  </div>
                </div>
                <div class="product-card">
                  <div class="product-image">
                    <img src="image/css.jpg" alt="Product Image" onclick="window.location.href='login.html';">
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>CSS</center></h2>
                    <p class="product-price">FREE</p>
                    <p class="product-description">Discover the fundamentals of CSS and enhance your web design skills with this introductory course.</p>
                    <div class="buttons">
                      <button onclick="window.location.href='login.html';" class="add-to-cart">Enrol</button>
                      
                    </div>
                  </div>
                </div>
                <div class="product-card">
                  <div class="product-image">
                    <img src="image/js.jpg" alt="Product Image" onclick="window.location.href='login.html';">
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>JavaScript</center></h2>
                    <p class="product-price">Free</p>
                    <p class="product-description">Unlock the power of JavaScript and dive into web development with this introductory course.</p>
                    <div class="buttons">
                      <button onclick="window.location.href='login.html';" class="add-to-cart">Enrol</button>
                    </div>
                  </div>
                </div>


    
        </body>
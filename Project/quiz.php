<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assessment</title>
        <link rel="stylesheet" href="css/custom.css" />
        </head>


<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"> 
   <link rel="stylesheet" href="css/style.css">
   <style>
      .shopping-cart
      {
         padding-left: 20%;
         color: white;
          margin: 10px;
          width: 20%;
      }

      .assess{
        color: white;
      }

   </style>

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.html" class="logo"></a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <a href="#" class="shopping-cart fa-2xl"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fa fa-power-off"></div>
      </div>

      <div class="profile">
         <div class="flex-btn">
            <a href="login.html" class="option-btn">logout</a> 
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <h1></h1>
      <h1></h1>
      <h1></h1>
      <h1></h1>
      <h1></h1>
      <h1></h1><br><br><br><br><br><br><br><br><br>
      </div>

   <nav class="navbar">
      <a href="dash.php"><i class="fas fa-home"></i><span>Dashboard</span></a>
      <a href="profile.php"><i class="fas fa-user"></i><span>My Profile</span></a>
      <a href="Certificate.php"><i class="fas fa-certificate"></i><span>My Certificate</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="contact.php"><i class="fas fa-book"></i><span>Notes</span></a>
      <div id="toggle-btn" class="fas fa-sun"></div>
   </nav>

</div>
<footer class="footer">

</footer> 
<script src="js/script.js"></script>
</body>
<body>
    <center> <h1 class="assess">Assessment Quiz</h1></center>

    

        <section class="main">
    
            <div class="container">
                <div class="col">
                    <h3 id="questionBox">
                        Assessment
                </div>
                <div class="col box">
                    <input name="option" type="radio" id="first" value="a" required>
                    <label for="first">Testing 1</label>
                </div>
                <div class="col box">
                    <input name="option" type="radio" id="second" value="b" required>
                    <label for="second">Testing 2</label>
                </div>
                <div class="col box">
                    <input name="option" type="radio" id="third" value="c" required>
                    <label for="third">Testing 3</label>
                </div>
                <div class="col box">
                    <input name="option" type="radio" id="fourth" value="d" required>
                    <label for="fourth">Testing 4</label>
                </div>
                <button id="submit">Submit</button>
            </div>
    
        </section>
        <script src="js/app.js"></script>
    











</body>
</html>
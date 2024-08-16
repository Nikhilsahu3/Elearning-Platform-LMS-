<!DOCTYPE html>
<html lang="en">
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
         color: rgb(252, 252, 252);
          margin: 10px;
          width: 20%;
      }

      .videoplayer
      {
        margin: 10%;
        padding: auto;
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
      <a href="home.html"><i class="fas fa-home"></i><span>Dashboard</span></a>
      <a href="profile.html"><i class="fas fa-user"></i><span>My Profile</span></a>
      <a href="draw.html"><i class="fas fa-certificate"></i><span>My Certificate</span></a>
      <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
      <a href="contact.html"><i class="fas fa-book"></i><span>Notes</span></a>
      <div id="toggle-btn" class="fas fa-sun"></div>
   </nav>

</div>


<footer class="footer">

</footer> 
<script src="js/script.js"></script>
</body>
<body><div class="videoplayer">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/ESnrn1kAD4E?si=wOnZHOkXYi2SnLNa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>     </div>
     <div>
     <a href="quiz.php" class="btn">Next</button>
     </div>
   </body>
</html>
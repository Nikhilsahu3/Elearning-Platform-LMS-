

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <meta name="viewport"  content="width=device-width, initial-scale=1">
    <title>LOGIN Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
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
                background-image: linear-gradient(45deg, #4707bd, #0d0ad5);
                font-size: 14px;
                border-radius: 30px;
                border-top-right-radius: 0;
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
           
            @keyframes moveup{
                100%{
                    opacity: 1;
                    transform:translateY(30px);
                }
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













            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'poppins', sans-serif;
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
            
  
       
            

            
            @media screen and (max-width: 768px) {
                body {
                    background-color: #333;
                    color: #3498db;
                }
            
                .hero {
                    padding: 5px 10px; /* Adjust padding for smaller screens */
                }
            
                .content {
                    margin-top: 5%;
                }
            }
            













    *{
      
      margin: 0;
      padding: 0;
      box-sizing: border-box;

    }

    body
    {
      font-size:14px;
      background: #f2f2f2;
    }
    
    .container
    {
      background: white;
      width: 500px;
      padding: 25px;
      margin: 50px auto 0;
      border-top: 5px solid blue;
      box-shadow: 0 0 7px rgba(0,0,0,0.5);
    }

    .container h1{
      font-size: 24px;
      line-height: 24px;
      padding: 30px;
      text-align: center;
    }
    .form-group
    {
      width:90%;
      position: relative;
      margin: 20px auto;
    }

  .lock
  {
    padding: 8px;

  }

  .form-control
  {
    width:90%;
    padding: 8px 0 8px 40px;
  }

  .form-group
  {
    width: 100%;
    padding: 8px 0 8px 40px;
    line-height: 25px;
  }
  .form-group i 
  {
    position: absolute;
    font-size: 18px;
    color: blue;
    border-right: 0.5px  solid #cccccc;
  }

  .form-group, .form-control
  
  {
      border: 1px solid #cccccc;
      outline: none;
      -webkit-transition: all 0.30s ease-in-out;
      -moz-webkit-transition: all 0.30s ease-in-out;
      -ms-webkit-transition: all 0.30s ease-in-out;
      transition: all 0.30s ease-in-out;
 
  }
  .form-group:hover, .form-control:hover
{
  background-color: #f4eeee;
}

.form-group:focus, .form-control:focus
{
  border: 1px solid blue;
}


.button
{
  text-align: center;
  margin: 5px;
  background-color: blue;
  color: white;
  height: 35px;
  line-height: 35px;
  width: 100%;
  border: none;
  outline: none;
}

.button:hover
{
  background-color: green;
}

@media (max-width:480px)
{
  .container
  {
    padding: 5px;
    width: 100%;
    
  }
  .form-group
  {
    margin-bottom: -10px;
  }
  .form-control
  {
    width: 100%;
    padding: 8px 0 8px 40px;
  }

  .panel-body
  {
   
    width: 100%;
  }
}
.forget
{
  margin: 10px;
}

.signlog
{
  margin: 25px;
  padding-left: 150px;
}

@media (max-width:991px){

  html{
     font-size: 55%;
  }

}

@media (max-width:768px){

  #search-btn{
     display: inline-block;
  }

  .header .flex .search-form{
     position: absolute;
     top: 99%; left: 0; right: 0;
     border-top: var(--border);
     border-bottom: var(--border);
     background-color: var(--white);
     border-radius: 0;
     width: auto;
     padding: 2rem;
     clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
     transition: .2s linear;
  }

  .header .flex .search-form.active{
     clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
  }

}

@media (max-width:450px){

  html{
     font-size: 50%;
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

                    
                    <div>
                        <a href="Registration.php" class="btn">Sign Up</a>
                    </div>
                </nav>


    <div class="container">
            <h1>LOGIN </h1>
          <div class="panel-body">
            <form action="login_check.php" method="POST">
            

              <div class="form-group">
                <i class="fa fa-envelope lock" aria-hidden="true"></i>
                <input
                  type="text"
                  placeholder="Email"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>

              <div class="form-group">
                <i class="fa fa-lock lock" aria-hidden="true"></i>
                <input
                  type="password"
                  placeholder="Password"3
                  class="form-control"
                  id="password"
                  name="password"
                  />
                </div>
              <input type="submit" name="submit" class="button" value="login" />
            </form>
          </div>
          <div class="forget">
            <a href="forgetacc.html">Forgot password?</a> 
            <a href="Registration.php" class="signlog">Sign up </a>
          </div>
        </div>
        </div> 
       
      
  </body>
</html>
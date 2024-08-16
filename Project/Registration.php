

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <meta name="viewport"  content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
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
              padding: 5px 10px; 
          }
      
          .content {
              margin-top: 5%;
          }
      }
      





   
   
   
   
   
   
   
      *
    {
      font-size: large;
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

.check-button
{
  font-size: 50px;
  margin-right: 15px;
}

.check-button
{
  margin: 15px;
}
.button
{
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



.popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #f9f9f9;
    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 1000;
}

</style>

    



  </head>
  <body>

    <div class="hero">
      <nav>
          <img src="image/logo orig.png" class="logo">
          <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php">Course</a></li>
          <li><a href="index.php">Categories</a></li>
          </ul>

          
          <div>
              <a href="login.php" class="btn">Sign In</a>
          </div>
      </nav>


      <div class="container">
    <h1>Registration Form</h1>
    <div class="panel-body">
        <form action="connect.php" method="post">
            <div class="form-group">
                <i class="fa fa-user  lock" aria-hidden="true"></i>
                <input type="text" placeholder="Full Name" class="form-control" id="Name" name="name" required />
            </div>

            <div class="form-group">
                <i class="fa fa-envelope lock" aria-hidden="true"></i>
                <input type="text" placeholder="Email" class="form-control" id="Email" name="email" required />
            </div>

            <div class="form-group">
                <i class="fa fa-lock lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" class="form-control" id="password" name="password" required />
            </div>

            <div class="form-group">
                <i class="fa fa-lock lock" aria-hidden="true"></i>
                <input type="password" placeholder="Confirm Password" class="form-control" id="cpassword" name="cpassword" required />
            </div>

            <div class="form-group">
                <div>
                    <input type="radio" name="gender" value="m" id="male" required /> 
                    <i class="fa fa-male lock" aria-hidden="true" style="margin-right: 10px; padding: 5px;"></i>
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

                    <input type="radio" name="gender" value="f" id="female" required /> 
                    <i class="fa fa-female lock" aria-hidden="true" style="margin-right: 10px; padding: 5px;"></i>

                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

                    <input type="radio" name="gender" value="o" id="others" required /> 
                    <i class="fa fa-transgender lock" aria-hidden="true" style="margin-right: 10px; padding: 5px;"></i>
                </div>
            </div>

            <div class="form-group">
                <i class="fa fa-phone-square lock" aria-hidden="true"></i>
                <input type="number" placeholder="Phone" class="form-control" id="phone" name="phone" required />
            </div>

            <div class="form-group">
                <input type="checkbox" class="check-button" required />
                <a href="T/C.html">I accept the terms and conditions</a>
            </div>

            <input type="submit" class="button" value="Sign Up" />
        </form>
    </div>
</div> 

  </body>
</html>

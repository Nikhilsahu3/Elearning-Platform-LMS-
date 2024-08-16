<?php
    include('header.php')
?>
<title>course</title>
<style>
  .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 20px;
    margin-top: 50px;
  }
  
  .product-card {
    width: 300px;
    border-radius: 10px;
    -webkit-box-shadow:  0px 0px 47px -20px rgba(0,0,0,1);
    -moz-box-shadow:  0px 0px 47px -20px rgba(0,0,0,1);
    box-shadow:  0px 0px 47px -20px rgba(0,0,0,1);
    margin: 60px 0px 60px 0px;
    background-color: #fff;
  }
  
  .product-image {
    height: 300px;
    overflow: hidden;
    position: relative;
    top:-90px;
    padding: 10px;
  }
  
  .product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s;
    border-radius: 10px;
  }
  
  .product-image:hover img {
    transform: scale(1.1);
  }
  
  .product-details {
    padding: 20px;
    margin-top:-90px;
  }
  
  .product-title {
    font-size: 1.5rem;
    margin-bottom: 10px;
  }
  
  .product-price {
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 10px;
  }
  
  .product-description {
    font-size: 1rem;
    line-height: 1.5;
    margin-bottom: 10px;
    color: #666;
  }
  
  .product-details.expand {
    height: auto;
  }
  
  .product-details .expand-button {
    cursor: pointer;
    font-size: 1rem;
    color: #08ee00;
    text-align: center;
    margin-top: 10px;
  }
  
  .product-details .expand-button:hover {
    color: #000;
    text-decoration: underline;
    }
    .buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .add-to-cart{
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    color: #ffffff;
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
  }
  
  .add-to-cart {
    background-color: green;
  }
  
 
  .add-to-cart:hover,
  .compare:hover {
    opacity: 0.8;
  }
  


  </style>
<body>
<div  class="container" >
<div class="product-card">
                 <a href="https://www.tutorialspoint.com/html/html_tutorial.pdf"  target="_blank">
                   <div class="product-image">
                    <img src="image/html.jpg" alt="Product Image" >
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>HTML</center></h2>
                    <p class="product-price">FREE</p>
                    <p class="product-description">Learn the basics of HTML, the language of the web, in this introductory course.</p>
                    <div class="buttons">
                      <button class="add-to-cart" >Download</button>
                    </div>
                  </div>
                </div></a>

                <a href="https://www.tutorialspoint.com/css/css_tutorial.pdf" target="_blank"> 
                <div class="product-card">
                  <div class="product-image">
                    <img src="image/css.jpg" alt="Product Image">
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>CSS</center></h2>
                    <p class="product-price">FREE</p>
                    <p class="product-description">Discover the fundamentals of CSS and enhance your web design skills with this introductory course.</p>
                    <div class="buttons">
                      <button class="add-to-cart">Download</button>
                      
                    </div>
                  </div>
                </div></a>

                <a href="https://www.tutorialspoint.com/javascript/javascript_tutorial.pdf" target="_blank">
                <div class="product-card">
                  <div class="product-image">
                    <img src="image/js.jpg" alt="Product Image">
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>JavaScript</center></h2>
                    <p class="product-price">Free</p>
                    <p class="product-description">Unlock the power of JavaScript and dive into web development with this introductory course.</p>
                    <div class="buttons">
                      <button class="add-to-cart">Download</button>
                    </div>
                  </div>
                </div>
                </a>


                <div class="product-card">
                 <a href="https://www.tutorialspoint.com/php/php_tutorial.pdf" target="_blank"> <div class="product-image">
                    <img src="image/php.jpg" alt="Product Image" >
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>PHP</center></h2>
                    <p class="product-price">FREE</p>
                    <p class="product-description">Learn the basics of HTML, the language of the web, in this introductory course.</p>
                    <div class="buttons">
                      <button class="add-to-cart" >Download</button>
                    </div>
                  </div>
                </div></a>

                <a href="https://www.tutorialspoint.com/mysql/mysql_tutorial.pdf" target="_blank">
                <div class="product-card">
                  <div class="product-image">
                    <img src="image/mysql.png" alt="Product Image">
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>MYSQL</center></h2>
                    <p class="product-price">FREE</p>
                    <p class="product-description">Discover the fundamentals of CSS and enhance your web design skills with this introductory course.</p>
                    <div class="buttons">
                      <button class="add-to-cart">Download</button>
                      
                    </div>
                  </div>
                </div></a>

                <a href="https://www.tutorialspoint.com/java/java_tutorial.pdf" target="_blank">
                <div class="product-card">
                  <div class="product-image">
                    <img src="image/java.png" alt="Product Image">
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>Java</center></h2>
                    <p class="product-price">Free</p>
                    <p class="product-description">Unlock the power of JavaScript and dive into web development with this introductory course.</p>
                    <div class="buttons">
                      <button class="add-to-cart">Download</button>
                    </div>
                  </div>
                </div>
                </a>


            
</body>
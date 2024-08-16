<?php
include('header.php');
?>
<title>Software</title>

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
                 <a href="https://www.apachefriends.org/download.html"  target="_blank">
                   <div class="product-image">
                    <img src="image/xamp.jpg" alt="Product Image" >
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>XAMPP</center></h2>
                    <p class="product-price">FREE</p>
                    <p class="product-description">XAMPP is a free and open-source cross-platform web server solution stack package developed by Apache Friends, consisting mainly of the Apache HTTP Server, MariaDB database, and interpreters for scripts written in the PHP and Perl programming languages.</p>
                    <div class="buttons">
                      <button class="add-to-cart" >Download</button>
                    </div>
                  </div>
                </div></a>

                <a href="https://code.visualstudio.com/download" target="_blank"> 
                <div class="product-card">
                  <div class="product-image">
                    <img src="image/vscode.jpg" alt="Product Image">
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>Visual Studio Code</center></h2>
                    <p class="product-price">FREE</p>
                    <p class="product-description">Visual Studio Code, also commonly referred to as VS Code, is a source-code editor developed by Microsoft for Windows, Linux and macOS. Features include support for debugging, syntax highlighting, intelligent code completion, snippets, code refactoring, and embedded Git</p>
                    <div class="buttons">
                      <button class="add-to-cart">Download</button>
                      
                    </div>
                  </div>
                </div></a>

                <a href="https://sourceforge.net/projects/mingw/files/latest/download" target="_blank">
                <div class="product-card">
                  <div class="product-image">
                    <img src="image/mingw.png" alt="Product Image">
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>Mingw</center></h2>
                    <p class="product-price">Free</p>
                    <p class="product-description">MinGW, formerly mingw32, is a free and open source software development environment to create Microsoft Windows applications.</p>
                    <div class="buttons">
                      <button class="add-to-cart">Download</button>
                    </div>
                  </div>
                </div>
                </a>


                <div class="product-card">
                 <a href="https://developer.android.com/studio?gad_source=1&gclid=CjwKCAjwtqmwBhBVEiwAL-WAYdUs9JqHJt8yU8YRUJptlsgCbq8MIr0N4iZe-R-4_5KhpaU5CkHmpRoCEpYQAvD_BwE&gclsrc=aw.ds" target="_blank"> <div class="product-image">
                    <img src="image/andstudio.png" alt="Product Image" >
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>Android Studio</center></h2>
                    <p class="product-price">FREE</p>
                    <p class="product-description">Android Studio is the official integrated development environment for Google's Android operating system, built on JetBrains' IntelliJ IDEA software and designed specifically for Android development. It is available for download on Windows, macOS and Linux based operating systems.</p>
                    <div class="buttons">
                      <button class="add-to-cart" >Download</button>
                    </div>
                  </div>
                </div></a>

                <a href="https://dev.mysql.com/downloads/installer/" target="_blank">
                <div class="product-card">
                  <div class="product-image">
                    <img src="image/mysql.png" alt="Product Image">
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>MYSQL</center></h2>
                    <p class="product-price">FREE</p>
                    <p class="product-description">MySQL is an open-source relational database management system. Its name is a combination of "My", the name of co-founder Michael Widenius's daughter My, and "SQL", the acronym for Structured Query Language.</p>
                    <div class="buttons">
                      <button class="add-to-cart">Download</button>
                      
                    </div>
                  </div>
                </div></a>

                <a href="https://www.oracle.com/in/java/technologies/downloads/#jdk22-windows" target="_blank">
                <div class="product-card">
                  <div class="product-image">
                    <img src="image/java.png" alt="Product Image">
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>Java development Kit</center></h2>
                    <p class="product-price">Free</p>
                    <p class="product-description">The Java Development Kit is a distribution of Java technology by Oracle Corporation. It implements the Java Language Specification and the Java Virtual Machine Specification and provides the Standard Edition of the Java Application Programming Interface.</p>
                    <div class="buttons">
                      <button class="add-to-cart">Download</button>
                    </div>
                  </div>
                </div>
                </a>



                
                <div class="product-card">
                 <a href="https://www.python.org/downloads/" target="_blank"> <div class="product-image">
                    <img src="image/python.png" alt="Product Image" >
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>Python</center></h2>
                    <p class="product-price">FREE</p>
                    <p class="product-description">Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation.</p>
                    <div class="buttons">
                      <button class="add-to-cart" >Download</button>
                    </div>
                  </div>
                </div></a>

                <a href="https://www.eclipse.org/downloads/packages/installer" target="_blank">
                <div class="product-card">
                  <div class="product-image">
                    <img src="image/Eclipse.png" alt="Product Image">
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>Eclipse</center></h2>
                    <p class="product-price">FREE</p>
                    <p class="product-description">Eclipse is an integrated development environment used in computer programming. It contains a base workspace and an extensible plug-in system for customizing the environment. </p>
                    <div class="buttons">
                      <button class="add-to-cart">Download</button>
                      
                    </div>
                  </div>
                </div></a>

                <a href="https://archive.org/download/turbo-cfor-mac-turbo-c.net/Turbo.C.3.2%20for%20windows%20%28turbo-c.net%29.zip" target="_blank">
                <div class="product-card">
                  <div class="product-image">
                    <img src="image/turbocpp.png" alt="Product Image">
                  </div>
                  <div class="product-details">
                    <h2 class="product-title"><center>Turbo C++</center></h2>
                    <p class="product-price">Free</p>
                    <p class="product-description">Turbo C++ is a discontinued C++ compiler and integrated development environment originally from Borland.</p>
                    <div class="buttons">
                      <button class="add-to-cart">Download</button>
                    </div>
                  </div>
                </div>
                </a>



            
</body>

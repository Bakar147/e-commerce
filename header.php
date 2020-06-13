<?php  include "inc/function.php"?>

<html>
    <head>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
       <script src="inc/ckeditor/ckeditor.js"></script>
                 
    </head>
    
    <body>
        
        
             <!-- --><!-- --><!-- --><!-- --><!-- Nav 1--> <!-- --><!-- --><!-- --><!-- --><!-- -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="#">
    <img src="images/logo6.jpg" width="150" height="50" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   
  <div class="collapse  buutons navbar-collapse" id="navbarSupportedContent">

      <div class="main_text"><p>اهلا بك في سوق  <br>
          3ndna we bs</p></div>
    <ul class="navbar-nav ml-auto">
      
        <!-- buttons -->
      <button  class="btn btn1 btn-outline-success my-2 my-sm-0">
        
         <li class="nav-item active">
        <a class="nav-link" href="login.php">الدخول <span class="sr-only">(current)</span></a>
      </li>
        </button>
        
         <button  class="btn btn1 btn-outline-success my-2 my-sm-0">
      <li class="nav-item active">
        <a class="nav-link" href="register.php">تسجيل عضويه</a>
      </li>
        </button>
        
        
      
    </ul>
    
      </div>
</nav>
<div class="c"></div>
             <!-- --><!-- --><!-- --><!-- --><!-- Nav 2  --><!-- --><!-- --><!-- --><!-- --><!-- -->
        
        
        <div class="menuBar">
    <ul class="listaa">
       <li><a href="index.php">الرئيسيه</a></li>
        <?php get_cat1_index(); ?>
        
        <div class="c"></div>
    </ul>
            <div class="searchh">
                  <form class=" form-inline my-2 my-lg-0" action="search_index.php" method="get">
                  <input onkeyup="getProducts(this.value)" class="form-control mr-sm-2" type="search" placeholder="ابحث عن منتجك هنا" aria-label="Search" name="searehArea">
                  <button name="searehBtn" class="btn btn-outline-success my-2 my-sm-0" type="submit">ابحث</button>
                </form>
            </div>
      <div class="c"></div>
    </div>
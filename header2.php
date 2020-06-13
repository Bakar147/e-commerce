<?php  include "inc/function.php"?>
<?php cart(); ?>

<html>
    <head>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
      <!--  <script src="inc/ckeditor/ckeditor.js"></script> -->
             
    </head>
    
    <body>
        
       
        <div class="menuBar2">
            
             <i class="logout btn-outline-danger fas fa-sign-out-alt"><a  class="" href="logout.php">تسجيل الخروج </a></i>
            
       
    <ul class="listaa2">
         
       <li><a href="home.php">الرئيسيه</a></li>
        <?php get_cat1_home() ; ?>
        
        <div class="c"></div>
    </ul>
            
            <div class="searchh2">
                  <form class="form-inline my-2 my-lg-0" action="search_home.php" method="get">
                  <input onkeyup="getProducts(this.value)" class="form-control mr-sm-2" type="search" placeholder="ابحث عن منتجك هنا" aria-label="Search" name="searehArea">
                  <button name="searehBtn" class="btn btn-outline-success my-2 my-sm-0" type="submit">ابحث</button>
                </form>
            </div>
      
            
               <a class="navbar-brand logo2" href="#">
    <img src="images/logo6.jpg" width="150" height="50" alt="">
  </a>
           
            

         
            <div class="c"></div>
    </div>




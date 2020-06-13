<?php
    
   
   if(isset($_POST['login']))
   {
       $email = $_POST['uemail'];
       $password = $_POST['upassword'];
    
    $con = mysqli_connect("localhost","root","","ecommerce");
       
       $result = mysqli_query($con,"select * from users where email = '$email' and password = '$password' ");
       $var = mysqli_fetch_array($result);
       
       
      
       if( $var['user']== "Admin")
       {
           header("location:AdminDashboard.php");
           exit;
       }
       
       else if ($var['user'] == "Customer")
       {
           header("location:home.php");
           exit;
       }
       else 
       {
            header("location:register.php");
           exit;
       }
              
   }

       
    ?>




<?php include 'header.php' ?>


<h1 class="text-center text-primary text_login">الدخول</h1>
<div class="container my-5 login">
    

    <form method="post" action="login.php" >
      
        <div class="form-group">
            <label class="label_login" >الايميل</label>
            <input class="form-control input_login" type="email" name="uemail">
        </div>
       
        <div class="form-group">
            <label class="label_login">كلمة السر</label>
            <input class="form-control input_login" type="password" name="upassword">
        
        </div>
        
        <button name="login" class="btn btn-danger label_login">تسجيل الدخول </button>
        
    <div class="c"></div>
    
    </form>


    <a href="register.php" class="label_login"><h7>للتسجيل في الموقع اضغط هنا</h7></a>
    <div class="c"></div>
</div>


 <?php include 'footer.php'?>


<?php 
    // connection

    //post value
$name  = @$_POST['uname'];
$email = @$_POST['uemail'];
$password = @$_POST['upassword'];
$phone  = @$_POST['uphone'];
$country  = @$_POST['ucountry'];
$userType =  @$_POST['uType'];



$con = mysqli_connect ("localhost","root","","ecommerce");

if (isset($_POST['addUser']))
{
    if (empty($name) ||empty($email)||empty($password) ||empty($phone) ||empty($country)||empty($userType))
    {
        echo '<script> alert("الرجاء اضافه جميع البيانات بالكامل ");</script>';
    }
    
    else
    {
        
        $query ="INSERT INTO users (name, email , password ,phone , country , user) VALUES ('$name', '$email' ,'$password' , '$phone' ,'$country' ,'$userType')";
        
      //  mysqli_query($con,$query);
        
        if(mysqli_query($con,$query)){
            header("location:login.php");
           exit;
        
          
          } else{
            echo "$query" . mysqli_error($con);
           }
 
    }
}
   mysqli_close($con);
?>





















<?php include 'header.php' ?>





<h1 class="text-center text-primary text_regist">تسجيل عضوية</h1>
<div class="container regist">


    <form method="post">
        
        <div class="form-group">
            <label class="label_regist">الاسم :</label>
            <input name="uname" class="form-control  input_regist" type="text">
        
        </div>
        
        <div class="form-group">
            <label class="label_regist">الايميل :</label>
            <input name="uemail" class="form-control  input_regist" type="email">
        
        </div>
        
        <div class="form-group">
            <label class="label_regist">كلمة السر :</label>
            <input name="upassword" class="form-control input_regist" type="password">
        
        </div>
        
        <div class="form-group">
            <label class="label_regist">رقم التليفون :</label>
            <input name="uphone" class="form-control input_regist" type="text">
        
        </div>
        
    
        
        
        <div class="form-group">
            <label class="label_regist"> البلد :</label>
           <select name="ucountry" class="custom-select input_regist" id="inputGroupSelect01">
                  <option selected>اختر بلدك...</option>
                  <option value="Egypt">مصر</option>
                  <option value="Saudia ">السعودية</option>
                  <option value="Lbnan">لبنان</option>
                  <option value="Algzaer ">الجزائر</option></select>

        </div>
        
        
        
        
        
        
        <div class="form-group">
            <label class="label_regist"> نوع المستخدم :</label>
           <select name="uType" class="custom-select input_regist" id="inputGroupSelect01">
                  
                  <option value="Customer" selected>مستخدم عادي </option>
                  <option value="Admin">ادمن </option>
           </select>

        </div>
        
        
        <button type="submit" name="addUser" class="btn btn-danger label_regist">إضافة الحساب </button>
    
    
    <div class="c"></div>
    
        </form>



</div>





<?php include 'footer.php'  ?>
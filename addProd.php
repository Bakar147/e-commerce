

<?php 

    //post value
$title  = @$_POST['p_title'];
$category_pro = @$_POST['category_pro'];

$p_img = @$_FILES['p_img']['name'];
$p_img_tmp= @$_FILES['p_img']['tmp_name'];

$price  = @$_POST['price'];
$desc =  @$_POST['desc'];
$key_word  = @$_POST['key_word'];

// move upload images
 move_uploaded_file($p_img_tmp,"Admin/images/$p_img");


// connection

$con = mysqli_connect ("localhost","root","","ecommerce");

if (isset($_POST['addProduct']))
{
    if (empty($title) ||empty($category_pro)||empty($p_img) ||empty($price) ||empty($desc)||empty($key_word))
    {
        echo '<script> alert("الرجاء اضافه جميع البيانات بالكامل ");</script>';
    }
    
    else
    {
        
        $query ="INSERT INTO products (P_title, P_category , P_image ,P_price , P_desc , P_key_word) VALUES ('$title', '$category_pro' ,'$p_img' , '$price' ,'$desc' ,'$key_word')";
        
      //  mysqli_query($con,$query);
        
        if(mysqli_query($con,$query)){
            header("location:addProd.php");
           exit;
        
          
          } else{
            echo "$query" . mysqli_error($con);
           }
 
    }
}
   mysqli_close($con);
?>






<?php include 'header2.php'?>

<!-- --><!-- --><!-- --><!-- --><!-- -->
<div class="all">
    <div class="adminmenu">
        <ul>
           <li class="adminmenu_add"><a href="addCat.php" >إضافة تصنيف </a></li>
            <li class="adminmenu_add"><a href="addProd.php">إضافة منتج </a></li>
            <li class="adminmenu_del"><a href="delCat.php">حذف تصنيف  </a></li>
            <li class="adminmenu_del"><a href="delProd.php">حذف منتج </a></li>
        </ul>
                <div class="c"></div>
    </div>       
<!--  -->



<div class="adminBody">
    <form action="addProd.php" method="post" enctype="multipart/form-data">     <!--enctype="multipart/form-data"     عشان فايل الصوره -->
        
        
        <label>عنوان المنتج </label><br>
        <input class="form-control" type="text" name="p_title" >
       <label>تصنيف المنتج</label><br>
        <select name="category_pro" class="custom-select" id="inputGroupSelect01">
            
            <option selected>اختر تصنيف المنتج </option>
             <?php get_cat2(); ?>
           
        </select>
        <label>صوره المنتج</label><br>
        <input class="form-control" type="file" name="p_img" value="اختر صوره">

       
        <label>سعر المنتج</label><br>
        <input class="form-control" type="text" name="price" >
        <label>وصف المنتج</label><br>
        <textarea  class="text_area_pro" name="desc"></textarea>
        <br>
        <label>كلمات مفتاحية</label>
        <input class="form-control" type="text" name="key_word" >
        
                <input  class="btn-info addcatt"type="submit" value="اضافة المنتج" name="addProduct"> 
    </form>
    
    
</div>

    
    
</div>




<!-- --><!-- --><!-- --><!-- --><!-- -->
<?php include 'footer.php'?>

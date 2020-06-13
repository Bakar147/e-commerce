<?php 


 $c_id_name = @$_POST['category_delete'];


$con = mysqli_connect ("localhost","root","","ecommerce");



//delete cat
if(isset($_POST['delCat']))
{
    $query_del_cat="DELETE FROM category WHERE c_id ='$c_id_name'";
    
    $run =mysqli_query($con,$query_del_cat);
   
       
    
    
}
?>



<?php include 'header2.php' ?>
<!-- --><!-- --><!-- --> <!--start content --><!-- --><!-- --><!-- -->
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
    <form action="delCat.php" method="post">
        <label>اسم التصنيف</label><br>
        <select name="category_delete" class="custom-select" id="inputGroupSelect01">
            
            <option selected>اختر تصنيف المنتج </option>
             <?php get_cat2(); ?>
           
        </select>
        <input  class="btn-danger delcatt"type="submit" value="احذف تصنيف" name="delCat">
    </form>
    
    
</div>

    
    
</div>
<!-- --><!-- --><!-- --> <!--end content --><!-- --><!-- --><!-- -->
<!-- --><!-- --><!-- --><!-- footer --><!-- --><!-- --><!-- -->
<?php include 'footer.php' ?>
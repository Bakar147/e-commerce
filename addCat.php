<?php 

$con = mysqli_connect ("localhost","root","","ecommerce");

//post value
$c_name = @$_POST['c_name'];
//insert category
if(isset($_POST['addcat']))
{
    $query ="INSERT INTO category (c_name) VALUES ('$c_name')";
   
    
    if(mysqli_query($con,$query)){
           echo "Records inserted successfully.";
          }
    else{
            echo "ERROR: Could not able to execute $query.".mysqli_error($con);
           }
 
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
    <form action="addCat.php" method="post">
        <label>اسم التصنيف</label><br>
        <input class="form-control" type="text" name="c_name" >
        <input  class="btn-info addcatt"type="submit" value="اضافة التصنيف" name="addcat">
    </form>
    
    
</div>

    
    
</div>
<!-- --><!-- --><!-- --> <!--end content --><!-- --><!-- --><!-- -->
<!-- --><!-- --><!-- --><!-- footer --><!-- --><!-- --><!-- -->
<?php include 'footer.php' ?>
<?php 



if(isset($_GET['pro_id_del']))
    {
      $conn =mysqli_connect("localhost","root","","ecommerce");

            $id_del =  $_GET['pro_id_del'];
             $delete_pro = "delete from Products where P_id = '$id_del'";
             $run_delete = mysqli_query ($conn ,$delete_pro );
                 
                 if($run_delete)
                 {
                     header("location:delProd.php");
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


<!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->


     <div class="adminBody">
        <!--  <form action="delProd.php" method="post"> -->
    <!-- delProBtn -->
             <div class="content">
              <ul class="contentUl">
        
              <?php  del_pro_page();?>
             <div class="c"></div>
    
              </ul>
    
             </div>
    <!--    </form> -->
     </div>
    
    
</div>




    
<!-- --><!-- --><!-- --> <!--end content --><!-- --><!-- --><!-- -->
<!-- --><!-- --><!-- --><!-- footer --><!-- --><!-- --><!-- -->
<?php include 'footer.php' ?>
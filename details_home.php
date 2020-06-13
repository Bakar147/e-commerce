
<?php include 'header2.php' ?>  
<!-- --><!-- --><!--content --><!-- --><!-- -->
<?php 
$p_id= (int)$_GET['id'];
$conn =mysqli_connect("localhost","root","","ecommerce"); 
    

if (isset($_GET['id'])) //لو تم وضع قيمه لل  id  سوف يتم عمل التالي 
{
    $get_pro_info="select * from products where P_id ='$p_id'";
    $run = mysqli_query($conn,$get_pro_info);
    $result = mysqli_fetch_array($run);
    
}
?>
<div class="desc r " style="width:660">

     <div class="desc_title"><?php echo $result['P_title'] ?> </div>
     <div class="desc_body">
      
         <img src="<?php echo 'admin/images/'.$result['P_image'];?>" width="500"> 
            
    <br> 
         <p> وصف المنتج :  <?php echo $result['P_desc'] ?>  </p>
    
    </div>
</div>


<div class="pro l " style="width:320">

    <div class="desc_title">معلومات المنتج  </div>
    <div class="desc_body">
       <div id="p_info">السعر  : <?php echo $result['P_price'] ?>  </div>
       <div id="p_info">التصنيف : 
           <?php 
              
              $cat =  $result['P_category'];  
             $get_cat_name = "select * from category where c_id =$cat";
            $run_cat = mysqli_query($conn,$get_cat_name);
            $result_cat = mysqli_fetch_array($run_cat);
              echo $result_cat['c_name'] ;
    
           ?>
        </div>
       <div id="p_info">كلمات مفتاحية :<?php echo $result['P_key_word'] ?> </div>
        <br>
                     <div >
                     <a class="buy" href="<?php cart(); ?>"><button  class="btn  btn1 btn-outline-success my-2 my-sm-0">شراء الان</button>
                         </a>
                     </div>
                     <div class="c"></div>
    </div>
</div>
<div class="c"></div>





<!-- --><!-- --><!-- FOOTER --><!-- --><!-- -->
    <?php include 'footer.php' ?>
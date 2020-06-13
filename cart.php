<?php include 'header2.php' ?>  
<?php 

//session_start();
?>

<!-- --><!-- --><!--content --><!-- --><!-- -->
<br><br>

<form action="" method="post">
<table border="0" width="95%" class="table_cart">

<tr class="head_cart">
    <th>إزالة</th>
    <th>المنتج</th>
    <th>العدد</th>
    <th>السعر</th>
  
    
   
</tr>
<?php 
 
    $conn =mysqli_connect("localhost","root","","ecommerce");
    $ip = getIp(); 
    $total = 0 ;
    $total_price= "select * from cart where ip_add = '$ip'";
    $run_price = mysqli_query($conn,$total_price);
    
    while($result =  mysqli_fetch_array($run_price))
    {
        $pro_id= $result['P_id'];
        $price_pro =  "select * from products where P_id = '$pro_id'";
        $run_price_pro = mysqli_query($conn,$price_pro);
            
        while($result2  = mysqli_fetch_array($run_price_pro))
        {
            $product_price =array($result2['P_price']);
             $values = array_sum ($product_price);
             $total += $values;
            
            $product_title = $result2['P_title'];
            $product_image = $result2['P_image'];
            $product_price_single= $result2['P_price'];

    ?>
    

    
<tr align = "center">
<td> <input type="checkbox" name="remove" value="<?php echo $pro_id ; ?>"></td>
    
<td> <div><?php echo $product_title ?></div><img width="70" src="Admin/images/<?php echo $product_image ?>"></td>
    
    
    
    <?php 
           
       /*
    if(isset($_POST['update_cart']))
    {
        $qty = $_POST['qty'];
        $update_qty = "update cart set qty = '$qty'";
        $run_u_qty = mysqli_query ($conn ,$update_qty );
        
        
       $_SESSION['qty']=$qty;
        
       $total= $total * $_SESSION['qty'];
        
        
    }
*/
    ?>
    
    
    
<td> <input type="text" name="qty" size="5" value="<?php /* echo $_SESSION['qty'] ; */ ?>"></td>
    
    
    
    
    
 <td> <?php 
        $product_price_total =0;
        if(isset($_POST['update_cart']))
          {
            $qty = $_POST['qty'];
        
            $update_qty = "update cart set qty = '$qty'";
            $run_u_qty = mysqli_query ($conn ,$update_qty );
        
            $product_price_total = $product_price_single *  $qty ;
              
             echo $product_price_total; 
        }
        else
        {
        echo $product_price_single; 
        }
     
     
     ?> جنيها </td>
    
</tr>
    
    <?php } } ?> 
    

<tr align="right">
   
    <th>السعر الكلي : <?php echo $total ;?> جنيها </th>
    
</tr>

<tr align="left">
    
    <td><button class="btn btn-info" type="submit" name="update_cart">تحديث البطاقة </button></td>
    
    <td><button class="btn btn-success" type="submit" name="continue">متابعة التسوق </button></td>
   
    
    <td> <button  class= "cancel nav-link btn btn-danger" name="cancel"> الغاء التسوق</button> </td>
   

</tr>
    <?php
    
    $conn =mysqli_connect("localhost","root","","ecommerce");
    
    $ip = getIp();
    
    if(isset($_POST['update_cart']))
    {
      
            $id_remove =  $_POST['remove'];
             $delete_pro = "delete from cart where P_id = '$id_remove' and ip_add= '$ip'";
             $run_delete = mysqli_query ($conn ,$delete_pro );
                 
                 if($run_delete)
                 {
                     header("location:cart.php");
                 }
          
       }
    
    if(isset($_POST['cancel']))
    {
        
      header("location:home.php");
    }
    
    
    ?>

</table>
    
</form>
<br><br>





<!-- --><!-- --><!-- FOOTER --><!-- --><!-- -->
    <?php include 'footer.php' ?>
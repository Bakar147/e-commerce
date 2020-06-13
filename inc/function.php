<?php 


function get_cat1_index()
{
    $conn= mysqli_connect("localhost","root","","ecommerce");
    
    $get_cat="select * from category";
    $run = mysqli_query($conn,$get_cat);
    
    while($result = mysqli_fetch_array($run))
    {
        echo"<li><a href='index.php?cat_id=$result[c_id]'>$result[c_name]
        </a></li>";
        
        /* echo"<li><a href='#'>$result[c_name]
       </a></li>";*/
    }
    
}


function get_cat1_home()
{
    $conn= mysqli_connect("localhost","root","","ecommerce");
    
    $get_cat="select * from category";
    $run = mysqli_query($conn,$get_cat);
    
    while($result = mysqli_fetch_array($run))
    {
        echo"<li><a href='home.php?cat_id=$result[c_id]'>$result[c_name]
        </a></li>";
        
        /* echo"<li><a href='#'>$result[c_name]
       </a></li>";*/
    }
    
}

/********************************/
/********************************/

function get_cat2()
{
    $conn= mysqli_connect("localhost","root","","ecommerce");
    $get_cat="select * from category";
    $run = mysqli_query($conn,$get_cat);
    
    while($result = mysqli_fetch_array($run))
    {
        echo"<option value='$result[c_id]'>$result[c_name]</option>";
        
    }
    
}

/*************************/









/********************************/
/********************************/

function get_pro_search_index()
{
    $conn =mysqli_connect("localhost","root","","ecommerce");
    
    if(isset($_GET['searehBtn']))
    {
        $searehArea = $_GET['searehArea'];
        $get_pro_search = "select * from products where P_key_word like '%$searehArea'";
        $run = mysqli_query($conn,$get_pro_search);
    
        
        if (mysqli_num_rows($run)>0)
        {
            while($result = mysqli_fetch_array($run))
              {    
                echo '  
    <li class="contentLi">
      <div class="product">
          
          <div id="pro_image">
              <a href="#"><img class="conImage" src="admin/images/'.$result['P_image'].'" width="320" height="150"></a>
          </div>
          <div class="c"></div>
          <div class="pro_title">
              <a href="details_index.php">'.$result['P_title'].'</a>
          </div>
          
          <div class="pro_price">
               <label>'.$result['P_price'].'&nbsp جنيها </label>
                </div> 
          
         <div class="c"></div>
          <div id="pro_buy">
          <a class="buy" href="login.php"><button  class="btn  btn1 btn-outline-success my-2 my-sm-0">شراء الان</button>
              </a>
          </div>
          <div class="c"></div>
            </div>
        </li> ' ;
              }
        }
        
        else
        {
            
              echo' 
                <div class="not_found">
                  عذرا هذ المنتج غير موجود 
                </div> '; 
        }
        
    
}
}


/********************************/
/********************************/

function get_pro_search_home()
{
    $conn =mysqli_connect("localhost","root","","ecommerce");
    
    if(isset($_GET['searehBtn']))
    {
        $searehArea = $_GET['searehArea'];
        $get_pro_search = "select * from products where P_key_word like '%$searehArea'";
        $run = mysqli_query($conn,$get_pro_search);
    
        
        if (mysqli_num_rows($run)>0)
        {
            while($result = mysqli_fetch_array($run))
              {    
                echo '  
           
            
    <li class="contentLi">
      <div class="product">
          
          <div id="pro_image">
              <a href="#"><img class="conImage" src="admin/images/'.$result['P_image'].'" width="320" height="150"></a>
          </div>
          <div class="c"></div>
          <div class="pro_title">
              <a href="details_home.php">'.$result['P_title'].'</a>
          </div>
          
          <div class="pro_price">
               <label>'.$result['P_price'].'&nbsp جنيها </label>
                </div> 
          
         <div class="c"></div>
          <div id="pro_buy">
          <a class="buy addToCart" href="cart.php"><button  class="btn  btn1 btn-outline-success my-2 my-sm-0">شراء الان</button>
              </a>
          </div>
          <div class="c"></div>
            </div>
        </li> 
        
      ' ;
              }
        }
        
        else
        {
            
              echo' 
                <div class="not_found">
                  عذرا هذ المنتج غير موجود 
                </div> '; 
        }
        
    
   }
}


/********************************/
/********************************/
function get_product_by_category()
{
     $conn =mysqli_connect("localhost","root","","ecommerce");
    
    if(isset($_GET['cat_id']))
    {
        $cat_id = $_GET['cat_id'];
        $get_pro_cat ="select * from products where P_category = $cat_id ";
        $run = mysqli_query($conn,$get_pro_cat);
        
        if(mysqli_num_rows ($run)>0)
        {
             while($result = mysqli_fetch_array($run))
              {
                echo '  
              
    <li class="contentLi">
      <div class="product">
          
          <div id="pro_image">
              <a href="#"><img class="conImage" src="admin/images/'.$result['P_image'].'" width="320" height="150"></a>
          </div>
          <div class="c"></div>
          <div class="pro_title">
              <a href="#">'.$result['P_title'].'</a>
          </div>
          
          <div class="pro_price">
               <label>'.$result['P_price'].'&nbsp جنيها </label>
                </div> 
          
         <div class="c"></div>
          <div id="pro_buy">
          <a class="buy" href="login.php"><button  class="btn  btn1 btn-outline-success my-2 my-sm-0">شراء الان</button>
              </a>
          </div>
          <div class="c"></div>
            </div>
        </li>
        
        ' ;
              }
            
        }
        else
        {
              echo' 
                <div class="not_found">
                  لا يوجد منتج لعرضة 
                </div> ';  
        }
        
    }
}

/********************************/
/********************************/

function get_product_to_index()
{
    
   $conn =mysqli_connect("localhost","root","","ecommerce");
   $get_pro="select * from products";
   $run = mysqli_query($conn,$get_pro);
            
    if (! isset($_GET['cat_id']))
        {
             while($result = mysqli_fetch_array($run))
               {   
               echo '  
               <li class="contentLi">
                 <div class="product">
                     
                     <div id="pro_image">
                         <a href="#"><img class="conImage" src="admin/images/'.$result['P_image'].'" width="320" height="150"></a>
                     </div>
                     <div class="c"></div>
                     <div class="pro_title">
                         <a href="details_index.php?id='.$result['P_id'].'">'.$result['P_title'].'</a>
                     </div>
                     
                     <div class="pro_price">
                          <label>'.$result['P_price'].'&nbsp LE</label>
                           </div> 
                     
                    <div class="c"></div>
                     <div id="pro_buy">
                     <a class="buy" href="login.php"><button  class="btn  btn1 btn-outline-success my-2 my-sm-0">شراء الان</button>
                         </a>
                     </div>
                     <div class="c"></div>
                       </div>
                   </li> ' ;
               }
                       
        }
    
      
}


/********************************/
/********************************/

function get_product_to_home()
{
    
    $conn =mysqli_connect("localhost","root","","ecommerce");
    $get_pro="select * from products";
    $run = mysqli_query($conn,$get_pro);
    if (! isset($_GET['cat_id']))
    {
    while($result = mysqli_fetch_array($run))
    {   
    echo '  
    
    

    <li class="contentLi">
      <div class="product">
          
          <div id="pro_image">
              <a href="#"><img class="conImage" src="admin/images/'.$result['P_image'].'" width="320" height="150"></a>
          </div>
          <div class="c"></div>
          <div class="pro_title">
              <a href="details_home.php?id='.$result['P_id'].'">'.$result['P_title'].'</a>
          </div>
          
          <div class="pro_price">
               <label>'.$result['P_price'].'&nbsp جنيها</label>
                </div> 
          
         <div class="c"></div>
          <div id="pro_buy">
          <a class="buy" href="home.php?add_car_id='.$result['P_id'].'"><button  class="btn  btn1 btn-outline-success my-2 my-sm-0">شراء الان</button>
              </a>
          </div>
          
          
          
          <div class="cart_link">
              <a href="cart.php">الذهاب الي البطاقه</a>
          </div>
          
          
          
          <div class="c"></div>
            </div>
        </li>
        
   
        ' ;
    }
    
    }
}

/********************************/
/********************************/

// شغل ال cart  بقي ي معلم 

//get ip 
function getIp()
{
    $ip = $_SERVER['REMOTE_ADDR'];
    
    if (!empty ($_SERVER['HTTP_CLIENT_IP']))
         {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
         }
    elseif(!empty ($_SERVER['HTTP_X_FORWARDED_FOR']))
         {
             $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
         }
    
    return $ip;
}


// cart function 

function cart()
{ 
    if (isset($_GET['add_car_id']))
    {
        $conn =mysqli_connect("localhost","root","","ecommerce");
         $ip = getIp();
         $pro_id= (int) $_GET['add_car_id'];
         $get_cart="select * from cart where ip_add = '$ip' and P_id = '$pro_id'";
        $run_get = mysqli_query($conn,$get_cart);
        
        
        if (mysqli_num_rows($run_get) > 0)
        {
          echo ' ';
           
        }
        else
        {
             $insert_cart = "insert into cart (P_id , ip_add) values ('$pro_id','$ip') ";
            
            $run_insert = mysqli_query($conn,$insert_cart);
            
            echo ' <script>alert("تم اضافة المنتج للبطاقة");</script> ' ;
      
        }
  
    }

}
 
/*******************/
function tota_price()
{
    
    $conn =mysqli_connect("localhost","root","","ecommerce");
         $ip = getIp();
    
    $total = 0 ;
    $total_price= "select * from cart where ip_add = '$ip'";
    $run_price = mysqli_query($conn,$total_price);
    
    while($result =  mysqli_fetch_array($run_price))
    {
        $pro_id= result['P_id'];
        
        $price_pro =  "select * from products where P_id = '$pro_id'";
        $run_price_pro = mysqli_query($conn,$price_pro);
            
        while($result2  = mysqli_fetch_array($run_price_pro))
        {
            $products_price =array($result2['P_price']);
            
            $values = array_sum ($products_price);
            
            $total +=$values;
        }
        
        echo $total ;
    }
    
}



/***************/


function del_pro_page ()
{
     $conn =mysqli_connect("localhost","root","","ecommerce");
    $get_pro="select * from products";
    $run = mysqli_query($conn,$get_pro);
    if (! isset($_GET['cat_id']))
    {
    while($result = mysqli_fetch_array($run))
    {
    echo '  


    <li class="contentLi_del">
      <div class="del_product">
          
          <div id="del_image">
              <a href="#"><img class="del_conImage" src="admin/images/'.$result['P_image'].'" width="120" height ="70"></a>
          </div>
          <div class="c"></div>
          <div class="del_title">
              <a href="details_home.php?id='.$result['P_id'].'">'.$result['P_title'].'</a>
          </div>
          <br>
        <a href="delProd.php?pro_id_del='.$result['P_id'].'"> <input  class="btn-danger delpro_btn"type="submit" value="احذف المنتج" name="delProBtn"></a>
           
          
          <div class="c"></div>
            </div>
        </li>
        
   
        ' ;
    }
    
    }
}

















?>
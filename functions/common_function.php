<?php

include('./includes/connect.php');

function getproducts(){
        global $con;
        if(!isset($_GET['category'])){
            $select_query="select * from `products` order by product_title limit 0,10";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id']; 
                $product_title=$row['product_title']; 
                $product_description=$row['product_description'];
                $product_category=$row['category_id']; 
                $product_image=$row['product_image'];      
                $product_price=$row['product_price'];
                echo "  <div class='col-md-4 mb-2'>
                            <div class='card'>
                                <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$product_title</h5>
                                    <p class='card-text'>$product_description</p>
                                    <p class='card-text'>Pret: $product_price RON</p>
                                    <a href='index.php?add_to_cart=$product_id' class='btn btn-danger' style='border:3px solid RosyBrown'>Adauga in cos</a>
                                    <a href='product_detail.php?product_id=$product_id' class='btn btn-danger' style='border:3px solid RosyBrown'>Descriere</a>
                                </div>
                            </div>
                        </div>";
            }
        }
}

function getuniquecategories(){
    global $con;
    
    if(isset($_GET['category'])){
        $category_id=$_GET['category'];
        $select_query="select * from `products` where category_id=$category_id";
        $result_query=mysqli_query($con,$select_query);
        while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id']; 
            $product_title=$row['product_title']; 
            $product_description=$row['product_description'];
            $product_category=$row['category_id']; 
            $product_image=$row['product_image'];      
            $product_price=$row['product_price'];
            echo "  <div class='col-md-4 mb-2'>
                        <div class='card'>
                            <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <p class='card-text'>Pret: $product_price RON</p>
                                <a href='index.php?add_to_cart=$product_id' class='btn btn-danger' style='border:3px solid RosyBrown'>Adauga in cos</a>
                                <a href='product_detail.php?product_id=$product_id' class='btn btn-danger' style='border:3px solid RosyBrown'>Descriere</a>
                            </div>
                        </div>
                    </div>";
        }
    }
}


function getcategories(){
    global $con;
        $select_categories="select * from `categories`";
        $result_categories=mysqli_query($con,$select_categories);
        while($row_data=mysqli_fetch_assoc($result_categories)){
            $category_title=$row_data['category_title'];
            $category_id=$row_data['category_id'];
            echo "  <li class='nav-item'>
                        <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
                    </li> ";
        }
}

function search(){
    global $con;
    if(isset($_GET['search_data_product'])){
        $search_data_value=$_GET['search_data'];
        $search_query="select * from `products` where product_title like '%$search_data_value%'";
        $result_query=mysqli_query($con,$search_query);
        $number=mysqli_num_rows($result_query);
        if($number==0){
            echo "<h2 class='text-center text-danger'>Nu a fost gasit niciun produs.</h2>'";
        }
        while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id']; 
            $product_title=$row['product_title']; 
            $product_description=$row['product_description'];
            $product_category=$row['category_id']; 
            $product_image=$row['product_image'];      
            $product_price=$row['product_price'];
            echo "  <div class='col-md-4 mb-2'>
                        <div class='card'>
                            <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <p class='card-text'>Pret: $product_price RON</p>
                                <a href='index.php?add_to_cart=$product_id' class='btn btn-danger' style='border:3px solid RosyBrown'>Adauga in cos</a>
                                <a href='product_detail.php?product_id=$product_id' class='btn btn-danger' style='border:3px solid RosyBrown'>Descriere</a>
                                
                            </div>
                            <a href='index.php' class='btn btn-danger' style='border:3px solid RosyBrown'>Inapoi</a>
                        </div>
                    </div>";
        }
    }
}


function getallproducts(){
    global $con;
    if(!isset($_GET['category'])){
        $select_query="select * from `products` order by product_title";
        $result_query=mysqli_query($con,$select_query);
        while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id']; 
            $product_title=$row['product_title']; 
            $product_description=$row['product_description'];
            $product_category=$row['category_id']; 
            $product_image=$row['product_image'];      
            $product_price=$row['product_price'];
            echo "  <div class='col-md-4 mb-2'>
                        <div class='card'>
                            <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <p class='card-text'>Pret: $product_price RON</p>
                                <a href='index.php?add_to_cart=$product_id' class='btn btn-danger' style='border:3px solid RosyBrown'>Adauga in cos</a>
                                <a href='product_detail.php?product_id=$product_id' class='btn btn-danger' style='border:3px solid RosyBrown'>Descriere</a>
                            </div>
                        </div>
                    </div>";
        }
    }

}

function product_detail(){
    global $con;
    if(isset($_GET['product_id'])){ 
    if(!isset($_GET['category'])){
        $product_id=$_GET['product_id'];
        $select_query="select * from `products` where product_id=$product_id";
        $result_query=mysqli_query($con,$select_query);
        while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id']; 
            $product_title=$row['product_title']; 
            $product_description=$row['product_description'];
            $product_category=$row['category_id']; 
            $product_image=$row['product_image'];      
            $product_price=$row['product_price'];
            echo "  
                    <div class='col-md-6'>
                        <div class='card'>
                            <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                        </div>
                    </div>
                    
                    <div class='col-md-5 text-center'>
                        <div class='card'>
                            <div class='card-body'>
                            <h2 class='card-title'>$product_title</h2>
                            <h6 class='card-text'>$product_description</h6>
                            <h5 class='card-text'>Pret: $product_price RON</h5>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-danger' style='border:3px solid RosyBrown'>Adauga in cos</a>
                            
                        </div>
                        <a href='index.php' class='btn btn-danger' style='border:3px solid RosyBrown'>Inapoi</a>
                    </div>
                    
                    </div>
                        

                ";
        }
    }
}
}



// ip-address function
function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip; 



// cart function

function cart(){
if(isset($_GET['add_to_cart'])){
 global $con; 
 $get_ip_add = getIPAddress();
 $get_product_id=$_GET['add_to_cart']; 
 $select_query="Select * from `cart_info` where 
 ip_address='$get_ip_add' and 
 product_id=$get_product_id"; 
 $result_query=mysqli_query($con, $select_query);
 $num_of_rows=mysqli_num_rows($result_query); 
if($num_of_rows>0){
 echo "<script>alert('Acest produs exista deja in cos')</script>";
 echo "<script>window.open('index.php','_self')</script>";
}else{
  $insert_query="insert into `cart_info` (product_id,ip_address,quantity) values 
  ($get_product_id,'$get_ip_add',0)";
  $result_query=mysqli_query($con, $insert_query);
  echo "<script>alert('Produsul a fost adaugat in cos')</script>";
  echo "<script>window.open('index.php','_self')</script>";
}

}
}     

// funct cart item number

function cart_item(){
  if(isset($_GET['add_to_cart'])){
        global $con; 
        $get_ip_add = getIPAddress(); 
        $select_query="Select * from `cart_info` where ip_address='$get_ip_add'"; 
        $result_query=mysqli_query($con, $select_query);
        $count_cart_items=mysqli_num_rows($result_query); 
        }else{
            global $con; 
            $get_ip_add = getIPAddress();
            $select_query="Select * from `cart_info` where ip_address='$get_ip_add'"; 
            $result_query=mysqli_query($con, $select_query);
            $count_cart_items=mysqli_num_rows($result_query);
    }
    echo  $count_cart_items;
 }

 // funct total price

 function total_cart_price(){
    global $con;
    $get_ip_add = getIPAddress();
    $total_price=0;
    $cart_query="Select * from `cart_info` where ip_address='$get_ip_add'";
    $result=mysqli_query($con, $cart_query);
    while($row=mysqli_fetch_array($result)){
        $product_id=$row['product_id'];
        $select_products="Select * from `products` where product_id='$product_id'";
        $result_products=mysqli_query($con, $select_products);
        while($row_product_price=mysqli_fetch_array($result_products)){
   $product_price= array($row_product_price['product_price']);
   $product_values= array_sum($product_price);  
   $total_price+=$product_values;     
        }
    }
    echo $total_price;
 }
?>
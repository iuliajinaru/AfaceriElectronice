<?php

if(isset($_GET['delete_products'])){
    $delete_id=$_GET['delete_products']; 
    $delete_products="delete from `products` where category_id=$delete_id"; 
    $result_product=mysqli_query($con,$delete_products); 
    if($result_product){
        echo "<script>alert('Produsul a fost sters cu succes!')</script>"; }
    }

?>
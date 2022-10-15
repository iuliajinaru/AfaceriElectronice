<?php

if(isset($_GET['delete_categories'])){
    $delete_id=$_GET['delete_categories']; 
    $delete_category="delete from `categories` where category_id=$delete_id"; 
    $result_category=mysqli_query($con,$delete_category); 
    if($result_category){
        echo "<script>alert('Categoria a fost stearsa cu succes!')</script>"; }
    }

?>
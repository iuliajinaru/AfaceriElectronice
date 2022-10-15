<h3 class="text-center">Lista produselor disponibile</h3>

<table class="table table-bordered mt-5">
    <thed>
        <tr class="bg-danger text-light text-center">
            <th>ID</th>
            <th>Imagine</th>
            <th>Denumire produs</th>
            <th>Descriere produs</th>
            <th>Pret</th>
            <th>Editare</th>
            <th>Stergere</th>
        </tr>
    </thed>

   
    <tbody class="text-danger text-center">

    <?php
    $get_products="select * from `products`";
    $result=mysqli_query($con,$get_products);
    $number=0;
    while($row=mysqli_fetch_assoc($result)){
        $product_id=$row['product_id'];
        $product_image=$row['product_image'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_price=$row['product_price'];
        $number++;
    ?>

          <tr class='text-sanger text-center'>
                    <td><?php echo $number;?></td>
                    <td><img src='./product_images/<?php echo $product_image?>' class='product_image'></td>
                    <td><?php echo $product_title?></td>
                    <td><?php echo $product_description?></td>
                    <td><?php echo $product_price?></td>
                    <td><a href='index.php?edit_products=<?php echo $product_id?>' class='text-danger'><i class='fa-solid fa-pen-nib'></i></a></td>
                    <td><a href='index.php?delete_products=<?php echo $product_id?>' class='text-danger'><i class='fa-solid fa-trash-can'></i></a></td>
                </tr> 
                <?php 
        
    }

    ?>
        
    </tbody>
</table>
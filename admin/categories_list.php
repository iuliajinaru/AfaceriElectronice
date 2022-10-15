<h3 class="text-center">Lista categoriilor </h3>


<table class="table table-bordered mt-5">
    <thed>
        <tr class="bg-danger text-light text-center">
            <th>ID</th>
            <th>Denumire categorie</th>
            <th>Editare</th>
            <th>Stergere</th>
        </tr>
    </thed>

   
    <tbody class="text-danger text-center">

    <?php
    $get_categories="select * from `categories`";
    $result=mysqli_query($con,$get_categories);
    $number=0;
    while($row=mysqli_fetch_assoc($result)){
        $category_id=$row['category_id'];
        $category_title=$row['category_title'];
        $number++;
    ?>

          <tr class='text-sanger text-center'>
                    <td><?php echo $number;?></td>
                    <td><?php echo $category_title?></td>
                    <td><a href='index.php?edit_categories=<?php echo $category_id?>' class='text-danger'><i class='fa-solid fa-pen-nib'></i></a></td>
                    <td><a href='index.php?delete_categories=<?php echo $category_id?>' class='text-danger'><i class='fa-solid fa-trash-can'></i></a></td>
                </tr> 
                <?php 
        
    }

    ?>
        
    </tbody>
</table>
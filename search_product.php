<!-- connect -->
<?php
include('includes/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArticoleSportive</title> 
    <!-- bootstrat CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link css -->
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    <!--  -->
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg bg-danger" style="border:3px solid RosyBrown">
  <div class="container-fluid">
    <img src="./image/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Produse</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link text-light" href="#">Contact</a>
        </li> -->
        <!--<li class="nav-item">
          <a class="nav-link text-light" href="#">Cont</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link text-light" href="#"><i class="fa-solid fa-cart-shopping"></i></i><sup><?php cart_item();?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Total: <?php total_cart_price();?></a>
        </li>
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Cauta" aria-label="Cauta" name="search_data">
        <!-- <button class="btn btn-outline-light" type="submit">Cauta</button> -->

        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">

      </form>
    </div>
  </div>
</nav>
<!-- call cart funct -->
<?php

cart();

?>




<!-- second child -->
<!--
<nav class="navbar navbar-expand-lg bg-dark">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link text-light" href="#">Bine ai venit!</a>
    </li>
    <li class="nav-item">
          <a class="nav-link text-light" href="#">Logheaza-te</a>
    </li>
    </ul>
</nav>
-->

<!-- third child -->
<!--
<div class="bg-danger">
    <h3 class="text-center text-light">Green Living</h3>
    <p class="text-center text-light">Ce plantezi astazi, vei culege maine.</p>
</div>
-->

<!-- third child -->
<div class="row p-5">

    <div class="col-md-10 bg-transparent">
        <!-- products -->
        <div class="row bg-transparent">

        <?php
            search();
            getuniquecategories();
        ?>

        </div>
    </div>


    <!-- sidenav -->
    <div class="col-md-2 bg-danger p-0 text-light text-center" style="border:3px solid RosyBrown">
    <!-- categories -->
        <ul class="navbar-nav me-auto text-light text-center">
            <li class="nav-item">
                <a href="" class="nav-link text-light"><h4>Categorii</h4></a>
            </li>
            <?php
            getcategories();
            ?>
        </ul>

    </div>

</div>



<!-- last child -->
<?php
  include("./includes/footer.php");
?>


</div>








    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body> 
</html>
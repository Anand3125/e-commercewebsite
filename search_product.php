<!--connect file-->
<?php
include('includes/connect.php');
include('./function/common_functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecommerce website using php and mysql</title>
  <!-- bootstrap css link-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--font awesome link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--css file-->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- bootstrap js link -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  hello world ! this is annad
  <!--navbar  -->
  <div class="container-fluid p-0">
    <!-- first child 1.navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <img src="./images/logo5.png" alt="" class="logo5">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <i class="fa-solid fa-cart-shopping"></i> <sup>1</sup></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Total Price:100/-</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="" method="get">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"name="search_data">
          <input type="submit"value="search"class="btn btn-outline-light"name="search_data_product"> 
        </form>
      </div>
    </nav>
    <!-- second child---2. nav bar log in + welcome screen -->
    <nav class="navabar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Log In</a>
        </li>
      </ul>
    </nav>
    <!--third child-->
    <div class="bg.light">
      <h3 class="text-center">Hidden Store</h3>
      <p class="text-center">Communtication is at the heart of e-commerce and community </p>
    </div>
<!-- Fourth child # products card images and all (in cards)------------------------->
    <div class="row px-1">
      <div class="col-md-10">
        <div class="row">
          <!--fetching prodcuts  -->
          <?php
          //calling functions
          search_product();
          get_unique_categories();
          get_unique_brand();
          ?>
          <!--row end-->
        </div>
        <!--column end-->
      </div>
      <!--sidenav-->
      <div class="col-md-2 bg-secondary p-2">
        <ul class="navbar-nav me-auto">
          <li class="nav-item.bg-info">
            <!----------------------- Brands to be displayed--------------------->
            <a href="#" class="nav-link bg-info text-light">
              <h4>Delivery Brands</h4>
            </a>
          </li>
          <?php
          getbrands();
          ?>
        </ul>
        <!--------------- categories to be displayed------------------------------>
        <ul class="navbar-nav me-auto">
          <li class="nav-item.bg-info">
            <a href="#" class="nav-link bg-info text-light">
              <h4>categories </h4>
            </a>
          </li>
          <?php
          getcategory();
          ?>
        </ul>
      </div>
      <!-- last child-->
      <div class="bg-info p-2 text-center footer">
        <p> All rights reserved @-Designed by Anand-2023</p>
      </div>
</body>
</html> 
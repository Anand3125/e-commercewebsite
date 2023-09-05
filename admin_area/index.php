<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard </title>
  <!--bootstrap css link-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--font awesome link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--css files-->
  <link rel="stylesheet" href="../style.css">
  <style>
    .admin_image {
      width: 100px;
      height: 100px;
      object-fit: contain;
    }
  </style>

</head>

<body>
  <!--bootstrap js link-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <!-- last child-->
    <div class="bg-info p-2 text-center footer">
      <p> All rights reserved @-Designed by Anand-2023</p> 
    </div>
<!-----------------------------------------------------3/march/2023--------------------------->
  <!---navbar-->
  <div class="container-fluid">
    <!--first child-->

    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
        <img src="../images/logo5.png" alt="" class="logo5">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="" class="nav-link">Welcome Guest</a>
          </li>
        </ul>
        <nav>

      </div>
    </nav>
    <!--second child-->
    <div class="bg-light">
      <h3 class="text-center p-2">Manage Details</h3>
    </div>
    <!--third child-->
    <div class="col-md-12 bg-secondary p-4">
      <div>
        <div class="p-3">
        <a href="#"><img src="../images/admin.jpg" alt="" class="admin_image"></a>

        <p class="text-light text-left">Admin Name: Anand </p>
      </div>
     <!--button*10>a.nav-link.text-light.bg-info.my-1-->
      <div class="button text-center">
        <button><a href="" 
        class="nav-link text-light bg-info my-1">Insert Products</a></button><button><a href=""
            class="nav-link text-light bg-info my-1">View Products</a></button><button><a href="index.php?insert_category"
            class="nav-link text-light bg-info my-1">Insert Categories</a></button><button><a href=""
            class="nav-link text-light bg-info my-1">View Categories</a></button><button><a href="index.php?insert_brands"
            class="nav-link text-light bg-info my-1">Insert Brands</a></button><button><a href=""
            class="nav-link text-light bg-info my-1">View Brands</a></button><button><a href=""
            class="nav-link text-light bg-info my-1">All Orders</a></button><button><a href=""
            class="nav-link text-light bg-info my-1">All Payments</a></button><button><a href=""
            class="nav-link text-light bg-info my-1">List Users</a></button><button><a href=""
            class="nav-link text-light bg-info my-1">Logout</a></button>


      </div>
    </div>
  </div>
  <!--FOURTH CHILD --->
  <div class="container my-5">
<?php
if(isset($_GET['insert_category'])){
include('insert_categories.php');
}
if(isset($_GET['insert_brands'])){
  include('insert_brands.php');
  }
?>
  </div>


</body>

</html>
<?php
include('../includes/connect.php');
if (isset($_POST['insert_product'])) {
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];
    $product_status = 'true';
    // accessing images
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];
    // accessing image tmp name
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];
    //checking empty condition
    if ($product_title == '' or $product_description == '' or $product_keywords == '' or $product_category == '' or $product_brands == '' or $product_price == '' or $product_image1 == '' or $product_image2 == '' or $product_image3 == '') {
        echo "<script>alert('please fill all the available fields')</script>";
        exit();
    } else {
        move_uploaded_file($temp_image1, "./product_images/$product_image1");
        move_uploaded_file($temp_image2, "./product_images/$product_image2");
        move_uploaded_file($temp_image3, "./product_images/$product_image3");
        // inserting data query
        $insert_product = "INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `prodcut_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES (NULL, ' $product_title', ' $product_description', ' $product_keywords', ' $product_category', '$product_brands', ' $product_image1', ' $product_image2', '$product_image3', '$product_price', current_timestamp(), '')";
        $result_query = mysqli_query($conn, $insert_product);
        if ($result_query) {
            echo "<script>alert ('Successfully inserted the products')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert products-Admin Dashboard</title>
    <!-- bootstrap css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--font awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap js link -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- coding start here-->
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- form  -->
        <form action="" method="post" enctype="multipart/form-data">
            <!--  title  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product title </label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Eneter product title" autocomplete="off" required="required">
            </div>
            <!--  description  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product description </label>
                <input type="text" name="product_description" id="description" class="form-control" placeholder="Eneter product title" autocomplete="off" required="required">
            </div>
            <!--  product keyword   -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product keyword </label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Product keyword" autocomplete="off" required="required">
            </div>
            <!--  Categories   -->
            <div class="form-outline mb-3 w-50 m-auto">
                <select name="product_category" id="" class="form-control">
                    <option value="">select a Categories</option>
                    <?php
                    // $select_query="SELECT * FROM 'categories' ";
                    $select_query = "SELECT * FROM `categories`";
                    $result_query = mysqli_query($conn, $select_query);
                    while ($row = mysqli_fetch_assoc($result_query)) {
                        $category_title = $row['category_title'];
                        $category_id = $row['category_id'];
                        echo "<option value='$category_id'>$category_title</option>";
                    }
                    ?>
                </select>
            </div>
            <!--  Brands   -->
            <div class="form-outline mb-3 w-50 m-auto">
                <select name="product_brands" id="" class="form-control">
                    <option value="">select a Brand</option>
                    <?php
                    $select_query = "SELECT * FROM `brands`";
                    $result_query = mysqli_query($conn, $select_query);
                    while ($row = mysqli_fetch_assoc($result_query)) {
                        $brand_title = $row['brand_title'];
                        $brand_id = $row['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                    }
                    ?>
                </select>
            </div>
            <!--  price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product price </label>
                <input type="text" name="product_price" id="description" class="form-control" placeholder="Eneter product price" autocomplete="off" required="required">
                <div>
                     <!-- image1 -->
                    <div class="form-outline mb-4 w-50 m-auot">
                        <label for="prodcut_image1" class="form-label1">product image 1</label>
                        <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
                    </div>
                    <!-- image2 -->
                    <div class="form-outline mb-4 w-50 m-auot">
                        <label for="prodcut_image2" class="form-label1">product image 2</label>
                        <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
                    </div>
                    <!-- image3 -->
                    <div class="form-outline mb-4 w-50 m-auot">
                        <label for="prodcut_image3" class="form-label1">product image 3</label>
                        <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
                    </div>
                </div>
                <!--  Price Button -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
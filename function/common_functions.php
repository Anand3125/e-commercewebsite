        <?php
        //getting products
        function getproducts()
        {
          global $conn;
          // condition to check isset or not
          if (!isset($_GET['category'])) {
            if (!isset($_GET['brand'])) {
              $select_query = "SELECT * FROM `products` order by product_id desc limit 9";
              $result_query = mysqli_query($conn, $select_query);
              while ($row = mysqli_fetch_assoc($result_query)) {
          ?>
        <div class='col-md-4 mb-2'>
                  <div class='card'>
                    <img class='card-img-top' src='admin_area/product_images/<?php echo $row['product_image1']; ?>' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'><?php echo $row['product_title']; ?> </h5>
                      <p class='card-text'><?php echo $row['product_description']; ?></p>
                      <p class='card-text'> Rs.<?php echo $row['product_price']; ?></p>
                      <a href='#' class='btn btn-primary'>Add to cart</a>
                      <a href='#' class='btn btn-secondary'>View more</a>
                    </div>
                  </div>
                </div>
        <?php  }
            }
          }
        }
          //getting unique categories
 function get_unique_categories(){
        global $conn;
          // condition to check isset or not
          if (isset($_GET['category'])) {
           $category_id=$_GET['category'];
              $select_query = "SELECT * FROM `products` WHERE category_id=$category_id";
              $result_query = mysqli_query($conn, $select_query);
              $num_of_rows=mysqli_num_rows($result_query);
              if($num_of_rows==0){
                 echo "<h2 class='text-right text-danger'>NO STOCKS FOR THIS CATEGORY available</h2>";
              }
              while ($row=mysqli_fetch_assoc($result_query)) {
            $category_id = $row['category_id'];
                ?>
                <div class='col-md-4 mb-2'>
                  <div class='card'>
                    <img class='card-img-top' src='admin_area/product_images/<?php echo $row['product_image1'];?>' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'><?php echo $row['product_title']; ?> </h5>
                      <p class='card-text'><?php echo $row['product_description']; ?></p>
                      <p class='card-text'> Rs.<?php echo $row['product_price']; ?></p>
                      <a href='#' class='btn btn-primary'>Add to cart</a>
                      <a href='#' class='btn btn-secondary'>View more</a>
                    </div>
                  </div>
                </div>
        <?php  }
            }
          }
          //getting unique brands
 function get_unique_brand(){
  global $conn;
    // condition to check isset or not
    if (isset($_GET['brand'])) {
     $brand_id=$_GET['brand'];
        $select_query = "SELECT * FROM `products` WHERE brand_id=$brand_id";
        $result_query = mysqli_query($conn, $select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows==0){
           echo "<h2 class='text-right text-danger'>NO STOCKS FOR THIS Brand available</h2>";
        }
        while ($row=mysqli_fetch_assoc($result_query)) {
      $category_id = $row['category_id'];
          // $brand_id = $row['brand_id'];
          ?>
          <div class='col-md-4 mb-2'>
            <div class='card'>
              <img class='card-img-top' src='admin_area/product_images/<?php echo $row['product_image1'];?>' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'><?php echo $row['product_title']; ?> </h5>
                <p class='card-text'><?php echo $row['product_description']; ?></p>
                <p class='card-text'> Rs.<?php echo $row['product_price']; ?></p>
                <a href='#' class='btn btn-primary'>Add to cart</a>
                <a href='#' class='btn btn-secondary'>View more</a>
              </div>
            </div>
          </div>
  <?php  }
      }
    }
        // displaying brands in sidenav
        function getbrands()
        {
          global $conn;
          $select_brands = "SELECT * FROM `brands` ";
          $result_brands = mysqli_query($conn, $select_brands);
          while ($row_data = mysqli_fetch_assoc($result_brands)) {
            $brand_title = $row_data['brand_title'];
            $brand_id = $row_data['brand_id'];
            echo " 
            <li class='nav-item '>
            <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
          <li>";
          }
        }
        // displaying brands in sidenav
        function getcategory()
        {
          global $conn;
          $select_category = "SELECT * FROM `categories` ";
          $result_category = mysqli_query($conn, $select_category);
          while ($row_data = mysqli_fetch_assoc($result_category)) {
            $category_title = $row_data['category_title'];
            $category_id = $row_data['category_id'];
            echo " 
            <li class='nav-item '>
            <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
          <li>";
          }
        }
        // searching products functions
        function search_product(){
          global $conn;
   if(isset($_GET['search_data_product'])){
    $search_data_value=$_GET['search_data']; 
    $search_query ="SELECT * FROM products WHERE prodcut_keywords LIKE '%$search_data_value%'";
              $result_query = mysqli_query($conn, $search_query);
              while ($row = mysqli_fetch_assoc($result_query)) {
          ?>  
        <div class='col-md-4 mb-2'>
                  <div class='card'>
                    <img class='card-img-top' src='admin_area/product_images/<?php echo $row['product_image1']; ?>' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'><?php echo $row['product_title']; ?> </h5>
                      <p class='card-text'><?php echo $row['product_description']; ?></p>
                      <p class='card-text'> Rs.<?php echo $row['product_price']; ?></p>
                      <a href='#' class='btn btn-primary'>Add to cart</a>
                      <a href='#' class='btn btn-secondary'>View more</a>
                    </div>
                  </div>
                </div>
        <?php  }
            }
          }
            ?>

            
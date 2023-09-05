<?php
include('../includes/connect.php');
if (isset($_POST['Insert_brand'])){
  $brand_title = $_POST['brand_title'];

  //select data from database
  $select_query = "SELECT * FROM `brands` WHERE brand_title='$brand_title'";
  $result_select = mysqli_query($conn, $select_query);
  $number = mysqli_num_rows($result_select);
  if ($number > 0) {
    echo "<script>alert('This Brand has been present inside the database')</script>";
  } else {
    $insert_query = "INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES (NULL, '$brand_title')";
    $result = mysqli_query($conn, $insert_query);
    // Check data inserted successfully or not
    if ($result) {
      echo "<script>alert ('the Brand has been inserted sucessfully!')</script><br>";
    } else {
      echo "Connection failed: " . mysqli_error($conn);
    }
  }
}
?>





<form action=""method="post"class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_title"placeholder="Insert Brands" aria-label="brands" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 my-3 ">

  <input type="submit" class="bg-info border-0 p-2" name="Insert_brand"placeholder="Insert Brands">
  
</div>
    </form> 
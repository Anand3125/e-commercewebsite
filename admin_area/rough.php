<?php
include('../includes/connect.php');
if (isset($_POST['insert_cat'])) {
  $category_title = $_POST['cat_title'];

  //select data from database
  $select_query = "SELECT * FROM `categories` WHERE category_title='$category_title'";
  //SELECT * FROM `categories` WHERE
  //Select * from 'categories'where 
  $result_select = mysqli_query($conn, $select_query);
  $number = mysqli_num_rows($result_select);
  if ($number > 0) {
    echo "<script>alert('This category has been present inside the database')</script>";
  } else {
 $insert_query = "INSERT INTO `categories` (`category_id`, `category_title`) VALUES (NULL, '$category_title')";
    $result = mysqli_query($conn, $insert_query);
    // Check data inserted successfully or not
    if ($result) {
      echo "<script>alert ('the category has been inserted sucessfully!')</script><br>";
    } else {
      echo "Connection failed: " . mysqli_error($conn);
    }
  }
}
?>
<h2 calss="text-center">Insert Categories</h2>
<form action="" method="post" class="mb-2">
  <div class="input-group w-90 mb-2">
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
    <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="categories" aria-describedby="basic-addon1">
  </div>
  <div class="input-group w-10 mb-2 m auto ">
    <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="Insert categories">
  </div>
</form>
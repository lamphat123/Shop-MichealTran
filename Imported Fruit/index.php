<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Micheal Tran</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php
  session_start();
  include_once("Connection.php");
?>


<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><h5>Micheal Tran</h5></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="From.php"><h5>Home</h5></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=product_management"><h5>Product Management</h5></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=category_management"><h5>Category Management</h5></a>
          </li>
          <?php
          if (isset($_SESSION['us']) && $_SESSION['us'] != "") {
          ?>
            <li class="nav-item">
              <a href ="?page=update_customer">
              <li class="nav-item mt-2"><h5>Hi, <?php echo $_SESSION['us'] ?></h5></li>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="?page=logout">
              <li class="nav-item"></li><h5>Logout</h5>
            </a>
            </li>
           
          <?php
          } else {
          ?>
            <li  class="nav-item">
            <li class="nav-item">
              <a class="nav-link" href="?page=login"><h5>Login</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=register"><h5>Register</h5></a>
            </li>
          <?php
          }
          ?>
        </ul>
        
      </div>
    </div>
  </nav>
  <?php
  if (isset(($_GET['page']))) {
    $page = $_GET['page'];
    if ($page == "register") {
      include_once("Register.php");
    } elseif ($page == "login") {
      include_once("LoginJS.php");
    } elseif ($page == "category_management") {
      include_once("Category_Management.php");
    } elseif ($page == "product_management") {
      include_once("Product_Management.php");
    } elseif ($page == "add_category") {
      include_once("Add_Category.php");
    } elseif ($page == "update_category") {
      include_once("Update_Category.php");
    } elseif ($page == "logout") {
      include_once("Logout.php");
    } elseif ($page == "add_product") {
      include_once("Add_Product.php");
    } elseif ($page == "Update_Product") {
      include_once("Update_Product.php");  
    } elseif ($page == "update_customer") {
      include_once("Update_customer.php");
    }
  }
  else {
    include("Content.php");
  } 
  ?>
  <footer class="text-center text-white" style="background-color: #f1f1f1;">
    <!-- Grid container -->
    <div class="container pt-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="bi bi-facebook"></i></a>

        <!-- Twitter -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="bi bi-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="bi bi-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="bi bi-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="bi bi-linkedin"></i></a>
        <!-- Github -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="bi bi-github"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MichealTran.com</a>
    </div>
    <!-- Copyright -->
  </footer>
</body>

</html>
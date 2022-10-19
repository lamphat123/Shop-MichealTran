  <?php
  include_once("connection.php");
  ?>
  <style>
    body {
      margin: 0;
      font-family: Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      font-size: .8125rem;
      font-weight: 400;
      line-height: 1.5385;
      color: #333;
      text-align: left;
    }

    .mt-50 {

      margin-top: 50px;
    }

    .mb-50 {

      margin-bottom: 50px;
    }



    .card {
      position: relative;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0, 0, 0, .125);
      border-radius: .1875rem;
    }

    .card-img-actions {
      position: relative;
    }

    .card-body {
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
      padding: 1.25rem;
      text-align: center;
    }

    .card-img {

      width: 350px;
    }

    .star {
      color: red;
    }

    .bg-cart {
      background-color: orange;
      color: #fff;
    }

    .bg-cart:hover {

      color: #fff;
    }

    .bg-buy {
      background-color: green;
      color: #fff;
      padding-right: 29px;
    }

    .bg-buy:hover {

      color: #fff;
    }

    a {

      text-decoration: none !important;
    }
  </style>
  <div class="slider-area">
    <div class="block-slider block-slider4">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <div class="container d-flex justify-content-center mt-50 mb-50">

    <div class="row">
      <?php
      // 	include_once("database.php");
      $result = mysqli_query($conn, "SELECT * FROM product");

      if (!$result) { //add this check.
        die('Invalid query: ' . mysqli_error($conn));
      }


      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      ?>
        <div class="col-md-4 mt-2">


          <div class="card">
            <div class="card-body">
              <div class="card-img-actions">

                <img src="image/<?php echo $row['Pro_image'] ?>" class="card-img img-fluid" width="200" height="200" alt="">
              </div>
            </div>

            <div class="card-body bg-light text-center">
              <div class="mb-2">
                <h6 class="font-weight-semibold mb-2">
                  <a href="#" class="text-default mb-2" data-abc="true"><?php echo  $row['Product_Name'] ?></a>
                </h6>

                <a href="#" class="text-muted" data-abc="true"><?php echo  $row['SmallDesc'] ?></a>
              </div>

              <h3 class="mb-0 font-weight-semibold">$<?php echo  $row['Price'] ?></h3>

              <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
  <!-- <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Product</h2>
                        <div class="product-carousel">
                        
                       
                           
				            
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="image/<?php echo $row['Pro_image'] ?>" width="150" height="150">
                                    <div class="product-hover">
                                        <a href="?func=dathang&ma=<?php echo  $row['Product_ID'] ?>" class="add-to-cart-link" ><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="?page=quanly_chitietsanpham&ma=<?php echo  $row['Product_ID'] ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="?page=quanly_chitietsanpham&ma=<?php echo  $row['Product_ID'] ?>"><?php echo  $row['Product_Name'] ?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['Price'] ?></ins> <del><?php echo  $row['oldPrice'] ?></del>
                                </div> 
                            </div>
                
                

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


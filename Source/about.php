<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>about</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./style/css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous">
</head>

<body>
  <div class="top-bar">
    <div class="top-bar-left">Free ship cho đơn hàng trên 100.000 &#8363;</div>
    <div class="top-bar-right">
      <div class="top-bar-right-content">
        <a class="phone" href="">&nbsp;<i class="fas fa-phone-volume"></i> 01258906910&nbsp;</a>
        <a class="login" href="login.php">Đăng nhập&nbsp;</a>
        <a class="register" href="signup.php">Đăng kí&nbsp;</a>
      </div>
    </div>
  </div>
  <div class="navigation">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img class="navbar-brand" src="./style//pictures/icon.PNG" width="80px">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="about.php">Thông tin</a>
          </li>
        </ul>
        <form method="post" action="search.php" class="form-inline my-2 my-lg-0">
					
                    <input class="form-control mr-sm-2" type="search" name="searchproduct" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" name= "search" type="submit">Search</button>
					
					<a class="button custom" href="<?php echo "cart.php";?>" method="get"><i class="fas fa-shopping-cart"></i></a>
					
                    <span class='badge badge-warning' id='lblCartCount'></span>
					
                </form>
      </div>
    </nav>
  </div>
  <!------>
  <div class="media">
    <img class="d-flex align-self-center mr-3" src="./style/pictures/28378.jpg " >
    <div class="media-body">

      <pre>
          <h5>Thông tin về chúng tôi</h5>
			Địa chỉ VP: Lầu 12 Phòng 5, Chung Cư Hoàng Anh Gia Lai An Tiến,Huyện Nhà Bè , TP.Hồ Chí Minh
			Điện thoại: (028) 38125969
			Fax: 028 38 125 969
			Tổng đài hỗ trợ (7h30 đến 22h): 1800.1061 hoặc (028) 39 48 1234
			Tổng đài khiếu nại: 1800.1011
			Email: bachbonglong@gmail.com
          </pre>


    </div>
  </div>

   <!-- Footer -->
   <footer class="page-footer font-small mdb-color pt-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

        <!-- Grid column -->

        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Sản Phẩm</h6>
            <p>
                <a href="products.php">LÃNG MẠN</a>
            </p>
            <p>
                <a href="products.php">KHOA HỌC</a>

            </p>
            <p>
                <a href="products.php">TRUYỆN NGẮN</a>

            </p>
            <p>
                <a href="products.php">VIỄN TƯỞNG</a>

            </p>
        </div>

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p>
                <i class="fa fa-home mr-3"></i> Chung cư hoàng anh Gold House, Thành phố hồ chí minh</p>
           
            <p>
                <i class="fa fa-phone mr-3"></i> +84 982 460 665</p>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

        <!-- Grid column -->
        

    </div>
    <!-- Grid row -->

</div>
<!-- Footer Links -->

</footer>
<!-- Footer -->
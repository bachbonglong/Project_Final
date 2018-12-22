
<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "test");

?>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>product-detail</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./style/css/detail.css">
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
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          <a class="button custom" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
          <span class='badge badge-warning' id='lblCartCount'></span>
        </form>
      </div>
    </nav>
  </div>
  <!------------------->
  
  
  
  
  
  
  
  
  
  
  
  
 <?php 
  if (isset($_POST['form-submit']));
  

if(isset($_POST['addtocart'])){
							
$connect = mysqli_connect("localhost", "root", "", "test");
														$sql = "INSERT INTO cart(id,name,image,price)
							values('{$_POST['hidden_id']}','{$_POST['hidden_name']}','{$_POST['hidden_img']}','{$_POST['hidden_price']}')";
							
							if ($connect->query($sql) === TRUE) {
							echo "";
							} else {
							echo "";
							}
							
						}

							
	?>			
				
				
				
				
       
  
  <div class="container">
    <div class="card">
      <div class="container-fliud">
        <div class="wrapper row">
          <div class="preview col-md-6">

            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="book/<?php echo $_POST["hidden_img"]; ?> "/></div>
              <div class="tab-pane" id="pic-2"><img src="book/<?php echo $_POST["hidden_img"]; ?> "/></div>
              <div class="tab-pane" id="pic-3"><img src="book/<?php echo $_POST["hidden_img"]; ?> "/></div>
              <div class="tab-pane" id="pic-4"><img src="book/<?php echo $_POST["hidden_img"]; ?>"/></div>
            </div>
            <ul class="preview-thumbnail nav nav-tabs">
              <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="book/<?php echo $_POST["hidden_img"]; ?>"/></a></li>
              <li><a data-target="#pic-2" data-toggle="tab"><img src="book/<?php echo $_POST["hidden_img"]; ?>"/></a></li>
              <li><a data-target="#pic-3" data-toggle="tab"><img src="book/<?php echo $_POST["hidden_img"]; ?>"/></a></li>
              <li><a data-target="#pic-4" data-toggle="tab"><img src="book/<?php echo $_POST["hidden_img"]; ?>"/></a></li>
            </ul>

          </div>
		  
		  <div class="details col-md-6">
            <h3 class="product-title"><?php echo $_POST['hidden_name'];?></h3>
  		<div class="rating">
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>

            </div>
			<p class="product-description">
			  <?php echo $_POST['hidden_des'] ?>
			  </p>
            
            <h4 class="price">Giá bán: <span><?php echo $_POST['hidden_price']?>&#x20AB;</h4>
			<form action="product-detail.php" method="post">
						<input type="hidden" name="hidden_id" value="<?php echo $_POST['hidden_id']; ?>"/>
						
						<input type="hidden" name="hidden_img" value="<?php echo $_POST['hidden_img']; ?>"/>

						<input type="hidden" name="hidden_name" value="<?php echo $_POST['hidden_name']; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $_POST['hidden_price']; ?>" />
						
						<input type="hidden" name="hidden_des" value="<?php echo $_POST['hidden_des']; ?>" />
						
            <div class="action">
              <input class="add-to-cart btn btn-default" name="addtocart" type="submit" value="Thêm vào giỏ">
            </div>
			</form>
          </div>
		 
        </div>
      </div>
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
  
					

</body>

</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
  crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->
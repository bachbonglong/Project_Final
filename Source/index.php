<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "bookdb");
	
						function add(){
							
$connect = mysqli_connect("localhost", "root", "", "bookdb");
														$sql = "INSERT INTO cart(id,name,image,price,quantity)
							values('{$_POST['hidden_id']}','{$_POST['hidden_name']}','{$_POST['hidden_img']}','{$_POST['hidden_price']}',1)";
							
							if ($connect->query($sql) === TRUE) {
							echo "";
							} else {
							echo "";
							}
							
						}

						if(array_key_exists('add',$_POST)){
							add();	
							}
							
							
						

?>
<!DOCTYPE html>
<html>

<head>
<style>

</style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible">
    <title>Page Title</title>
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
                        <a class="nav-link" href="<?php echo 'index.php';?>">Trang chủ <span class="sr-only">(current)</span></a>
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
	

    <div class="slide-show">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block slide-pic" src="./style/pictures/book.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color:black">TICIBOOK</h1>
                    
                        <a href="products.php">
                            <button type="button" class="btn btn-success custom-slide-btn"><label>Mua ngay</label></button></a>
                    </div>
                </div>
         
        </div>
    </div>
    </div>
    <div class="container index-category">
        <div class="row">
            <div class="col-sm-6 col-md-6 column-in-center">
                <div class="cate-1">
                    <img src="./style/pictures/back.jpg">
                    <div class="top-left">
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 column-in-center">
                <div class="cate-2">
                    <img src="./style/pictures/back2.jpg">
                    <div class="top-left">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="index-product">
        <h1>::&nbsp;&nbsp;Sản Phẩm Hot&nbsp;&nbsp;::</h1>
	</div>
	<div class="index-product">
	
	<div class="container">
						<div class="row">
	
    <meta charset="utf-8" />
	<?php
				$query = "SELECT * FROM hotproduct ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
						
				?>
				
							<div class="col-sm-4 col-md-4 prod">
							<form method="post" name="form-submit" action="product-detail.php?action=&id=<?php echo $row["id"]; ?>">
						
                                <img src="img/<?php echo $row["image"]; ?>" alt="">
                                <div class="product-index-info">
                                    <h3><?php echo $row["name"]; ?></h3>
                                    <p><?php echo $row["price"]; ?> &#x20AB;</p>
                                </div>
								<input type="hidden" name="hidden_img" value="<?php echo $row["image"]; ?>"/>
						<input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>"/>

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_des" value="<?php echo $row["description"]; ?>" />
						 <div class="button">
						 <button class="btn btn-success" type="submit">Xem chi tiết</button>
						 </div>
						</form>	
						<form action="index.php" method="post">
														<input type="hidden" name="hidden_img" value="<?php echo $row["image"]; ?>"/>
						<input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>"/>

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                <div class="button">
                                     <button id="addpro" name="add" onclick="AddPro()" class="btn btn-danger">Thêm vào giỏ</button>
                                </div>
								</form>
                            </div>
			
				
				
			<?php
					}
				}
			?>
			
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script>
    var countPro = 0;
	
    function AddPro() {
        window.scrollTo(0, 0)
        countPro = countPro + 1;
        document.getElementById("lblCartCount").innerHTML = countPro;
		
	};
	
	
	
</script>

</html>
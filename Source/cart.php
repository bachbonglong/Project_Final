
<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "test");
	
	function deleteel(){
		$connect = mysqli_connect("localhost", "root", "", "test");
									
									
								$quantity = $_POST['quantity'];
								$id = $_POST['id'];
								$array = array_combine($quantity,$id);
								foreach($array as $q => $i)
								{
									$sql = "delete from cart where id='$i'";
									
							if ($connect->query($sql) === TRUE) {
							
							echo "Tiếp Tục Mua Hàng";
								
							} else {
							echo "";
							}
								}
							
	}
	
	if(array_key_exists('del',$_POST)){
							deleteel();	
							}
							
							
	if(isset($_POST['thanhtoan'])){
		$sql = "delete from cart";
		header('Location: http://localhost/index.php');
				
		if ($connect->query($sql) === TRUE) {
							
							echo "Tiếp Tục Mua Hàng";
								
							} else {
							echo "";
							}
	}
						
	
	

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>product-detail</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./style/css/cart.css">
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
	<!------------>
	<div class="container container-cart">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-info panel-info-cart">
					<div class="panel-heading panel-heading-cart">
						<div class="panel-title">
							<div class="row">
								<div class="col-md-6">
									<h5><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng</h5>
								</div>
								<div class="col-md-6"><a href="products.php">
										<button type="button" class="btn btn-primary btn-sm btn-block">
											<span class="glyphicon glyphicon-share-alt"></span> Tiếp tục mua hàng
										</button>
									</a>
								</div>
							</div>
						</div>
					</div>
					<script>
						function delElement(a){
							inames.splice(a,1);
							iqtyp.splice(a,1)
							iprice.splice(a,1)
							
						}
						function calculate(a,b){
							
							var quanti = number("b.value");
							return a * quanti;
						}
					</script>
					<script type="text/javascript">
function tableInputKeyPress(e){
  e=e||window.event;
  var key = e.keyCode;
  if(key==13) //Enter
  {
     //do you task here...
     return true; //return true to submit, false to do nothing
  }
}
</script>
<script>
<!--
function confirmRefresh() {
var okToRefresh = confirm("Do you really want to refresh the page?");
if (okToRefresh)
	{
			setTimeout("location.reload(true);",1500);
	}
}
// -->
<!--
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}



//   -->

</script>
					
<?php
					
				$query = "SELECT * FROM cart ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				
				error_reporting(0);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
						$qprice = $row['price'] * $row['quantity'];
						@$tong += $row['price'] *  $row['quantity'];
						
						
				?>
					
					<div class="panel-body panel-body-cart">
						<div class="row">
							<div class="col-md-2"><img class="img-responsive" src="book/<?php echo $row["image"]; ?> ">
							</div>
							<div class="col-md-6">
								<h4 class="product-name"><strong>Sản phẩm</strong></h4>
								<h4><small><?php echo $row["name"];?></small></h4>
							</div>
							<div class="col-md-4 omg">
								<div class="row">
									<div class="col-md-4 align">
										<h6><strong><?php echo $row["price"];?>&#x20AB; <span class="text-muted">x</span></strong></h6>
									</div>
									<div class="col-md-4">
										<form action="cart.php?r=update" method="post" >
										<input type="hidden" name="id[]" value="<?php echo $row['id']?>"/>
											
										<input type="text" class="form-control " name="quantity[]" value="<?php echo $row['quantity']?>"/>
										<input onclick=" timedRefresh(100)" class="btn btn-success" type="submit" value="OK" name="submit">	
										<button type="submit" name="del" class="btn btn-link btn-xs">
											<i class="fas fa-trash-alt"></i>
										</button>	
											</form>	
									</div>
									
									
								</div>
								
								<?php 
								
								$connect = mysqli_connect("localhost", "root", "", "test");
								if(isset($_POST['submit'])){
								if(isset($_POST['quantity']))
								{
								$quantity = $_POST['quantity'];
								$id = $_POST['id'];
								$array = array_combine($quantity,$id);
								foreach($array as $q => $i)
								{
									$sql = "update cart set quantity='$q' where id = '$i'";
									
									
							if ($connect->query($sql) === TRUE) {
							
							echo "";
								
							} else {
							echo "";
							}
								}
								}
								}
								
								
									
								
								
								
								
								
									?>
								
								
								
								
							</div>
						</div>
						
						<?php
						
						
					}
				}
				?>
						<hr>
						
					</div>
					<form action="cart.php" method="post">
					<div class="panel-footer panel-footer-cart">
						<div class="row text-center">
							
							<div class="col-md-9">
	
								<h4 class="text-right" id="sum">Tổng cộng <strong><?php echo $tong;?>&#x20AB;</strong></h4>
							
							</div>
							<div class="col-md-3">
								<form action="cart.php" method="post">
							
								<button type="submit" name="thanhtoan" onclick="alert('cảm ơn quý khách đã mua sách của chúng tôi giá giỏ hàng của quý khách là:<?php echo $tong;?>&#x20AB;')" name ="sum" id="sum"  class="btn btn-success btn-block">
									<a href="products.php"> Thanh toán </a>
								</button>
								
							</form>
							</div>
						</div>
					</div>
					</form>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
 crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
 crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
 crossorigin="anonymous"></script>

</html>
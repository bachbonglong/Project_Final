<?php
$connect = mysqli_connect("localhost", "root", "", "bookdb");
error_reporting(0);
		if(isset($_POST['edit'])){
      $table = $_POST['table'];
		$name = $_POST['name'];
								$price = $_POST['price'];
								$id = $_POST['id'];
		$connect = mysqli_connect("localhost", "root", "", "bookdb");
									
									$sql = "update product set price='$price',name='$name' where id='$id'";
								
								
							if ($connect->query($sql) === TRUE) {
							
							echo "ok";
								
							} else {
							echo "";
              }
              
              $sql1 = "update $table set price='$price',name='$name' where id='$id'";
								
								
							if ($connect->query($sql1) === TRUE) {
							
							echo "ok";
								
							} else {
							echo "";
							}
	}
							
								
									?>

		
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./style/css/login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous">
</head>

<body>
  <div class="login">
    <div class="login-form wrapper fadeInDown">
      <div id="formContentLogin">
        <div class="form-title">
          <h2 class="active"> Đăng nhập </h2>
        </div>
        <div class="fadeIn first">
          <img src="style/pictures/icon-login.svg" id="icon-login" alt="User Icon" />
        </div>
        <form action="edit_product.php" method="post">
          <input type="text" id="name" class="fadeIn second" name="name" placeholder="tên sản phẩm">
          <input type="text" id="price" name="price" placeholder="giá sản phẩm">
          <input type="text" id="id" name="id" placeholder="mã sản phẩm">
          <p class="fadeIn second">bạn muốn sửa ở đâu:</p>  
		<select class="form-control" name="table">
  <option value="">---</option>
  <option value="product">tất cả sản phẩm</option>
  <option value="hotproduct">sản phẩm hot</option>
  <option value="langman">Lãng mạn</option>
  <option value="veg">Truyện ngắn</option>
  <option value="khoahoc">Khoa học</option>
  <option value="vientuong">Viễn tưởng</option>
	</select>
          <input type="submit" name="edit" class="fadeIn fourth" value="sửa nhe!!!">
        </form>
		
		
		</div>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
  crossorigin="anonymous"></script>

</html>
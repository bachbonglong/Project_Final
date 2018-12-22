<?php
$connect = mysqli_connect("localhost", "root", "", "test");

$table = "cart";
							
							$sql = "INSERT INTO cart(id,name,image,price)
							values('{$_POST['hidden_id']}','{$_POST['hidden_name']}','{$_POST['hidden_img']}','{$_POST['hidden_price']}')";
							
							if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}
							

?>
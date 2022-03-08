<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'wdt_assignment';
$conn = mysqli_connect($server, $username, $password, $dbname);

$sql_cart_update = "UPDATE product_order SET product_quantity = ".$_POST['product_quantity']." WHERE product_id = ".$_POST['product_id']." AND order_id = ".$_POST['order_id']." AND apparel_size = '".$_POST['apparel_size']."'";
mysqli_query($conn, $sql_cart_update);

echo ("<script>window.location.href='cart.php'</script>");

?>
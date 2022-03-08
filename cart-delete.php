<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'wdt_assignment';
$conn = mysqli_connect($server, $username, $password, $dbname);

$sql_cart_delete = "DELETE FROM product_order WHERE order_id = ".$_POST['order_id']." AND product_id = ".$_POST['product_id']." AND apparel_size = '".$_POST['apparel_size']."'";
mysqli_query($conn, $sql_cart_delete);

echo ("<script>window.location.href='cart.php'</script>");

?>
<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'wdt_assignment';
$conn = mysqli_connect($server, $username, $password, $dbname);

$sql_paid = "UPDATE order_list SET payment_status = 1, total_price = ".$_POST['totalprice']." WHERE user_id = ".$_POST['userid']."";
mysqli_query($conn, $sql_paid);

echo ("<script>alert('Thank you for shopping in our store!')</script>");
echo ("<script>window.location.href='order-history.php'</script>");

?>
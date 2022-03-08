<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'wdt_assignment';
$conn = mysqli_connect($server, $username, $password, $dbname);

$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$package_content = $_POST['package_content'];
$product_anime = $_POST['product_anime'];
$product_price = $_POST['product_price'];
$product_category = $_POST['product_category'];
$target_file = "product-image/".basename($_FILES['product_picture']['name'])."";

$sql_update = "UPDATE product_list SET product_name = '$product_name', ".
"package_content = '$package_content', product_anime = '$product_anime', ".
"product_price = '$product_price', product_category = '$product_category', ".
"product_picture = '$target_file' WHERE product_id = '$product_id'";

mysqli_query($conn, $sql_update);

if (mysqli_affected_rows($conn) <= 0) {
    echo "<script>alert('Cannot update data!');</script>";
    echo ("<script>window.location.href='admin.php';</script>");
} else {
    echo ("<script>alert('Successfully updated data!');</script>");
    echo ("<script>window.location.href='admin.php';</script>");
}

?>
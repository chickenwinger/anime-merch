<?php

$product_name = $_POST['product_name'];
$package_content = $_POST['package_content'];
$product_anime = $_POST['product_anime'];
$product_price = $_POST['product_price'];
$product_category = $_POST['product_category'];

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'wdt_assignment';
$conn = mysqli_connect($server, $username, $password, $dbname);

$target_file = "product-image/".basename($_FILES['product_picture']['name'])."";
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
$checkimg = getimagesize($_FILES['product_picture']['tmp_name']);

$insert_sql = "insert into product_list (product_name, package_content,".
" product_anime, product_price, product_category, product_picture)".
" VALUES ('$product_name', '$package_content', '$product_anime',".
" '$product_price', '$product_category', '$target_file');";

if (isset($_POST['btnaddnew'])) {
    if ($checkimg !== false) {
        echo ("<script>alert('File is an image. Click to proceed.');</script>");
    } else {
        echo ("<script>alert('File is not an image! Please try again.');</script>");
        die("<script>window.location.href='admin.php';</script>");
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo ("<script>alert('Only JPG, JPEG and PNG files are allowed! Please try again.');</script>");
        die ("<script>window.location.href='admin.php';</script>");
    }

    if (! move_uploaded_file($_FILES['product_picture']["tmp_name"], $target_file)) {
        echo ("<script>alert('Unable to upload picture! Please try again.');</script>");
        die ("<script>window.location.href='admin.php';</script>");
    } else {
        echo ("<script>alert(".basename($_FILES['product_picture']["name"])."' has been uploaded.');</script>");
        mysqli_query($conn, $insert_sql);
    }

    if (mysqli_affected_rows($conn) <= 0) {
        echo ("<script>alert('Unable to insert data! Please try again.'); window.location.href='admin.php';</script>");
    } else {
        echo ("<script>alert('Congrats! You\'ve successfully insert a new product!'); window.location.href='admin.php';</script>");
    }
}

?>
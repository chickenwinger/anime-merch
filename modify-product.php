<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'wdt_assignment';
    $conn = mysqli_connect($server, $username, $password, $dbname);

    $product_id = $_GET['product_id'];
    $sql_update = "SELECT * FROM product_list WHERE product_id = $product_id";
    $result = mysqli_query($conn, $sql_update);
    
    if ($rows_product_list = mysqli_fetch_array($result)) {
        $product_id = $rows_product_list['product_id'];
        $product_name = $rows_product_list['product_name'];
        $package_content = $rows_product_list['package_content'];
        $product_anime = $rows_product_list['product_anime'];
        $product_price = $rows_product_list['product_price'];
        $product_category = $rows_product_list['product_category'];
        $product_picture = $rows_product_list['product_picture'];
    } else {
        echo ("<script>alert('Data does not exist! Technical errors!');</script>");
        echo ("<script>window.location.href='admin.php?product_id=$product_id';</script>");
    }

?>
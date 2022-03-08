<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'wdt_assignment';
    $conn = mysqli_connect($server, $username, $password, $dbname);
    
    $product_id = $_GET['product_id'];

    $sql_delete = "DELETE FROM product_list WHERE product_id=$product_id";
    mysqli_query($conn, $sql_delete);

    if (mysqli_affected_rows($conn) <= 0) {
        echo ("<script>alert('Unable to delete. Please try again.');</script>");
        echo ("<script>window.location.href='admin.php';</script>");
    } else {
        echo ("<script>alert('Successfully removed the product!')</script>");
        echo ("<script>window.location.href='admin.php';</script>");
    }
  
?>
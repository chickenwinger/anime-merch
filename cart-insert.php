<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MDL Store</title>
    <link rel="stylesheet" href="navbar-footer-login/navbar.css" />
    <link rel="stylesheet" href="navbar-footer-login/footer.css" />
    <link rel="stylesheet" href="navbar-footer-login/login.css" />
</head>

<body>
    <?php include('navbar.php'); ?>
    <?php include('login-form.php'); ?>
    <?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'wdt_assignment';
    $conn = mysqli_connect($server, $username, $password, $dbname);

    $sql_paymentstatus = "SELECT * FROM order_list WHERE payment_status = 0 AND user_id = " . $_SESSION['userid'] . "";
    $result_paymentstatus = mysqli_query($conn, $sql_paymentstatus);

    if (mysqli_num_rows($result_paymentstatus) <= 0) {
        $sql_order_list = "INSERT INTO order_list (user_id) " .
            "VALUES (" . $_SESSION['userid'] . ")";
        mysqli_query($conn, $sql_order_list);
        $sql_product_order = "INSERT INTO product_order (order_id, product_id, apparel_size, product_quantity, total_price) " .
            "VALUES ((SELECT order_id FROM order_list WHERE user_id = " . $_SESSION['userid'] . " AND payment_status = 0), " . $_GET['product_id'] . ", " . $_POST['apparel_size'] . ", " . $_POST['product_quantity'] . ", NULL)";
        mysqli_query($conn, $sql_product_order);
    }

    $sql_productcheck = "SELECT * FROM product_order WHERE order_id = (SELECT order_id FROM order_list WHERE user_id = " . $_SESSION['userid'] . " AND payment_status = 0) AND product_id = " . $_GET['product_id'] . " AND apparel_size = '" . $_POST['apparel_size'] . "'";
    $result_productcheck = mysqli_query($conn, $sql_productcheck);

    if (mysqli_num_rows($result_productcheck) > 0) {
        $sql_updatecart = "UPDATE product_order SET product_quantity = (product_quantity + " . $_POST['product_quantity'] . ") " .
            "WHERE order_id = (SELECT order_id FROM order_list " .
            "WHERE user_id = " . $_SESSION['userid'] . " AND payment_status = 0) AND product_id = " . $_GET['product_id'] . " AND apparel_size = '" . $_POST['apparel_size'] . "'";
        mysqli_query($conn, $sql_updatecart);
    } else { 
        $sql_product_order = "INSERT INTO product_order (order_id, product_id, apparel_size, product_quantity) " .
            "VALUES ((SELECT order_id FROM order_list WHERE user_id = " . $_SESSION['userid'] . " AND payment_status = 0), " . $_GET['product_id'] . ", '" . $_POST['apparel_size'] . "', " . $_POST['product_quantity'] . ")";
        mysqli_query($conn, $sql_product_order);
    }

    echo ("<script>window.location.href='cart.php'</script>");

    ?>
    <?php include('footer.php') ?>
</body>

</html>
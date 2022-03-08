<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order History</title>
    <link rel="stylesheet" href="navbar-footer-login/navbar.css" />
    <link rel="stylesheet" href="navbar-footer-login/footer.css" />
    <link rel="stylesheet" href="navbar-footer-login/login.css" />
    <link rel="stylesheet" href="homepage/homepage.css" />
    <link rel="stylesheet" href="order-history.css">
</head>

<body>
    <?php include('navbar.php'); ?>
    <?php include('login-form.php'); ?>

    <div class="cart-bg">
        <div style="height:1px"></div>
        <h1 style="text-align: center" class="cartDisplay">Order History</h1>
        <?php

        $server = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'wdt_assignment';
        $conn = mysqli_connect($server, $username, $password, $dbname);

        $sql = "SELECT pl.product_picture, po.product_id, " .
            "po.order_id, pl.product_name, pl.product_category, " .
            "po.apparel_size, ol.user_id, po.product_quantity, " .
            "pl.product_price, (po.product_quantity * pl.product_price) AS sub_total " .
            "FROM order_list ol INNER JOIN product_order po ON " .
            "ol.order_id = po.order_id INNER JOIN product_list pl ON " .
            "po.product_id = pl.product_id WHERE ol.payment_status = 1 " .
            "AND user_id = " . $_SESSION['userid'] . "";
        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) > 0) {
            while ($row_select = mysqli_fetch_array($result)) {
                ?>
                <table class="cart-table">
                    <tr>
                        <td rowspan="6" style="height: 200px; width:200px;"><img src="<?php echo $row_select['product_picture']; ?>" alt="" height="100%" width="100%"></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="cart-info">
                            <h2 style="margin: 0; padding: 0; color: cyan"><?php echo $row_select['product_name']; ?></h2>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="cart-info">
                            <?php if ($row_select['product_category'] == 'Apparel') { ?>
                                <h3 style="margin: 0; padding: 0; color: cyan"> Apparel Size:</h3>
                                <input type="text" readonly value="<?php echo $row_select['apparel_size']; ?>" class="apparel-size" name="apparel_size">
                            <?php } else { ?>
                                <input type="hidden" name="apparel_size" value="">
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="cart-info">
                            <input type="number" min="1" max="99" readonly name="product_quantity" value="<?php echo $row_select['product_quantity']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="cart-info">
                            <h2 style="margin: 0; padding: 0; color: cyan">RM <?php echo $row_select['sub_total']; ?></h2>
                        </td>
                    </tr>
                </table>
            <?php }
            } else { ?>
            <center>
                <div class="no-cart">
                    <div class="no-cart-desc">
                        No order has been <br> made yet.
                    </div>
                </div>
            </center>
        <?php } ?>
        <div style="height:50px"></div>
    </div>

    <?php include('footer.php') ?>
</body>

</html>
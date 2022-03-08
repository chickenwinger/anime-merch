<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="navbar-footer-login/navbar.css" />
    <link rel="stylesheet" href="navbar-footer-login/footer.css" />
    <link rel="stylesheet" href="navbar-footer-login/login.css" />
    <link rel="stylesheet" href="homepage/homepage.css" />
    <link rel="stylesheet" href="cart.css">
</head>

<body>
    <?php include('navbar.php'); ?>
    <?php include('login-form.php'); ?>

    <div class="cart-bg">
        <div style="height: 80px"></div>
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
            "po.product_id = pl.product_id WHERE ol.payment_status = '0' " .
            "AND user_id = " . $_SESSION['userid'] . "";
        $result_cart_display = mysqli_query($conn, $sql);
        $totalprice = 0;

        if (isset($_SESSION['login'])) {
            if (mysqli_affected_rows($conn) > 0) {
                while ($row_cart = mysqli_fetch_array($result_cart_display)) {

                    ?>
                    <form action="cart-update.php" method="POST">
                        <table class="cart-table">
                            <tr>
                                <td rowspan="6" style="height: 200px; width:200px;"><img src="<?php echo $row_cart['product_picture'] ?>" alt="" height="100%" width="100%"></td>
                            </tr>
                            <tr>
                                <td colspan="4" class="cart-info">
                                    <input type="hidden" name="product_id" value="<?php echo $row_cart['product_id'] ?>">
                                    <input type="hidden" name="order_id" value="<?php echo $row_cart['order_id'] ?>">
                                    <input type="hidden" name="product_name" value="<?php echo $row_cart['product_name'] ?>">
                                    <h2 style="margin: 0; padding: 0; color: cyan"><?php echo $row_cart['product_name'] ?></h2>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="cart-info">
                                    <?php if ($row_cart['product_category'] == 'Apparel') { ?>
                                        <h3 style="margin: 0; padding: 0; color: cyan"> Apparel Size:</h3>
                                        <input type="text" readonly value="<?php echo $row_cart['apparel_size'] ?>" class="apparel-size" name="apparel_size">
                                    <?php } else { ?>
                                        <input type="hidden" name="apparel_size" value="<?php echo $row_cart['apparel_size'] ?>">
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="cart-info">
                                    <input type="number" min="1" max="99" name="product_quantity" value="<?php echo $row_cart['product_quantity'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="cart-info">
                                    <input type="hidden" name="product_price" value="<?php echo $row_cart['product_price'] ?>">
                                    <input type="hidden" name="sub_total" value="<?php echo $row_cart['sub_total']; ?>">
                                    <h2 style="margin: 0; padding: 0; color: cyan">RM<?php echo $row_cart['sub_total']; ?></h2>

                                </td>
                                <td><button type="submit">Update Cart</button></td>
                                <td><button type="submit" formaction="cart-delete.php">Remove This Item</button></td>
                            </tr>
                        </table>
                    </form>
                <?php $totalprice += $row_cart['sub_total'];
                        } ?>
                <form action="payment-page.php" method="POST">
                    <table class="total-price">
                        <tr>
                            <td class="total-price-content">Total Price:</td>
                        </tr>
                        <tr>
                            <input type="hidden" name="totalprice" value="<?php echo $totalprice; ?>">
                            <td class="total-price-content">RM <?php echo $totalprice; ?></td>
                        </tr>
                        <tr>
                            <td style="padding: 0 20%; height: 30px; padding-bottom: 15px;">
                                <button class="checkout" type="submit">Checkout</button>
                            </td>
                        </tr>
                    </table>
                </form>
                <a class="find-more" href="all-product.php">+ More Product</a>
                <a class="find-more3" href="order-history.php">Order History</a>
            <?php } else { ?>
                <center>
                    <div class="no-cart">
                        <div class="no-cart-desc">
                            No item added to cart.
                        </div>
                        <a href="all-product.php" class="all-product-link"><u>Find product here.</u></a>
                    </div>
                    <a class="find-more2" href="order-history.php">Order History</a>
                </center>
        <?php
            }
        } else {
            echo ("<script>document.querySelector('.login-popup').style.display='flex';</script>");
        }
        ?>
        <div style="height: 80px"></div>
    </div>

    <?php include('footer.php') ?>
</body>

</html>
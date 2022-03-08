<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="navbar-footer-login/navbar.css" />
    <link rel="stylesheet" href="navbar-footer-login/footer.css" />
    <link rel="stylesheet" href="navbar-footer-login/login.css" />
    <link rel="stylesheet" href="homepage/homepage.css" />
    <link rel="stylesheet" href="productpage.css">
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

    $sql_productpage = "SELECT * FROM product_list WHERE product_id = " . $_GET['product_id'] . "";
    $result_productpage = mysqli_query($conn, $sql_productpage);
    ?>

    <div class="productpage-bg">
        <div style="height: 60px"></div>
        <?php
        if (!isset($_GET['product_id']) || $_GET['product_id'] == "") {
            echo ("<script>alert('Please do not attempt to modify the URL as it will affect the result!');</script>");
            echo ("<script>window.history.back(true);</script>");
        }
        while ($rows_productpage = mysqli_fetch_array($result_productpage)) {
            ?>
            <form action="cart-insert.php?product_id=<?php echo ($rows_productpage['product_id']); ?>" method="POST">
                <center>
                    <table class="productpage-table">
                        <tr>
                            <td style="width: 50%;" rowspan="4">
                                <img src="<?php echo ($rows_productpage['product_picture']); ?>" alt="" width="100%">
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 30px;" colspan="2">
                                <h1 class="product-info"><?php echo ($rows_productpage['product_name']); ?></h1><br><br>
                                <h3 class="product-info2">Product Anime: <?php echo ($rows_productpage['product_anime']); ?></h3><br>
                                <h3 class="product-info2">Product Category: <?php echo ($rows_productpage['product_category']); ?></h3><br>
                                <h3 class="product-info2">Package Content: <?php echo ($rows_productpage['package_content']); ?></h3><br>
                                <h1 class="product-info">RM<?php echo ($rows_productpage['product_price']); ?></h2><br>
                                    <input type="hidden" name="product_price" value="<?php echo ($rows_productpage['product_price']); ?>">
                                    <?php if ($rows_productpage['product_category'] == 'Apparel') { ?>
                                        <h3 class="product-info">
                                            Apparel Size: &nbsp;
                                            <select name="apparel_size" required class="apparel-size">
                                                <option value="" selected disabled>Select a size</option>
                                                <option value="XL">XL</option>
                                                <option value="L">L</option>
                                                <option value="M">M</option>
                                                <option value="S">S</option>
                                                <option value="XS">XS</option>
                                            </select>
                                        </h3>
                                    <?php } else { ?>
                                        <input type="hidden" value="NULL" name="apparel_size">
                                    <?php } ?>
                                    <h3>Quantity: <input name="product_quantity" type="number" min="1" max="10" value="1"></h3><br>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 30px;">
                                <?php if (isset($_SESSION['login'])) { ?>
                                    <button type="submit" class="add-to-cart">+ Cart</button>&nbsp;&nbsp;
                                <?php } else if (!isset($_SESSION['login'])) { ?>
                                    <button type="button" class="add-to-cart" onclick="loginPopup();">+ Cart</button>&nbsp;&nbsp;
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="height:20px"></td>
                        </tr>
                    </table>
                </center>
            </form>
        <?php } ?>
    </div>
    <script src="navbar-footer-login/login.js"></script>
    <?php include('footer.php') ?>
</body>

</html>
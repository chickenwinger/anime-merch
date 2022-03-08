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
    <link rel="stylesheet" href="homepage/homepage.css" />
    <link rel="stylesheet" href="all-product.css">
</head>

<body>
    <?php include('navbar.php'); ?>
    <?php include('login-form.php'); ?>

    <div class="all-product-bg">
        <center>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <div style="height: 30px;"></div>
            <table style="table-layout: fixed; border-spacing: 30px;">
                <tr>
                    <?php
                    $server = 'localhost';
                    $username = 'root';
                    $password = '';
                    $dbname = 'wdt_assignment';
                    $conn = mysqli_connect($server, $username, $password, $dbname);

                    if (!isset($_GET['all_product'])) { //if  user attempt to modify the url, it will redirect to display all product
                        echo ("<script>window.location.href='all-product.php?all_product=all_product'</script>");
                    }

                    if ($_GET['all_product'] == 'all_product' or !isset($_GET['all_product'])) {
                        $sql_product_list = "select * from product_list";
                    } else if ($_GET['all_product'] == 'search') {
                        $sql_product_list = "select * from product_list where (product_name ".
                        "LIKE '%" . $_POST['search'] . "%' OR product_category LIKE '%" . $_POST['search'] . "%') ".
                        "OR product_anime LIKE '%" . $_POST['search'] . "%'";
                    } else if ($_GET['all_product'] == 'category') {
                        $sql_product_list = "select * from product_list where product_category = '" . $_GET['category'] . "'";
                    } else if ($_GET['all_product'] == 'anime') {
                        $sql_product_list = "select * from product_list where product_anime = '" . $_GET['anime'] . "'";
                    } else if ($_GET['all_product'] == 'otheranime') {
                        $sql_product_list = "select * from product_list where ((product_anime <> 'kimetsu no yaiba' AND product_anime <> 'naruto')" .
                            " AND (product_anime <> 'akame ga kill!' AND product_anime <> 'kono suba')" .
                            " AND (product_anime <> 'one piece' AND product_anime <> 'sword art online')" .
                            " AND (product_anime <> 'bleach' AND product_anime <> 'nanatsu no taizai')" .
                            " AND (product_anime <> 'fairy tail' AND product_anime <> 'attack on titan'))";
                    }

                    $result_product_list = mysqli_query($conn, $sql_product_list);
                    $counter = 0;
                    $number = 5;

                    if (mysqli_num_rows($result_product_list) <= 0) {
                        ?>
                        <div style="height: 50px"></div>
                        <div class="search-no-result">
                            <div class="search-no-result-desc">
                                No result found. <br> Please try again.
                            </div>
                        </div>
                        <?php
                        } else {
                            while ($rows_product_list = mysqli_fetch_array($result_product_list)) {
                                if ($counter % $number == 0 && $counter != 0) {
                                    echo ("</tr><tr>");
                                }
                                $counter++;
                                ?>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <div class="product-container display-product">
                                                <img src="<?php echo ($rows_product_list['product_picture']); ?>" alt="">
                                                <div class="product-function">
                                                    <div class="product-text">
                                                        <a class="product-icon" href="productpage.php?product_id=<?php echo ($rows_product_list['product_id']); ?>"><i class="fa fa-eye" style="font-size:32px"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <i class="fa fa-star" style="font-size:12px"></i>
                                                    <i class="fa fa-star" style="font-size:12px"></i>
                                                    <i class="fa fa-star" style="font-size:12px"></i>
                                                    <i class="fa fa-star" style="font-size:12px"></i>
                                                    <i class="fa fa-star" style="font-size:12px"></i><br>
                                                    <h4 class="product-title"><?php echo ($rows_product_list['product_name']); ?></h4><br>
                                                    <h4 class="product-title">RM<?php echo ($rows_product_list['product_price']); ?></h4>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                    <?php } } ?>
                </tr>
            </table>
        </center>
        <div style="height: 250px"></div>
    </div>

    <?php include('footer.php') ?>
</body>

</html>
<!-- NAVIGATION START -->
<?php session_start() ?>
<div class="navbar">
    <?php if (isset($_SESSION['login'])) {
        if ($_SESSION['role'] == "0") {
            echo ("<script>window.location.href='admin.php'</script>");
        }
    } ?>
    <table cellpadding="0" cellspacing="0" style="text-align: center;">
        <tr>
            <td width="5%">
                <img src="navbar-footer-login/luffy.png" alt="storelogo" width="100%" />
            </td>
            <td width="8%" align="left">
                <a href="homepage.php" style="font-family: cursive; font-size: 20px; color: white;">MDL STORE</a>
            </td>
            <td width="20%">
                <form class="search" action="all-product.php?all_product=search" method="post">
                    <input type="text" placeholder="Enter a keyword..." name="search" />
                    <button type="submit" class="btnsearch" name="btnsearchkey">
                        <img src="navbar-footer-login/searchbutton.png" alt="searchbutton" width="20px" />
                    </button>
                </form>
            </td>
            <td width="7%" style="padding:5px">
                <a class="nav-items-a" href="homepage.php">
                    <div class="nav-items">
                        HOME
                    </div>
                </a>
            </td>
            <td width="7%" style="padding:5px">
                <div class="dropdown">
                    <div class="btndropdown">PRODUCTS</div>
                    <div class="dropdown-items">
                        <a href="all-product.php?all_product=all_product">All Products</a>
                        <a href="all-product.php?all_product=category&category=Bag">Bag</a>
                        <a href="all-product.php?all_product=category&category=Apparel">Apparel</a>
                        <a href="all-product.php?all_product=category&category=Figurine">Figurine</a>
                        <a href="all-product.php?all_product=category&category=Accessory">Accessory</a>
                    </div>
                </div>
            </td>
            <td width="7%" style="padding:5px">
                <a class="nav-items-a" href="about-us.php">
                    <div class="nav-items">
                        ABOUT US
                    </div>
                </a>
            </td>
            <td width="8%">
                <?php if (isset($_SESSION['name']) && !empty($_SESSION['name'])) { ?>
                    <a href="logout.php" class="navlogout" onmouseover="logouthover()" onmouseout="logouthover2()"><?php echo $_SESSION['name'] ?></a>
                <?php } else { ?>
                    <button class="navlogin" onclick="loginPopup()">
                        LOGIN
                    </button>
                <?php } ?>
            </td>
            <td width="7%">
                <?php if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
                    if ($_SESSION['role'] == "1") { ?>
                        <a href="cart.php"><img src="navbar-footer-login/cart.png" alt="storecart" width="30%" /></a>
                    <?php } } else { ?>
                    <a href="#"><img src="navbar-footer-login/cart.png" alt="storecart" width="30%" onclick="loginPopup(); loginAlert();" /></a>
                <?php } ?>
            </td>
        </tr>
    </table>
    <script>
        function loginAlert() {
            alert("Please login first!!!");
        }

        function logouthover() {
            document.querySelector(".navlogout").innerHTML = "LogOut";
        }
        function logouthover2() {
            document.querySelector(".navlogout").innerHTML = "<?php echo $_SESSION['name'] ?>";
        }
    </script>
</div>
<!-- NAVIGATION END -->
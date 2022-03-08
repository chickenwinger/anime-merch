<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout Info</title>
    <link rel="stylesheet" href="navbar-footer-login/navbar.css" />
    <link rel="stylesheet" href="navbar-footer-login/footer.css" />
    <link rel="stylesheet" href="navbar-footer-login/login.css" />
    <link rel="stylesheet" href="homepage/homepage.css" />
    <link rel="stylesheet" href="payment-page.css">
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

    $sql_autofill = "SELECT * FROM user WHERE user_id = " . $_SESSION['userid'] . "";
    $result_autofill = mysqli_query($conn, $sql_autofill);
    $row_autofill = mysqli_fetch_array($result_autofill);
    ?>

    <div class="payment-bg">
        <div style="height: 50px"></div>
        <form action="paid.php" method="POST">
            <table class="payment-table">
                <input type="hidden" name="userid" value="<?php echo $row_autofill['user_id']; ?>">
                <input type="hidden" name="totalprice" value="<?php echo $_POST['totalprice'] ?>">
                <tr>
                    <td class="title">Delivery Info</td>
                </tr>
                <tr>
                    <td class="delivery-content">
                        Full Name: <br>
                        <input type="text" name="user_name" value="<?php echo $row_autofill['user_fullname']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="delivery-content">
                        Email: <br>
                        <input type="email" name="user_email" value="<?php echo $row_autofill['user_email']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="delivery-content">
                        Phone Number <br>
                        <input type="tel" name="user_phone" value="<?php echo $row_autofill['user_phone']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="delivery-content">
                        House/Unit Address: <br>
                        <input type="text" name="user_address" value="<?php echo ($row_autofill['house_or_unit'] . ", " . $row_autofill['street'] . ", " . $row_autofill['postal_code'] . ", " . $row_autofill['state']); ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="delivery-content">
                        <button type="submit" class="proceed">Proceed To Online Transaction</button>
                    </td>
                </tr>
                <tr>
                    <td style="height: 30px"></td>
                </tr>
            </table>
        </form>
        <table class="totalprice">
            <tr>
                <td class="totalprice-content">Total Price:</td>
            </tr>
            <tr>
                <td class="totalprice-content">RM <?php echo $_POST['totalprice'] ?></td>
            </tr>
        </table>
        <div style="height: 50px"></div>
    </div>

    <?php include('footer.php') ?>
</body>

</html>
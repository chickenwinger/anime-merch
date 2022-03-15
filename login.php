<?php
    session_start();

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'wdt_assignment';
    $conn = mysqli_connect($server, $username, $password, $dbname);

    //prevent SQL injection
    $login_code = stripcslashes($login_code);
    $login_username = mysqli_real_escape_string($conn, $_POST['username']);
    $login_password = mysqli_real_escape_string($conn, $_POST['password']);
    $login_code = mysqli_real_escape_string($conn, $_POST['code']);

    if(isset($_POST['btnlogin'])) {
        //check validity
        $sql = "SELECT * FROM user WHERE user_name = '$login_username'
        AND user_password = '".md5($login_password)."'
        AND code = '$login_code'";
        $result = mysqli_query($conn, $sql);

        //match database
        if (mysqli_affected_rows($conn) == 0) {
            echo "<script>alert('Wrong username/password/last five digits of your IC number! Please try again.')</script>;";
            echo "<script>window.location.href='homepage.php';</script>";
        }

        //CREATE SESSION VARIABLES
        if ($row = mysqli_fetch_array($result)) {
            $_SESSION['userid'] = $row['user_id'];
            $_SESSION['name'] = $row['user_fullname'];
            $_SESSION['password'] = $row['user_password'];
            $_SESSION['role'] = $row['user_role'];
            $_SESSION['code'] = $row['code'];
            $_SESSION['login'] = "logged-in";
        }

        //link to homepage with welcome msg for user and admin
        if ($_SESSION['role'] == "1") {
            echo "<script>alert('Welcome back! ".$_SESSION['name']."')</script>";
            echo "<script>window.location.href='homepage.php';</script>";
        } else if ($_SESSION['role'] == "0") {
            echo "<script>alert('Welcome back! Admin ".$_SESSION['name']."')</script>";
            echo "<script>window.location.href='admin.php';</script>";
        }
    }

?>
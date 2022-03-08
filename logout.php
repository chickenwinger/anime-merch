<?php

    session_start();

    if ($_SESSION['role'] == "1") {
        echo "<script>alert('Logout successfully! Please login again ".$_SESSION['name'] .".')</script>";
        session_destroy();
        echo "<script>window.location.href='homepage.php'</script>";
    }
    else if ($_SESSION['role'] == "0") {
        echo "<script>alert('Logout successfully! Please login again Admin ".$_SESSION['name'] .".')</script>";
        session_destroy();
        echo "<script>window.location.href='homepage.php'</script>";
    }
    else if($_SESSION['login'] == "") {
        echo "<script>alert('Please log in to be logged-out!')</script>";
        session_destroy();
        echo "<script>window.location.href='homepage.php'</script>";
    }

?>
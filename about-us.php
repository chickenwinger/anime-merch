<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>About Us</title>
    <link rel="stylesheet" href="navbar-footer-login/navbar.css" />
    <link rel="stylesheet" href="navbar-footer-login/footer.css" />
    <link rel="stylesheet" href="navbar-footer-login/login.css" />
    <link rel="stylesheet" href="homepage/homepage.css" />
    <style>
      .aboutus-bg {
        background: url(bg-aboutus.png) center center no-repeat fixed;
        background-size: cover;
        width: 100%;
        height: 1400px;
      }

      .aboutus-content {
        background: rgba(255, 255, 255, 0.5);
        width: 100%;
        height: 380px;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
        text-align: center;
        font-family: Arial;
      }

      .aboutus-skl {
        font-size: 20px;
        font-family: cursive;
      }

      .fa {
        padding: 20px;
        font-size: 30px;
        width: 50px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
      }

      .fa-facebook {
        background: #3b5998;
        color: white;
      }

      .fa-twitter {
        background: #55acee;
        color: white;
      }

      .fa-linkedin {
        background: #007bb5;
        color: white;
      }
    </style>
  </head>
  <body>
  <?php include('navbar.php'); ?>
  <?php include('login-form.php'); ?>

    <div class="aboutus-bg">
      <div style="height: 80px"></div>
      <div class="aboutus-content">
        <div style="height: 50px;"></div>
        <h1>A B O U T &nbsp;&nbsp; U S</h1>
        <p class="aboutus-skl">
          Welcome to MDL Store! Monkey D Luffy Co,.Ltd was founded by Lennard
          Chia. <br />
          It was inspired by a group of enthusiasts who love everything about
          Japanese anime. <br />
          It was started because there were no anime store that sells demanded
          products imported <br />
          from Japan. We are currently operating in Malaysia only. We will
          consider to expand to <br />
          oversea in the future. Our objective is to provide anime stuff
          imported from Japan to <br />
          our fellow enthusiasts' doorstep.
        </p>
      </div>
      <div style="height: 80px;"></div>
      <div class="aboutus-content">
        <div style="height: 50px;"></div>
        <h1>W H Y &nbsp;&nbsp; C H O O S E &nbsp;&nbsp; U S</h1>
        <p class="aboutus-skl">
          Our team is passionate about making it easier for you to shop
          online.We care <br />
          about your time so we try our best to make your shopping experience
          pleasant, <br />
          seamless and hassle-free. We’re committed to offering the lowest
          prices and <br />
          also frequent promotions and seasonal sales. We hope to build
          relationships <br />
          with our customers so we’ll do everything we can to ensure you’re
          satisfied.
        </p>
      </div>
      <div style="height: 80px;"></div>
      <div class="aboutus-content" style="height: 300px;">
        <div style="height: 50px;"></div>
        <h1>
          F O L L O W &nbsp;&nbsp; O U R &nbsp;&nbsp; S O C I A L &nbsp;&nbsp; M
          E D I A
        </h1>
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <div>
          <a href="#" onclick="return false;" class="fa fa-facebook"></a>
          <a href="#" onclick="return false;" class="fa fa-twitter"></a>
          <a href="#" onclick="return false;" class="fa fa-linkedin"></a>
        </div>
      </div>
    </div>

    <?php include('footer.php') ?>
  </body>
</html>

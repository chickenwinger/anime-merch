<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <meta http-equiv="X-UA-Compatible" content="ie=edge" />
   <title>Member Registration</title>
   <link rel="stylesheet" href="navbar-footer-login/navbar.css" />
   <link rel="stylesheet" href="navbar-footer-login/footer.css" />
   <link rel="stylesheet" href="navbar-footer-login/login.css" />
   <link rel="stylesheet" href="homepage/homepage.css" />
   <link rel="stylesheet" href="register/register.css">
</head>

<body>
   <?php include('navbar.php'); ?>
   <?php include('login-form.php'); ?>
   <?php
   if (isset($_SESSION['login'])) {
      echo ("<script>alert('Please log out to register an account!')</script>");
      echo ("<script>window.location.href='homepage.php'</script>");
   }
   ?>

   <!-- REGISTER START -->
   <div class="register-bg">
      <div style="height: 50px;"></div>
      <div class="register-content register-fade-in">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
         <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet" />
         <div style="height: 30px;"></div>
         <h1 style="margin: 0; text-align: center;">Register as Member</h1>
         <table class="register-form">
            <form action="register.php" method="POST">
               <tr style="height: 10px;"></tr>
               <tr>
                  <td colspan="2">Name:</td>
               </tr>
               <tr>
                  <td colspan="4">
                     <input class="register-input" type="text" name="fullname" required />
                  </td>
               </tr>
               <tr>
                  <td colspan="2">Username:</td>
               </tr>
               <tr>
                  <td colspan="4">
                     <input class="register-input" type="text" name="username" required />
                  </td>
               </tr>
               <tr>
                  <td colspan="4">
                     Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Male
                     <input type="radio" name="gender" value="male" checked />
                     &nbsp;&nbsp;&nbsp; Female
                     <input type="radio" name="gender" value="female" />
                  </td>
               </tr>
               <tr>
                  <td colspan="2">Email:</td>
               </tr>
               <tr>
                  <td colspan="4">
                     <input class="register-input" type="email" name="email" required />
                  </td>
               </tr>
               <tr>
                  <td colspan="2">Phone Number:</td>
               </tr>
               <tr>
                  <td colspan="4">
                     <input class="register-input" type="tel" name="phonenumber" required />
                  </td>
               </tr>
               <tr>
                  <td colspan="2">House/ Unit No:</td>
               </tr>
               <tr>
                  <td colspan="4">
                     <input class="register-input" type="text" name="house_no" required />
                  </td>
               </tr>
               <tr>
                  <td colspan="2">Street:</td>
               </tr>
               <tr>
                  <td colspan="4">
                     <input class="register-input" type="text" name="street" required />
                  </td>
               </tr>
               <tr>
                  <td colspan="2">Postal Code</td>
               </tr>
               <tr>
                  <td colspan="4">
                     <input class="register-input" type="text" name="postal_code" required />
                  </td>
               </tr>
               <tr>
                  <td colspan="2">State:</td>
               </tr>
               <tr>
                  <td colspan="4">
                     <input class="register-input" type="text" name="state" required />
                  </td>
               </tr>
               <tr>
                  <td colspan="2">Password:</td>
               </tr>
               <tr>
                  <td colspan="4">
                     <input class="register-input" type="password" name="password" required />
                  </td>
               </tr>
               <tr>
                  <td colspan="2">Confirm Password:</td>
               </tr>
               <tr>
                  <td colspan="4">
                     <input class="register-input" type="password" name="confirmpassword" required />
                  </td>
               </tr>
               <tr>
                  <td colspan="2">Security Code [Please remember this code]</td>
               </tr>
               <tr>
                  <td colspan="4">
                     <input class="register-input" type="int" name="code" required />
                  </td>
               </tr>
               <tr>
               <tr style="height: 20px;"></tr>
               <tr>
                  <td colspan="4" align="center">
                     <button class="btnregister" type="submit" name="btnregister">
                        Register</button>&nbsp;&nbsp;&nbsp;
                     <button class="btnregister" type="reset" name="btnreset">
                        Reset
                     </button>
                  </td>
               </tr>
               <tr>
                  <td style="height: 20px"></td>
               </tr>
            </form>
         </table>
      </div>
      <div style="height: 50px;"></div>
   </div>
   <?php
   $server = 'localhost';
   $username = 'root';
   $password = '';
   $dbname = 'wdt_assignment';
   $conn = mysqli_connect($server, $username, $password, $dbname);

   if (isset($_POST['btnregister'])) {
      $user_fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
      $user_name = mysqli_real_escape_string($conn, $_POST['username']);
      $user_gender = mysqli_real_escape_string($conn, $_POST['gender']);
      $user_email = mysqli_real_escape_string($conn, $_POST['email']);
      $user_phone = mysqli_real_escape_string($conn, $_POST['phonenumber']);
      $user_password = mysqli_real_escape_string($conn, $_POST['password']);
      $user_confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
      $house_no = mysqli_real_escape_string($conn, $_POST['house_no']);
      $street = mysqli_real_escape_string($conn, $_POST['street']);
      $postal_code = mysqli_real_escape_string($conn, $_POST['postal_code']);
      $state = mysqli_real_escape_string($conn, $_POST['state']);

      $number = preg_match('@[0-9]@', $user_password);
      $uppercase = preg_match('@[A-Z]@', $user_password);
      $lowercase = preg_match('@[a-z]@', $user_password);
      $specialChars = preg_match('@[^\w]@', $user_password);

      //check pwd = cfm pwd
      if ($user_password !== $user_confirmpassword) {
         echo "<script>alert('Password and confirm password not matched!');";
         die("window.lcoation.href='register.php';</script>");
      
      //PASSWORD STRENGTH CHECK
      } elseif ($user_password == $user_confirmpassword && strlen($user_password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
         echo "<script>alert('Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.');window.history.go(-1);</script>";
         echo "<script>window.location.href='register.php';</script>";
      }

      //add register info
      $sql = "insert into user (user_fullname, user_name, user_gender, user_email, user_phone, house_or_unit, street, postal_code, state, user_password)" .
         "VALUES ('$user_fullname', '$user_name', '$user_gender', '$user_email', '$user_phone', '$house_no', '$street', '$postal_code', '$state', '" . md5($user_confirmpassword) . "');";
      mysqli_query($conn, $sql);

      //check update query working or not
      if (mysqli_affected_rows($conn) <= 0) {
         echo "<script> alert('Unable to register! \\nPlease try Again!');";
         die("window.location.href='register.php';</script>");
      } else {
         echo "<script>alert('Register successfully! Login now!');";
         echo "window.location.href='homepage.php';</script>";
      }
   }
   ?>
   <!-- REGISTER END -->

   <?php include('footer.php') ?>
</body>

</html>
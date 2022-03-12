   <!-- LOGIN START -->
   <div class="login-popup">
      <div class="login-popup-content login-fade-in">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
         <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet" />
         <h1 style="margin: 0; display: inline-block;">Login Your Account</h1>
         <div class="login-close">
            <i class="fa fa-close" onclick="loginPopupClose()"></i>
         </div>
         <table align="center" class="login-form">
            <form action="login.php" method="POST">
               <tr>
                  <td>Username:</td>
               </tr>
               <tr>
                  <td colspan="2"><input type="text" name="username" required /></td>
               </tr>
               <tr>
                  <td>Password:</td>
               </tr>
               <tr>
                  <td colspan="2"><input type="password" name="password" required /></td>
               </tr>
               <tr>
                  <td>Security Code</td>
               </tr>
               <tr>
                  <td colspan="2"><input type="int" name="code" required /></td>
               </tr>
               <tr style="height: 10px;"></tr>
               <tr>
                  <td align="center" colspan="3">
                     <button class="btnlogin" type="submit" name="btnlogin">
                        Login
                     </button>
                     &nbsp;&nbsp;
                     <button class="btnlogin" type="reset" name="btnreset">
                        Reset
                     </button>
                  </td>
               </tr>
               <tr style="height: 10px;"></tr>
               <tr>
                  <td colspan="3" class="link-register">
                     Not a member?&nbsp;
                     <a href="register.php"><b>sign-up now!</b></a>
                  </td>
               </tr>
            </form>
         </table>
      </div>
   </div>
   <script src="navbar-footer-login/login.js"></script>
   <!-- LOGIN END -->
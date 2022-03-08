   <!-- FOOTER START -->
   <footer>
      <div style="height: 20px; background: black; background: rgb(73, 73, 73);border-top: 1px solid grey;"></div>
      <table align="center" style="border-spacing: 200px 0;background: rgb(73, 73, 73); width: 100%;">
         <tr>
            <td class="table-header">Our Products</td>
            <td class="table-header">Quick Links</td>
            <td class="table-header" colspan="2">Product Tag</td>
         </tr>
         <tr>
            <td class="footer-content">
               <a href="all-product.php?all_product=all_product">All Products</a><br />
               <a href="all-product.php?all_product=category&category=Bag">Bags</a><br />
               <a href="all-product.php?all_product=category&category=Apparel">Apparels</a><br />
               <a href="all-product.php?all_product=category&category=Figurine">Figurines</a><br />
               <a href="all-product.php?all_product=category&category=Accessory">Accessories</a>
            </td>
            <td class="footer-content">
               <a href="homepage.php">Home</a><br />
               <?php if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
                  if ($_SESSION['role'] == "1") { ?>
                     <a href="cart.php">View Cart</a><br />
                  <?php }
                  } else { ?>
                  <a href="#" onclick="loginPopup(); return false">View Cart</a><br />
               <?php } ?>
               <a href="about-us.php">About Us</a>
            </td>
            <td class="footer-content" style="text-align: center;" colspan="2">
               <a href="all-product.php?all_product=anime&anime=kimetsu%20no%20yaiba">Kimetsu no Yaiba</a> &bull;
               <a href="all-product.php?all_product=anime&anime=fairy%20tail">Fairy Tail</a><br />
               <a href="all-product.php?all_product=anime&anime=naruto">Naruto</a> &bull;
               <a href="all-product.php?all_product=anime&anime=attack%20on%20titan">Attack On Titan</a><br />
               <a href="all-product.php?all_product=anime&anime=bleach">Bleach</a> &bull;
               <a href="all-product.php?all_product=anime&anime=sword%20art%20online">Sword Art Online</a><br />
               <a href="all-product.php?all_product=anime&anime=nanatsu%20no%20taizai">Nanatsu no Taizai</a> &bull;
               <a href="all-product.php?all_product=anime&anime=one%20piece">One Piece</a><br />
               <a href="all-product.php?all_product=anime&anime=kono%20suba">Kono Suba</a> &bull;
               <a href="all-product.php?all_product=anime&anime=akame%20ga%20kill">Akame ga Kill!</a><br />
               <a href="all-product.php?all_product=otheranime">Other Anime</a>
            </td>
         </tr>
         <tr>
            <td colspan="4" class="footer-content">
               <a href="#0">
                  <img src="navbar-footer-login/social-media-icon/facebook-icon.png" alt="" width="70px" />
               </a>
               &nbsp;&nbsp;&nbsp;
               <a href="#0">
                  <img src="navbar-footer-login/social-media-icon/twitter-icon.png" alt="" width="70px" />
               </a>
               &nbsp;&nbsp;&nbsp;
               <a href="#0">
                  <img src="navbar-footer-login/social-media-icon/linkedin-icon.png" alt="" width="70px" />
               </a>
               &nbsp;&nbsp;&nbsp;
            </td>
         </tr>
      </table>

      <div class="copyright-footer">
         &copy; Copyright 2019
         <a href="homepage.php">Monkey D luffy Co.,Ltd.</a> All Rights Reserved
      </div>
   </footer>
   <!-- FOOTER END -->
<!DOCTYPE html>
<html>

<head>
   <!-- meta http-equiv="refresh" content="60;url=logout.php"       -->
   <title>MDL Store</title>
   <link rel="stylesheet" href="navbar-footer-login/navbar.css" />
   <link rel="stylesheet" href="navbar-footer-login/footer.css" />
   <link rel="stylesheet" href="navbar-footer-login/login.css" />
   <link rel="stylesheet" href="homepage/homepage.css" />
</head>

<body>
   <?php include('navbar.php'); ?>
   <?php include('login-form.php'); ?>

   <!-- SLIDER START -->
   <div class="slide-bg">
      <div style="height: 40px;"></div>
      <!-- space for top 'margin' -->
      <div class="slider-container">
         <div class="slider-items fade">
            <img src="homepage/slider/welcome.png" alt="slide1" />
            <div class="slider-caption">Welcome To MDL Store!</div>
         </div>
         <div class="slider-items fade">
            <a href="all-product.php?all_product=category&category=Apparel">
               <img src="homepage/slider/slide1.jpg" alt="slide2" />
            </a>
            <div class="slider-caption">
               20% off all apparels until the end of December 2019!
            </div>
         </div>
         <div class="slider-items fade">
            <a href="all-product.php?all_product=category&category=Figurine">
               <img src="homepage/slider/slide2.jpg" alt="slide3" />
            </a>
            <div class="slider-caption">
               10% off for minimum purchase of 3 figurines!
            </div>
         </div>
         <div class="slider-items fade">
            <a href="all-product.php?all_product=category&category=Accessory">
               <img src="homepage/slider/slide3.jpg" alt="slide4" />
            </a>
            <div class="slider-caption">
               We have all your favourite anime accessories here
            </div>
         </div>

         <a class="prev" onclick="plusSlides(-1)" style="width: 15%;">&#10094;</a>
         <a class="next" onclick="plusSlides(1)" style="width: 15%;">&#10095;</a>
      </div>
      <br />
      <div style="text-align: center; margin-top: -10px;">
         <span class="dot" onclick="currentSlide(1)"></span>
         <span class="dot" onclick="currentSlide(2)"></span>
         <span class="dot" onclick="currentSlide(3)"></span>
         <span class="dot" onclick="currentSlide(4)"></span>
      </div>
   </div>
   <script src="homepage/home-slider.js"></script>
   <!-- SLIDER END -->

   <!-- CATEGORIES START -->
   <div class="category-bg">
      <div style="height: 35px;"></div>
      <h1 style="color: black; font-family: Arial;" align="center">
         C A T E G O R I E S
      </h1>
      <table align="center" style="margin-top: 1%;" cellspacing="0" cellpadding="5px">
         <tr>
            <td rowspan="2">
               <div class="category" style="height: 550px; width: 309.8px; line-height: 16;">
                  <a href="all-product.php?all_product=all_product">
                     <div class="category-caption">ALL PRODUCTS</div>
                     <img src="homepage/category/tenkinoko.png" alt="" height="100%" />
                  </a>
               </div>
            </td>
            <td>
               <div class="category" style=" line-height: 7;">
                  <a href="all-product.php?all_product=category&category=Bag">
                     <div class="category-caption">BAGS</div>
                     <img src="homepage/category/bag.jpg" alt="" height="100%" />
                  </a>
               </div>
            </td>
            <td>
               <div class="category" style=" line-height: 7;">
                  <a href="all-product.php?all_product=category&category=Apparel">
                     <div class="category-caption">APPAREL</div>
                     <img src="homepage/category/apparel.jpg" alt="" height="100%" />
                  </a>
               </div>
            </td>
         </tr>
         <tr>
            <td>
               <div class="category" style=" line-height: 7;">
                  <a href="all-product.php?all_product=category&category=Figurine">
                     <div class="category-caption">FIGURINES</div>
                     <img src="homepage/category/figurine.jpg" alt="" height="100%" />
                  </a>
               </div>
            </td>
            <td>
               <div class="category" style=" line-height: 7;">
                  <a href="all-product.php?all_product=category&category=Accessory">
                     <div class="category-caption">ACCESSORIES</div>
                     <img src="homepage/category/accessories.jpg" alt="" height="100%" />
                  </a>
               </div>
            </td>
         </tr>
      </table>
   </div>
   <!-- CATEGORIES END -->

   <!-- ANIME CATEGORY START -->
   <div class="anime-bg">
      <div style="height: 35px;"></div>
      <h1 style="color: black; font-family: Arial;" align="center">
         P R O D U C T &nbsp;&nbsp; B Y &nbsp;&nbsp; T A G
      </h1>
      <div style="height:30px;"></div>
      <table cellpadding="0" cellspacing="0" align="center">
         <tr>
            <td colspan="2" class="anime-xrec">
               <div class="anime-caption" style="width: 420px; height: 210px;">
                  <a class="anime-search" style="line-height: 7;" href="all-product.php?all_product=anime&anime=kimetsu%20no%20yaiba">
                     &nbsp;Kimetsu no Yaiba&nbsp;
                  </a>
               </div>
               <img src="homepage/tags/kimetsunoyaiba.png" alt="" width="420px" />
            </td>
            <td rowspan="2" colspan="2" class="anime-square">
               <div class="anime-caption" style="width: 420px; height: 420px;">
                  <a class="anime-search" style="line-height: 14;" href="all-product.php?all_product=anime&anime=naruto">
                     &nbsp;Naruto&nbsp;
                  </a>
               </div>
               <img src="homepage/tags/naruto.jpg" alt="" height="420px" />
            </td>
            <td rowspan="2" class="anime-yrec">
               <div class="anime-caption" style="width: 210px; height: 420px;">
                  <a class="anime-search" style="line-height: 14;" href="all-product.php?all_product=anime&anime=akame%20ga%20kill!">
                     &nbsp;Akame ga Kill!&nbsp;
                  </a>
               </div>
               <img src="homepage/tags/akame.png" alt="" height="420px" />
            </td>
            <td rowspan="2" class="anime-yrec">
               <div class="anime-caption" style="width: 210px; height: 420px;">
                  <a class="anime-search" style="line-height: 14;" href="all-product.php?all_product=anime&anime=kono%20suba">
                     &nbsp;Kono Suba&nbsp;
                  </a>
               </div>
               <img src="homepage/tags/konosuba.png" alt="" height="420px" />
            </td>
         </tr>
         <tr>
            <td colspan="2" rowspan="2" class="anime-square">
               <div class="anime-caption" style="width: 420px; height: 420px;">
                  <a class="anime-search" style="line-height: 14;" href="all-product.php?all_product=anime&anime=one%20piece">
                     &nbsp;One Piece&nbsp;
                  </a>
               </div>
               <img src="homepage/tags/onepiece.jpg" alt="" height="420px" />
            </td>
         </tr>
         <tr>
            <td colspan="2" class="anime-xrec">
               <div class="anime-caption" style="width: 420px; height: 210px;">
                  <a class="anime-search" style="line-height: 7;" href="all-product.php?all_product=anime&anime=sword%20art%20online">
                     &nbsp;Sword Art Online&nbsp;
                  </a>
               </div>
               <img src="homepage/tags/sao.png" alt="" width="420px" />
            </td>
            <td colspan="2" rowspan="2" class="anime-square">
               <div class="anime-caption" style="width: 420px; height: 420px;">
                  <a class="anime-search" style="line-height: 14;" href="all-product.php?all_product=anime&anime=bleach">
                     &nbsp;Bleach&nbsp;
                  </a>
               </div>
               <img src="homepage/tags/bleach.png" alt="" height="420px" />
            </td>
         </tr>
         <tr>
            <td colspan="2" class="anime-xrec">
               <div class="anime-caption" style="width: 420px; height: 210px;">
                  <a class="anime-search" style="line-height: 7;" href="all-product.php?all_product=anime&anime=nanatsu%20no%20taizai">
                     &nbsp;Nanatsu no Taizai&nbsp;
                  </a>
               </div>
               <img src="homepage/tags/nanatsunotaizai.png" alt="" width="420px" />
            </td>
            <td colspan="2" rowspan="2" class="anime-square">
               <div class="anime-caption" style="width: 420px; height: 420px;">
                  <a class="anime-search" style="line-height: 14;" href="all-product.php?all_product=anime&anime=fairy%20tail">
                     &nbsp;Fairy Tail&nbsp;
                  </a>
               </div>
               <img src="homepage/tags/fairytail.png" alt="" height="420px" />
            </td>
         </tr>
         <tr>
            <td colspan="2" class="anime-xrec">
               <div class="anime-caption" style="width: 420px; height: 210px;">
                  <a class="anime-search" style="line-height: 7;" href="all-product.php?all_product=anime&anime=attack%20on%20titan">
                     &nbsp;Attack On Titan&nbsp;
                  </a>
               </div>
               <img src="homepage/tags/aot.png" alt="" width="420px" />
            </td>
            <td colspan="2" class="anime-xrec">
               <div class="anime-caption" style="width: 420px; height: 210px;">
                  <a class="anime-search" style="line-height: 7;" href="all-product.php?all_product=otheranime">
                     &nbsp;Other Anime&nbsp;
                  </a>
               </div>
               <img src="homepage/tags/allanime.png" alt="" width="420px" />
            </td>
         </tr>
      </table>
   </div>
   <!-- ANIME CATEGORY END -->
   <?php include('footer.php') ?>
</body>

</html>
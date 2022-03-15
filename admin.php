<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Manage Product</title>
  <link rel="stylesheet" href="admin.css">
</head>

<body>
  <!-- USER ACCESS CONTROL - DENY BUYER ACCESS -->
  <?php
  if (isset($_SESSION['login'])) {
    if ($_SESSION['role'] == "1") {
      echo "<script>alert('You do not have the access to this page!');</script>";
      echo "<script>window.location.href='homepage.php'</script>";
    }
  }
  ?>

  <!-- ADD NEW START -->
  <div class="admin-bg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet" />
    <div style="height: 30px;"></div>
    <div class="add-new-open" onclick="addNewOpen()">+ New Product</div>
    <a href="logout.php" class="admin-logout" style="transform: translateY(50px)">Log Out</a>
    <div class="add-new-form-background">
      <div style="height: 50px"></div>
      <div class="add-new-form addnew-popup">
        <div style="height: 30px;"></div>
        <div style="font-size: 38px; text-align: center;font-weight: 600;">
          Add New Product
        </div>
        <div class="add-new-close">
          <i class="fa fa-close" onclick="addNewClose(); return false;"></i>
        </div>
        <form ENCTYPE="multipart/form-data" action="insert-product.php" method="post">
          <table>
            <tr>
              <td>
                Product Name: <br>
                <input type="text" name="product_name" class="add-new-input">
              </td>
              <td>
                Package Content: <br>
                <input type="text" name="package_content" class="add-new-input">
              </td>
            </tr>
            <tr>
              <td>
                Anime: <br>
                <input type="text" name="product_anime" class="add-new-input">
              </td>
              <td>
                Price (MYR): <br>
                <input type="text" name="product_price" class="add-new-input">
              </td>
            </tr>
            <tr>
              <td>Product Category: <br>
                <select name="product_category" class="add-new-input" style="cursor: pointer;">
                  <option disabled selected>Select a category:</option>
                  <option value="Apparel">Apparel</option>
                  <option value="Figurine">Figurine</option>
                  <option value="Bag">Bag</option>
                  <option value="Accessory">Accessory</option>
                </select>
              </td>
              <td>
                Picture: <br>
                <input type="file" required name="product_picture" id="file-upload">
              </td>
            </tr>
            <tr>
              <td colspan="2" style="text-align:center">
                <button type="submit" name="btnaddnew" class="btn-add-new">Add</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="reset" name="btnreset" class="btn-add-new">Reset</button>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
    <!-- ADD NEW END -->

    <!-- PRODUCT LIST START -->
    <center>
      <div style="height: 1px"></div>
      <h1 style="font-family: 'Titillium Web', sans-serif; font-weight: 700;">P R O D U C T &nbsp;&nbsp;&nbsp; L I S T</h1>
      <table class="product-list-table">
        <tr class="product-list-header">
          <th style="width: 300px">Name</th>
          <th style="width: 200px">Package Content</th>
          <th style="width: 150px">Anime</th>
          <th style="width: 100px">Price (MYR)</th>
          <th style="width: 80px">Category</th>
          <th style="width: 200px">Picture</th>
          <th style="width: 100px" colspan="2">Modification</th>
        </tr>
        <?php
        $server = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'wdt_assignment';
        $conn = mysqli_connect($server, $username, $password, $dbname);

        $sql_product_list = "select * from product_list";

        $result_product_list = mysqli_query($conn, $sql_product_list);

        while ($rows_product_list = mysqli_fetch_array($result_product_list)) {
          echo "<tr>";
          echo "<td>" . $rows_product_list['product_name'] . "</td>";
          echo "<td>" . $rows_product_list['package_content'] . "</td>";
          echo "<td>" . $rows_product_list['product_anime'] . "</td>";
          echo "<td>" . $rows_product_list['product_price'] . "</td>";
          echo "<td>" . $rows_product_list['product_category'] . "</td>";
          echo "<td><img src='" . $rows_product_list['product_picture'] . "' width='150px' height='150px' /></td>";

          echo "<td><a name='btnmodify' class='btnmodify' href='admin.php?product_id=" . $rows_product_list['product_id'] . "'>";
          echo "<i class='fa fa-pencil' style='font-size: 24px;'></i></a></td>";
          echo "<td><a name='btndelete' href='remove-product.php?product_id=" . $rows_product_list['product_id'] . "' class='btndelete'>";
          echo "<i class='fa fa-trash-o' style='font-size: 24px;'></i></a></td>";
          echo "</tr>";
        }
        ?>
      </table>
    </center>
    <!-- PRODUCT LIST END -->

    <!-- UPDATE START -->
    <center>
      <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet" />
      <?php if (isset($_GET['product_id'])) { ?>
        <?php include("modify-product.php") ?>
        <div class="modify-form-background">
          <div class="modify-form modify-popup">
            <form ENCTYPE="multipart/form-data" action="update.php" method="POST">
              <div class="modify-close">
                <i class="fa fa-close" onclick="modifyClose()"></i>
              </div>
              <table>
                <tr>
                  <th colspan="2" style="text-align: center;">
                    Product ID:
                    <input type="text" name="product_id" class="id_input" readonly value="<?php echo $product_id; ?>">
                  </th>
                </tr>
                <tr>
                  <td>
                    Product Name: <br>
                    <input type="text" name="product_name" class="modify-input" value="<?php echo $product_name; ?>">
                  </td>
                  <td>
                    Package Content: <br>
                    <input type="text" name="package_content" class="modify-input" value="<?php echo $package_content; ?>">
                  </td>
                </tr>
                <tr>
                  <td>
                    Anime: <br>
                    <input type="text" name="product_anime" class="modify-input" value="<?php echo $product_anime; ?>">
                  </td>
                  <td>
                    Price (MYR): <br>
                    <input type="text" name="product_price" class="modify-input" value="<?php echo $product_price; ?>">
                  </td>
                </tr>
                <tr>
                  <td>Product Category: <br>
                    <select name="product_category" class="modify-input" style="cursor: pointer;">
                      <option value="<?php echo $product_category; ?>"><?php echo $product_category; ?></option>
                      <option value="Apparel">Apparel</option>
                      <option value="Figurine">Figurine</option>
                      <option value="Bag">Bag</option>
                      <option value="Accessory">Accessory</option>
                    </select>
                  </td>
                  <td>
                    Picture: <br>
                    <input type="file" required name="product_picture" id="file-upload">
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align:center">
                    <button type="submit" name="btnupdate" class="btnupdate">Update</button>
                  </td>
                </tr>
              </table>
            </form>
          </div>
        </div>
      <?php } ?>
    </center>
    <!-- UPDATE END -->
    <div style="height: 100px;"></div>
  </div>
  <script src="admin.js"></script>

</body>

</html>
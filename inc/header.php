<?php require 'database/db.php';?>

<?php 
  $qr = "SELECT name, username FROM user ";
  $data = mysqli_query($conn, $qr);
  $kq = mysqli_fetch_assoc($data);
  mysqli_close($conn);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>DULE Shop</title>

  </head>
  <body>
    <header class="header">
      <div class="topbar hidden-sm hidden-xs">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-7 a-left">
              <ul class="list-inline f-left">
                <li>
                  Hotline: <span><a href="callto:19001900">19001900</a></span>
                </li>
                <li>|</li>
                <li>
                  Địa Chỉ: <span>Thanh Xuân, Hà Nội</span>
                </li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-5">
              <ul class="list-inline f-right">
                <?php 
                    if(isset($_SESSION["username"])){
                      echo $_SESSION["username"] .  " | <a href='logout.php'>Log out</a> ";
                    }else{
                      echo "<li>
                        <a  href='dangnhap.php'>Đăng Nhập</a>
                      </li>
                      <li>|</li>
                      <li>
                        <a href='dangky.php'>Đăng Ký</a>
                      </li>";
                    }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="sticky-top">
        <div class="container">
          <div class="relative d-lg-flex">
            <div class="header-content clearfix a-center">
              <div class="logo inline-block">
                <a href="index.php" class="logo-wrapper">
                  <img src="images/logo.png" alt="">
                </a>
              </div>
              <div class="hidden-sm hidden-xs flex-grow-1">
                  <ul class="nav nav-left">
                    <li class="nav-item active">
                      <a href="index.php" class="nav-link">
                        <span>Trang Chủ</span>
                      </a>
                    </li>
                     <li class="nav-item">
                      <a href="collections.php" class="nav-link">
                        <span>Sản Phẩm</span>
                      </a>
                    </li>
                     <li class="nav-item ">
                      <a href="tintuc.php" class="nav-link">
                        <span>Tin Tức</span>
                      </a>
                    </li>
                     <li class="nav-item">
                      <a href="lienhe.php" class="nav-link">
                        <span>Liên Hệ</span>
                      </a>
                    </li>
                     <li class="nav-item">
                      <a href="gioithieu.php" class="nav-link">
                        <span>Giới Thiệu</span>
                      </a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
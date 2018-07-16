<?php 
  session_start();
  require 'inc/header.php';
  $id = $_GET["id"];
  settype($id, "int");
  require 'database/db.php';
?>
    <section class="section-detail">
      <div class="container">
        <div class="row">
          <div class="col-md-8 detail-pr">
            <?php 
              $qr = "SELECT tensp, giasp,trangthai,soluongsp, size,hinhanh, tomtat, mota, danhgia,viewsp FROM product WHERE id_p='$id'";
             
              $kq = mysqli_query($conn, $qr);
              $data = mysqli_fetch_assoc($kq);
              mysqli_close($conn);
            ?>
            <div class="col-md-6">
              <img src="images/<?=$data['hinhanh']?>" alt="" class="img-responsive images-pr">
            </div>
            <div class="col-md-6">
              <h4><?=$data['tensp']?></h4>
              <div class="status">
                <p>Trạng thái : <span><?=$data['trangthai']?></span></p>
              </div>
              <div class="price">
                <p><?=$data['giasp']?> đ</p>
              </div>
              <?php 
                  require 'database/db.php'; 
                  $qr = "UPDATE product SET viewsp = viewsp + 1 WHERE id_p='$id'";
                  $kq =mysqli_query($conn, $qr);
                  mysqli_close($conn);
              ?>
              <div class="view">
                <p>Lượt xem : <?=$data['viewsp']?></p>
              </div>
              <hr>
              <div class="info">
                <p>- <?=$data['tomtat']?></p>
              </div>
              <div class="quanti-size">
                <div class="col-md-6">
                  <div class="size">
                    <div class="form-group">
                      <label for="sel1">Chọn size</label>
                      <?php 
                        require 'database/db.php';
                         $qr = "SELECT tensp, giasp,trangthai,soluongsp, size,hinhanh, tomtat, mota, danhgia,viewsp FROM product WHERE id_p='$id'";
             
                         $kq = mysqli_query($conn, $qr);
                        while($data = mysqli_fetch_assoc($kq)){ ?>
                        <input type="checkbox" name="size" value=""><p><?=$data['size'];?></p>  
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="quantity">
                    <div class="form-group">
                      <label for="sel1">Chọn số lượng</label>
                      <select class="form-control" id="sel1" style="width: 50%">
                        <option><?=$data['soluongsp']?></option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="booking text-center">
                <a href="">Đặt Hàng</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <h4>Sản phẩm nổi bật</h4>
              <div class="product-hot">
                <?php 
                  require 'database/db.php';
                  $sql = "SELECT tensp, hinhanh,giasp, viewsp FROM product ORDER BY viewsp DESC LIMIT 0,4";
                  $result = mysqli_query($conn, $sql);
                  while($dt = mysqli_fetch_assoc($result)){
                ?>
                  <a href="chitietsp.html">
                    <div class="col-md-4">
                      <img src="images/<?=$dt['hinhanh']?>" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-8">
                      <h5><?=$dt['tensp']?></h5>
                      <div class="price">
                        <p><?=$dt['giasp']?>đ</p>
                      </div>
                    </div>
                  </a>
                  <div class="clearfix"></div>
                <?php } mysqli_close($conn); ?>
              </div>
                  
          </div>
          <div class="clearfix"></div>
          <div class="info-review-comment">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">Mô tả sản phẩm</a></li>
              <li><a data-toggle="tab" href="#menu1">Đánh giá sản phẩm</a></li>
              <li><a data-toggle="tab" href="#menu2">Comment</a></li>
            </ul>

            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <h3><?=$data['tensp']?></h3>
                <p><?=$data['mota']?></p>
                <img src="images/<?=$data['hinhanh']?>" alt="">
              </div>
              <div id="menu1" class="tab-pane fade">
                <h3>Đánh giá sản phẩm</h3>
                <div class="user">
                  <span>
                    <img src="images/icon_star.png" alt="">
                    <img src="images/icon_star.png" alt="">
                    <img src="images/icon_star.png" alt=""> 
                    : Chị Hoàng Thanh Ngọc - <b>Sản phẩm đẹp, đi lại thoải mái</b>
                  </span>
                </div><hr>
                <div class="user">
                  <span>
                    <img src="images/icon_star.png" alt="">
                    <img src="images/icon_star.png" alt="">
                    <img src="images/icon_star.png" alt=""> 
                    : Chị Cao Ngọc Trâm  - <b>Sản phẩm đẹp, đi lại thoải mái</b>
                  </span>
                </div><hr>
                <div class="user">
                  <span>
                    <img src="images/icon_star.png" alt="">
                    <img src="images/icon_star.png" alt="">
                    <img src="images/icon_star.png" alt=""> 
                    : Chị Nguyễn Thị Nga  - <b>Sản phẩm đẹp, đi lại thoải mái</b>
                  </span>
                </div>
              </div>
              <div id="menu2" class="tab-pane fade">
                <h3>Comment Facebook</h3>
                <div class="fb-comments" data-href="http://localhost:8888/dule%20shop/chitietsp.php?id=<?php echo $id ?>" data-width="600px" data-numposts="5"></div>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=347808232416469&autoLogAppEvents=1';
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php require 'inc/footer.php'; ?>
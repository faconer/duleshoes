<?php 
  session_start();
  require 'inc/header.php';
  require 'database/db.php';
?>
    <section class="section-1">
      <div class="container">
        <div class="sales">
          <h3 class="txt-sale">Tất cả sản phẩm</h3>
          <div class="products-sales">
          <?php
              $qr = "SELECT id_p,tensp, giasp, hinhanh FROM product";
              $kq = mysqli_query($conn, $qr);
              while($data = mysqli_fetch_assoc($kq)){
          ?>   
              <div class="col-md-3 col-ms-6 col-xs-3 product" id="product">
                <a href="chitietsp.php?id=<?=$data['id_p']?>">
                  <img src="images/<?=$data['hinhanh']?>" alt="" class="img-responsive">
                  <h5><?=$data['tensp'] ?></h5>
                  <div class="price">
                    <span><?=$data['giasp']?> đ</span>
                  </div>
                </a>
              </div>
              <?php } ?>
            <div class="col-xs-12 text-center mb-5">
              <a href="" class="btn btn-primary" id="loadMore">Load thêm sản phẩm</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php require 'inc/footer.php'; ?>
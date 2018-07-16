<?php 
  session_start();
  require 'inc/header.php';
?>
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <form action="" method="POST" role="form">
                <legend>Gửi tin nhắn cho chúng tôi</legend>
                
                <div class="form-group">
                  <label for="">Họ và Tên</label>
                  <input type="text" class="form-control" id="" placeholder="Họ và Tên">
                </div>
                 <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" class="form-control" id="" placeholder="Email">
                </div>
                 <div class="form-group">
                  <label for="">Số điện thoại</label>
                  <input type="text" class="form-control" id="" placeholder="Số điện thoại">
                </div>
                <div class="form-group">
                  <label for="">Nhập nội dung</label>
                  <textarea name="Nội dung" class="form-control" placeholder="Nội dung"></textarea>
                </div>
              
                <button type="submit" class="btn btn-primary">Gửi liên hệ</button>
              </form>
          </div>
          <div class="col-md-6">
           <div class="map">
             <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d59603.97770987373!2d105.7499008668986!3d20.98266936283901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e3!4m3!3m2!1d20.9825928!2d105.78492059999999!4m3!3m2!1d20.9825928!2d105.78492059999999!5e0!3m2!1svi!2s!4v1531600509271" width="520" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
          </div>
        </div>
      </div>
    </section>
<?php require 'inc/footer.php'; ?>
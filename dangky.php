<?php require 'inc/header.php';?>
<?php require 'database/db.php';?>
<?php
  $name = $username = $password = $email = NULL;
  //check name
  if(isset($_POST["ok"])){
    if(empty($_POST["name"])){
      echo "<script type='text/javascript'>alert('Vui long nhap ho va ten');</script>";
    }else{
      $name = $_POST["name"];
    }
    if(empty($_POST["username"])){
      echo "<script type='text/javascript'>alert('Vui long nhap username');</script>";
    }else{
      $username = $_POST["username"];
    }
    if(empty($_POST["password"])){
      echo "<script type='text/javascript'>alert('Vui long nhap password');</script>";
    }else{
      $password = $_POST["password"];
    }
    if(empty($_POST["email"])){
      echo "<script type='text/javascript'>alert('Vui long nhap email');</script>";
    }else{
      $email = $_POST["email"];
    }

    if($name && $username && $password && $email){
      $qr = "INSERT INTO user(name, username, password,email) VALUES('$name', '$username', '$password', '$email')";
      $kq = mysqli_query($conn, $qr);
      if($kq){
        echo "<script type='text/javascript'>alert('Ban dang ky thanh cong !');</script>";
      }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);
    }
  }
?>
    <section class="login">
      <div class="container">
        <div class="row">
            <h3>Đăng Ký</h3>
            <form action="" method="POST" role="form">
              <div class="form-group ">
                <label for="">Họ và Tên</label>
                <input type="text" class="form-control" id="" placeholder="name" name="name" style="width: 50%;">
              </>
              <div class="form-group ">
                <label for="">Username</label>
                <input type="text" class="form-control" id="" placeholder="Username" name="username" style="width: 50%;">
              </div>
              <div class="form-group ">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="Password" name="password" style="width: 50%;">
              </div>
               <div class="form-group ">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="email" name="email" style="width: 50%;">
              </div>
              <button type="submit" class="btn btn-primary" name="ok">Sign Up</button>
            </form>
        </div>
      </div>
    </section>

<?php require 'inc/footer.php';?>
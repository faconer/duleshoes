<?php
  session_start();
  require 'inc/header.php';
?>
<?php require 'database/db.php';?>
<?php
   $username = $password  = NULL;
  //check name
  if(isset($_POST["ok"])){
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
    $sql = "SELECT * FROM user where username ='$username' and password ='$password'";
		$result = $conn->query($sql);
    if (mysqli_num_rows($result) == 1) {
			$data = mysqli_fetch_assoc($result);
			$_SESSION["level"] = $data["level"];
			if ($_SESSION["level"] == 2) {
				header("Location:admin/index.php");
			} else {
				$_SESSION["username"] = $username;
				header("Location:index.php");
				exit();
			}
		} else {
			echo "<script language='javascript'>alert('Sai username or password!');</script>";
		}
      mysqli_close($conn);
    }
?>
    <section class="login">
      <div class="container">
        <div class="row">
            <h3>Đăng Nhập</h3>
            <form action="" method="POST" role="form">
              <div class="form-group ">
                <label for="">Username</label>
                <input type="text" class="form-control" id="" placeholder="Username" name="username" style="width: 50%;">
              </div>
              <div class="form-group ">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="Password" name="password" style="width: 50%;">
              </div>
              <button type="submit" class="btn btn-primary" name="ok">Login</button>
            </form>
        </div>
      </div>
    </section>

<?php require 'inc/footer.php';?>
<?php require 'include/header.php'; ?>
<?php require '../database/db.php'; ?>

<?php 
    $tensp = $giasp = $trangthai = $soluong = $size = $hinhanh = $tomtat = $mota = NULL;
    
    if(isset($_POST["ok"])){
        if(empty($_POST["tensp"])){
          echo "<script type='text/javascript'>alert('Vui long nhap ten san pham');</script>";
        }else{
          $tensp = $_POST["tensp"];
        }
        if(empty($_POST["giasp"])){
            echo "<script type='text/javascript'>alert('Vui long nhap gia san pham');</script>";
          }else{
            $giasp = $_POST["giasp"];
        }
        if(empty($_POST["trangthai"])){
            echo "<script type='text/javascript'>alert('Vui long nhap trangthai san pham');</script>";
          }else{
            $trangthai = $_POST["trangthai"];
        }
        if(empty($_POST["soluong"])){
            echo "<script type='text/javascript'>alert('Vui long nhap so luong san pham');</script>";
          }else{
            $soluong = $_POST["soluong"];
        }
        if(empty($_POST["size"])){
            echo "<script type='text/javascript'>alert('Vui long nhap size san pham');</script>";
          }else{
            $size = $_POST["size"];
        }
        if($_FILES["hinhanh"]["error"] > 0){
            echo "<script type='text/javascript'>alert('Vui long nhap hinh anh san pham');</script>";
          }else{
            $hinhanh = $_FILES["hinhanh"]["name"];
        }
        if(empty($_POST["tomtat"])){
            echo "<script type='text/javascript'>alert('Vui long nhap tom tat san pham');</script>";
          }else{
            $tomtat = $_POST["tomtat"];
        }
        if(empty($_POST["mota"])){
            echo "<script type='text/javascript'>alert('Vui long nhap mota san pham');</script>";
          }else{
            $mota = $_POST["mota"];
        }

        if($tensp && $giasp && $trangthai && $soluong && $size && $hinhanh && $tomtat  && $mota){
            $qr = "INSERT INTO product(tensp, giasp, trangthai, soluongsp, size, hinhanh, tomtat, mota) VALUES ('$tensp', '$giasp', '$trangthai', '$soluong', '$size', '$hinhanh', '$tomtat', '$mota')";
            $kq = mysqli_query($conn, $qr);
           header("Location:add-product.php");
        }
    }

?>
<section class="section-ad-add">
    <div class="container">
        <div class="row">
            <h3 class="text-center">Thêm sản phẩm mới</h3>
            <form action="add-product.php" method="post" enctype= "multipart/form-data">
                <div class="form-group">
                    <label for="tensp">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" id="" name="tensp">
                </div>
                <div class="form-group">
                    <label for="giasp">Giá Sản Phẩm</label>
                    <input type="text" class="form-control" id="" name="giasp">
                </div>
                <div class="form-group">
                    <label for="trangthai">Trạng Thái</label>
                    <input type="text" class="form-control" id="" name="trangthai">
                </div>
                <div class="form-group">
                    <label for="soluong">Số Lượng</label>
                    <input type="text" class="form-control" id="" name="soluong">
                </div>
                <div class="form-group">
                    <label for="size">Size</label>
                    <input type="text" class="form-control" id="" name="size">
                </div>
                <div class="form-group">
                    <label for="hinhanh">Hình Ảnh</label>
                    <input type="file" class="form-control" id="" name="hinhanh">
                </div>
                <div class="form-group">
                    <label for="tomtat">Tóm tắt</label>
                    <input type="text" class="form-control" id="" name="tomtat">
                </div>
                <div class="form-group">
                    <label for="mota">Mô tả</label>
                    <textarea  class="form-control" id="" name="mota"></textarea>
                </div>
                <button type="submit" class="btn btn-success" name="ok">Submit</button>
            </form>
        </div>
    </div>
</section>  

<?php require 'include/footer.php'; ?>
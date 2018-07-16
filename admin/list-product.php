<?php require 'include/header.php'; ?>
<?php require '../database/db.php'; ?>
<?php 

?>
<section class="section-1-ad">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Danh sách sản phẩm giày </h2>
            <center class="list-iinline">
                <a href="add-product.php" class="btn btn-success" style="margin:20px 0px 20px">Thêm sản phẩm</a>
            </center>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Stt</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Trạng Thái</th>
                    <th>Số lượng</th>
                    <th>Size</th>
                    <th>Hình ảnh</th>
                    <th>Tóm tắt</th>
                    <th>Mô tả</th>
                    <th>Lượt view</th>
                    <th>Hành Động 1</th>
                    <th>Hành Động 2</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    $qr = "SELECT id_p, tensp, giasp, trangthai, soluongsp, size, hinhanh, tomtat, mota, viewsp FROM product";
                    $kq = mysqli_query($conn, $qr);
                    while($data = mysqli_fetch_assoc($kq)){  
                ?>
                    <tr>
                        <td><?= $data['id_p'] ?></td>
                        <td><?= $data['tensp'] ?></td>
                        <td><?= $data['giasp'] ?></td>
                        <td><?= $data['trangthai'] ?></td>
                        <td><?= $data['soluongsp'] ?></td>
                        <td><?= $data['size'] ?></td>
                        <td><img src="../images/<?= $data['hinhanh'] ?>" alt="" class="img-responsive"></td>
                        <td><?= $data['tomtat'] ?></td>
                        <td><?= $data['mota'] ?></td>
                        <td><?= $data['viewsp'] ?></td>
                        <th>
                            <a href=""class="btn btn-primary">Edit</a>
                        </th>
                        <th>
                            <a href=""class="btn btn-primary">Delete</a>
                        </th>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <center>
                <div class="navigator-pages">
                    <nav aria-label="Page navigation">
                        <?php 
                            $display = 2;
                            $qr = "SELECT id_p FROM product ";
                            $kq =  mysqli_query($conn, $qr);
                            $sum_pr = mysqli_num_rows($kq);
                            $sum_page = ceil($sum_pr/$display);
                        
                        echo "<ul class='pagination'>";
                        for($page=1; $page<=$sum_page; $page++){
                            echo "<li><a href='#'><?php $page ?></a></li>";
                        }
                        echo "</ul>";
                        mysqli_close($conn);
                        ?>
                    </nav>
                </div>
            </center>
        </div>
    </div>
</section>
<?php require 'include/footer.php'; ?>
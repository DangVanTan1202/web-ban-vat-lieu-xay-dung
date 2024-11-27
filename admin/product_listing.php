<?php
    include 'header.php';
    if (!empty($_SESSION['current_user'])) {
    $so_sp_tren_1_trang= !empty($_GET['per_page'])? $_GET['per_page']:10;
    $so_trang=!empty($_GET['page'])? $_GET['page']:1;
    $offset=($so_trang-1)*$so_sp_tren_1_trang;
    $sanpham = mysqli_query($con, "SELECT * FROM `tbl_sanpham` ORDER BY `id_sanpham` ASC  LIMIT " . $so_sp_tren_1_trang . " OFFSET " . $offset);
    $tongsosp = mysqli_query($con, "SELECT * FROM `tbl_sanpham`");
    $tongsosp=$tongsosp->num_rows;
    $tongsotrang=ceil($tongsosp/$so_sp_tren_1_trang);
    mysqli_close($con);
?>

<div class="main-content">
        <h1>Danh sách sản phẩm</h1>
        <div class="product-items">
            <div class="buttons">
                <a href="./product_add.php">Thêm sản phẩm</a>
            </div>
            <ul>
                <li class="product-item-heading">
                    <div class="product-prop product-img">Ảnh</div>
                    <div class="product-prop product-name">Tên sản phẩm</div>
                    <div class="product-prop product-button">
                        Xóa
                    </div>
                    <div class="product-prop product-button">
                        Sửa
                    </div>
                    <!-- <div class="product-prop product-button">
                        Copy
                    </div> -->
                    <!-- <div class="product-prop product-time">Ngày tạo</div>
                    <div class="product-prop product-time">Ngày cập nhật</div> -->
                    <div class="clear-both"></div>
                </li>
                <?php
                while ($row = mysqli_fetch_array($sanpham)) {
                    ?>
                    <li>
                        <div class="product-prop product-img"><img src="../<?= $row['hinhanh'] ?>" alt="<?= $row['tensanpham'] ?>" title="<?= $row['tensanpham'] ?>" /></div>
                        <div class="product-prop product-name"><?= $row['tensanpham'] ?></div>
                        <div class="product-prop product-button">
                            <a href="./product_delete.php?id=<?= $row['id_sanpham'] ?>">Xóa</a>
                        </div>
                        <div class="product-prop product-button">
                            <a href="./product_edit.php?id=<?= $row['id_sanpham'] ?>">Sửa</a>
                        </div>
                        <!-- <div class="product-prop product-button">
                            <a href="./product_editing.php?id=<?= $row['id_sanpham'] ?>&task=copy">Copy</a>
                        </div> -->
                        <!-- <div class="product-prop product-time"><?= date('d/m/Y H:i', $row['created_time']) ?></div>
                        <div class="product-prop product-time"><?= date('d/m/Y H:i', $row['last_updated']) ?></div> -->
                        <div class="clear-both"></div>
                    </li>
                <?php } ?>
            </ul>
            <?php
            include '../phantrang.php';
            ?>
            <div class="clear-both"></div>
        </div>
    </div>
    <?php
}
include './footer.php';
?>
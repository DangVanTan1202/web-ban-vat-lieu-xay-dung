<?php
include 'header.php';

if (!empty($_SESSION['current_user'])) {
    if (isset($_GET['id'])) {
        $productId = $_GET['id'];
        $result = $con->query("SELECT * FROM `tbl_sanpham` WHERE `id_sanpham` = $productId");

        if ($result && $result->num_rows > 0) {
            $product = $result->fetch_assoc();

            if (isset($_POST['submit_edit'])) {
                $tensanpham = $_POST['tensanpham'];
                $masp = $_POST['masp'];
                $giasp = $_POST['giasp'];
                $soluong = $_POST['soluong'];
                $hinhanh = $_POST['hinhanh'];
                $tomtat = $_POST['tomtat'];
                $noidung = $_POST['noidung'];
                $tinhtrang = $_POST['tinhtrang'];
                $id_danhmuc = $_POST['id_danhmuc'];

                $result = $con->query("UPDATE `tbl_sanpham` SET `tensanpham` = '$tensanpham', `masp` = '$masp', `giasp` = '$giasp', `soluong` = '$soluong', `hinhanh` = '$hinhanh', `tomtat` = '$tomtat', `noidung` = '$noidung', `tinhtrang` = '$tinhtrang', `id_danhmuc` = '$id_danhmuc' WHERE `id_sanpham` = $productId");

                if ($result) {
                    echo "Sửa sản phẩm thành công";

                } else {
                    echo "Sửa sản phẩm thất bại: " . $con->error;
                }
            }
?>
            <div class="main-content">
                <h1>Sửa sản phẩm</h1>
                <div id="content-box">
                    <form id="product-form" method="POST" action="?id=<?php echo $productId; ?>" enctype="multipart/form-data">
                        <input type="submit" name="submit_edit" title="Lưu sản phẩm" value="Lưu sản phẩm" />
                        <div class="clear-both"></div>
                        <div class="wrap-field">
                            <label>Tên sản phẩm: </label>
                            <input type="text" name="tensanpham" value="<?php echo $product['tensanpham']; ?>" />
                            <div class="clear-both"></div>
                        </div>
                        <div class="wrap-field">
                            <label>Mã sản phẩm: </label>
                            <input type="text" name="masp" value="<?php echo $product['masp']; ?>" />
                            <div class="clear-both"></div>
                        </div>
                        <div class="wrap-field">
                            <label>Giá sản phẩm: </label>
                            <input type="text" name="giasp" value="<?php echo $product['giasp']; ?>" />
                            <div class="clear-both"></div>
                        </div>
                        <div class="wrap-field">
                            <label>Số lượng: </label>
                            <input type="text" name="soluong" value="<?php echo $product['soluong']; ?>" />
                            <div class="clear-both"></div>
                        </div>
                        <div class="wrap-field">
                            <label>Hình ảnh: </label>
                            <input type="text" name="hinhanh" value="<?php echo $product['hinhanh']; ?>" />
                            <div class="clear-both"></div>
                        </div>
                        <div class="wrap-field">
                            <label>Tóm tắt: </label>
                            <textarea name="tomtat" id="product-summary2"><?php echo $product['tomtat']; ?></textarea>
                            <div class="clear-both"></div>
                        </div>
                        <div class="wrap-field">
                            <label>Nội dung: </label>
                            <textarea name="noidung" id="product-content2"><?php echo $product['noidung']; ?></textarea>
                            <div class="clear-both"></div>
                        </div>
                        <div class="wrap-field">
                            <label>Trình trạng: </label>
                            <input type="text" name="tinhtrang" value="<?php echo $product['tinhtrang']; ?>" />
                            <div class="clear-both"></div>
                        </div>
                        <div class="wrap-field">
                            <label>ID_Danh mục: </label>
                            <input type="text" name="id_danhmuc" value="<?php echo $product['id_danhmuc']; ?>" />
                            <div class="clear-both"></div>
                        </div>
                    </form>
                    <div class="clear-both"></div>
                    <script>
                        CKEDITOR.replace('product-summary');
                        CKEDITOR.replace('product-content');
                    </script>
                </div>
            </div>
<?php
        } else {
            echo "Không tìm thấy sản phẩm";
        }
    }
}

include './footer.php';
?>

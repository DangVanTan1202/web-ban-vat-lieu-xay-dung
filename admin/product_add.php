<?php
include 'header.php';
if (!empty($_SESSION['current_user'])) {
    ?>
    <div class="main-content">
        <h1>Thêm sản phẩm</h1>
        <div id="content-box">
            <?php
            if (isset($_GET['action']) && $_GET['action'] == 'add') {
                if (isset($_POST['tensanpham']) && !empty($_POST['tensanpham']) && isset($_POST['giasp']) && !empty($_POST['giasp'])) {
                    $galleryImages = array();
                    if (empty($_POST['tensanpham'])) {
                        $error = "Bạn phải nhập tên sản phẩm";
                    } elseif (empty($_POST['giasp'])) {
                        $error = "Bạn phải nhập giá sản phẩm";
                    } elseif (!empty($_POST['price']) && is_numeric(str_replace('.', '', $_POST['price'])) == false) {
                        $error = "Giá nhập không hợp lệ";
                    }
                    // if (isset($_FILES['image']) && !empty($_FILES['image']['name'][0])) {
                    //     $uploadedFiles = $_FILES['image'];
                    //     $result = uploadFiles($uploadedFiles);
                    //     if (!empty($result['errors'])) {
                    //         $error = $result['errors'];
                    //     } else {
                    //         $image = $result['path'];
                    //     }
                    // }
                    // if (isset($_FILES['gallery']) && !empty($_FILES['gallery']['name'][0])) {
                    //     $uploadedFiles = $_FILES['gallery'];
                    //     $result = uploadFiles($uploadedFiles);
                    //     if (!empty($result['errors'])) {
                    //         $error = $result['errors'];
                    //     } else {
                    //         $galleryImages = $result['uploaded_files'];
                    //     }
                    // }
                    $tensanpham=$_POST['tensanpham'];
                    $masp=$_POST['masp'];
                    $giasp=$_POST['giasp'];
                    $soluong=$_POST['soluong'];
                    $hinhanh=$_POST['hinhanh'];
                    $tomtat=$_POST['tomtat'];
                    $noidung=$_POST['noidung'];
                    $tinhtrang=$_POST['tinhtrang'];
                    $id_danhmuc=$_POST['id_danhmuc'];
                    if (!isset($error)) {
                        $result="INSERT INTO `tbl_sanpham` (`tensanpham`,`masp`,`giasp`,`soluong`,`hinhanh`,`tomtat`,`noidung`, `tinhtrang`,`id_danhmuc`)
                        values('$tensanpham', '$masp', '$giasp', '$soluong', '$hinhanh', '$tomtat','$noidung','$tinhtrang','$id_danhmuc')";
                        if($con->query($result)===true){
                            echo "Thêm sản phẩm thành công";
                        }else{
                            echo "Thêm thất bại {$result}".$con->error;
                        }
                    }
                } else {
                    $error = "Bạn chưa nhập thông tin sản phẩm.";
                }
                ?>
                <div class = "container">
                    <div class = "error"><?= isset($error) ? $error : "Cập nhật thành công" ?></div>
                    <a href = "product_listing.php">Quay lại danh sách sản phẩm</a>
                </div>
            <?php } else { 
                    

                ?>
                <form id="product-form" method="POST" action="?action=add"  enctype="multipart/form-data">
                    <input type="submit" title="Lưu sản phẩm" value="" />
                    <div class="clear-both"></div>
                    <div class="wrap-field">
                        <label>Tên sản phẩm: </label>
                        <input type="text" name="tensanpham" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Mã sản phẩm: </label>
                        <input type="text" name="masp" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Giá sản phẩm: </label>
                        <input type="text" name="giasp" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Số lượng: </label>
                        <input type="text" name="soluong" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Hình ảnh: </label>
                        <input type="text" name="hinhanh" value="" />
                        <div class="clear-both"></div>
                    </div>
                    
                    <div class="wrap-field">
                        <label>Tóm tắt: </label>
                        <textarea name="tomtat" id="product-summary"></textarea>
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Nội dung: </label>
                        <textarea name="noidung" id="product-content2"></textarea>
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Trình trạng: </label>
                        <input type="text" name="tinhtrang" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>ID_Danh mục: </label>
                        <input type="text" name="id_danhmuc" value="" />
                        <div class="clear-both"></div>
                    </div>
                    
                </form>
                <div class="clear-both"></div>
                <script>
                    CKEDITOR.replace('product-content');
                </script>
            <?php } ?>
        </div>
    </div>

    <?php
}
include './footer.php';
?>
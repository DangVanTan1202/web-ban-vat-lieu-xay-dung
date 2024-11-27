<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="detail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    include './connect.php';
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    if ($id <= 0) {
        header('Location: index.php');
        exit();
    }
    $result = mysqli_query($con, "SELECT * FROM `tbl_sanpham` WHERE `id_sanpham` = $id");
    $product = mysqli_fetch_assoc($result);

    session_start();
    $isLoggedIn = isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true;

    if (isset($_POST['quantity'])) {
        if ($isLoggedIn) {
            // Xử lý logic mua sản phẩm
            // ...

            // Chuyển hướng sau khi mua sản phẩm thành công
            header('Location: success.php');
            exit();
        } else {
            header('Location: dangnhap.php');
            exit();
        }
    }
    ?>
    <div class="container">
        <h2>Chi tiết sản phẩm</h2>
        <div id="product-detail">
            <div id="product-img">
                <img src="<?=$product['hinhanh']?>" >
            </div>
            <div id="product-info">
                <h1><?=$product['tensanpham']?></h1>
                <label>Giá: </label><span class="product-price"><?=$product['giasp']?> VND</span><br>
                <div class="select-product">
                    <label>Bảo hiểm </label>
                    <p>
                        <span>Bảo hiểm Quyền lời người tiêu dùng<i class="fas fa-shield-check"></i></span><br>
                    </p>
                    <label>Vận chuyển </label>
                    <p>
                        <span>Xử lý đơn hàng bởi Shopee <i class="fas fa-check"></i></span><br>
                        <span><i class="fas fa-plane-departure"></i>  Miễn phí vận chuyển</span>
                    </p>
                    <div class="btnMua">
                    <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true): ?>
                        <form id="add-to-cart-form" action="cart.php?action=add" method="post">
                            <label for="soluong" style="font-weight: bold;">Số lượng</label>
                            <input id="soluong" type="number" value="1" name="quantity[<?=$product['id_sanpham']?>]" min="1" size="2"><br><br>
                            <label for="muasp"></label>
                            <button id="add-to-cart-btn" type="submit"><i class="fas fa-cart-plus"></i><span class="add-to-cart"> Thêm vào giỏ hàng</span></button>
                        </form>
                    <?php else: ?>
                    <label for="soluong" style="font-weight: bold;">Số lượng</label>
                            <input id="soluong" type="number" value="1" name="quantity[<?=$product['id_sanpham']?>]" min="1" size="2"><br><br>
                        <button onclick="redirectToLogin()"><i class="fas fa-cart-plus"></i><span class="add-to-cart"> Thêm vào giỏ hàng</span></button>
                    <?php endif; ?>
                </div>
                </div>
            </div>
        </div>
        <div class="describe">
            <h3>Mô tả sản phẩm</h3>
            <label>Trình trạng: </label><span class="condition">
                Còn hàng
            </span><br><br>
            <label>Tên sản phẩm: </label><span class="product-name"><?=$product['tensanpham']?></span><br><br>
            <label>Mã sản phẩm: </label><span class="product-code"><?=$product['masp']?></span><br><br>
            <label>Số lượng: </label><span class="quantity"><?=$product['soluong2']?></span><br><br>
            <label>Tóm tắt: </label><span class="summary"><?=$product['tomtat']?></span><br><br>
            <label>Nội dung: </label><span class="content"><br><?=$product['noidung']?></span>
        </div>
    </div>

    <script>
        function redirectToLogin() {
            alert('Vui lòng đăng nhập để mua sản phẩm.');
            window.location.href = 'dangnhap.php';
        }
    </script>
</body>
</html>

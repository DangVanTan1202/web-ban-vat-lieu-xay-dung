<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Web bán vật liệu xây dựng</title>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="search.php">
</head>
<body>
    <section class="myheader">
        <div class="container py-3">
            <div class="row">

                <div class="col-md-3">
                    <a href="index.php"><img src="img/logo-vlxd.png" height="300px" width="100px" alt="logo" class="img-fluid" ></a>
                </div>
                <div class="col-md-4" style="margin-top:10px ;">
                <form id="product-search" method="get">
                    <div class="input-group mb-3">
                        <input name="name" value="<?=isset($_GET['name']) ? $_GET['name'] : ""?>" type="text" class="form-control" placeholder="Tìm kiếm sản phẩm..." >
                        <!-- <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></span> -->
                        <input type="submit" value="Tìm kiếm" style="background-color: lemonchiffon;">
                    </div>
                </form>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col" style="margin-top:10px ;">
                            <div class="row">
                                <div class="col-3">
                                    <div class="fs-3 text-danger">
                                        <i class="fa-solid fa-phone-volume"></i>
                                    </div>
                                </div>
                                <div class="col-9" style="font-size: 13px;">
                                    Tư vấn hỗ trợ <br>
                                    <strong class="text-danger">1800.8198</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col" style="margin-top:10px ;">
                            <div class="row">
                                <div class="col-3">
                                    <div class="fs-3 text-danger">
                                        <i class="fa-regular fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-9" style="font-size: 13px;">
                                    <?php
                                        session_start();
                                        if(isset($_SESSION['username'])){ 
                                            $username = $_SESSION['username']; 
                                            echo "Xin chào <br> <b><i> $username </i></b>"; 
                                        } else {
                                            echo 'Xin chào'; 
                                            echo '<br>';
                                            echo '<a href="dangnhap.php" style="text-decoration: none;"><strong class="text-danger">Đăng nhập</strong></a>'; // Hiển thị liên kết đến trang đăng nhập
                                        }
                                    ?>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" style="margin-top:10px ;">
                    <div class="row">
                        
                        <div class="col">
                            <a href="cart.php" class="position-relative">
                                <span class="fs-3"><i class="fa-sharp fa-solid fa-bag-shopping"></i></span>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                   <?php
                                    if (isset($_SESSION["cart"])) {
                                        echo count($_SESSION["cart"]);
                                    } else {
                                        echo "0"; // Hoặc không hiển thị gì cả
                                    }
                                    ?>
                                </span>
                            </a>
                        </div>
                        <div class="col">
                            <a href="dangxuat.php" class="position-relative">
                                <span class="fs-3"><i class="fa-solid fa-right-to-bracket"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mymainmenu bg-danger">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-white py-3">
                    Danh mục sản phẩm
                </div>
                <div class="col-md-9">
                    <nav class="navbar navbar-expand-lg bg-danger">
                        <div class="container-fluid">
                          <a class="navbar-brand d-none" href="#">Navbar</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link text-white active" aria-current="page" href="index.php">Trang chủ</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="gioithieu.html">Giới thiệu</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link text-white dropdown-toggle" href="gioithieu.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Sản phẩm
                                </a>
                                <!-- <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Đá</a></li>
                                  <li><a class="dropdown-item" href="#">Gạch</a></li>
                                  <li><a class="dropdown-item" href="#">Máy cắt bê tông</a></li>
                                  <li><a class="dropdown-item" href="#">Thang cách điện</a></li>
                                  <li><a class="dropdown-item" href="#">Máy mài sắt</a></li>
                                  <li><a class="dropdown-item" href="#">Bồn</a></li>
                                  <li><a class="dropdown-item" href="#">Ngói</a></li>
                                  <li><a class="dropdown-item" href="#">Sơn</a></li>
                                  <li><a class="dropdown-item" href="#">Xi măng</a></li>
                                  <li><a class="dropdown-item" href="#">Đồ bảo vệ</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Sản phẩm khác</a></li>
                                </ul> -->


                                 <ul class="dropdown-menu">
                                <?php
                                include 'connect.php';

                                $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
                                $query_danhmuc = mysqli_query($con, $sql_danhmuc);
                                while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                                    echo '<li><a href="index.php?quanly=danhmucsanpham&id=' . $row_danhmuc['id_danhmuc'] . '">' . $row_danhmuc['tendanhmuc'] . '</a></li>';
                                }
                                ?>
                                </ul>




                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="tintuc.html">Tin tức</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="tuyendung.html">Tuyển dụng</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="lienhe.html">Liên hệ</a>
                              </li>
                            </ul>
                            
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="mymaincontent my-3">
        <div class="container">
            <div class="slider mb-3">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/gachbong.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/bigg.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/xakho.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="cate-list mb-3">
                <div class="row">
                    <div class="large-12 columns">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="category-icon">
                                    <img src="img/iconcapdaydien.png" alt="">
                                    <h5>Cáp dây điện</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category-icon">
                                    <img src="img/iconaobaoho.png" alt="">
                                    <h5>Áo bảo hộ</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category-icon">
                                    <img src="img/icondaoplat.jpeg" alt="">
                                    <h5>Đá lát</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category-icon">
                                    <img src="img/icondenchum.png" alt="">
                                    <h5>Đèn chùm</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category-icon">
                                    <img src="img/icongachoplat.jpeg" alt="">
                                    <h5>Gạch ốp lát</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category-icon">
                                    <img src="img/icongiaybaoho.png" alt="">
                                    <h5>Giày bảo hộ</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category-icon">
                                    <img src="img/iconkeodancongnghiep.jpeg" alt="">
                                    <h5>Keo dán công nghiệp</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category-icon">
                                    <img src="img/iconkeodangachda.jpeg" alt="">
                                    <h5>Keo dán gạch đá</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category-icon">
                                    <img src="img/iconmaycat.jpeg" alt="">
                                    <h5>Máy cắt</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category-icon">
                                    <img src="img/iconmayhan.jpeg" alt="">
                                    <h5>Máy hàn</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category-icon">
                                    <img src="img/iconmubaoho.png" alt="">
                                    <h5>Mũ bảo hộ</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="category-icon">
                                    <img src="img/iconsonnoithat.png" alt="">
                                    <h5>Sơn nội thất</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-list mb-3">
                <div class="product_title border-bottom">
                    <strong class="bg-danger text-white p-2">SẢN PHẨM CÓ SẴN KHO</strong>
                </div>
                <?php
                include './connect.php';

                $search = isset($_GET['name']) ? $_GET['name'] : "";
                if ($search) {
                    $where = "WHERE `name` LIKE '%" . $search . "%'";
                }
                $so_sp_tren_1_trang = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
                $so_trang = !empty($_GET['page']) ? $_GET['page'] : 1;
                $offset = ($so_trang - 1) * $so_sp_tren_1_trang;

                if ($search) {
                    $query_sanpham = "SELECT * FROM `tbl_sanpham` WHERE `tensanpham` LIKE '%" . $search . "%' ORDER BY `id_sanpham` ASC LIMIT " . $so_sp_tren_1_trang . " OFFSET " . $offset;
                    $query_tongsosp = "SELECT * FROM `tbl_sanpham` WHERE `tensanpham` LIKE '%" . $search . "%'";
                } else {
                    if (isset($_GET['quanly']) && $_GET['quanly'] == 'danhmucsanpham' && isset($_GET['id'])) {
                        $danhmuc_id = $_GET['id'];
                        $query_sanpham = "SELECT * FROM `tbl_sanpham` WHERE `id_danhmuc` = '$danhmuc_id' ORDER BY `id_sanpham` ASC LIMIT " . $so_sp_tren_1_trang . " OFFSET " . $offset;
                        $query_tongsosp = "SELECT * FROM `tbl_sanpham` WHERE `id_danhmuc` = '$danhmuc_id'";
                    } else {
                        $query_sanpham = "SELECT * FROM `tbl_sanpham` ORDER BY `id_sanpham` ASC LIMIT " . $so_sp_tren_1_trang . " OFFSET " . $offset;
                        $query_tongsosp = "SELECT * FROM `tbl_sanpham`";
                    }
                }

                $sanpham = mysqli_query($con, $query_sanpham);
                $tongsosp = mysqli_query($con, $query_tongsosp);
                $tongsosp = $tongsosp->num_rows;
                $tongsotrang = ceil($tongsosp / $so_sp_tren_1_trang);
                ?>

                <div class="product_list">
                    <?php
                    while ($row = mysqli_fetch_array($sanpham)) {
                        ?>
                        <div class="sanpham">
                            <div class="anh_sp">
                                <a href="detail.php?id=<?= $row['id_sanpham'] ?>"><img src="<?= $row['hinhanh'] ?>" title="<?= $row['tensanpham'] ?>" height="150px" width="175px"></a>
                            </div>
                            <strong><a href="detail.php?id=<?= $row['id_sanpham'] ?>"><?= $row['tensanpham'] ?></a></strong> <br/>
                            <label>Mã sản phẩm: </label><span class="ma_sp"><?= $row['masp'] ?></span><br/>
                            <label>Giá: </label><span class="gia_sp"><?= number_format($row['giasp'], 0, ",", ".") ?></span><label class="vnd">VNĐ</label><br/><br/><br/>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
                <?php

    include './phantrang.php'
    ?>
    <section class="myfooter bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4 style="font-size: 15px;">VỀ CHÚNG TÔI</h4>
                    <ul class="list-menu">					
						<li class="li_menu"><a href="/" title="Tư vấn mua hàng">Tư vấn mua hàng <br> 1800 6464 98</a></li>					
						<li class="li_menu"><a href="gioithieu.html" title="Giới thiệu">Giới thiệu về Shark</a></li>				
						<li class="li_menu"><a href="Dieu-khoan-&-dieu-kien.html" title="Điều kiện & điều khoản">Điều kiện & điều khoản</a></li>				
						<li class="li_menu"><a href="Kinh-doanh-online-tu-Shark.html" title="Kinh doanh online từ Shark">Kinh doanh online từ Shark</a></li>			
						<li class="li_menu"><a href="Quy-che-hoat-dong.html" title="Quy chế hoạt động">Quy chế hoạt động</a></li>			
					</ul>
                </div>
                <div class="col-md-3">
                    <h4 style="font-size: 15px;">CHĂM SÓC KHÁCH HÀNG</h4>
                    <ul class="list-menu">					
						<li class="li_menu"><a href="Quy-trinh-thanh-toan.html" title="Quy trình thanh toán">Quy trình thanh toán</a></li>					
						<li class="li_menu"><a href="Chinh-sach-van-chuyen.html" title="Chính sách vận chuyển">Chính sách vận chuyển</a></li>				
						<li class="li_menu"><a href="Chinh-sach-bao-mat.html" title="Chính sách bảo mật">Chính sách bảo mật</a></li>				
						<li class="li_menu"><a href="Chinh-sach-doi-tra.html" title="Chính sách đổi trả">Chính sách đổi trả</a></li>			
						<li class="li_menu"><a href="Giai-quyet-tranh-chap.html" title="Giải quyết tranh chấp">Giải quyết tranh chấp</a></li>			
					</ul>
                </div>
                <div class="col-md-3">
                    <h4 style="font-size: 15px;">MUA HÀNG TRÊN SHARK</h4>
                    <ul class="list-menu">					
						<li class="li_menu"><a href="/" title="Tất cả danh mục">Tất cả danh mục</a></li>					
						<li class="li_menu"><a href="/gioi-thieu" title="Yêu cầu báo giá">Yêu cầu báo giá</a></li>				
						<li class="li_menu"><a href="/collections/all" title="Hỗ trợ người mua">Hỗ trợ người mua</a></li>				
						<li class="li_menu"><a href="Thanh-toan-an-toan.html" title="Thanh toán an toàn">Thanh toán an toàn</a></li>			
						<li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Đảm bảo giao dịch">Đảm bảo giao dịch</a></li>			
					</ul>
                </div>
                <div class="col-md-3">
                    <h4 style="font-size: 15px;">BÁN HÀNG TRÊN SHARK</h4>
                    <ul class="list-menu">					
						<li class="li_menu"><a href="Quy-dinh-doi-voi-nguoi-ban.html" title="Quy định đối với người bán">Quy định đối với người bán</a></li>					
						<li class="li_menu"><a href="/gioi-thieu" title="Thành viên là nhà cung cấp">Thành viên là nhà cung cấp</a></li>				
						<li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>				
						<li class="li_menu"><a href="/tin-moi-nhat" title="Khách hàng thân thiết">Khách hàng thân thiết</a></li>			
						<li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Đăng kí mở gian hàng">Đăng kí mở gian hàng</a></li>			
						<li class="li_menu"><a href="/tuyen-dung" title="Hỗ trợ người bán">Hỗ trợ người bán</a></li>					
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h5>THIÊN ĐƯỜNG MUA SẮM SHARK MART</h5>
                    <p>Copyright@ 2023 Công ty cổ phần thương mại Shark Mart</p>
                    <p>Chứng nhận ĐKKD số: 0388282934 do sở KH & ĐT TP.Hà Nội cấp</p>
                    <p>Địa chỉ: 170 An Dương Vương, phường Nguyễn Văn Cừ, TP.Quy Nhơn, Bình Định</p>
                    <p>Điện thoại: 09692454xx - Email: nhat6870k@gmail.com</p>
                </div>
                <div class="col-md-6">
                    <h5>NHẬN TIN KHUYẾN MÃI</h5>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nhập email của bạn" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text text-white bg-danger" id="basic-addon2">ĐĂNG KÝ</span>
                    </div>
                    <div>
                        <span class="box50 border border-danger"><i class="fa-brands fa-facebook"></i></span>
                        <span class="box50 border border-danger"><i class="fa-brands fa-twitter"></i></i></span>
                        <span class="box50 border border-danger"><i class="fa-brands fa-google"></i></span>
                        <span class="box50 border border-danger"><i class="fa-brands fa-youtube"></i></span>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">Bản quyền thuộc về Shark, cung cấp cũng bởi Shark:))</div>
                <div class="col-md-6 text-end">
                    <div class="chantrang">
                        <a href="index.php">Trang chủ</a>
                        <a href="gioithieu.html">Giới thiệu</a>
                        <a href="">Sản phẩm</a>
                        <a href="#">Tin mới nhất</a>
                        <a href="#">Câu hỏi thường gặp</a>
                    </div>
                </div>    
            </div>
        </div>
    </section>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
          $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav:false,
            dots:false,
            responsiveClass: true,
            responsive: {
              0: {
                items: 4,
              },
              600: {
                items: 6,
              },
              1000: {
                items: 8,
                loop: false,
                margin: 20
              }
            }
          })
        })
      </script>
</body>
</html>

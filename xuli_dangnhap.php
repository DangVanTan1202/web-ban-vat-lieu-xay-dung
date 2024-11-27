<?php
session_start();

include './connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];

$sql = "SELECT * FROM `tbl_users` WHERE `username` = '$username' AND `password` = '$password' ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['isLoggedIn'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['fullname'] = $fullname;
    echo "Xin chào, bạn đã đăng nhập thành công với tên tài khoản <b>{$_SESSION['fullname']}</b>.";
    header("Location: index.php");
    exit();
} else {
    echo 'Tên đăng nhập hoặc mật khẩu không khớp.<br>';
    echo '<a href="dangnhap.php">Quay lại đăng nhập</a>';
}

mysqli_close($con);
?>

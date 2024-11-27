<?php

require './connect.php';
$error = false;
if(isset($_POST['btn-reg'])){
    // echo "<pre>";
    // print_r($_POST);

    $fullname = $_POST['fullname'];
    $username= $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    
    if(!empty($fullname)&&!empty($username)&&!empty($password)&&!empty($email)&&!empty($address)){
        // echo "<pre>";
        // print_r($_POST);

        $checkQuery = "SELECT * FROM `tbl_users` WHERE `username` = '$username'";
        $result = $con->query($checkQuery);

        if ($result->num_rows > 0) {
            $error = "Tài khoản đã tồn tại. Bạn vui lòng chọn tài khoản khác.";
            echo $error;
        } else {
            $sql = "INSERT INTO `tbl_users` (`fullname`, `username`, `password`, `email`, `address`) VALUES ('$fullname', '$username', '$password', '$email', '$address')";
            if ($con->query($sql) === TRUE) {
                echo "Đăng ký thành công";
            } else {
                echo "Lỗi {$sql}" . $con->error;
            }
        }
    }else{
        echo "Bạn cần nhập đủ thông tin trước khi đăng ký";
    }
}

?>

<br>
<a style="color: blueviolet;" href="dangnhap.php">Đến trang Đăng Nhập</a>
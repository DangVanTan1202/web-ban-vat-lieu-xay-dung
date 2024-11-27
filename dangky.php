<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopee Việt Nam:))</title>
    <h1>
        <style>
            form {
              display: flex;
              flex-direction: column;
              width: 400px;
              margin: 0 auto;
              padding: 20px;
              background-color: #f2f2f2;
              border-radius: 10px;
            }
      
            label {
              font-size: 18px;
              margin-bottom: 10px;
              color: indigo;
            }
      
            input[type="text"],
            input[type="email"],
            input[type="password"] {
              font-size: 16px;
              padding: 10px;
              border-radius: 5px;
              border: none;
              margin-bottom: 20px;
            }
      
            input[type="submit"] {
              background-color: #4CAF50;
              color: white;
              font-size: 16px;
              padding: 10px 20px;
              border: none;
            }

          </style>
    </h1>
    <h2>
      <style>
        
      </style>
    </h2>
</head>
<body>
    <form action="xuli_dangky.php" method="post">
        <h1 style="color: brown;">ĐĂNG KÝ TÀI KHOẢN</h1> <br> <br>
        <label for="fullname">Họ và tên</label><br>
        <input type="text" name="fullname" id="fullname" placeholder="fullname"> <br><br>
        <label for="username">Tên đăng nhập</label> <br>
        <input type="text" name="username" id="username" placeholder="username"> <br><br>
        <label for="password">Mật Khẩu</label><br>
        <input type="password" name="password" id="password" placeholder="password"> <br><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" placeholder="e-mail"> <br><br>
        <label for="address">Địa chỉ</label><br>
        <input type="text" name="address" id="address" placeholder="address"> <br><br>
        <input type="submit" value="Đăng Ký" name="btn-reg">
        <label for="text">Bạn đã có tài khoản?
        <a href="dangnhap.php">Đăng Nhập </a>tại đây
        </label>
    </form>
</body>
</html>
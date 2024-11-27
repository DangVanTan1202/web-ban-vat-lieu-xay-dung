<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopee Việt Nam:))</title>
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
        input[type="password"],
        input[type="email"] {
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
</head>
<body>
    <form action="xuli_dangnhap.php" method="post">
        <h1 style="color: brown;">ĐĂNG NHẬP</h1> <br> <br>
        <label for="username">Tên đăng nhập</label> <br>
        <input type="text" name="username" id="username" placeholder="username"> <br><br>
        <label for="password">Mật khẩu</label><br>
        <input type="password" name="password" id="password" placeholder="password"> <br><br>
        <input type="submit" value="Đăng nhập" name="btn-login">
        <label for="text">Bạn chưa có tài khoản?
        <a href="dangky.php">Đăng ký</a> ngay
        </label>
    </form>
</body>
</html>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Trang Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/admin_style.css" >
        <script src="../resources/ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <?php
        session_start();
        include '../connect.php';
        include '../function.php';
        if (!empty($_SESSION['current_user'])) { 
            ?>
            <div id="admin-heading-panel">
                <div class="container">
                    <div class="left-panel">
                        Xin chào <span>Admin</span>
                    </div>
                    <div class="right-panel">
                        <img height="24" src="../image/home.png" />
                        <a href="../index.php">Trang chủ</a>
                        <img height="24" src="../image/logout.png" />
                        <a href="logout.php">Đăng xuất</a>
                    </div>
                </div>
            </div>
            <div id="content-wrapper">
                <div class="container">
                    <div class="left-menu">
                        <div class="menu-heading">Admin Menu</div>
                        <div class="menu-items">
                            <ul>
                                <li><a href="#">Cấu hình</a></li>
                                <li><a href="#">Tin tức</a></li>
                                <li><a href="product_listing.php">Sản phẩm</a></li>
                                <li><a href="#">Đơn hàng</a></li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
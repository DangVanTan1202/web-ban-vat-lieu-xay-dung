<?php
$host="localhost";
$username="root";
$password="";
$dbname="vlxd";

$con=mysqli_connect($host,$username,$password,$dbname);
if(mysqli_connect_errno()){
    echo "kết nối không thành công: ".mysqli_connect_errno();
}
?>
<?php

$servername = "localhost";
$username = "root"; // Thay đổi tên đăng nhập của bạn nếu cần
$password = "";     // Thay đổi mật khẩu của bạn nếu cần
$dbname = "vua";     // Thay đổi tên cơ sở dữ liệu của bạn

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Thực hiện truy vấn SQL để kiểm tra thông tin đăng nhập
    $query = "SELECT name, password FROM hay WHERE name='$name' AND password='$password'";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        require 'bentrongwep/wep.html';
        
       

    } else {
        echo "Tên đăng nhập hoặc mật khẩu không tồn tại.";
    }
   
}
?>
 

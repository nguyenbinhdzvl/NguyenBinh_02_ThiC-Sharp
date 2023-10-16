<?php
$servername = "localhost";
$username = "root"; // Thay đổi tên đăng nhập của bạn nếu cần
$password = "";     // Thay đổi mật khẩu của bạn nếu cần
$dbname = "vua"; // Thay đổi tên cơ sở dữ liệu của bạn

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);



// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}
echo " Thành Công"
?>
 <script>
        setTimeout(function() {
            window.location.href ="dangnhap.html";
        }, 2000); // Chuyển hướng sau 2 giây (2000 ms)
    </script>
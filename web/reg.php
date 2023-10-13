<?php
require 'db/connect.php';

if (isset($_POST['hello'])) {
    echo "Đã Submit";

    $name = $_POST['name'];
    $FullName = $_POST['FullName'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    echo "<pre>";
    print_r($_POST);

    $sql = "INSERT INTO  `hay` (`name`, `FullName`, `password`, `email`) VALUES ('$name', '$FullName', '$password', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Lỗi: {$sql}" . $conn->error;
    }
}
?>
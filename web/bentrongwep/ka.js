
    // Lấy các phần tử cần sử dụng
    const vuTruLink = document.getElementById("vu-tru-link");
    const addressForm = document.getElementById("address-form");

    // Thêm sự kiện click vào phần "Vũ Trụ"
    vuTruLink.addEventListener("click", function (event) {
        event.preventDefault();
        addressForm.style.display = "block"; // Hiển thị bảng chọn địa chỉ
    });

    // Thêm sự kiện click vào nút đóng
    const adressClose = document.getElementById("adress-close");
    adressClose.addEventListener("click", function () {
        addressForm.style.display = "none"; // Đóng bảng chọn địa chỉ
    });


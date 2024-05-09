<?php
session_start();
include("../config.php");

if (isset($_POST['Email']) && isset($_POST['MatKhau'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['Email']);
    $matkhau = validate($_POST['MatKhau']);
    $user_data = 'Email=' . $email;

    if (empty($email) || empty($matkhau)) {
        header("Location: DangNhap.php?error=Vui lòng nhập tên đăng nhập và mật khẩu&$user_data");
        exit();
    } else {
        // Kiểm tra trong bảng taikhoankhachhang
        $sql_khachhang = "SELECT * FROM taikhoankhachhang WHERE Email='$email' AND MatKhau='$matkhau'";
        $result_khachhang = mysqli_query($conn, $sql_khachhang);

        if (mysqli_num_rows($result_khachhang) === 1) {
            $row_khachhang = mysqli_fetch_assoc($result_khachhang);
            $_SESSION['TenKhachHang'] = $row_khachhang['TENND'];
            $_SESSION['MaKhachHang'] = $row_khachhang['MaKhachHang'];
            $_SESSION['GioiTinh'] = $row_khachhang['GioiTinh'];
            $_SESSION['SoDienThoai'] = $row_khachhang['SoDienThoai'];
            $_SESSION['DiaChI'] = $row_khachhang['DIACHI'];
            $_SESSION['Email'] = $row_khachhang['Email'];

            // Đếm số lượng sản phẩm trong giỏ hàng
            $slgh = "SELECT COUNT(giohang.SoLuong) AS total FROM giohang JOIN taikhoankhachhang ON giohang.MaKhachHang = taikhoankhachhang.MaKhachHang WHERE giohang.MaKhachHang = '{$row_khachhang['MAKhachHang']}'";
            $result_slgh = mysqli_query($conn, $slgh);
            $row_slgh = mysqli_fetch_assoc($result_slgh);
            $_SESSION['SLGH'] = $row_slgh['total'];

            header("Location: ../home/home.php");
            exit();
        } else {
            // Kiểm tra trong bảng taikhoannhanvien
            $sql_nhanvien = "SELECT * FROM taikhoannhanvien WHERE EMAIL='$email' AND MATKHAU='$matkhau'";
            $result_nhanvien = mysqli_query($conn, $sql_nhanvien);

            if (mysqli_num_rows($result_nhanvien) === 1) {
                $row_nhanvien = mysqli_fetch_assoc($result_nhanvien);
                $_SESSION['TenNhanVien'] = $row_nhanvien['TenNhanVien'];
                $_SESSION['MaNhanVien'] = $row_nhanvien['MaNhanVien'];
                $_SESSION['GioiTinh'] = $row_nhanvien['GioiTinh'];
                $_SESSION['SoDienThoai'] = $row_nhanvien['SoDienThoai'];
                $_SESSION['DIACHI'] = $row_nhanvien['DIACHI'];
                $_SESSION['Email'] = $row_nhanvien['Email'];

                header("Location: ../admins/home_admin.php");
                exit();
            } else {
                header("Location: DangNhap.php?error=Sai tên đăng nhập hoặc mật khẩu&$user_data");
                exit();
            }
        }
    }
} else {
    header("Location: DangNhap.php");
    exit();
}
?>

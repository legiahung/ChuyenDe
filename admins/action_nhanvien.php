<?php
session_start();
include "config.php";
mysqli_set_charset($conn, 'utf8mb4');
$update=false;
$id="";
$name="";
$gioitinh = "";
$ngaysinh="";
$diachi="";
$sodienthoai="";
$pass="";
$photo="";
$id_pb = "";
$id_bp = "";

if (isset($_POST['add'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $gioitinh = $_POST['$gioitinh'];
    $ngaysinh = $_POST['$ngaysinh'];
    $diachi = $_POST['diachi'];
    $sodienthoai = $_POST['sodienthoai'];
    $pass = $_POST['pass'];
    $photo=$_FILES['image']['name'];
    $upload="images/".$photo;
    $id_pb = $_POST['id_pb'];
    $id_bp = $_POST['id_bp'];

    $query = "INSERT INTO taikhoannhanvien (MaNhanVien, TenNhanVien, GioiTinh, NgaySinh , DiaChi , SoDienThoai, Email, Anh, MatKhau, MaPhongBan, MaBoPhan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssssssss", $id, $name, $gioitinh, $ngaysinh, $diachi, $sodienthoai, $email, $upload, $pass, $id_pb, $id_bp);
    $stmt->execute();
    move_uploaded_file($_FILES['image']['tmp_name'], $upload);
    $_SESSION['response'] = "Thêm Dữ Liệu Thành Công!";
    $_SESSION['res_type'] = "success";
    header('location: taikhoan_nhanvien.php');
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = "DELETE FROM taikhoannhanvien WHERE MaNhanVien=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id);
    $stmt->execute();

    $_SESSION['response'] = "Xoá Dữ Liệu Thành Công!";
    $_SESSION['res_type'] = "danger";
    header('location: taikhoan_nhanvien.php');
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $query = "SELECT * FROM taikhoannhanvien WHERE MaNhanVien=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $id = $row['MaTaiKhoan'];
    $username = $row['TenDangNhap'];
    $pass = $row['MatKhau'];
    $typeuser = $row['LoaiTaiKhoan'];
    

    $update = true;
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $typeuser = $_POST['typeuser'];

    $query = "UPDATE taikhoan SET TenDangNhap=?, MatKhau=?, LoaiTaiKhoan=? WHERE MaTaiKhoan=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $username, $pass, $typeuser, $id);
    $stmt->execute();

    $_SESSION['response'] = "Cập Nhật Thành Công!";
    $_SESSION['res_type'] = "primary";
    header('location: taikhoan.php');
}

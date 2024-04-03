<?php
session_start();
include "config.php";

mysqli_set_charset($conn, 'utf8mb4');
$id = "";
$username = "";
$pass = "";
$typeuser = "";


$update = false;

if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $typeuser = $_POST['typeuser'];

    $query = "INSERT INTO taikhoan (MaTaiKhoan, TenDangNhap, MatKhau, LoaiTaiKhoan) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $id, $username, $pass, $typeuser);
    $stmt->execute();

    $_SESSION['response'] = "Thêm Dữ Liệu Thành Công!";
    $_SESSION['res_type'] = "success";
    header('location: taikhoan.php');
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = "DELETE FROM taikhoan WHERE MaTaiKhoan=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id);
    $stmt->execute();

    $_SESSION['response'] = "Xoá Dữ Liệu Thành Công!";
    $_SESSION['res_type'] = "danger";
    header('location: taikhoan.php');
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $query = "SELECT * FROM taikhoan WHERE MaTaiKhoan=?";
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

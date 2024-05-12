<?php
session_start();
include "config.php";
mysqli_set_charset($conn, 'utf8mb4');

$id="";
$name="";
$gioitinh = "";
$ngaysinh="";
$diachi="";
$sodienthoai="";
$email="";
$pass="";
$photo="";
$id_pb = "";
$id_bp = "";

$update=false;

if (isset($_POST['add'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $gioitinh = $_POST['gioitinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $diachi = $_POST['diachi'];
    $sodienthoai = $_POST['sodienthoai'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    // Mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu
    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
    $photo=$_FILES['image']['name'];
    $upload="uploads/".$photo;
    $id_pb = $_POST['id_pb'];
    $id_bp = $_POST['id_bp'];

    $query = "INSERT INTO taikhoannhanvien (MaNhanVien, TenNhanVien, GioiTinh, NgaySinh , DiaChi , SoDienThoai, Email, 
    MatKhau, Anh, MaPhongBan, MaBoPhan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssssssss", $id, $name, $gioitinh, $ngaysinh, $diachi, $sodienthoai, $email, $pass_hash, $upload, $id_pb, $id_bp);
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

    $id = $row['MaNhanVien'];
    $name = $row['TenNhanVien'];
    $gioitinh = $row['GioiTinh'];
    $ngaysinh = $row['NgaySinh'];
    $diachi = $row['DiaChi'];
    $sodienthoai = $row['SoDienThoai'];
    $email = $row['Email'];
    $pass = $row['MatKhau'];
    $photo= $row['Anh'];
    $id_pb = $row['MaPhongBan'];
    $id_bp = $row['MaBoPhan'];

    $update = true;
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gioitinh = $_POST['gioitinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $diachi = $_POST['diachi'];
    $sodienthoai = $_POST['sodienthoai'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    // Mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu
    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
    $oldimage=$_POST['oldimage'];
    $id_pb = $_POST['id_pb'];
    $id_bp = $_POST['id_bp'];

    if(isset($_FILES['image']['name'])&&($_FILES['image']['name']!="")){
        $newimage="uploads/".$_FILES['image']['name'];
        unlink($oldimage);
        move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
    }
    else{
        $newimage=$oldimage;
    }

    $query = "UPDATE taikhoannhanvien SET TenNhanVien=?, GioiTinh=?, NgaySinh=?, DiaChi=?, SoDienThoai=?, Email=?, 
    MatKhau=?, Anh=?, MaPhongBan=?, MaBoPhan=? WHERE MaNhanVien=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssssssss", $name, $gioitinh, $ngaysinh, $diachi, $sodienthoai, $email, $pass_hash, $newimage, $id_pb, $id_bp, $id);
    $stmt->execute();

    $_SESSION['response'] = "Cập Nhật Thành Công!";
    $_SESSION['res_type'] = "primary";
    header('location: taikhoan_nhanvien.php');
}
?>

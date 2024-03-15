<?php
include "config.php";

mysqli_set_charset($conn, 'utf8mb4');
$id = "";
$tenncc = "";
$email = "";
$addncc = "";
$phonencc = "";

$update = false;

if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $tenncc = $_POST['tenncc'];
    $email = $_POST['email'];
    $addncc = $_POST['addncc'];
    $phonencc = $_POST['phonencc'];

    $query = "INSERT INTO nhacungcap (MaNhaCungCap, TenNhaCungCap, Email, DiaChi, SoDienThoai ) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssss", $id, $tenncc, $email, $addncc, $phonencc);
    $stmt->execute();
    header('location: nhacungcap.php');
    $_SESSION['response'] = "Successfully Inserted to the database!";
    $_SESSION['res_type'] = "success";
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = "DELETE FROM nhacungcap WHERE MaNhaCungCap=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id);
    $stmt->execute();

    header('location: nhacungcap.php');
    $_SESSION['response'] = "Successfully Deleted!";
    $_SESSION['res_type'] = "danger";
}
//thực hiện thay đổi 
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $query = "SELECT * FROM nhacungcap WHERE MaNhaCungCap=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $id = $row['MaNhaCungCap'];
    $tenncc = $row['TenNhaCungCap'];
    $email = $row['Email'];
    $addncc = $row['DiaChi'];
    $phonencc = $row['SoDienThoai'];
    $update = true;
}

// Thực hiện cập nhật thông tin nhà cung cấp
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $tenncc = $_POST['tenncc'];
    $email = $_POST['email'];
    $addncc = $_POST['addncc'];
    $phonencc = $_POST['phonencc'];

    $query = "UPDATE nhacungcap SET TenNhaCungCap=?, Email=?, DiaChi=?, SoDienThoai=? WHERE MaNhaCungCap=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssss", $tenncc, $email, $addncc, $phonencc, $id);
    $stmt->execute();

    header('location: nhacungcap.php');
    $_SESSION['response'] = "Successfully Updated!";
    $_SESSION['res_type'] = "primary";
}


if (isset($_GET['details'])) {
    $id = $_GET['details'];
    $query = "SELECT * FROM nhacungcap WHERE MaNhaCungCap=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $vid = $row['MaNhaCungCap'];
    $vtenncc = $row['TenNhaCungCap'];
    $vemail = $row['Email'];
    $vaddncc = $row['DiaChi'];
    $phonencc = $row['SoDienThoai'];
}

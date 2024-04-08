<?php
    session_start();
    include "config.php";
    mysqli_set_charset($conn, 'utf8mb4');

    $id="";
    $name="";
    $id_lts = "";
    $giaban ="";
    $id_ncc ="";
    $mota ="";
    $photo="";
    $soluong = "";

    $update=false;

if (isset($_POST['add'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $id_lts = $_POST['id_lts'];
    $giaban = $_POST['giaban'];
    $id_ncc = $_POST['id_ncc'];
    $mota = $_POST['mota'];
    $photo=$_FILES['image']['name'];
    $upload="uploads/".$photo;
    $soluong = $_POST['soluong'];

    $query = "INSERT INTO sanpham (MaSanPham, TenSanPham, MaLoaiTrangSuc, GiaBan , MaNhaCungCap , MoTa,
    Anh, SoLuong) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssssss", $id, $name, $id_lts, $giaban, $id_ncc, $mota, $upload, $soluong);
    $stmt->execute();
    move_uploaded_file($_FILES['image']['tmp_name'], $upload);
    $_SESSION['response'] = "Thêm Dữ Liệu Thành Công!";
    $_SESSION['res_type'] = "success";
    header('location: sanpham.php');
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = "DELETE FROM sanpham WHERE MaSanPham=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id);
    $stmt->execute();

    $_SESSION['response'] = "Xoá Dữ Liệu Thành Công!";
    $_SESSION['res_type'] = "danger";
    header('location: sanpham.php');
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $query = "SELECT * FROM sanpham WHERE MaSanPham=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $id = $row['MaSanPham'];
    $name = $row['TenSanPham '];
    $id_lts = $row['MaLoaiTrangSuc'];
    $giaban = $row['GiaBan'];
    $id_ncc = $row['MaNhaCungCap'];
    $mota = $row['MoTa'];
    $photo= $row['Anh'];
    $soluong = $row['SoLuong'];

    $update = true;
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $id_lts = $_POST['id_lts'];
    $giaban = $_POST['giaban'];
    $id_ncc = $_POST['id_ncc'];
    $mota = $_POST['mota'];
    $oldimage=$_POST['oldimage'];
    $soluong = $_POST['soluong'];

    if(isset($_FILES['image']['name'])&&($_FILES['image']['name']!="")){
        $newimage="uploads/".$_FILES['image']['name'];
        unlink($oldimage);
        move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
    }
    else{
        $newimage=$oldimage;
    }

    $query = "UPDATE sanpham SET TenSanPham=?, MaLoaiTrangSuc=?, GiaBan=?, MaNhaCungCap=?, MoTa=?, Anh=?, 
    SoLuong=? WHERE MaSanPham=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssssssss", $id_lts, $giaban, $id_ncc, $mota, $sodienthoai, $newimage, $soluong, $id);
    $stmt->execute();

    $_SESSION['response'] = "Cập Nhật Thành Công!";
    $_SESSION['res_type'] = "primary";
    header('location: sanpham.php');
}

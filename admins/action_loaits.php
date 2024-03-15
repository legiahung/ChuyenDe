<?php
session_start();
include 'config.php';
mysqli_set_charset($conn, 'utf8mb4');
$maloaitrangsuc = "";
$tenloaitrangsuc = "";

$update = false;

if (isset($_POST['add'])) {
	$maloaitrangsuc = $_POST['maloaitrangsuc'];
	$tenloaitrangsuc = $_POST['tenloaitrangsuc'];

	$query = "INSERT INTO loaitrangsuc (MaLoaiTrangSuc, TenLoaiTrangSuc) VALUES ( ?, ?)";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("ss", $maloaitrangsuc, $tenloaitrangsuc);
	$stmt->execute();
	header('location: loaitrangsuc.php');
	$_SESSION['response'] = "Thêm Dữ Liệu Thành Công!";
	$_SESSION['res_type'] = "success";
}

if (isset($_GET['delete'])) {
	$maloaitrangsuc = $_GET['delete'];

	$query = "DELETE FROM loaitrangsuc WHERE MaLoaiTrangSuc=?";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("s", $maloaitrangsuc);
	$stmt->execute();

	header('location: loaitrangsuc.php');
	$_SESSION['response'] = "Xoá Dữ Liệu Thành Công!";
	$_SESSION['res_type'] = "danger";
}

if (isset($_GET['edit'])) {
	$maloaitrangsuc = $_GET['edit'];

	$query = "SELECT * FROM loaitrangsuc WHERE MaLoaiTrangSuc=?";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("s", $maloaitrangsuc);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();

	$maloaitrangsuc = $row['MaLoaiTrangSuc'];
	$tenloaitrangsuc = $row['TenLoaiTrangSuc'];


	$update = true;
}
if (isset($_POST['update'])) {

	$maloaitrangsuc = $_POST['maloaitrangsuc'];
	$tenloaitrangsuc = $_POST['tenloaitrangsuc'];

	// Kiểm tra xem dữ liệu mới có khác với dữ liệu cũ không
	$query_check = "SELECT * FROM loaitrangsuc WHERE MaLoaiTrangSuc=?";
	$stmt_check = $conn->prepare($query_check);
	$stmt_check->bind_param("s", $maloaitrangsuc);
	$stmt_check->execute();
	$result_check = $stmt_check->get_result();
	$row_check = $result_check->fetch_assoc();

	$maloaitrangsuc_old = $row_check['maloaitrangsuc'];
	$tenloaitrangsuc_old = $row_check['tenloaitrangsuc'];

	if ($maloaitrangsuc != $maloaitrangsuc_old || $tenloaitrangsuc != $tenloaitrangsuc_old) {
		echo "Dữ liệu được chỉnh sửa mới:<br>";
		echo "ID loại trang sức: " . $maloaitrangsuc . "<br>";
		echo "Tên loại trang sức: " . $tenloaitrangsuc . "<br>";
	}

	// Tiếp tục thực hiện câu truy vấn UPDATE
	$query = "UPDATE loaitrangsuc SET TenLoaiTrangSuc=? WHERE MaLoaiTrangSuc=?";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("ss", $tenloaitrangsuc, $maloaitrangsuc);
	$stmt->execute();

	$_SESSION['response'] = "Cập Nhật Thành Công!";
	$_SESSION['res_type'] = "primary";
	header('location: loaitrangsuc.php');
}

if (isset($_GET['details'])) {
	$maloaitrangsuc = $_GET['details'];
	$query = "SELECT * FROM loaitrangsuc WHERE MaLoaiTrangSuc=?";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("s", $maloaitrangsuc);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();

	$vid = $row['MaLoaiTrangSuc'];
	$vtenloaitrangsuc = $row['TenLoaiTrangSuc'];
}

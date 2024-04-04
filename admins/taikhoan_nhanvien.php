<?php
include "config.php";
include 'action_nhanvien.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Tài Khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
</head>

<body class="bg-white">
    <div class="container mx-auto">
        <div class="container-fluid">
            <div class="flex justify-center">
                <div class="w-10/12">
                    <h3 class="text-center text-dark mt-2">Thông Tin Tài Khoản</h3>
                    <hr class="my-4">
                    <?php if (isset($_SESSION['response'])) { ?>
                        <div id="alert-message" class="alert alert-<?= $_SESSION['res_type']; ?> text-center">
                            <button id="close-btn" type="button" class="close">&times;</button>
                            <b><?= $_SESSION['response']; ?></b>
                        </div>
                    <?php }
                    unset($_SESSION['response']); ?>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-4">
                <!-- Phần cột trái (col-md-4) -->
                <div class="col-span-12 md:col-span-4">
                    <h3 class="text-center text-info">Thêm Tài Khoản</h3>
                    <form action="action_nhanvien.php" method="post" enctype="multipart/form-data" class="mt-4">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        <div class="mb-4">
                            <input type="text" name="username" value="<?= $username; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập Tên Đăng Nhập" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="pass" value="<?= $pass; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập Mật Khẩu" required>
                        </div>
                        <div class="mb-4">
                            <select name="typeuser" class="border rounded-lg px-4 py-2 w-full" required>
                                <option value="NhanVien" <?= ($typeuser == 'NhanVien') ? 'selected' : ''; ?>>Nhân Viên</option>
                                <option value="KhachHang" <?= ($typeuser == 'KhachHang') ? 'selected' : ''; ?>>Khách Hàng</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <?php if ($id == true) { ?>
                                <input type="submit" name="update" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded" value="Cập nhập">
                            <?php } else { ?>
                                <input type="submit" name="add" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" value="Thêm tài khoản">
                            <?php } ?>
                        </div>
                    </form>
                </div>

                <!-- Phần cột phải (col-md-8) -->
                <div class="col-span-12 md:col-span-8">
                    <?php
                    $query = 'SELECT * FROM taikhoannhanvien';
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    ?>
                    <h3 class="text-center text-info">Các bộ phận có trong dữ liệu</h3>
                    <div class="account-list max-h-500 overflow-y-scroll w-900">
                        <table class="table-auto" id="data-table">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3">Mã Tài Khoản</th>
                                    <th class="px-6 py-3">Tên Đăng Nhập</th>
                                    <th class="px-6 py-3">Mật Khẩu</th>
                                    <th class="px-6 py-3">Loại Tài Khoản</th>
                                    <th class="px-6 py-3">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <tr class="bg-white hover:bg-gray-100 transition duration-300" >
                                        <td class="border px-6 py-3"><?= $row['MaTaiKhoan']; ?></td>
                                        <td class="border px-6 py-3"><?= $row['TenDangNhap']; ?></td>
                                        <td class="border px-6 py-3"><?= $row['MatKhau']; ?></td>
                                        <td class="border px-6 py-3"><?= $row['LoaiTaiKhoan']; ?></td>
                                        <td class="border px-6 py-3">
                                            <div class="flex flex-col">
                                                <a href="action_nhanvien.php?delete=<?= $row['MaTaiKhoan']; ?>" onclick="return confirm('Bạn có chắc là muốn xóa?');" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded mb-2 text-sm">Xóa</a>
                                                <a href="taikhoan_nhanvien.php?edit=<?= $row['MaTaiKhoan']; ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded text-sm">Chỉnh sửa</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#data-table').DataTable({
            paging: true,
            searching: true,
            lengthMenu: [5, 10, 25, 50] // Số lượng bản ghi trên mỗi trang
        });
    });
</script>
    <script>
        // Lắng nghe sự kiện click vào nút đóng
        document.getElementById('close-btn').addEventListener('click', function() {
            // Ẩn phần tử chứa thông báo
            document.getElementById('alert-message').style.display = 'none';
        });
    </script>
</body>

</html>
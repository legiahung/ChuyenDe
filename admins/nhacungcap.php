<?php
include "config.php";
include 'action_NCC.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Nhà Cung Cấp</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-white">
    <div class="container mx-auto">
        <div class="container-fluid">
            <div class="flex justify-center">
                <div class="w-10/12">
                    <h3 class="text-center text-dark mt-2">Thông Tin Nhà Cung Cấp</h3>
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
                    <h3 class="text-center text-info">Thêm nhà cung cấp</h3>
                    <form action="action_ncc.php" method="post" enctype="multipart/form-data" class="mt-4">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        <div class="mb-4">
                            <input type="text" name="tenncc" value="<?= $tenncc; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập tên NCC" required>
                        </div>
                        <div class="mb-4">
                            <input type="email" name="email" value="<?= $email; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập email NCC" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="addncc" value="<?= $addncc; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập địa chỉ NCC" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="phonencc" value="<?= $phonencc; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập SĐT NCC" required>
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
                    $query = 'SELECT * FROM nhacungcap';
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    ?>
                    <h3 class="text-center text-info">Các NCC có sẵn trong cơ sở dữ liệu</h3>
                    <div class="account-list max-h-500 overflow-y-scroll w-900">
                        <table class="table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Mã Nhà Cung Cấp</th>
                                    <th class="px-4 py-2">Tên Nhà Cung Cấp</th>
                                    <th class="px-4 py-2">Email Nhà Cung Cấp</th>
                                    <th class="px-4 py-2">Địa Chỉ Nhà Cung Cấp</th>
                                    <th class="px-4 py-2">Số Điện Thoại</th>
                                    <th class="px-4 py-2">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <tr class="bg-white">
                                        <td class="border px-4 py-2"><?= $row['MaNhaCungCap']; ?></td>
                                        <td class="border px-4 py-2"><?= $row['TenNhaCungCap']; ?></td>
                                        <td class="border px-4 py-2"><?= $row['Email']; ?></td>
                                        <td class="border px-4 py-2"><?= $row['DiaChi']; ?></td>
                                        <td class="border px-4 py-2"><?= $row['SoDienThoai']; ?></td>
                                        <td class="border px-4 py-2">
                                            <div class="flex flex-col">
                                                <a href="details_ncc.php?details=<?= $row['MaNhaCungCap']; ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded mb-2 text-sm">Xem chi tiết</a>
                                                <a href="action_ncc.php?delete=<?= $row['MaNhaCungCap']; ?>" onclick="return confirm('Bạn có chắc là muốn xóa?');" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded mb-2 text-sm">Xóa</a>
                                                <a href="nhacungcap.php?edit=<?= $row['MaNhaCungCap']; ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded text-sm">Chỉnh sửa</a>
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
                paging: true
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
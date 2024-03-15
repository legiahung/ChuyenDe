<?php
include "config.php";
include 'action_loaits.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Loại Trang Sức</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
</head>

<body class="bg-white">
    <div class="container mx-auto">
        <div class="container-fluid">
            <div class="flex justify-center">
                <div class="w-10/12">
                    <h3 class="text-center text-dark mt-2">Danh Sách Loại Trang Sức</h3>
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

            <div class="grid grid-cols-2 gap-4">
                <!-- Phần cột trái -->
                <div class="col-span-1">
                    <h3 class="text-center text-info">Thêm nhà cung cấp</h3>
                    <form action="action_loaits.php" method="post" enctype="multipart/form-data" class="mt-4">
                        <div class="mb-4">
                            <input type="hidden" name="maloaitrangsuc" value="<?= $maloaitrangsuc; ?>">
                            <input type="text" name="tenloaitrangsuc" value="<?= $tenloaitrangsuc; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập tên loại trang sức" required>
                        </div>
                        <?php if ($maloaitrangsuc == true) { ?>
                            <input type="submit" name="update" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded" value="Cập Nhập">
                        <?php } else { ?>
                            <input type="submit" name="add" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" value="Thêm Loại Trang Sức">
                        <?php } ?>
                    </form>
                </div>
                <!-- Phần cột phải -->
                <div class="col-span-1">
                    <?php
                    $query = 'SELECT * FROM loaitrangsuc';
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    ?>
                    <h3 class="text-center text-info">Các loại trang sức có trong dữ liệu</h3>
                    <div class="account-list max-h-500 overflow-y-scroll w-900">
                        <table class="table-auto" id="data-table">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Mã Loại Trang Sức</th>
                                    <th class="px-4 py-2">Tên Loại Trang Sức</th>
                                    <th class="px-4 py-2">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <tr class="bg-white hover:bg-gray-100 transition duration-300">
                                        <td class="border px-4 py-2"><?= $row['MaLoaiTrangSuc']; ?></td>
                                        <td class="border px-4 py-2"><?= $row['TenLoaiTrangSuc']; ?></td>
                                        <td class="border px-4 py-2">
                                            <div class="flex flex-col">
                                                <a href="details_lts.php?details=<?= $row['MaLoaiTrangSuc']; ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded mb-2 text-sm">Xem chi tiết</a>
                                                <a href="action_loaits.php?delete=<?= $row['MaLoaiTrangSuc']; ?>" onclick="return confirm('Bạn có chắc là muốn xóa?');" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded mb-2 text-sm">Xóa</a>
                                                <a href="loaitrangsuc.php?edit=<?= $row['MaLoaiTrangSuc']; ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded text-sm">Chỉnh sửa</a>
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

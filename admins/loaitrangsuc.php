<?php
include "config.php";
include 'action_loaits.php';
?>
<?php include 'admin_header.php' ?>
<title>Loại Trang Sức</title>
    <div class="p-4 sm:ml-60">
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

            <div class="grid grid-cols-12 gap-4">
                <!-- Phần cột trái -->
                <div class="col-span-6">
                    <h3 class="text-center text-info text-xs font-medium text-gray-500 uppercase tracking-wider">Thêm nhà cung cấp</h3>
                    <form action="action_loaits.php" method="post" enctype="multipart/form-data" class="mt-4">
                        <div class="mb-4">
                            <input type="hidden" name="maloaitrangsuc" value="<?= $maloaitrangsuc; ?>">
                            <input type="text" name="tenloaitrangsuc" value="<?= $tenloaitrangsuc; ?>" class="border rounded-lg px-4 py-2 w-full text-left text-xs font-medium text-gray-500 uppercase tracking-wider" placeholder="Nhập tên loại trang sức" required>
                        </div>
                        <?php if ($maloaitrangsuc == true) { ?>
                            <input type="submit" name="update" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded" value="Cập Nhập">
                        <?php } else { ?>
                            <input type="submit" name="add" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" value="Thêm Loại Trang Sức">
                        <?php } ?>
                    </form>
                </div>
                <!-- Phần cột phải -->
                <div class="col-span-6">
                    <?php
                    $query = 'SELECT * FROM loaitrangsuc';
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    ?>
                    <h3 class="text-center text-xs font-medium text-gray-500 uppercase tracking-wider pr-10">Các loại trang sức có trong dữ liệu</h3>
                    <div class="account-list max-h-500 overflow-y-scroll w-900">
                        <table>
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider ">Mã Loại Trang Sức</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tên Loại Trang Sức</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <tr class="bg-white hover:bg-gray-100 transition duration-300">
                                        <td class="border px-6 py-3"><?= $row['MaLoaiTrangSuc']; ?></td>
                                        <td class="border px-6 py-3"><?= $row['TenLoaiTrangSuc']; ?></td>
                                        <td class="border px-6 py-3">
                                            <div class="flex flex-col">
                                            <a href="loaitrangsuc.php?edit=<?= $row['MaLoaiTrangSuc']; ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded text-sm mb-2">Chỉnh sửa</a>
                                            <a href="action_loaits.php?delete=<?= $row['MaLoaiTrangSuc']; ?>" onclick="return confirm('Bạn có chắc là muốn xóa?');" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-sm mb-2">Xóa</a>
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
    <?php include 'admin_footer.php' ?>

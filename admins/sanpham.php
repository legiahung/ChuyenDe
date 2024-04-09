<?php
include "config.php";
include 'action_sanpham.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Sản Phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
</head>

<body class="bg-white">
    <div class="container mx-auto">
        <div class="container-fluid">
            <div class="flex justify-center">
                <div class="w-10/12">
                    <h3 class="text-center text-dark mt-2">Thông Tin Sản Phẩm</h3>
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

            <div>
                <!-- Phần trên -->
                <div>
                    <h3 class="text-center text-info">Thêm Sản Phẩm</h3>
                    <form action="action_sanpham.php" method="post" enctype="multipart/form-data" class="mt-4">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        <div class="mb-4">
                            <input type="text" name="name" value="<?= $name; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập Tên Sản Phẩm" required>
                        </div>
                        <div class="mb-4">
                            <select name="id_lts" class="border rounded-lg px-4 py-2 w-full" required>
                                <option value="">Chọn loại trang sức</option>
                                <?php
                                $query_lts = "SELECT * FROM loaitrangsuc";
                                $result_lts = $conn->query($query_lts);
                                while ($row_lts = $result_lts->fetch_assoc()) {
                                    $idlts = $row_lts['MaLoaiTrangSuc'];
                                    $tenlts = $row_lts['TenLoaiTrangSuc'];
                                    $selected = ($id_lts == $idlts) ? "selected" : "";
                                    echo "<option value=\"$idlts\" $selected>$tenlts</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <input type="number" name="giaban" value="<?= $giaban; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập Giá Sản Phẩm" required>
                        </div>
                        <div class="mb-4">
                            <select name="id_ncc" class="border rounded-lg px-4 py-2 w-full" required>
                                <option value="">Chọn Nhà Cung Cấp</option>
                                <?php
                                $query_ncc = "SELECT * FROM nhacungcap";
                                $result_ncc = $conn->query($query_ncc);
                                while ($row_ncc = $result_ncc->fetch_assoc()) {
                                    $idncc = $row_ncc['MaNhaCungCap'];
                                    $tenncc = $row_ncc['TenNhaCungCap'];
                                    $selected = ($id_ncc == $idncc) ? "selected" : "";
                                    echo "<option value=\"$idncc\" $selected>$tenncc</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="mota" value="<?= $mota; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập Mô Tả" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="soluong" value="<?= $soluong; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập Số Lượng" required>
                        </div>
                        <div class="mb-4">
                            <input type="hidden" name="oldimage" value="<?= $photo; ?>">
                            <input type="file" name="image" class="border rounded-lg px-4 py-2 w-full">
                            <img src="<?= $photo; ?>" width="120" class="rounded-lg mt-2">
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

                <!-- Phần dưới -->
                <div>
                    <?php
                    $query = 'SELECT u.*, lts.TenLoaiTrangSuc, ncc.TenNhaCungCap  
                    FROM sanpham u
                    JOIN loaitrangsuc lts ON u.MaLoaiTrangSuc = lts.MaLoaiTrangSuc
                    JOIN nhacungcap ncc ON u.MaNhaCungCap = ncc.MaNhaCungCap';
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    ?>
                    <h3 class="text-center text-info">Các Sản Phẩm Có Trong Dữ Liệu</h3>
                    <div class="account-list max-h-500 overflow-y-scroll w-900">
                        <table class="table-auto" id="data-table">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3">Mã Sản Phẩm</th>
                                    <th class="px-6 py-3">Ảnh</th>
                                    <th class="px-6 py-3">Tên Sản Phẩm</th>
                                    <th class="px-6 py-3">Tên Loại Trang Sức</th>
                                    <th class="px-6 py-3">Giá Bán</th>
                                    <th class="px-6 py-3">Tên Nhà Cung Cấp</th>
                                    <th class="px-6 py-3">Mô Tả</th>
                                    <th class="px-6 py-3">Số Lượng</th>
                                    <th class="px-6 py-3">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <tr class="bg-white hover:bg-gray-100 transition duration-300">
                                        <td class="border px-6 py-3"><?= $row['MaSanPham']; ?></td>
                                        <td><img src="<?= $row['Anh']; ?>" width="120" class="rounded-lg mt-2"></td>
                                        <td class="border px-6 py-3"><?= $row['TenSanPham']; ?></td>
                                        <td class="border px-6 py-3"><?= $row['TenLoaiTrangSuc']; ?></td>
                                        <td class="border px-6 py-3"><?= $row['GiaBan']; ?></td>
                                        <td class="border px-6 py-3"><?= $row['TenNhaCungCap']; ?></td>
                                        <td class="border px-6 py-3"><?= $row['MoTa']; ?></td>
                                        <td class="border px-6 py-3"><?= $row['SoLuong']; ?></td>
                                        <td class="border px-6 py-3">
                                            <div class="flex flex-col">
                                                <a href="action_sanpham.php?delete=<?= $row['MaSanPham']; ?>" onclick="return confirm('Bạn có chắc là muốn xóa?');" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded mb-2 text-sm">Xóa</a>
                                                <a href="sanpham.php?edit=<?= $row['MaSanPham']; ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded text-sm">Chỉnh sửa</a>
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
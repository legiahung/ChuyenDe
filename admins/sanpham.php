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
</head>

<body class="bg-white">
    <aside id="sidebarr" class="fixed top-0 left-0  h-screen transition-transform -translate-x-full sm:translate-x-0">
        <div class="flex flex-col items-center z-40 w-60 h-full overflow-hidden text-gray-400 bg-gray-900 rounded">
            <a class="flex items-center w-full px-3 mt-3" href="#">
                <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
                </svg>
                <span class="ml-2 text-sm font-bold">Admin</span>
            </a>
            <div class="w-full px-2">
                <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="taikhoan_khachhang.php">
                        <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                        </svg>
                        <span class="ml-2 text-sm font-medium">Thông Tin Khách Hàng</span>
                    </a>
                </div>
                <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg  hover:text-gray-300 focus:text-gray-300 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline">
                            <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                            <span class="ml-2 text-sm font-medium flex-1">Quản Lý Nhân Sự</span>
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1 text-gray-400">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                            <div class="px-2 py-2 bg-gray-900 rounded-md shadow text-gray-400 dark-mode:bg-gray-800">
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-300 focus:text-gray-300 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="phongban.php">Phòng Ban</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-300 focus:text-gray-300 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="bophan.php">Bộ Phận</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-300 focus:text-gray-300 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="taikhoan_nhanvien.php">Thông tin Nhân Viên</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center w-full mt-2 border-t border-gray-700">
                    <a class="relative flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                        <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                        <span class="ml-2 text-sm font-medium">Messages</span>
                        <span class="absolute top-0 left-0 w-2 h-2 mt-2 ml-2 bg-indigo-500 rounded-full"></span>
                    </a>
                </div>
                <!-- ------------------------- -->
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg  hover:text-gray-300 focus:text-gray-300 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline">
                        <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                        <span class="ml-2 text-sm font-medium flex-1">Sản Phẩm</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1 text-gray-400">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                        <div class="px-2 py-2 bg-gray-900 rounded-md shadow text-gray-400 dark-mode:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-300 focus:text-gray-300 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="loaitrangsuc.php">Loại Trang Sức</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-300 focus:text-gray-300 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="sanpham.php">Danh Sách Sản Phẩm</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-300 focus:text-gray-300 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="nhacungcap.php">Nhà Cung Cấp</a>
                        </div>
                    </div>
                </div>
                <!-- --------------- -->
            </div>
            <a class="flex items-center justify-center w-full h-16 mt-auto bg-gray-800 hover:bg-gray-700 hover:text-gray-300" href="#">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="ml-2 text-sm font-medium">Account</span>
            </a>
        </div>
    </aside>

    <div class="p-4 sm:ml-60">
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
                            <input type="hidden" name="oldimage2" value="<?= $photo2; ?>">
                            <input type="file" name="image2" class="border rounded-lg px-4 py-2 w-full">
                            <img src="<?= $photo2; ?>" width="120" class="rounded-lg mt-2">
                        </div>
                        <div class="mb-4">
                            <input type="hidden" name="oldimage3" value="<?= $photo3; ?>">
                            <input type="file" name="image3" class="border rounded-lg px-4 py-2 w-full">
                            <img src="<?= $photo3; ?>" width="120" class="rounded-lg mt-2">
                        </div>
                        <div class="mb-4">
                            <?php if ($id == true) { ?>
                                <input type="submit" name="update" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded" value="Cập nhập">
                            <?php } else { ?>
                                <input type="submit" name="add" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" value="Thêm Sản Phẩm">
                            <?php } ?>
                        </div>
                    </form>
                </div>

                <div>
                    <!-- Danh sách sản phẩm -->
                    <div>
                        <?php
                        // Truy vấn danh sách sản phẩm
                        $query = 'SELECT u.*, lts.TenLoaiTrangSuc, ncc.TenNhaCungCap  
                                FROM sanpham u
                                JOIN loaitrangsuc lts ON u.MaLoaiTrangSuc = lts.MaLoaiTrangSuc
                                JOIN nhacungcap ncc ON u.MaNhaCungCap = ncc.MaNhaCungCap
                                ORDER BY lts.TenLoaiTrangSuc';
                        $stmt = $conn->prepare($query);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        ?>
                        <!-- Bảng danh sách sản phẩm -->
                        <div class="account-list max-h-500 overflow-y-scroll w-900">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3">Mã Sản Phẩm</th>
                                        <th class="px-6 py-3">Ảnh</th>
                                        <th class="px-6 py-3">Ảnh2</th>
                                        <th class="px-6 py-3">Ảnh3</th>
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
                                            <td><img src="<?= $row['Anh']; ?>" class="rounded-lg mt-2"></td>
                                            <td><img src="<?= $row['Anh2']; ?>" class="rounded-lg mt-2"></td>
                                            <td><img src="<?= $row['Anh3']; ?>" class="rounded-lg mt-2"></td>
                                            <td class="border px-6 py-3"><?= $row['TenSanPham']; ?></td>
                                            <td class="border px-6 py-3"><?= $row['TenLoaiTrangSuc']; ?></td>
                                            <td class="border px-6 py-3"><?= $row['GiaBan']; ?> ₫</td>
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
    </div>

    <!-- JavaScript for closing the sidebar -->
    <script>
        // Xử lý sự kiện click để đóng sidebar
        document.getElementById('close-btn').addEventListener('click', function() {
            // Ẩn thông báo
            document.getElementById('alert-message').style.display = 'none';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</body>

</html>
<?php
include "config.php";
include 'action_nhanvien.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Tài Khoản Nhân Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
</head>

<body class="bg-white">
    <div class="flex flex-col items-center z-40 w-60 fixed top-0 left-0 h-full overflow-hidden text-indigo-300 bg-indigo-900 rounded-t-lg">
        <a class="flex items-center w-full px-3 mt-3" href="#">
            <svg class="w-8 h-8 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span class="ml-2 text-sm font-bold">Home</span>
        </a>
        <div class="w-full px-2">
            <div class="flex flex-col items-center w-full mt-3 border-t border-gray-50">
                <a class="flex items-center w-full h-12 px-3 mt-2 rounded-lg hover:bg-indigo-700" href="taikhoan_khachhang.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                    </svg>

                    <span class="ml-2 text-sm font-bold">Thông Tin Khách Hàng</span>
                </a>
                <button type="button" class="flex items-center w-full h-12 px-3 mt-2 rounded-lg hover:bg-indigo-700" aria-controls="dropdown-info" data-collapse-toggle="dropdown-info">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>

                    <span class="flex-1 ml-2 text-sm font-bold text-left whitespace-nowrap" sidebar-toggle-item>Quản Lý Nhân Sự</span>
                    <svg sidebar-toggle-item class="w-6 h-6 text-indigo-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-info" class="hidden w-full">
                    <li>
                        <a href="phongban.php" class="flex items-center w-full p-2 text-sm font-medium rounded-lg hover:bg-indigo-700 pl-11">Phòng Ban</a>
                    </li>
                    <li>
                        <a href="bophan.php" class="flex items-center w-full p-2 text-sm font-medium rounded-lg hover:bg-indigo-700 pl-11">Bộ Phận</a>
                    </li>
                    <li>
                        <a href="taikhoan_nhanvien.php" class="flex items-center w-full p-2 text-sm font-medium rounded-lg hover:bg-indigo-700 pl-11">Thông Tin Nhân Viên</a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col items-center w-full mt-2 border-t border-gray-50">
                <button type="button" class="flex items-center w-full h-12 px-3 mt-2 rounded-lg hover:bg-indigo-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                    <span class="flex-1 ml-2 text-sm font-bold text-left whitespace-nowrap" sidebar-toggle-item>Sản Phẩm</span>
                    <svg sidebar-toggle-item class="w-6 h-6 text-indigo-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden w-full">
                    <li>
                        <a href="sanpham.php" class="flex items-center w-full p-2 text-sm font-medium rounded-lg hover:bg-indigo-700 pl-11">Danh Sách Sản Phẩm</a>
                    </li>
                    <li>
                        <a href="loaitrangsuc.php" class="flex items-center w-full p-2 text-sm font-medium rounded-lg hover:bg-indigo-700 pl-11">Loại Trang Sức</a>
                    </li>
                    <li>
                        <a href="nhacungcap.php" class="flex items-center w-full p-2 text-sm font-medium rounded-lg hover:bg-indigo-700 pl-11">Nhà Cung Cấp</a>
                    </li>
                </ul>
                <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-indigo-700" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                    </svg>
                    <span class="ml-2 text-sm font-bold">Quản Lý Đơn Hàng</span>
                </a>
            </div>
        </div>
        <a class="flex items-center justify-center w-full h-16 mt-auto bg-indigo-800 hover:bg-indigo-700" href="">
            <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="ml-2 text-sm font-bold">Tài Khoản</span>
        </a>
    </div>

    <div class="p-4 sm:ml-60">
        <div class="container-fluid">
            <div class="flex justify-center">
                <div class="w-10/12">
                    <h3 class="text-center text-dark mt-2">Thông Tin Tài Khoản Nhân Viên</h3>
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
                <div>
                    <h3 class="text-center text-info">Thêm Tài Khoản Nhân Viên</h3>
                    <form action="action_nhanvien.php" method="post" enctype="multipart/form-data" class="mt-4">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        <div class="mb-4">
                            <input type="text" name="name" value="<?= $name; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập Tên Nhân Viên" required>
                        </div>
                        <div class="mb-4">
                            <select name="gioitinh" class="border rounded-lg px-4 py-2 w-full" required>
                                <option value="">Chọn giới tính</option>
                                <option value="0" <?= ($gioitinh == '0') ? 'selected' : ''; ?>>Nam</option>
                                <option value="1" <?= ($gioitinh == '1') ? 'selected' : ''; ?>>Nữ</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <input type="date" name="ngaysinh" value="<?= $ngaysinh; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập ngày sinh" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="diachi" value="<?= $diachi; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập Địa Chỉ" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="sodienthoai" value="<?= $sodienthoai; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập Số Điện Thoại" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="email" value="<?= $email; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập Email" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="pass" value="<?= $pass; ?>" class="border rounded-lg px-4 py-2 w-full" placeholder="Nhập Mật Khẩu" required>
                        </div>
                        <div class="mb-4">
                            <select name="id_bp" class="border rounded-lg px-4 py-2 w-full" required>
                                <option value="">Chọn bộ phận</option>
                                <?php
                                $query_bp = "SELECT * FROM bophan";
                                $result_bp = $conn->query($query_bp);
                                while ($row_bp = $result_bp->fetch_assoc()) {
                                    $idbp = $row_bp['MaBoPhan'];
                                    $tenbp = $row_bp['TenBoPhan'];
                                    $selected = ($id_bp == $idbp) ? "selected" : "";
                                    echo "<option value=\"$idbp\" $selected>$tenbp</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <select name="id_pb" class="border rounded-lg px-4 py-2 w-full" required>
                                <option value="">Chọn phòng ban</option>
                                <?php
                                $query_pb = "SELECT * FROM phongban";
                                $result_pb = $conn->query($query_pb);
                                while ($row_pb = $result_pb->fetch_assoc()) {
                                    $idpb = $row_pb['MaPhongBan'];
                                    $tenpb = $row_pb['TenPhongBan'];
                                    $selected = ($id_pb == $idpb) ? "selected" : "";
                                    echo "<option value=\"$idpb\" $selected>$tenpb</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <!-- <div class="mb-4">
                            <input type="hidden" name="oldimage" value="<?= $photo; ?>">
                            <input type="file" name="image" class="border rounded-lg px-4 py-2 w-full">
                            <img src="<?= $photo; ?>" width="120" class="rounded-lg mt-2">
                        </div> -->
                        
                        <div class="mb-4">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                </div>
                                <input id="dropzone-file" name="image" type="file" class="hidden" />
                                <input type="hidden" name="oldimage" value="<?= $photo; ?>">
                            </label>
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
                <div>
                    <?php
                    $query = 'SELECT u.*, bp.TenBoPhan, pb.TenPhongBan  
                    FROM taikhoannhanvien u
                    JOIN bophan bp ON u.MaBoPhan = bp.MaBoPhan
                    JOIN phongban pb ON u.MaPhongBan = pb.MaPhongBan';
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    ?>
                    <h3 class="text-center text-info">Các bộ phận có trong dữ liệu</h3>
                    <div class="account-list max-h-500 overflow-y-scroll w-900">
                        <table class="table-auto" id="data-table">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3">Mã Nhân Viên</th>
                                    <th class="px-6 py-3">Ảnh</th>
                                    <th class="px-6 py-3">Tên Nhân Viên</th>
                                    <th class="px-6 py-3">Giới Tính</th>
                                    <th class="px-6 py-3">Ngày Sinh</th>
                                    <th class="px-6 py-3">Địa Chỉ</th>
                                    <th class="px-6 py-3">Số Điện Thoại</th>
                                    <th class="px-6 py-3">Email</th>
                                    <th class="px-6 py-3">Mật Khẩu</th>
                                    <th class="px-6 py-3">Phòng Ban</th>
                                    <th class="px-6 py-3">Bộ Phận</th>
                                    <th class="px-6 py-3">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()) {
                                    $gioitinh = ($row['GioiTinh'] == 0) ? 'Nam' : 'Nữ';
                                ?>
                                    <tr class="bg-white hover:bg-gray-100 transition duration-300">
                                        <td class="border px-6 py-3"><?= $row['MaNhanVien']; ?></td>
                                        <td><img src="<?= $row['Anh']; ?>" width="120" class="rounded-lg mt-2"></td>
                                        <td class="border px-6 py-3"><?= $row['TenNhanVien']; ?></td>
                                        <td class="border px-6 py-3"><?= $gioitinh; ?></td>
                                        <td class="border px-6 py-3"><?= $row['NgaySinh']; ?></td>
                                        <td class="border px-6 py-3"><?= $row['DiaChi']; ?></td>
                                        <td class="border px-6 py-3"><?= $row['SoDienThoai']; ?></td>
                                        <td class="border px-6 py-3"><?= $row['Email']; ?></td>
                                        <td class="border px-6 py-3"><?= $row['MatKhau']; ?></td>
                                        <td class="border px-6 py-3"><?= $row['TenPhongBan']; ?></td>
                                        <td class="border px-6 py-3"><?= $row['TenBoPhan']; ?></td>
                                        <td class="border px-6 py-3">
                                            <div class="flex flex-col">
                                                <a href="taikhoan_nhanvien.php?edit=<?= $row['MaNhanVien']; ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded text-sm mb-2">Chỉnh sửa</a>
                                                <a href="action_nhanvien.php?delete=<?= $row['MaNhanVien']; ?>" onclick="return confirm('Bạn có chắc là muốn xóa?');" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded mb-2 text-sm">Xóa</a>
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
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</body>

</html>
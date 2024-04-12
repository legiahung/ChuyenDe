<?php
include "config.php";
include 'action_sanpham.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Thêm CSS để điều chỉnh kích thước của sidebar */
        @media (min-width: 768px) {

            /* Khi màn hình có độ rộng tối thiểu là 768px, sidebar sẽ có chiều rộng mở rộng */
            .expanded-sidebar {
                width: 200px;
            }
        }

        /* Class để điều chỉnh kích thước của sidebar khi nhỏ */
        .small-sidebar {
            width: 64px;
        }

        /* .small-sidebar span {
            display: none;
        } */
    </style>
</head>

<body class="bg-gray-50">
    <div class="h-screen flex overflow-hidden">
        <!-- Sidebar -->
        <div class=" bg-gray-800 text-white flex-shrink-0 transition-width duration-300" id="sidebar">
            <!-- Nội dung của sidebar -->
            <ul class="pt-6">
                <li class="px-5 hidden md:block">
                    <div class="flex flex-row items-center h-8">
                        <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                    </div>
                </li>
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <svg width="2" height="2" viewBox="0 0 2 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="1.76447" height="1.76447" rx="0.693037" transform="matrix(0.736046 -0.725592 0.736046 0.725592 -0.298764 0.985712)" fill="#2196F3" />
                            </svg>

                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="8.46944" height="8.46944" rx="1.38607" transform="matrix(0.718252 -0.70805 0.718252 0.70805 -0.583082 5.4219)" fill="#2196F3" />
                            </svg>



                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Board</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg width="27" height="24" viewBox="0 0 27 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.3575 14.8764C24.9224 14.8764 26.9999 16.9189 26.9999 19.4389C26.9999 21.9574 24.9224 23.9999 22.3575 23.9999C19.794 23.9999 17.715 21.9574 17.715 19.4389C17.715 16.9189 19.794 14.8764 22.3575 14.8764ZM10.9124 17.4932C12.0359 17.4932 12.9479 18.3892 12.9479 19.493C12.9479 20.5953 12.0359 21.4928 10.9124 21.4928H2.03548C0.911992 21.4928 0 20.5953 0 19.493C0 18.3892 0.911992 17.4932 2.03548 17.4932H10.9124ZM4.64246 0C7.20744 0 9.28492 2.04252 9.28492 4.56104C9.28492 7.08104 7.20744 9.12356 4.64246 9.12356C2.07898 9.12356 0 7.08104 0 4.56104C0 2.04252 2.07898 0 4.64246 0ZM24.9659 2.56273C26.0879 2.56273 26.9999 3.45873 26.9999 4.56104C26.9999 5.66483 26.0879 6.56083 24.9659 6.56083H16.089C14.9655 6.56083 14.0535 5.66483 14.0535 4.56104C14.0535 3.45873 14.9655 2.56273 16.089 2.56273H24.9659Z" fill="#EFF2F4" />
                            </svg>

                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Messages</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Notifications</span>
                    </a>
                </li>
                <li class="px-5 hidden md:block">
                    <div class="flex flex-row items-center mt-5 h-8">
                        <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                    </div>
                </li>
                <li class="relative">
  <!-- Nút chính của dropdown -->
  <button
    class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4 focus:outline-none focus:bg-graydark dark:focus:bg-meta-4"
    @click="toggleDropdown"
  >
    <span>Forms</span>
    <!-- Mũi tên chỉ xuống -->
    <svg
      class="w-4 h-4 transition-transform duration-300 ease-in-out transform group-hover:rotate-180"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M19 9l-7 7-7-7"
      />
    </svg>
  </button>

  <!-- Dropdown Menu -->
  <ul
    class="absolute top-full left-0 z-10 hidden bg-white shadow-md rounded-md py-1 w-36"
    x-show="isOpen"
    @click.away="isOpen = false"
  >
    <li>
      <a
        href="form-elements.html"
        class="block px-4 py-2 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
        :class="{ 'text-white': page === 'formElements' }"
        >Form Elements</a
      >
    </li>
    <li>
      <a
        href="pro-form-elements.html"
        class="block px-4 py-2 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
        :class="{ 'text-white': page === 'proFormElements' }"
        >Pro Form Elements</a
      >
    </li>
    <li>
      <a
        href="form-layout.html"
        class="block px-4 py-2 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
        :class="{ 'text-white': page === 'formLayout' }"
        >Form Layout</a
      >
    </li>
    <li>
      <a
        href="pro-form-layout.html"
        class="block px-4 py-2 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
        :class="{ 'text-white': page === 'proFormLayout' }"
        >Pro Form Layout</a
      >
    </li>
  </ul>
</li>


                <li>
                    <a href="taikhoan_khachhang.php" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Nội dung chính -->
        <div class="flex-1 overflow-auto">
            <div class="p-6">
                <!-- Nội dung của trang web -->
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

                            <!-- Phần dưới -->
                            <div>
                                <?php
                                $query = 'SELECT u.*, lts.TenLoaiTrangSuc, ncc.TenNhaCungCap  
                    FROM sanpham u
                    JOIN loaitrangsuc lts ON u.MaLoaiTrangSuc = lts.MaLoaiTrangSuc
                    JOIN nhacungcap ncc ON u.MaNhaCungCap = ncc.MaNhaCungCap
                    ORDER BY lts.TenLoaiTrangSuc';
                                $stmt = $conn->prepare($query);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                ?>
                                <h3 class="text-center text-info">Các Sản Phẩm Có Trong Dữ Liệu</h3>
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
        </div>
    </div>

    <!-- Thêm mã JavaScript để xử lý sự kiện click -->
    <script>
        const sidebar = document.getElementById('sidebar');

        // Bắt sự kiện click vào sidebar để chuyển đổi giữa chế độ mở rộng và thu nhỏ
        sidebar.addEventListener('click', function() {
            // Kiểm tra xem sidebar có class 'expanded-sidebar' không
            if (sidebar.classList.contains('expanded-sidebar')) {
                // Nếu có, loại bỏ class này và thêm class 'small-sidebar' để thu nhỏ sidebar
                sidebar.classList.remove('expanded-sidebar');
                sidebar.classList.add('small-sidebar');
            } else {
                // Nếu không, loại bỏ class 'small-sidebar' và thêm class 'expanded-sidebar' để mở rộng sidebar
                sidebar.classList.remove('small-sidebar');
                sidebar.classList.add('expanded-sidebar');
            }
        });
    </script>
</body>

</html>
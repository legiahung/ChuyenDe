<?php

session_start();
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="icon" href="uploads/icon-logo.jpg" class="w-48 h-48" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body class="bg-white">
    <div class="flex flex-col items-center z-40 w-60 fixed top-0 left-0 h-full overflow-hidden text-indigo-300 bg-indigo-900 rounded-t-lg">
        <a class="flex items-center w-full mt-3 pl-4 " href="home_admin.php">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>

            <span class="ml-1 text-xl font-bold">Home</span>
        </a>
        <div class="w-full px-2">
            <?php
            // Kiểm tra nếu loại người dùng là Chủ Cửa Hàng
            if ($_SESSION['user_type'] === 'Chủ Cửa Hàng') {
            ?>
                <a class="flex items-center w-full h-12 px-3 mt-2 rounded-lg hover:bg-indigo-700" href="taikhoan_nhanvien.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                    </svg>
                    <span class="ml-2 text-sm font-bold">Thông Tin Nhân Viên</span>
                </a>

            <?php
            }
            ?>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded-lg hover:bg-indigo-700" href="taikhoan_khachhang.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                </svg>
                <span class="ml-2 text-sm font-bold">Thông Tin Khách Hàng</span>
            </a>
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
                <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-indigo-700" href="quanlyhoadon.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                    </svg>
                    <span class="ml-2 text-sm font-bold">Quản Lý Đơn Hàng</span>
                </a>
                <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-indigo-700" href="../authentication/dangxuat.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                    </svg>
                    <span class="ml-2 text-sm font-bold">Đăng Xuất</span>
                </a>
            </div>
        </div>
        <!-- <a class="flex items-center justify-center w-full h-16 mt-auto bg-indigo-800 hover:bg-indigo-700" href="">
            <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="ml-2 text-sm font-bold">Tài Khoản</span>
        </a> -->
        <!-- <div class="inline-block">
            <?php
            $sql_countHD = "SELECT * FROM taikhoannhanvien 
            WHERE MaNhanVien = '{$_SESSION['MaNhanVien']}'";
            $result = mysqli_query($conn, $sql_countHD);
            $row = mysqli_fetch_assoc($result); // Sử dụng mysqli_fetch_assoc thay vì mysqli_fetch_row
            ?>
            <button class="py-2.5 px-5 text-xs bg-indigo-500 text-white rounded-full cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-indigo-700 " href="#" data-tooltip-target="popover-footer"> Tài Khoản </button>
            <div class="w-52 inline-block absolute mb-2 bottom-full left-1/2 -translate-x-1/2 z-10 bg-white rounded-xl shadow-md text-left invisible" role="tooltip" id="popover-footer">
                <div class="p-5 border-b border-gray-200 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <?php if (isset($row['Anh'])) : ?>
                            <img src="<?php echo $row['Anh']; ?>" alt="image" class="w-14 h-14 rounded-full">
                        <?php endif; ?>
                        <div class="block">
                            <h5 class="text-sm text-gray-900 font-medium mb-0"><?php echo isset($row['TenNhanVien']) ? $row['TenNhanVien'] : ''; ?></h5>
                            <span class="text-sm text-gray-500 font-normal"><?php echo isset($row['Email']) ? $row['Email'] : ''; ?></span>
                        </div>
                    </div>
                </div>
                <div class="py-5 px-5">
                    <ul class="block space-y-2">
                        <li class="flex items-center gap-3 text-sm text-gray-900">
                            <svg class="transition-none" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="transition-none" d="M15.2418 8.76873L10.8252 4.35207M4.34241 8.76873L8.75908 4.35207M6.45829 12.852C6.45829 12.852 7.39746 13.6854 8.12496 13.6854C8.85246 13.6854 9.79163 12.852 9.79163 12.852C9.79163 12.852 10.7308 13.6854 11.4583 13.6854C12.1858 13.6854 13.125 12.852 13.125 12.852M9.08336 4.67705L8.43336 4.02703C8.04169 3.63536 8.04169 3.00207 8.43336 2.6104L9.08336 1.96038C9.47502 1.56871 10.1084 1.56871 10.5 1.96038L11.15 2.6104C11.5417 3.00207 11.5417 3.63536 11.15 4.02703L10.5 4.67705C10.1084 5.06872 9.47502 5.06872 9.08336 4.67705ZM16 8.52708H16.9166C17.4666 8.52708 17.9166 8.97709 17.9166 9.52709V10.4437C17.9166 10.9937 17.4666 11.4438 16.9166 11.4438H16C15.45 11.4438 15 10.9937 15 10.4437V9.52709C15 8.97709 15.45 8.52708 16 8.52708ZM3.5833 8.52708H2.66662C2.11662 8.52708 1.66663 8.97709 1.66663 9.52709V10.4437C1.66663 10.9937 2.11662 11.4438 2.66662 11.4438H3.5833C4.1333 11.4438 4.58329 10.9937 4.58329 10.4437V9.52709C4.58329 8.97709 4.1333 8.52708 3.5833 8.52708ZM6.45829 12.7927C6.45829 12.7927 6.45829 14.4984 6.45829 16.1854C6.45829 16.971 6.45829 17.3639 6.70237 17.608C6.94645 17.852 7.33928 17.852 8.12496 17.852H11.4583C12.244 17.852 12.6368 17.852 12.8809 17.608C13.125 17.3639 13.125 16.971 13.125 16.1854C13.125 14.4984 13.125 12.7927 13.125 12.7927L9.79163 7.85203L6.45829 12.7927Z" stroke="#9CA3AF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg> <?php echo isset($row['TYPE_ADMIN']) ? $row['TYPE_ADMIN'] : ''; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->

    </div>
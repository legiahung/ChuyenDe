<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="icon" href="uploads/icon-logo.jpg" class="w-48 h-48" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

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
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</body>

</html>
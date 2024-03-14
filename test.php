<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar with Dropdown - Tailwind CSS</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <nav class="bg-gray-800 text-white">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center py-4">
        <!-- Brand logo -->
        <div class="flex items-center">
          <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Logo">
          <span class="ml-2 font-semibold">Brand</span>
        </div>
        <!-- Navbar links -->
        <div class="hidden md:block">
          <ul class="flex space-x-6">
            <li class="relative">
              <a href="#" class="hover:text-gray-300">Sản phẩm</a>
              <div class="absolute hidden bg-white py-2 w-40 shadow-lg rounded-md mt-2">
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">Loại trang sức</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">Nhà cung cấp</a>
              </div>
            </li>
            <li>
              <a href="#" class="hover:text-gray-300">Quản lý nhân sự</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</body>
</html>

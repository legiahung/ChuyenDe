<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang Chủ</title>
  <link rel="icon" href="uploads/icon-logo.jpg" class="w-48 h-48" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <style>
    .swiper-wrapper {
      width: 100%;
      height: max-content !important;
      padding-bottom: 64px !important;
      -webkit-transition-timing-function: linear !important;
      transition-timing-function: linear !important;
      position: relative;
    }

    .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
      background: #EEC900 !important;
    }

    .hover-trigger:hover img:first-child {
      opacity: 0;
    }

    .hover-trigger:hover img:last-child {
      opacity: 1;
    }
  </style>
</head>
<body>
  <nav>
    <div id="nav-top" class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
      <a href="home.php" class="flex items-center space-x-1 ">
        <img src="uploads/icon-logo.jpg" class="h-8" alt="Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Tiệm Vàng Kim Chung</span>
      </a>
      <div class="flex items-center justify-between">
        <div class="pt-2 relative mx-auto text-gray-600">
          <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Search">
          <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
              <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
          </button>
        </div>
        <div class="flex items-center">
          <a href="#" class="mx-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
          </a>
          <a href="#" class="mx-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div id="nav-bottom" class="max-w-screen-xl px-1 py-3 mx-auto">
      <button id="navbar-toggle" data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-900 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none" aria-controls="navbar-dropdown" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="items-center hidden w-full md:block md:w-auto" id="navbar-dropdown">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border-t-4 border-yellow-300 md:flex-row md:space-x-8 md:mt-0">
          <li class="mr-4">
            <a href="home.php" class="block py-2 pl-3 pr-4 text-gray-900 font-semibold border-b-2 border-transparent hover:border-yellow-300">Trang Chủ</a>

          </li>
          <li class="relative group">
            <button id="dropdownNavbarLink" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-semibold border-b-2 border-transparent hover:border-yellow-300">
              Trang Sức
              <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
              </svg>
            </button>

            <div id="dropdownNavbar" class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-44">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 font-semibold">Hoa Tai</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 font-semibold">Charm</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 font-semibold">Dây Chuyền</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 font-semibold">Nhẫn</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 font-semibold">Vòng Tay</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="mr-4">
            <a href="doitien.php" class="block py-2 pl-3 pr-4 text-gray-900 font-semibold border-b-2 border-transparent hover:border-yellow-300">Đổi Tiền Tệ</a>
          </li>
          <li class="mr-4">
            <a href="giavang.php" class="block py-2 pl-3 pr-4 text-gray-900 font-semibold border-b-2 border-transparent hover:border-yellow-300">Giá Vàng Hiện Nay</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section>
  <div class="flex flex-col md:flex-row items-center md:items-start py-5 px-10">
    <div class="md:w-1/3 md:pt-20 text-center">
      <h3 class="text-xl font-bold md:text-2xl ">XEM NGAY BỘ SƯU TẬP</h3>
    </div>
    <div class="w-full md:w-2/3 mt-5 md:mt-0">
      <div class="flex flex-wrap justify-center md:justify-around">
        <div class="border-2 p-4">
          <a href="#">
            <img class="card-img-top w-32 h-32 object-cover rounded-full mx-auto mb-2 transition duration-300 transform hover:scale-110" src="uploads/theme-hoatai.jpg" alt="">
            <div class="text-center">
              <span class="underline-offset-4 border-b-2 border-yellow-500 font-medium ">Hoa Tai</span>
            </div>
          </a>
        </div>
        <div class="border-2 p-4">
          <a href="#">
            <img class="w-32 h-32 object-cover rounded-full mx-auto mb-2 transition duration-300 transform hover:scale-110" src="uploads/theme-charm.jpg" alt="">
            <div class="text-center">
              <span class="underline-offset-4 border-b-2 border-yellow-500 font-medium">Charm</span>
            </div>
          </a>
        </div>
        <div class="border-2 p-4">
          <a href="#">
            <img class="w-32 h-32 object-cover rounded-full mx-auto mb-2 transition duration-300 transform hover:scale-110" src="uploads/theme-daychuyen.jpg" alt="">
            <div class="text-center">
              <span class="underline-offset-4 border-b-2 border-yellow-400 font-medium">Dây Chuyền</span>
            </div>
          </a>
        </div>
        <div class="border-2 p-4">
          <a href="#">
            <img class="w-32 h-32 object-cover rounded-full mx-auto mb-2 transition duration-300 transform hover:scale-110" src="uploads/theme-nhan.jpg" alt="">
            <div class="text-center">
              <span class="underline-offset-4 border-b-2 border-yellow-400 font-medium">Nhẫn</span>
            </div>
          </a>
        </div>
        <div class="border-2 p-4">
          <a href="#">
            <img class="w-32 h-32 object-cover rounded-full mx-auto mb-2 transition duration-300 transform hover:scale-110" src="uploads/theme-vongtay.jpg" alt="">
            <div class="text-center">
              <span class="underline-offset-4 border-b-2 border-yellow-400 font-medium">Vòng Tay</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  </section>
  <section>
  <div class="w-full relative px-10">
    <div class="swiper progress-slide-carousel swiper-container relative">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="h-96 flex justify-center items-center">
            <img class="" src="uploads/banner1.jpg">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="h-96 flex justify-center items-center">
            <img class="" src="uploads/banner2.png">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="h-96 flex justify-center items-center">
            <img class="" src="uploads/banner3.png">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="h-96 flex justify-center items-center">
            <img class="" src="uploads/banner4.png">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="h-96 flex justify-center items-center">
            <img class="" src="uploads/banner5.png">
          </div>
        </div>
      </div>
      <div class="swiper-pagination !bottom-2 !top-auto !w-80 right-0 mx-auto bg-gray-100"></div>
    </div>
  </div>
  </section>
  <section>
  <div class="pt-10">
    <h3 class="text-center font-bold text-2xl">CÁC SẢN PHẨM NỔI BẬT</h3>
    <div class="swiper centered-slide-carousel max-h-80 ">
      <div class="swiper-wrapper pb-16">
        <?php
        $query = "SELECT * FROM sanpham LIMIT 20";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $productTitle = $row['TenSanPham'];
            $productPrice = $row['GiaBan'];
            $productImage = $row['Anh'];
            $productImage2 = $row['Anh2'];
            $productId = $row['MaSanPham'];
        ?>
            <div class="swiper-slide  ">
              <div class="max-w-sm mx-auto relative">
                <div class="text-center items-center">
                  <a href="xemchitiet.php?MaSanPham=<?= $productId ?>" class="hover-trigger relative block">
                    <img src="<?= $productImage ?>" class="object-contain w-96 h-52" alt="<?= $productTitle ?>">
                    <div class="absolute inset-0 opacity-0 hover:opacity-100 transition-opacity duration-300">
                      <img src="<?= $productImage2 ?>" class="object-contain w-96 h-52" alt="<?= $productTitle ?>">
                    </div>
                  </a>
                </div>
                <div class="text-center items-center">
                  <h3 class="truncate text-sm"><a href="xemchitiet.php?MaSanPham=<?= $productId ?>"><?= $productTitle ?></a></h3>
                  <p><?= number_format($productPrice, 0, '.', ',') ?> đ</p>
                  <div>
                    <a href="xemchitiet.php" class="inline-block px-4 py-2 bg-gray-900 hover:bg-yellow-600 text-white rounded">Mua Ngay</a>
                  </div>
                </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo "Không tìm thấy sản phẩm.";
        }
        ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  </section>
  <section>
  <div class="pt-10">
    <div class="relative pb-6">
      <img src="uploads/bg_home_nhan.jpg" class="w-full h-full object-cover">
      <div class="absolute pt-24 pl-32 inset-0 flex items-start justify-start p-4">
        <p class="text-5xl font-bold">Nhẫn</p>
      </div>
    </div>
    <div class="flex flex-wrap justify-center">
      <?php
      $query = "SELECT * FROM sanpham WHERE MaLoaiTrangSuc = 1 LIMIT 5";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $productTitle = $row['TenSanPham'];
          $productPrice = $row['GiaBan'];
          $productImage = $row['Anh'];
          $productImage2 = $row['Anh2'];
          $productId = $row['MaSanPham'];
      ?>
          <div class="flex justify-center w-1/5">
            <div class="max-w-sm mx-auto relative">
              <div class="text-center items-center">
                <a href="xemchitiet.php?MaSanPham=<?= $productId ?>" class="hover-trigger relative block">
                  <img src="<?= $productImage ?>" class="object-contain w-96 h-52" alt="<?= $productTitle ?>">
                  <div class="absolute inset-0 opacity-0 hover:opacity-100 transition-opacity duration-300">
                    <img src="<?= $productImage2 ?>" class="object-contain w-96 h-52" alt="<?= $productTitle ?>">
                  </div>
                </a>
              </div>
              <div class="text-center items-center">
                <h3 class="truncate text-sm"><a href="xemchitiet.php?MaSanPham=<?= $productId ?>"><?= $productTitle ?></a></h3>
                <p><?= number_format($productPrice, 0, '.', ',') ?> đ</p>
                <div>
                  <a href="xemchitiet.php" class="inline-block px-4 py-2 bg-gray-900 hover:bg-yellow-600 text-white rounded">Mua Ngay</a>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      } else {
        echo "Không tìm thấy sản phẩm.";
      }
      ?>
    </div>
  </div>
  </section>
  <section>
  <div class="pt-10">
    <div class="relative pb-6">
      <img src="uploads/bg_home_charm.jpg" class="w-full h-full object-cover">
      <div class="absolute pt-24 pl-32 inset-0 flex items-start justify-start p-4">
        <p class="text-5xl font-bold">Charm</p>
      </div>
    </div>
    <div class="flex flex-wrap justify-center">
      <?php
      $query = "SELECT * FROM sanpham WHERE MaLoaiTrangSuc = 2 LIMIT 5";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $productTitle = $row['TenSanPham'];
          $productPrice = $row['GiaBan'];
          $productImage = $row['Anh'];
          $productImage2 = $row['Anh2'];
          $productId = $row['MaSanPham'];
      ?>
          <div class="flex justify-center w-1/5">
            <div class="max-w-sm mx-auto relative">
              <div class="text-center items-center">
                <a href="xemchitiet.php?MaSanPham=<?= $productId ?>" class="hover-trigger relative block">
                  <img src="<?= $productImage ?>" class="object-contain w-96 h-52" alt="<?= $productTitle ?>">
                  <div class="absolute inset-0 opacity-0 hover:opacity-100 transition-opacity duration-300">
                    <img src="<?= $productImage2 ?>" class="object-contain w-96 h-52" alt="<?= $productTitle ?>">
                  </div>
                </a>
              </div>
              <div class="text-center items-center">
                <h3 class="truncate text-sm"><a href="xemchitiet.php?MaSanPham=<?= $productId ?>"><?= $productTitle ?></a></h3>
                <p><?= number_format($productPrice, 0, '.', ',') ?> đ</p>
                <div>
                  <a href="xemchitiet.php" class="inline-block px-4 py-2 bg-gray-900 hover:bg-yellow-600 text-white rounded shadow ">Mua Ngay</a>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      } else {
        echo "Không tìm thấy sản phẩm.";
      }
      ?>
    </div>
  </div>
  </section>
  <section>
  <div class="pt-10">
    <div class="relative pb-6">
      <img src="uploads/bg_home_daychuyen.jpg" class="w-full h-full object-cover">
      <div class="absolute pt-24 pl-32 inset-0 flex items-start justify-start p-4">
        <p class="text-5xl font-bold">Dây Chuyền</p>
      </div>
    </div>
    <div class="flex flex-wrap justify-center">
      <?php
      $query = "SELECT * FROM sanpham WHERE MaLoaiTrangSuc = 3 LIMIT 5";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $productTitle = $row['TenSanPham'];
          $productPrice = $row['GiaBan'];
          $productImage = $row['Anh'];
          $productImage2 = $row['Anh2'];
          $productId = $row['MaSanPham'];
      ?>
          <div class="flex justify-center w-1/5">
            <div class="max-w-sm mx-auto relative">
              <div class="text-center items-center">
                <a href="xemchitiet.php?MaSanPham=<?= $productId ?>" class="hover-trigger relative block">
                  <img src="<?= $productImage ?>" class="object-contain w-96 h-52" alt="<?= $productTitle ?>">
                  <div class="absolute inset-0 opacity-0 hover:opacity-100 transition-opacity duration-300">
                    <img src="<?= $productImage2 ?>" class="object-contain w-96 h-52" alt="<?= $productTitle ?>">
                  </div>
                </a>
              </div>
              <div class="text-center items-center">
                <h3 class="truncate text-sm"><a href="xemchitiet.php?MaSanPham=<?= $productId ?>"><?= $productTitle ?></a></h3>
                <p><?= number_format($productPrice, 0, '.', ',') ?> đ</p>
                <div>
                  <a href="xemchitiet.php" class="inline-block px-4 py-2 bg-gray-900 hover:bg-yellow-600 text-white rounded shadow ">Mua Ngay</a>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      } else {
        echo "Không tìm thấy sản phẩm.";
      }
      ?>
    </div>
  </div>
  </section>
  <section>
  <div class="pt-10">
    <div class="relative pb-6">
      <img src="uploads/bg_home_nhan.jpg" class="w-full h-full object-cover">
      <div class="absolute pt-24 pl-32 inset-0 flex items-start justify-start p-4">
        <p class="text-5xl font-bold">Nhẫn</p>
      </div>
    </div>
    <div class="flex flex-wrap justify-center">
      <?php
      $query = "SELECT * FROM sanpham WHERE MaLoaiTrangSuc = 4 LIMIT 5";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $productTitle = $row['TenSanPham'];
          $productPrice = $row['GiaBan'];
          $productImage = $row['Anh'];
          $productImage2 = $row['Anh2'];
          $productId = $row['MaSanPham'];
      ?>
          <div class="flex justify-center w-1/5">
            <div class="max-w-sm mx-auto relative">
              <div class="text-center items-center">
                <a href="xemchitiet.php?MaSanPham=<?= $productId ?>" class="hover-trigger relative block">
                  <img src="<?= $productImage ?>" class="object-contain w-96 h-52" alt="<?= $productTitle ?>">
                  <div class="absolute inset-0 opacity-0 hover:opacity-100 transition-opacity duration-300">
                    <img src="<?= $productImage2 ?>" class="object-contain w-96 h-52" alt="<?= $productTitle ?>">
                  </div>
                </a>
              </div>
              <div class="text-center items-center">
                <h3 class="truncate text-sm"><a href="xemchitiet.php?MaSanPham=<?= $productId ?>"><?= $productTitle ?></a></h3>
                <p><?= number_format($productPrice, 0, '.', ',') ?> đ</p>
                <div>
                  <a href="xemchitiet.php" class="inline-block px-4 py-2 bg-gray-900 hover:bg-yellow-600 text-white rounded shadow ">Mua Ngay</a>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      } else {
        echo "Không tìm thấy sản phẩm.";
      }
      ?>
    </div>
  </div>
  </section>
  <section>
  <div class="pt-10">
    <div class="relative pb-6">
      <img src="uploads/bg_home_vongtay.jpg" class="w-full h-full object-cover">
      <div class="absolute pt-24 pl-32 inset-0 flex items-start justify-start p-4">
        <p class="text-5xl font-bold">Vòng Tay</p>
      </div>
    </div>
    <div class="flex flex-wrap justify-center">
      <?php
      $query = "SELECT * FROM sanpham WHERE MaLoaiTrangSuc = 6 LIMIT 5";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $productTitle = $row['TenSanPham'];
          $productPrice = $row['GiaBan'];
          $productImage = $row['Anh'];
          $productImage2 = $row['Anh2'];
          $productId = $row['MaSanPham'];
      ?>
          <div class="flex justify-center w-1/5">
            <div class="max-w-sm mx-auto relative">
              <div class="text-center items-center">
                <a href="xemchitiet.php?MaSanPham=<?= $productId ?>" class="hover-trigger relative block">
                  <img src="<?= $productImage ?>" class="object-contain w-96 h-52" alt="<?= $productTitle ?>">
                  <div class="absolute inset-0 opacity-0 hover:opacity-100 transition-opacity duration-300">
                    <img src="<?= $productImage2 ?>" class="object-contain w-96 h-52" alt="<?= $productTitle ?>">
                  </div>
                </a>
              </div>
              <div class="text-center items-center">
                <h3 class="truncate text-sm"><a href="xemchitiet.php?MaSanPham=<?= $productId ?>"><?= $productTitle ?></a></h3>
                <p><?= number_format($productPrice, 0, '.', ',') ?> đ</p>
                <div>
                  <a href="xemchitiet.php" class="inline-block px-4 py-2 bg-gray-900 hover:bg-yellow-600 text-white rounded shadow ">Mua Ngay</a>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      } else {
        echo "Không tìm thấy sản phẩm.";
      }
      ?>
    </div>
  </div>
  </section>
  <section>
    <div class="border-b mb-6 mt-10">
      <h4 class="text-3xl pl-5 font-bold uppercase">Chính sách</h4>
    </div>

    <div class="flex flex-wrap ">
      <div class="w-full md:w-1/4 px-4">
        <div class="border rounded-lg overflow-hidden">
          <img src="uploads/cs1.jpg" class="w-full" alt="Chăm Sóc Khách Hàng">
          <div class="p-4 text-center">
            <h6 class="text-lg font-bold">Chăm Sóc Khách Hàng</h6>
            <p class="text-sm text-gray-600">Đội ngũ tư vấn chuyên nghiệp</p>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/4 px-4">
        <div class="border rounded-lg overflow-hidden">
          <img src="uploads/cs2.jpg" class="w-full" alt="Thanh toán dễ dàng">
          <div class="p-4 text-center">
            <h6 class="text-lg font-bold">Thanh toán dễ dàng</h6>
            <p class="text-sm text-gray-600">Nhiều phương thức thanh toán</p>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/4 px-4">
        <div class="border rounded-lg overflow-hidden">
          <img src="uploads/cs3.jpg" class="w-full" alt="Kiểm tra đơn hàng">
          <div class="p-4 text-center">
            <h6 class="text-lg font-bold">Kiểm tra đơn hàng</h6>
            <p class="text-sm text-gray-600">Kiểm tra dễ dàng</p>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/4 px-4">
        <div class="border rounded-lg overflow-hidden">
          <img src="uploads/cs4.jpg" class="w-full" alt="Vận chuyển an toàn">
          <div class="p-4 text-center">
            <h6 class="text-lg font-bold">Vận chuyển an toàn</h6>
            <p class="text-sm text-gray-600">Dịch vụ giao hàng tiện lợi</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    var swiper = new Swiper(".progress-slide-carousel", {
      loop: true,
      fraction: true,
      autoplay: {
        delay: 1200,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".progress-slide-carousel .swiper-pagination",
        type: "progressbar",
      },
    });
  </script>
  <script>
    var swiper = new Swiper(".centered-slide-carousel", {
      centeredSlides: true,
      paginationClickable: true,
      loop: true,
      spaceBetween: 30,
      slideToClickedSlide: true,
      pagination: {
        el: ".centered-slide-carousel .swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        1920: {
          slidesPerView: 7,
          spaceBetween: 10
        },
        1028: {
          slidesPerView: 5,
          spaceBetween: 10
        },
        990: {
          slidesPerView: 1,
          spaceBetween: 0
        }
      }
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const button = document.getElementById('navbar-toggle');
      const menu = document.getElementById('navbar-dropdown');

      const dropdownButton = document.getElementById('dropdownNavbarLink');
      const dropdownMenu = document.getElementById('dropdownNavbar');

      if (dropdownButton && dropdownMenu) {
        dropdownButton.addEventListener('mouseenter', () => {
          dropdownMenu.classList.remove('hidden');
        });

        dropdownButton.addEventListener('mouseleave', () => {
          dropdownMenu.classList.add('hidden');
        });

        dropdownMenu.addEventListener('mouseenter', () => {
          dropdownMenu.classList.remove('hidden');
        });

        dropdownMenu.addEventListener('mouseleave', () => {
          dropdownMenu.classList.add('hidden');
        });
      }
      if (button && menu) {
        button.addEventListener('click', function() {
          menu.classList.toggle('hidden');
        });
      }
    });
  </script>

</body>
</html>
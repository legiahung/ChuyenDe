<?php include 'header.php' ?>
<title>Trang chủ</title>
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
                      <a href="xemchitiet.php?MaSanPham=<?= $productId ?>" class="inline-block px-4 py-2 bg-gray-900 hover:bg-yellow-600 text-white rounded">Mua Ngay</a>
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
        <div class="absolute inset-0 flex items-start justify-start p-4 md:absolute md:pt-24 md:pl-32 ">
          <p class="md:text-5xl font-bold sm:text-xl">Nhẫn</p>
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
            <div class="md:flex md:flex-row md:justify-center w-full md:w-1/5">
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
                    <a href="xemchitiet.php?MaSanPham=<?= $productId ?>" class="inline-block px-4 py-2 bg-gray-900 hover:bg-yellow-600 text-white rounded">Mua Ngay</a>
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
        <div class="absolute inset-0 flex items-start justify-start p-4 md:absolute md:pt-24 md:pl-32 ">
          <p class="md:text-5xl font-bold sm:text-xl">Charm</p>
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
            <div class="md:flex md:flex-row md:justify-center w-full md:w-1/5">
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
                    <a href="xemchitiet.php?MaSanPham=<?= $productId ?>" class="inline-block px-4 py-2 bg-gray-900 hover:bg-yellow-600 text-white rounded shadow ">Mua Ngay</a>
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
        <div class="absolute inset-0 flex items-start justify-start p-4 md:absolute md:pt-24 md:pl-32 ">
          <p class="md:text-5xl font-bold sm:text-xl">Dây Chuyền</p>
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
            <div class="md:flex md:flex-row md:justify-center w-full md:w-1/5">
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
                    <a href="xemchitiet.php?MaSanPham=<?= $productId ?>" class="inline-block px-4 py-2 bg-gray-900 hover:bg-yellow-600 text-white rounded shadow ">Mua Ngay</a>
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
        <div class="absolute inset-0 flex items-start justify-start p-4 md:absolute md:pt-24 md:pl-32 ">
          <p class="md:text-5xl font-bold sm:text-xl">Nhẫn</p>
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
            <div class="md:flex md:flex-row md:justify-center w-full md:w-1/5">
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
                    <a href="xemchitiet.php?MaSanPham=<?= $productId ?>" class="inline-block px-4 py-2 bg-gray-900 hover:bg-yellow-600 text-white rounded shadow ">Mua Ngay</a>
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
        <div class="absolute inset-0 flex items-start justify-start p-4 md:absolute md:pt-24 md:pl-32 ">
          <p class="md:text-5xl font-bold sm:text-xl">Vòng Tay</p>
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
            <div class="md:flex md:flex-row md:justify-center w-full md:w-1/5">
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
                    <a href="xemchitiet.php?MaSanPham=<?= $productId ?>" class="inline-block px-4 py-2 bg-gray-900 hover:bg-yellow-600 text-white rounded shadow ">Mua Ngay</a>
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
          <img src="uploads/cs2.mt.jpg" class="w-full" alt="Thanh toán dễ dàng">
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
  
<?php include 'footer.php' ?>
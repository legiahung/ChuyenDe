<?php
include("../home/logIn_required.php");

if (!isset($_SESSION['MaKhachHang'])) {
    header("Location: ../authentication/dangnhap.php");
    exit();
}
include '../home/header.php';

$result = mysqli_query($conn, "SELECT * FROM taikhoankhachhang 
WHERE MaKhachHang = '{$_SESSION['MaKhachHang']}'");
?>
<title>Thông tin cá nhân</title>
<section class="bg-gray">
    <div class="container mx-auto">
        <h2 class="text-3xl font-semibold">Tài khoản của tôi</h2>
    </div>
</section>
<?php if (mysqli_num_rows($result) <> 0) : ?>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <section class="py-8">
            <div class="container mx-auto">
                <div class="flex">
                    <aside class="w-1/4 pr-8">
                        <nav class="list-none">
                            <a class="block py-2 px-4 text-white bg-blue-500 rounded mb-2" href="../home/thongtin.php"> Thông tin chung </a>
                            <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded mb-2" href="../home/dondathang.php"> Đơn hàng </a>
                            <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded mb-2" href="../home/caidatthongtin.php">Cài đặt thông tin</a>
                            <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded mb-2" href="../authentication/dangxuat.php">Đăng xuất</a>
                        </nav>
                    </aside>
                    <main class="w-3/4">
                        <article class="mb-6">
                            <div class="p-6 bg-white border rounded">
                                <div class="mb-4">
                                    <strong class="text-xl">
                                        <?php echo $row['TenKhachHang']; ?>
                                    </strong>
                                    <p class="text-gray-700">
                                        <?php echo $row['Email']; ?>
                                    </p>
                                </div>
                                <hr class="my-4">
                                <p class="text-gray-700">
                                    <span class="text-xl flex items-center">
                                        &nbsp;
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                        </svg>

                                        Địa chỉ của tôi: <?php echo $row['DiaChi']; ?>
                                    </span>
                                </p>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="p-3 bg-gray-100 rounded">
                                        <h4 class="text-xl">
                                            <?php
                                            $result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM taikhoankhachhang
                                                JOIN hoadon ON taikhoankhachhang.MaKhachHang = hoadon.MaKhachHang
                                                WHERE taikhoankhachhang.MaKhachHang = '{$_SESSION['MaKhachHang']}'");
                                            $row = mysqli_fetch_assoc($result);
                                            $total = $row['total'];
                                            echo $total;
                                            ?>
                                        </h4>
                                        <span>Đơn đặt hàng</span>
                                    </div>
                                    <div class="p-3 bg-gray-100 rounded">
                                        <h4 class="text-xl">
                                            <?php
                                            $query = "SELECT SUM(ct.SoLuong) AS total
                                                FROM hoadon hd
                                                JOIN chitiethoadon ct ON hd.MaHoaDon = ct.MaHoaDon
                                                join taikhoankhachhang on hd.MaKhachHang = taikhoankhachhang.MaKhachHang
                                                WHERE hd.TinhTrangDonHang = 'Giao hàng thành công' and taikhoankhachhang.MaKhachHang = '{$_SESSION['MaKhachHang']}'";
                                            $result = mysqli_query($conn, $query);
                                            $row = mysqli_fetch_assoc($result);
                                            $total = $row['total'];
                                            echo isset($total) ? $total : 0;
                                            ?>
                                        </h4>
                                        <span>Sản phẩm đã mua</span>
                                    </div>
                                    <div class="p-3 bg-gray-100 rounded">
                                        <h4 class="text-xl">
                                            <?php
                                            $result = mysqli_query($conn, "SELECT count(hoadon.MaHoaDon) as total
                                                from hoadon join taikhoankhachhang on hoadon.MaKhachHang = taikhoankhachhang.MaKhachHang
                                                where hoadon.MaKhachHang = '{$_SESSION['MaKhachHang']}'and hoadon.TinhTrangDonHang = 'Đang giao hàng'");
                                            $row = mysqli_fetch_assoc($result);
                                            $total = $row['total'];
                                            echo isset($total) ? $total : 0;
                                            ?>
                                        </h4>
                                        <span>Đơn hàng đang giao</span>
                                    </div>
                                    <div class="p-3 bg-gray-100 rounded">
                                        <h4 class="text-xl">
                                            <?php
                                            $result = mysqli_query($conn, "SELECT count(hoadon.MaHoaDon) as total
                                                from hoadon join taikhoankhachhang on hoadon.MaKhachHang = taikhoankhachhang.MaKhachHang
                                                where hoadon.MaKhachHang = '{$_SESSION['MaKhachHang']}'and hoadon.TinhTrangDonHang = 'Giao hàng thành công'");
                                            $row = mysqli_fetch_assoc($result);
                                            $total = $row['total'];
                                            echo isset($total) ? $total : 0;
                                            ?>
                                        </h4>
                                        <span>Đơn hàng đã giao</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="bg-white shadow-lg mb-3">
                            <div class="px-6 py-4">
                                <h5 class="text-xl font-semibold mb-4">Đơn hàng gần đây</h5>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <?php
                                    $result = mysqli_query($conn, "SELECT * 
                                    FROM hoadon 
                                    JOIN chitiethoadon ON hoadon.MaHoaDon = chitiethoadon.MaHoaDon 
                                    JOIN sanpham ON chitiethoadon.MaSanPham = sanpham.MaSanPham
                                    WHERE hoadon.MaKhachHang = '{$_SESSION['MaKhachHang']}'
                                    ORDER BY hoadon.NgayLap DESC
                                    LIMIT 4");

                                    if (mysqli_num_rows($result) > 0) :
                                        while ($row = mysqli_fetch_assoc($result)) :
                                    ?>
                                            <div class="flex items-center border-b pb-4">
                                                <img src="<?php echo $row['Anh']; ?>" alt="Product Image" class="w-16 h-16 object-cover border rounded-md mr-4">
                                                <div>
                                                    <time class="text-gray-500 block"><i class="fas fa-calendar-alt mr-1"></i><?php echo $row['NgayLap']; ?></time>
                                                    <a href="../home/xemchitiet.php?id=<?php echo $row['MaSanPham']; ?>" class="text-black hover:text-yellow-500 block"><?php echo $row['TenSanPham']; ?></a>
                                                    <span class="text-green-500 block"><?php echo $row['TinhTrangDonHang']; ?></span>
                                                </div>
                                            </div>
                                    <?php
                                        endwhile;
                                    else :
                                        echo "<p class='text-gray-500'>Không có đơn hàng gần đây.</p>";
                                    endif;
                                    ?>
                                </div>
                            </div>
                            <div class="px-6 py-4">
                                <a href="DonDatHang.php" class="inline-block px-4 py-2 text-blue-500 border border-blue-500 rounded hover:bg-blue-500 hover:text-white transition duration-300 ease-in-out">Xem tất cả <i class="fas fa-chevron-down"></i></a>
                            </div>
                        </article>
                    </main>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<?php include '../home/footer.php' ?>
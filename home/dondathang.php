<?php
include("../home/logIn_required.php");
include '../home/header.php';
?>
<title>Đơn đặt hàng đã đặt</title>

<section class="bg-gray">
    <div class="container mx-auto">
        <h2 class="text-3xl font-semibold text-center">Tài khoản của tôi</h2>
    </div>
</section>

<section class="py-8">
    <div class="container mx-auto">
        <div class="flex">
            <aside class="w-1/4 pr-8">
                <nav class="list-none">
                    <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded mb-2" href="../home/thongtin.php"> Thông tin chung </a>
                    <a class="block py-2 px-4 text-black bg-yellow-300 rounded mb-2" href="../home/dondathang.php"> Đơn hàng </a>
                    <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded mb-2" href="../home/caidatthongtin.php">Cài đặt thông tin</a>
                    <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded mb-2" href="../authentication/dangxuat.php">Đăng xuất</a>
                </nav>
            </aside>
            <main class="md:col-span-2">
                <?php
                // Lấy thông tin đơn đặt hàng của người dùng đăng nhập
                $tt_hd = mysqli_query($conn, "SELECT * FROM hoadon
                JOIN taikhoankhachhang ON hoadon.MaKhachHang = taikhoankhachhang.MaKhachHang
                WHERE taikhoankhachhang.MaKhachHang = '{$_SESSION['MaKhachHang']}'
                ORDER BY hoadon.MaHoaDon DESC");

                if (mysqli_num_rows($tt_hd) > 0) {
                    // Lặp qua từng đơn đặt hàng
                    while ($row = mysqli_fetch_assoc($tt_hd)) {
                        // Lấy tổng tiền của đơn đặt hàng
                        $tongtien_querry = mysqli_query($conn, "SELECT SUM(chitiethoadon.SoLuong*chitiethoadon.GiaBan) AS tongtien
                        FROM chitiethoadon
                        JOIN hoadon ON chitiethoadon.MaHoaDon = hoadon.MaHoaDon
                        WHERE hoadon.MaHoaDon = '{$row['MaHoaDon']}'");
                        $tongtien_row = mysqli_fetch_assoc($tongtien_querry);
                        $tongtien = $tongtien_row['tongtien'];
                ?>
                        <article class="bg-white rounded-lg shadow-md mb-4">
                            <header class="px-4 py-3 border-b border-gray-200 flex justify-between items-center">
                                <div>
                                    <strong class="block text-lg font-semibold">ID đơn đặt hàng: <?php echo $row['MaHoaDon'] ?></strong>
                                    <span class="block text-sm">Ngày đặt: <?php echo $row['NgayLap'] ?></span>
                                </div>
                            </header>
                            <div class="p-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <h6 class="text-gray-600 mb-2">Giao hàng đến</h6>
                                        <p>
                                            <?php echo $row['TenKhachHang'] ?> <br>
                                            SĐT: <?php echo $row['SoDienThoai'] ?><br>
                                            Email: <?php echo $row['Email'] ?> <br>
                                            Địa chỉ: <?php echo $row['DiaChi'] ?><br>
                                        </p>
                                    </div>
                                    <div>
                                        <h6 class="text-gray-600 mb-2">Thanh toán</h6>
                                        <p class="flex text-green-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                            </svg>
                                            <?php echo $row['TinhTrangDonHang'] ?>
                                        </p>
                                        <p>
                                            Tổng tiền: <?php echo formatCurrencyVND($tongtien); ?><br>
                                            Tiền ship: <?php echo formatCurrencyVND(0); ?><br>
                                            <strong class="block">Thanh toán: <?php echo formatCurrencyVND($tongtien); ?></strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="overflow-x-auto">
                                    <table class="w-full mt-4 table-auto border-collapse border border-gray-300">
                                        <thead>
                                            <tr class="bg-gray-100">
                                                <th class="py-2 px-4 border border-gray-300">Ảnh</th>
                                                <th class="py-2 px-4 border border-gray-300">Tên sản phẩm</th>
                                                <th class="py-2 px-4 border border-gray-300">Số lượng</th>
                                                <th class="py-2 px-4 border border-gray-300">Thành tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Lấy chi tiết đơn đặt hàng
                                            $tt_cthd = mysqli_query($conn, "SELECT chitiethoadon.*, sanpham.TenSanPham, sanpham.Anh
                                            FROM chitiethoadon
                                            JOIN sanpham ON sanpham.MaSanPham = chitiethoadon.MaSanPham
                                            WHERE chitiethoadon.MaHoaDon = '{$row['MaHoaDon']}'");

                                            if (mysqli_num_rows($tt_cthd) > 0) {
                                                // Lặp qua từng chi tiết đơn đặt hàng
                                                while ($cthd_row = mysqli_fetch_assoc($tt_cthd)) {
                                            ?>
                                                    <tr>
                                                        <td class="py-2 px-4 border border-gray-300">
                                                            <img src="<?php echo $cthd_row["Anh"] ?>" class="w-16 h-16 object-cover" alt="Product Image">
                                                        </td>
                                                        <td class="py-2 px-4 border border-gray-300"><?php echo $cthd_row["TenSanPham"] ?></td>
                                                        <td class="py-2 px-4 border border-gray-300"><?php echo $cthd_row['SoLuong']; ?></td>
                                                        <td class="py-2 px-4 border border-gray-300">
                                                            <?php
                                                            $thanh_tien = $cthd_row['SoLuong'] * $cthd_row['GiaBan'];
                                                            echo formatCurrencyVND($thanh_tien);
                                                            ?>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </article>
                <?php
                    }
                } else {
                    echo "<p>Không có đơn đặt hàng nào.</p>";
                }
                ?>
            </main>
        </div>
    </div>
</section>
<?php
include '../home/footer.php';
?>
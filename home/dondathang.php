<?php
include("../home/logIn_required.php");
include '../home/header.php';
?>
<title>Đơn đặt hàng đã đặt</title>

<section class="bg-gray py-8">
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
                    <a class="block py-2 px-4 text-white bg-blue-500 rounded mb-2" href="../home/dondathang.php"> Đơn hàng </a>
                    <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded mb-2" href="../home/caidatthongtin.php">Cài đặt thông tin</a>
                    <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded mb-2" href="../authentication/dangxuat.php">Đăng xuất</a>
                </nav>
            </aside>
            <main class="md:col-span-2">
                <?php
                $tt_hd = mysqli_query($conn, "SELECT * FROM hoadon
                JOIN taikhoankhachhang ON hoadon.MaKhachHang = taikhoankhachhang.MaKhachHang
                WHERE MaKhachHang = '{$_SESSION['MaKhachHang']}'
                ORDER BY MaKhachHang DESC");
                ?>
                <?php if (mysqli_num_rows($tt_hd) <> 0) : ?>
                    <?php while ($row = mysqli_fetch_assoc($tt_hd)) : ?>
                        <?php
                        $tongtien_querry = mysqli_query($conn, "select sum(chitiethoadon.SoLuong*chitiethoadon.DonGiaXuat) as tongtien
                        from chitiethoadon join hoadon on chitiethoadon.MaHoaDon = hoadon.MaHoaDon
                        WHERE hoadon.MaHoaDon = '{$row['MaHoaDon']}'");
                        $tongtien_row = mysqli_fetch_assoc($tongtien_querry);
                        $tongtien = $tongtien_row['tongtien'];
                        ?>
                        <article class="bg-white rounded-lg shadow-md mb-4">
                            <header class="px-4 py-3 border-b border-gray-200 flex justify-between items-center">
                                <div>
                                    <strong class="block text-lg font-semibold">ID đơn đặt hàng: <?php echo $row['MaHoaDon'] ?></strong>
                                    <span class="block text-sm">Ngày đặt: <?php echo $row['NgayTao'] ?></span>
                                </div>
                                <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fas fa-print"></i></a>
                            </header>
                            <div class="p-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <h6 class="text-gray-600 mb-2">Giao hàng đến</h6>
                                        <p>
                                            <?php echo $row['TenKhachHang'] ?> <br>
                                            SĐT: <?php echo $row['Sodienthoai'] ?><br>
                                            Email: <?php echo $row['Email'] ?> <br>
                                            Địa chỉ: <?php echo $row['DiaChi'] ?><br>
                                        </p>
                                    </div>
                                    <div>
                                        <h6 class="text-gray-600 mb-2">Thanh toán</h6>
                                        <p class="text-success">
                                            <i class="fas fa-money-bill"></i> <?php echo $row['TinhTrangDonHang'] ?>
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
                                            $tt_cthd = mysqli_query($conn, "SELECT chitiethoadon.*, hoadon.*, sanpham.*, chitiethoadon.Soluong as SLCTHD, chitiethoadon.DonGiaXuat as DGX, sanpham.GiaBan as DGSP
                                            FROM chitiethoadon
                                            JOIN hoadon ON chitiethoadon.MaHoaDon = hoadon.MaHoaDon
                                            JOIN sanpham ON sanpham.MaSanPham = chitiethoadon.MaSanPham
                                            WHERE hoadon.MaHoaDon = '{$row['MaHoaDon']}'");
                                            ?>
                                            <?php if (mysqli_num_rows($tt_cthd) <> 0) : ?>
                                                <?php while ($row = mysqli_fetch_assoc($tt_cthd)) : ?>
                                                    <tr>
                                                        <td class="py-2 px-4 border border-gray-300">
                                                            <img src="<?php echo $row["ANH"] ?>" class="w-16 h-16 object-cover" alt="Product Image">
                                                        </td>
                                                        <td class="py-2 px-4 border border-gray-300"><?php echo $row["TenSanPham"] ?></td>
                                                        <td class="py-2 px-4 border border-gray-300"><?php echo $row['SLCTHD']; ?></td>
                                                        <td class="py-2 px-4 border border-gray-300">
                                                            <?php
                                                            $thanh_tien = $row['DGX'] * $row['SLCTHD'];
                                                            echo formatCurrencyVND($thanh_tien);
                                                            ?>
                                                        </td>
                                                    </tr>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
            </main>
        </div>
    </div>
</section>
<?php
include '../home/footer.php';
?>
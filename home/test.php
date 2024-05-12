<?php
    include("../home/logIn_required.php");
    if (!isset($_SESSION['MaKhachHang'])) {
        header("Location: ../authentication/dangnhap.php");
        exit();
    }
    include '../home/header.php';

    // Kiểm tra xem có yêu cầu xóa sản phẩm không
    if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['masp'])) {
        include("../home/logIn_required.php");
        include("../config.php");

        // Lấy mã sản phẩm và mã khách hàng từ yêu cầu
        $masp = $_GET['masp'];
        $makh = $_SESSION['MaKhachHang']; // Lấy mã khách hàng từ session

        // Sử dụng truy vấn tham số hóa để tránh SQL Injection
        $deleteQuery = "DELETE FROM giohang WHERE MaSanPham = ? AND MaKhachHang = ?";
        $deleteStmt = mysqli_prepare($conn, $deleteQuery);

        // Kiểm tra xem truy vấn đã được chuẩn bị thành công hay không
        if ($deleteStmt) {
            // Gán giá trị cho các tham số và thực thi truy vấn
            mysqli_stmt_bind_param($deleteStmt, "ss", $masp, $makh);
            if (mysqli_stmt_execute($deleteStmt)) {
                // Cập nhật số lượng mục trong giỏ hàng nếu xóa thành công
                $_SESSION['SLGH'] -= 1;
            } else {
                // Nếu xóa không thành công, có thể xử lý thông báo lỗi tại đây
                echo "Xóa sản phẩm không thành công: " . mysqli_error($conn);
            }
        }

        // Giải phóng tài nguyên
        mysqli_stmt_close($deleteStmt);

        // Bổ sung điều kiện để gửi sự thay đổi của SLGH
        if (isset($_SESSION["MaKhachHang"])) {
            echo '<script>document.getElementById("CartCount").innerHTML = ' . $_SESSION['SLGH'] . ';</script>';
        }
    }

    // Thực hiện truy vấn SELECT để lấy dữ liệu giỏ hàng mới
    $result = mysqli_query($conn, "SELECT giohang.*, sanpham.*, loaitrangsuc.*, giohang.SoLuong as SLGH, sanpham.GiaBan as DGSP, sanpham.SoLuong as SLSP
                            FROM giohang
                            JOIN sanpham ON giohang.MaSanPham = sanpham.MaSanPham 
                            JOIN loaitrangsuc ON sanpham.MaLoaiTrangSuc = loaitrangsuc.MaLoaiTrangSuc
                            WHERE giohang.MaKhachHang = '{$_SESSION['MaKhachHang']}'");

    ?>
    <section class="section-content py-10">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <main class="md:col-span-2">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <?php if (mysqli_num_rows($result) == 0) : ?>
                            <h3 class="text-muted">Không có sản phẩm trong giỏ hàng</h3>
                        <?php else : ?>
                            <table class="w-full table-auto">
                                <thead class="text-muted">
                                    <tr class="text-sm text-left uppercase">
                                        <th scope="col" class="w-1/12"></th>
                                        <th scope="col" class="w-5/12">Sản phẩm</th>
                                        <th scope="col" class="w-2/12">Số lượng</th>
                                        <th scope="col" class="w-2/12">Giá</th>
                                        <th scope="col" class="w-2/12">Thành tiền</th>
                                        <th scope="col" class="text-right"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                        <tr class="border-b border-gray-200">
                                            <td>
                                                <input type="checkbox" class="sanpham-checkbox" style="height: 20px" id="sanpham" data-idsp="<?php echo $row['MaSanPham'] ?>" onchange="calculateTotalPrice()">
                                            </td>
                                            <td class="text-sm">
                                                <div class="flex items-center space-x-4">
                                                    <div class="w-16 h-16 overflow-hidden">
                                                        <a href="../home/xemchitiet.php?id=<?php echo $row['MaSanPham'] ?>">
                                                            <img src="<?php echo $row['Anh'] ?>" alt="Product image" class="object-cover w-full h-full">
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="text-gray-800 font-medium"><?php echo $row['TenSanPham'] ?></a>
                                                        <p class="text-gray-600 text-sm"> Loại Trang Sức: <?php echo $row['TenLoaiTrangSuc'] ?></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group input-group-sm">
                                                    <button onclick="adjustQuantity('<?php echo $row['MaSanPham'] ?>', 'decrease')" class="button-minus bg-gray-200 px-2" type="button">-</button>
                                                    <input id="soluong_<?php echo $row['MaSanPham']; ?>" type="text" class="form-input w-16 text-center" readonly="readonly" value="<?php echo $row['SLGH']; ?>" min="1" max="<?php echo $row['SLSP']; ?>">
                                                    <button onclick="adjustQuantity('<?php echo $row['MaSanPham'] ?>', 'increase')" class="button-plus bg-gray-200 px-2" type="button">+</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-gray-800">
                                                    <?php echo formatCurrencyVND($row['DGSP']); ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div id="subtotal_<?php echo $row['MaSanPham'] ?>" class="text-gray-800">
                                                    <?php echo formatCurrencyVND($row['DGSP'] * $row['SLGH']); ?>
                                                </div>
                                            </td>

                                            <td class="text-right">
                                                <a href="giohang.php?action=delete&masp=<?php echo $row['MaSanPham'] ?>" class="btn-delete" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng không?');">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    </div>
                </main>
            </div>
        </div>
    </section>
                                        
    <?php include '../home/footer.php'; ?>
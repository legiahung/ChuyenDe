<?php
include("../home/logIn_required.php");
include '../home/header.php';

// Kiểm tra nếu có thông báo thành công từ trang cập nhật thì hiển thị thông báo
if (isset($_GET['success']) && $_GET['success'] === 'true') {
    echo '<div id="successAlert" class="fixed inset-x-0 top-0 flex items-center justify-center z-50">
            <div class="bg-green-500 text-white px-6 py-4 rounded shadow-lg">
                <span class="mr-2">Cập nhật thông tin thành công!</span>
                <button id="closeSuccessAlert" class="ml-2 text-white">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
          </div>';
}

// Kiểm tra nếu có thông báo lỗi từ trang cập nhật thì hiển thị thông báo
if (isset($_GET['error']) && $_GET['error'] === 'true') {
    echo '<div id="errorAlert" class="fixed inset-x-0 top-0 flex items-center justify-center z-50">
            <div class="bg-red-500 text-white px-6 py-4 rounded shadow-lg">
                <span class="mr-2">Có lỗi xảy ra khi cập nhật thông tin. Vui lòng thử lại!</span>
                <button id="closeErrorAlert" class="ml-2 text-white">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
          </div>';
}

$result = mysqli_query($conn, "SELECT * FROM taikhoankhachhang 
    WHERE MaKhachHang = '{$_SESSION['MaKhachHang']}'");
?>
<title>Cài đặt thông tin</title>

<section class="bg-gray">
    <div class="container mx-auto">
        <h2 class="text-3xl font-semibold">Tài khoản của tôi</h2>
    </div>
</section>

<section class="bg-white py-8">
    <div class="container mx-auto">
        <div class="flex">
            <aside class="w-1/4 pr-8">
                <nav class="list-none">
                    <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded mb-2" href="../home/thongtin.php"> Thông tin chung </a>
                    <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded mb-2" href="../home/dondathang.php"> Đơn hàng </a>
                    <a class="block py-2 px-4 text-white bg-blue-500 rounded mb-2" href="../home/caidatthongtin.php">Cài đặt thông tin</a>
                    <a class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded mb-2" href="../authentication/dangxuat.php">Đăng xuất</a>
                </nav>
            </aside>
            <?php if (mysqli_num_rows($result) != 0) : ?>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <main class="w-3/4">
                        <div class="bg-white shadow-md p-4">
                            <form method="post" action="capnhatthongtin.php" class="space-y-4" onsubmit="return validateForm()">
                                <div class="space-y-2">
                                    <label class="block pl-4 text-2xl">Họ và tên</label>
                                    <input type="text" class="w-full border border-gray-300 px-4 py-2 rounded-full" name="TenKhachHang" id="TenKhachHang" value="<?php if (isset($row['TenKhachHang'])) echo $row['TenKhachHang'] ?>">
                                </div>
                                <div class="space-y-2">
                                    <label class="block pl-4 text-2xl">Giới tính</label>
                                    <select class="w-full border border-gray-300 px-4 py-2 rounded-full" name="GioiTinh" id="GioiTinh">
                                        <option value="">-- Chọn giới tính --</option>
                                        <option value="0" <?php if (isset($row['GioiTinh']) && $row['GioiTinh'] == '0') echo 'selected' ?>>Nam</option>
                                        <option value="1" <?php if (isset($row['GioiTinh']) && $row['GioiTinh'] == '1') echo 'selected' ?>>Nữ</option>
                                    </select>
                                </div>
                                <div class="space-y-2 ">
                                    <div class="flex items-center pl-4 text-2xl">
                                        <label class="block mr-2">Ngày Sinh</label>
                                        <small class="text-sm">Ngày tháng năm theo định dạng MM-DD-YYYY</small>
                                    </div>
                                    <input type="date" class="w-full border border-gray-300 px-4 py-2 rounded-full" name="NgaySinh" id="NgaySinh" value="<?php if (isset($row['NgaySinh'])) echo $row['NgaySinh'] ?>">
                                </div>
                                <div class="space-y-2">
                                    <label class="block pl-4 text-2xl">Số điện thoại</label>
                                    <input type="text" class="w-full border border-gray-300 px-4 py-2 rounded-full" name="SoDienThoai" id="SoDienThoai" value="<?php if (isset($row['SoDienThoai'])) echo $row['SoDienThoai'] ?>">
                                </div>
                                <div class="space-y-2">
                                    <label class="block pl-4 text-2xl">Địa chỉ</label>
                                    <input type="text" class="w-full border border-gray-300 px-4 py-2 rounded-full" name="DiaChi" id="DiaChi" value="<?php if (isset($row['DiaChi'])) echo $row['DiaChi'] ?>">
                                </div>
                                <div class="space-y-2">
                                    <label class="block pl-4 text-2xl">Email đăng nhập</label>
                                    <input disabled type="text" class="w-full border border-gray-300 px-4 py-2 rounded-full" name="Email" id="Email" value="<?php if (isset($row['Email'])) echo $row['Email'] ?>">
                                </div>
                                <div>
                                    <input type="submit" value="Lưu" name="saveChanges" class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer">
                                    <a href="DoiMatKhau.php" class="bg-gray-300 text-gray-800 px-4 py-2 rounded cursor-pointer">Đổi mật khẩu</a>
                                </div>
                            </form>
                        </div>
                    </main>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<script>
    function validateForm() {
        var tenKhachHang = document.getElementById('TenKhachHang').value.trim();
        var gioiTinh = document.getElementById('GioiTinh').value;
        var ngaySinh = document.getElementById('NgaySinh').value;
        var soDienThoai = document.getElementById('SoDienThoai').value.trim();
        var diaChi = document.getElementById('DiaChi').value.trim();

        // Kiểm tra các trường có bị bỏ trống không
        if (tenKhachHang === '' || gioiTinh === '' || ngaySinh === '' || soDienThoai === '' || diaChi === '') {
            alert('Vui lòng điền đầy đủ thông tin.');
            return false; // Ngăn form submit nếu có trường bỏ trống
        }

        return true;
    }
    // Lấy phần tử button đóng của thông báo thành công và gán sự kiện click
    document.getElementById('closeSuccessAlert').addEventListener('click', function() {
        // Ẩn đi thông báo thành công khi người dùng nhấp vào nút đóng
        document.getElementById('successAlert').style.display = 'none';
    });
    document.getElementById('closeErrorAlert').addEventListener('click', function() {
        document.getElementById('errorAlert').style.display = 'none';
    });
</script>

<?php
include '../home/footer.php';
?>
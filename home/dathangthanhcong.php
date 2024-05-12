<?php 
include("../config.php");
include("../home/logIn_required.php"); 
include '../home/header.php';
function LayMaHoaDon($db) {
    // Lấy danh sách các MaKhachHang từ bảng HOADON
    $query = "SELECT MaHoaDon FROM hoadon";
    $result = mysqli_query($db, $query);

    // Lấy MaHoaDon lớn nhất
    $maMax = '';
    while ($row = mysqli_fetch_assoc($result)) {
        $maHD = $row['MaHoaDon'];
        if ($maHD > $maMax) {
            $maMax = $maHD;
        }
    }

    // Tạo mã ND mới
    $maHD = intval(substr($maMax, 2)) + 1;
    $HD = str_pad($maHD, 4, '0', STR_PAD_LEFT);
    return 'HD' . $HD;
}
$mahd = LayMaHoaDon($conn);

//Thêm vào bảng hóa đơn
mysqli_query($conn,"INSERT INTO `hoadon` (`MaHoaDon`, `MaKhachHang`, `NgayTao`, `TinhTrangDonHang`) 
VALUES ('$mahd', '{$_SESSION['MaKhachHang']}', NOW(), 'Đang xử lý');");


$selectedProducts = $_SESSION['selectedProducts'];
//Thêm từng chi tiết hóa đơn
foreach ($selectedProducts as $product) {
    $masp = $product['MaSanPham'];
    $soluong = $product['SoLuong'];
    
    // Lấy số lượng sản phẩm hiện tại trong bảng SANPHAM
    $soluonghientai_query = mysqli_query($conn,"SELECT SoLuong FROM sanpham WHERE MaSanPham = '$masp' LIMIT 1");
    $row = mysqli_fetch_assoc($soluonghientai_query);
    $soluonghientai = $row['SoLuong'];
    
    // Kiểm tra tình trạng đơn hàng
    $tinhtrangdonhang_query = mysqli_query($conn,"SELECT TinhTrangDonHang FROM hoadon WHERE MaHoaDon = '$mahd' LIMIT 1");
    $row = mysqli_fetch_assoc($tinhtrangdonhang_query);
    $tinhtrangdonhang = $row['TinhTrangDonHang'];
    
    // Nếu tình trạng đơn hàng là "Đã giao thành công" thì trừ số lượng sản phẩm
    if ($tinhtrangdonhang == "Đang giao hàng" || $tinhtrangdonhang == "Đang xử lý" || $tinhtrangdonhang == "Giao hàng thành công") {
        $soluongmoi = $soluonghientai - $soluong;
        
        // Cập nhật số lượng sản phẩm trong bảng SANPHAM
        mysqli_query($conn,"UPDATE sanpham SET SoLuong = $soluongmoi WHERE MaSanPham = '$masp'");
    }
    else if($tinhtrangdonhang == "Giao hàng thất bại"){
        $soluongmoi = $soluonghientai+$soluong;
        // Cập nhật số lượng sản phẩm trong bảng SANPHAM
        mysqli_query($conn,"UPDATE sanpham SET SoLuong = $soluongmoi WHERE MaSanPham = '$masp'");
        }
    
    // Thêm chi tiết hóa đơn vào bảng chitiethoadon
    $dongiaxuat_query = mysqli_query($conn,"SELECT GiaBan FROM giohang WHERE MaSanPham = '$masp' AND MaKhachHang = '{$_SESSION['MaKhachHang']}' LIMIT 1");
    $row = mysqli_fetch_assoc($dongiaxuat_query);
    $dongia = $row['GiaBan'];
    mysqli_query($conn,"INSERT INTO `chitiethoadon` (`MaHoaDon`, `MaSanPham`, `SoLuong`, `DonGiaXuat`) 
VALUES ('$mahd', '$masp', $soluong,  $dongia)");
}
    // Xóa sản phẩm đã thanh toán khỏi bảng giỏ hàng
foreach ($selectedProducts as $product) {
    $masp = $product['MaSanPham'];
    mysqli_query($conn, "DELETE FROM giohang WHERE MaSanPham = '$masp' AND MaKhachHang = '{$_SESSION['MaKhachHang']}'");
}
?>
<script>
   // Xóa sản phẩm đã thanh toán khỏi danh sách sản phẩm được lưu trong localStorage
var selectedProducts = JSON.parse(localStorage.getItem("selectedProducts"));
var updatedProducts = selectedProducts.filter(function(product) {
    return !isProductPaid(product.MaSanPham);
});
localStorage.setItem("selectedProducts", JSON.stringify(updatedProducts));

// Kiểm tra xem sản phẩm có được thanh toán hay không
function isProductPaid(masp) {
    // Thực hiện kiểm tra sản phẩm đã được thanh toán hay chưa
    // Trả về true nếu sản phẩm đã được thanh toán, ngược lại trả về false
}
</script>
<title>Đặt hàng thành công</title>

<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
</head>
<div id="payment_success" class="text-center bg-gray-100 py-10">
    <div class="bg-white p-8 rounded-lg shadow-lg inline-block">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark text-green-500 text-9xl">✓</i>
        </div>
        <h1 class="text-green-500 font-semibold text-4xl mt-8 mb-2">Thành công</h1>
        <p class="text-gray-800 text-lg">Chúng tôi đã nhận được đơn đặt hàng của bạn</p>
    </div>
</div>

<script>
    var countdown = 3; // Số giây đếm ngược
    var countdownElement = document.createElement('p');
    countdownElement.innerText = 'Bạn sẽ trở về trang chủ sau ' + countdown + ' giây';
    document.querySelector('.bg-white').appendChild(countdownElement);

    var countdownInterval = setInterval(function() {
        countdown--;
        countdownElement.innerText = 'Bạn sẽ trở về trang chủ sau ' + countdown + ' giây';
        if (countdown === 0) {
            clearInterval(countdownInterval);
            window.location.href = "../home/home.php";
        }
    }, 1000);

    // Ngăn người dùng quay lại trang trước đó
    history.pushState(null, null, document.URL);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, document.URL);
    });
</script>

<?php include '../home/footer.php';?>

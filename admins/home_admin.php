<?php
include "config.php";
include 'admin_header.php';
?>

<title>Admin</title>
<section class="p-4 sm:ml-60">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 justify-center">
        <!-- small box -->
        <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-lg p-4 transition duration-300 transform hover:scale-95">
            <div class="text-white">
                <?php
                $sql_countHD = "SELECT COUNT(*) FROM hoadon";
                $result = mysqli_query($conn, $sql_countHD);
                $row = mysqli_fetch_row($result);
                ?>
                <div class="flex items-center gap-[150px] justify-between w-full">
                    <div class="grid grid-cols-1">
                        <h3 class="text-4xl font-bold"><?php echo $row[0] ?></h3>
                        <p class="text-sm">Tổng đơn đặt hàng</p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </div>
            </div>
            <a href="../admins/quanlyhoadon.php" class="text-white hover:text-black mt-4 block font-semibold"> Xem chi tiết <i class="fas fa-arrow-circle-right ml-2"></i></a>
        </div>
        <div class="bg-gradient-to-r from-pink-500 via-orange-500 to-yellow-500 rounded-lg shadow-lg p-4 transition duration-300 transform hover:scale-95">
            <div class="text-white">
                <?php
                $sql_countHD = "SELECT COUNT(*) FROM sanpham";
                $result = mysqli_query($conn, $sql_countHD);
                $row = mysqli_fetch_row($result);
                ?>
                <div class="flex items-center gap-[150px] justify-between w-full">
                    <div class="grid grid-cols-1">
                        <h3 class="text-4xl font-bold"><?php echo $row[0] ?></h3>
                        <p class="text-sm">Số Lượng Sản Phẩm</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                </div>
            </div>
            <a href="../admins/sanpham.php" class="text-white hover:text-black mt-4 block font-semibold"> Xem chi tiết <i class="fas fa-arrow-circle-right ml-2"></i></a>
        </div>
        <div class="bg-gradient-to-r from-yellow-500 via-red-500 to-purple-500 rounded-lg shadow-lg p-4 transition duration-300 transform hover:scale-95">
            <div class="text-white">
                <?php
                $sql_countHD = "SELECT COUNT(*) FROM taikhoankhachhang";
                $result = mysqli_query($conn, $sql_countHD);
                $row = mysqli_fetch_row($result);
                ?>
                <div class="flex items-center gap-[150px] justify-between w-full">
                    <div class="grid grid-cols-1">
                        <h3 class="text-4xl font-bold"><?php echo $row[0] ?></h3>
                        <p class="text-sm">Số Lượng Khách Hàng</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                </div>
            </div>
            <a href="../admins/taikhoan_khachhang.php" class="text-white hover:text-black mt-4 block font-semibold"> Xem chi tiết <i class="fas fa-arrow-circle-right ml-2"></i></a>
        </div>
    </div>
</section>
<section class="p-4 sm:ml-60">
<?php
$months = array();
$sales = array();
$totalRevenue = 0; // Thêm biến để lưu tổng doanh thu

// Khởi tạo mảng giá trị ban đầu cho tất cả 12 tháng
for ($m = 1; $m <= 12; $m++) {
    array_push($sales, 0);
    array_push($months, date('M', mktime(0, 0, 0, $m, 1)));
}

// Sử dụng một truy vấn để lấy tổng cho từng tháng trong năm được chọn
$stmt = $conn->prepare("SELECT MONTH(hoadon.NgayLap) AS month, SUM(chitiethoadon.GiaBan * chitiethoadon.SoLuong) AS total
                        FROM chitiethoadon
                        LEFT JOIN hoadon ON hoadon.MaHoaDon=chitiethoadon.MaHoaDon 
                        LEFT JOIN sanpham ON sanpham.MaSanPham=chitiethoadon.MaSanPham 
                        WHERE YEAR(hoadon.NgayLap)=? AND hoadon.TinhTrangDonHang='Giao hàng thành công'
                        GROUP BY MONTH(hoadon.NgayLap)");
$stmt->bind_param("s", $_GET['year']);
$stmt->execute();


$result = $stmt->get_result();

// Lấy dữ liệu từ kết quả truy vấn và đưa vào mảng
while ($srow = $result->fetch_assoc()) {
    // Sử dụng $srow['month'] để đặt giá trị vào đúng vị trí trong mảng
    $sales[$srow['month'] - 1] = round($srow['total'], 2);
    // Tính tổng doanh thu
    $totalRevenue += $srow['total'];
}

$stmt->close();

$months = json_encode($months);
$sales = json_encode($sales);
?>

<!-- End Chart Data -->

<canvas id="barChart" height="200"></canvas>
<div id="legend"></div>
<!-- Hiển thị tổng doanh thu -->
<div style="text-align: center; margin-top: 10px;" ><b>Tổng doanh thu: <?php echo number_format($totalRevenue,); ?> VNĐ</b></div>
            </div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(function () {
        var barChartCanvas = $('#barChart').get(0).getContext('2d');
        var barChartData = {
            labels: <?php echo $months; ?>,
            datasets: [
                {
                    label: 'Doanh thu',
                    backgroundColor: 'rgba(153, 102, 255, 0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: <?php echo $sales; ?>
                }
            ]
        };

        console.log('Months:', <?php echo $months; ?>);
        console.log('Sales:', <?php echo $sales; ?>);

        var barChartOptions = {
            // Your options here
            //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            scaleBeginAtZero: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: true,
            //String - Colour of the grid lines
            scaleGridLineColor: 'rgba(0,0,0,.05)',
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
scaleShowVerticalLines: true,
            //Boolean - If there is a stroke on each bar
            barShowStroke: true,
            //Number - Pixel width of the bar stroke
            barStrokeWidth: 2,
            //Number - Spacing between each of the X value sets
            barValueSpacing: 5,
            //Number - Spacing between data sets within X values
            barDatasetSpacing: 1,
            //String - A legend template
            legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
            //Boolean - whether to make the chart responsive
            responsive: true,
            maintainAspectRatio: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function (value, index, values) {
                            // Định dạng số với dấu phẩy ngăn cách hàng nghìn
                            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        }
                    }
                }]
            },
            tooltips: {
                callbacks: {
                    label: function (tooltipItem, data) {
                        // Định dạng số với dấu phẩy ngăn cách hàng nghìn
                        var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                        return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                    }
                }
            }
        };

        barChartOptions.datasetFill = false;
        var myChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        });

        document.getElementById('legend').innerHTML = myChart.generateLegend();
    });
</script>
<script>
   $(function () {
    // Hàm để thay đổi trang và lưu giá trị vào localStorage
    function changeYearAndSave(value) {
        window.location.href = 'Index.php?year=' + value;
        localStorage.setItem('selectedYear', value);
    }

    // Lắng nghe sự kiện thay đổi của select
    $('#select_year').change(function () {
        // Gọi hàm thực hiện cả hai công việc
        changeYearAndSave($(this).val());
    });

    // Lấy giá trị năm từ localStorage khi trang được tải
    var selectedYear = localStorage.getItem('selectedYear');
    
    // Nếu có giá trị năm, thiết lập giá trị mặc định cho select
    if (selectedYear) {
        $('#select_year').val(selectedYear);
    } else {
        // Nếu không có giá trị năm trong localStorage, thì kiểm tra trên URL
var urlParams = new URLSearchParams(window.location.search);
        var yearFromURL = urlParams.get('year');
        
        if (yearFromURL) {
            // Nếu có giá trị năm trên URL, thiết lập giá trị cho select
            $('#select_year').val(yearFromURL);
        } else {
            // Nếu không có giá trị năm trên URL, mặc định là 2020
            $('#select_year').val('2020');
        }
    }
});
</script>
</section>
<?php include 'admin_footer.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết Nhà Cung Cấp</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="/imgs/logo2.png">
    <style>
        body {
            background-image: url(https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExdjJ5ZHhtMG92ZHo0OHlmdzdrOGxvem10eTJ3bjl2dDEzYjdkbHM5YSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/DE2SPf5htCh36CU82c/giphy.gif); /* Đặt hình ảnh làm nền */
            background-size: cover; /* Đảm bảo hình ảnh nền phủ kín màn hình */
            background-repeat: no-repeat; /* Ngăn lặp lại hình ảnh */
            background-attachment: fixed; /* Ngăn cuộn nền cùng với nội dung */
            animation: slide 10s linear infinite; /* Tạo chuyển động cho hình ảnh nền */
        }

        @keyframes slide {
            0% {
                background-position-x: 0%;
            }
            100% {
                background-position-x: 100%;
            }
        }

        .content {
            /* Để chứa nội dung trang */
            background-color: rgba(255, 255, 255, 0.8); /* Tạo một lớp mờ cho nội dung */
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="content flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg border-2 border-gray-300">
            <h2 class="bg-gray-200 p-2 rounded text-center font-bold text-yellow-600 mt-4">Mã Nhà Cung Cấp: <span class=" text-gray-800"><?= $vid; ?></span></h2>
            <h4 class=" font-bold text-yellow-600 mt-4">Tên Nhà Cung Cấp: <span class=" text-gray-800"><?= $vtenncc; ?></span></h4>
            <h4 class="font-bold text-yellow-600">Email Nhà Cung Cấp: <span class=" text-gray-800"><?= $vemail; ?></span></h4>
            <h4 class="font-bold text-yellow-600">Địa Chỉ Nhà Cung Cấp: <span class=" text-gray-800"><?= $vaddncc; ?></span></h4>
            <h4 class="font-bold text-yellow-600">Số Điện Thoại Nhà Cung Cấp: <span class=" text-gray-800"><?= $phonencc; ?></span></h4>
        </div>
    </div>
</body>

</html>

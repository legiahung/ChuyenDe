<?php
include "config.php";
include 'action_NCC.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết Nhà Cung Cấp</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="/imgs/logo2.png">

    <style>
        html {
            height: 100%;
            width: 100%;
            background-color: hsla(200, 40%, 30%, .4);
            background-image: url('https://78.media.tumblr.com/cae86e76225a25b17332dfc9cf8b1121/tumblr_p7n8kqHMuD1uy4lhuo1_540.png'),
                url('https://78.media.tumblr.com/66445d34fe560351d474af69ef3f2fb0/tumblr_p7n908E1Jb1uy4lhuo1_1280.png'),
                url('https://78.media.tumblr.com/8cd0a12b7d9d5ba2c7d26f42c25de99f/tumblr_p7n8kqHMuD1uy4lhuo2_1280.png'),
                url('https://78.media.tumblr.com/5ecb41b654f4e8878f59445b948ede50/tumblr_p7n8on19cV1uy4lhuo1_1280.png'),
                url('https://78.media.tumblr.com/28bd9a2522fbf8981d680317ccbf4282/tumblr_p7n8kqHMuD1uy4lhuo3_1280.png');
            background-repeat: repeat-x;
            background-position: 0 20%, 0 100%, 0 50%, 0 100%, 0 0;
            background-size: 2500px, 800px, 500px 200px, 1000px, 400px 260px;
            animation: 50s para infinite linear;
        }

        @keyframes para {
            100% {
                background-position: -5000px 20%, -800px 95%, 500px 50%, 1000px 100%, 400px 0;
            }
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg border-2 border-gray-300">
        <h2 class="bg-gray-200 p-2 rounded text-center font-bold text-yellow-600 mt-4">Mã Nhà Cung Cấp: <span class=" text-gray-800"><?= $vid; ?></span></h2>
        <h4 class=" font-bold text-yellow-600 mt-4">Tên Nhà Cung Cấp: <span class=" text-gray-800"><?= $vtenncc; ?></span></h4>
        <h4 class="font-bold text-yellow-600">Email Nhà Cung Cấp: <span class=" text-gray-800"><?= $vemail; ?></span></h4>
        <h4 class="font-bold text-yellow-600">Địa Chỉ Nhà Cung Cấp: <span class=" text-gray-800"><?= $vaddncc; ?></span></h4>
        <h4 class="font-bold text-yellow-600">Số Điện Thoại Nhà Cung Cấp: <span class=" text-gray-800"><?= $phonencc; ?></span></h4>
    </div>
</body>

</html>

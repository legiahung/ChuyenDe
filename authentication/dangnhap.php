<?php
include '../home/header.php';
?>
<title>Đăng nhập</title>

<div class="flex justify-center mt-5 mb-5">
    <div class="w-64">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h4 class="text-center text-xl mb-4">Đăng nhập</h4>
            <?php if (isset($_GET['error'])) { ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline"><?php echo $_GET['error']; ?></span>
                </div>
            <?php } ?>
            <form action="dangnhap_check.php" method="post">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="Email">Email đăng nhập</label>
                    <input type="text" name="Email" id="Email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Email" value="<?php echo isset($_GET['Email']) ? $_GET['Email'] : ''; ?>">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="MatKhau">Mật khẩu</label>
                    <input type="password" name="MatKhau" id="MatKhau" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Mật khẩu">
                </div>
                <div class="mb-6">
                    <input type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" value="Đăng nhập" />
                </div>
            </form>
        </div>
        <p class="text-center mt-4" style="font-size: 20px">Chưa có tài khoản? <a href="dangky.php">Đăng ký</a></p>
        <br><br>
    </div>
</div>
<?php include '../home/footer.php' ?>
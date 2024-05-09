<title>Chuyển Đổi tiền tệ</title>
<?php include 'header.php' ?>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Chuyển đổi tiền tệ</h2>
        <form method="post" action="">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="amount">Nhập số tiền:</label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline shadow-lg" id="amount" type="number" name="amount" min="0" step="any" value="<?php echo isset($_POST['amount']) ? $_POST['amount'] : ''; ?>">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="from_currency">Chọn loại tiền:</label>
                <select class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline shadow-lg" name="from_currency" id="from_currency">
                    <option value="VND" <?php if (isset($_POST['from_currency']) && $_POST['from_currency'] == 'VND') echo 'selected'; ?>>VND (Đồng Việt Nam)</option>
                    <option value="USD" <?php if (isset($_POST['from_currency']) && $_POST['from_currency'] == 'USD') echo 'selected'; ?>>USD (Đô la Mỹ)</option>
                    <option value="PHP" <?php if (isset($_POST['from_currency']) && $_POST['from_currency'] == 'PHP') echo 'selected'; ?>>PHP (Peso Philippin)</option>
                    <option value="JPY" <?php if (isset($_POST['from_currency']) && $_POST['from_currency'] == 'JPY') echo 'selected'; ?>>JPY (Yen Nhật)</option>
                    <option value="CNY" <?php if (isset($_POST['from_currency']) && $_POST['from_currency'] == 'CNY') echo 'selected'; ?>>CNY (Chinese Yuan Renminbi)</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="to_currency">Chọn loại tiền muốn chuyển đổi:</label>
                <select class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline shadow-lg" name="to_currency" id="to_currency">
                    <option value="VND" <?php if (isset($_POST['to_currency']) && $_POST['to_currency'] == 'VND') echo 'selected'; ?>>VND (Đồng Việt Nam)</option>
                    <option value="USD" <?php if (isset($_POST['to_currency']) && $_POST['to_currency'] == 'USD') echo 'selected'; ?>>USD (Đô la Mỹ)</option>
                    <option value="PHP" <?php if (isset($_POST['to_currency']) && $_POST['to_currency'] == 'PHP') echo 'selected'; ?>>PHP (Peso Philippin)</option>
                    <option value="JPY" <?php if (isset($_POST['to_currency']) && $_POST['to_currency'] == 'JPY') echo 'selected'; ?>>JPY (Yen Nhật)</option>
                    <option value="CNY" <?php if (isset($_POST['to_currency']) && $_POST['to_currency'] == 'CNY') echo 'selected'; ?>>CNY (Chinese Yuan Renminbi)</option>
                </select>
            </div>
            <div class="mb-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline shadow-lg shadow-blue-500/50" type="submit">Chuyển đổi</button>
            </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $amount = $_POST['amount'];
            if ($amount < 0) {
                echo "<p class='text-red-500'>Số tiền không được nhập giá trị âm!</p>";
            } else {
                $from_currency = $_POST['from_currency'];
                $to_currency = $_POST['to_currency'];

                // Tỷ giá hối đoái
                $exchange_rate = array(
                    "VND" => array(
                        "USD" => 0.0000393126, // 1 USD = 25,437.124 VND
                        "PHP" => 0.0022661673, // 1 PHP = 441.274 VND
                        "JPY" => 0.0061333867, // 1 JPY = 163.042 VND
                        "CNY" => 0.00028481136 // 1 CNY = 3,511.10 VND
                    ),
                    "USD" => array(
                        "VND" => 25437.124, // 1 USD = 25,437.124 VND
                        "PHP" => 57.608652, // 1 USD = 57.608652 PHP
                        "JPY" => 155.96695, // 1 USD = 155.96695 JPY
                        "CNY" => 7.24087 // 1 USD = 7.24087 CNY
                    ),
                    "PHP" => array(
                        "VND" => 441.274, // 1 PHP = 441.274 VND
                        "USD" => 0.0173585, // 1 PHP = 0.0173585 USD
                        "JPY" => 2.7073, // 1 PHP = 2.7073 JPY
                        "CNY" => 0.125692 // 1 PHP = 0.125692 CNY
                    ),
                    "JPY" => array(
                        "VND" => 163.042, // 1 JPY = 163.042 VND
                        "USD" => 0.00641161, // 1 JPY = 0.00641161 USD
                        "PHP" => 0.369372, // 1 JPY = 0.369372 PHP
                        "CNY" => 0.0464375 // 1 JPY = 0.0464375 CNY
                    ),
                    "CNY" => array(
                        "VND" => 3511.10, // 1 CNY = 3,511.10 VND
                        "USD" => 0.13810504, // 1 CNY = 0.13810504 USD
                        "PHP" => 7.9559336, // 1 CNY = 7.9559336 PHP
                        "JPY" => 21.534305 // 1 CNY = 21.534305 JPY
                    )
                );

                if ($from_currency != $to_currency) {
                    $result = $amount * $exchange_rate[$from_currency][$to_currency];
                    echo "<p class='text-green-500 text-xl'>Số tiền chuyển đổi từ $from_currency sang $to_currency là: " . $result . $to_currency  . "</p>";
                } else {
                    echo "<p class='text-red-500'>Vui lòng chọn loại tiền khác để chuyển đổi.</p>";
                }
            }
        }
        ?>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const button = document.getElementById('navbar-toggle');
            const menu = document.getElementById('navbar-dropdown');

            const dropdownButton = document.getElementById('dropdownNavbarLink');
            const dropdownMenu = document.getElementById('dropdownNavbar');

            if (dropdownButton && dropdownMenu) {
                dropdownButton.addEventListener('mouseenter', () => {
                    dropdownMenu.classList.remove('hidden');
                });

                dropdownButton.addEventListener('mouseleave', () => {
                    dropdownMenu.classList.add('hidden');
                });

                dropdownMenu.addEventListener('mouseenter', () => {
                    dropdownMenu.classList.remove('hidden');
                });

                dropdownMenu.addEventListener('mouseleave', () => {
                    dropdownMenu.classList.add('hidden');
                });
            }

            if (button && menu) {
                button.addEventListener('click', function() {
                    menu.classList.toggle('hidden');
                });
            }
        });
    </script>
<?php include 'footer.php' ?>
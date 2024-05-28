    <title>Giá Vàng</title>
    <?php include 'header.php' ?>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl text-center font-bold mb-4">Giá Vàng Ngày Nay</h1>

        <?php
        $url = "https://sjc.com.vn/xml/tygiavang.xml";
        $xml = simplexml_load_file($url);
        ?>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Tên Thành Phố</th>
                    <th class="border border-gray-300 px-4 py-2">Loại</th>
                    <th class="border border-gray-300 px-4 py-2">Mua</th>
                    <th class="border border-gray-300 px-4 py-2">Bán</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($xml->ratelist->city as $city) {
                    $nameCity = $city['name'];
                    foreach ($city->children() as $childNode) {
                        $type = $childNode['type'];
                        $buy = $childNode['buy'];
                        $sell = $childNode['sell'];
                ?>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2"><?php echo $nameCity; ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?php echo $type; ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?php echo $buy; ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?php echo $sell; ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include '../home/footer.php'; ?>
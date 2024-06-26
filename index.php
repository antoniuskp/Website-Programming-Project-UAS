<?php
// session_unset();
session_start();

$arrHape = array(
    array("SKU" => "12345", "Merk" => "Samsung", "Model" => "Galaxy S22", "Harga" => 18000000, "url_gambar" => "img/samsung_s22.jpg", "spec" => array("4GB", "5G", "5150mAH", "256GB")),
    array("SKU" => "54321", "Merk" => "Xiaomi", "Model" => "Mi 11 Pro", "Harga" => 1000000, "url_gambar" => "img/xiaomi_mi11.jpeg", "spec" => array("8GB", "5G", "5050mAH", "256GB")),
    array("SKU" => "AB012", "Merk" => "Redmi", "Model" => "Note 12", "Harga" => 6500000, "url_gambar" => "img/redmi.avif", "spec" => array("6GB", "5G", "5350mAH", "256GB")),
    array("SKU" => "12346", "Merk" => "Samsung", "Model" => "Galaxy S22 Pro", "Harga" => 19000000, "url_gambar" => "img/s22_pro.jpeg", "spec" => array("4GB", "5G", "5150mAH", "256GB")),
    array("SKU" => "54322", "Merk" => "Xiaomi", "Model" => "Mi 11", "Harga" => 9500000, "url_gambar" => "img/mi_11.jpg", "spec" => array("8GB", "5G", "5050mAH", "256GB")),
    array("SKU" => "AB013", "Merk" => "Redmi", "Model" => "Note 12 Pro", "Harga" => 6500000, "url_gambar" => "img/note_12pro.avif", "spec" => array("6GB", "5G", "5350mAH", "256GB")),
    array("SKU" => "78901", "Merk" => "Apple", "Model" => "iPhone 13", "Harga" => 22000000, "url_gambar" => "img/ip13.jpg", "spec" => array("6GB", "5G", "3100mAH", "128GB")),
    array("SKU" => "45678", "Merk" => "Oppo", "Model" => "Find X3 Pro", "Harga" => 16000000, "url_gambar" => "img/findx3.png", "spec" => array("12GB", "5G", "4500mAH", "256GB")),
    array("SKU" => "98765", "Merk" => "Vivo", "Model" => "V21", "Harga" => 7500000, "url_gambar" => "img/v21.png", "spec" => array("8GB", "5G", "4000mAH", "128GB")),
    array("SKU" => "13579", "Merk" => "Realme", "Model" => "GT Master", "Harga" => 8500000, "url_gambar" => "img/gtmaster.jpeg", "spec" => array("8GB", "5G", "4300mAH", "256GB")),
    array("SKU" => "24680", "Merk" => "OnePlus", "Model" => "9 Pro", "Harga" => 19000000, "url_gambar" => "img/9pro.png", "spec" => array("12GB", "5G", "4500mAH", "256GB")),
    array("SKU" => "11223", "Merk" => "Huawei", "Model" => "P50 Pro", "Harga" => 18000000, "url_gambar" => "img/p50.png", "spec" => array("8GB", "5G", "4360mAH", "256GB")),
    array("SKU" => "22334", "Merk" => "Sony", "Model" => "Xperia 1 III", "Harga" => 21000000, "url_gambar" => "img/xperia.webp", "spec" => array("12GB", "5G", "4500mAH", "256GB")),
    array("SKU" => "33445", "Merk" => "Nokia", "Model" => "X20", "Harga" => 6000000, "url_gambar" => "img/x20.jpeg", "spec" => array("6GB", "5G", "4470mAH", "128GB")),
    array("SKU" => "44556", "Merk" => "Google", "Model" => "Pixel 6", "Harga" => 14000000, "url_gambar" => "img/pixel6.jpg", "spec" => array("8GB", "5G", "4600mAH", "128GB")),
    array("SKU" => "55667", "Merk" => "Asus", "Model" => "ROG Phone 5", "Harga" => 20000000, "url_gambar" => "img/rog.jpeg", "spec" => array("16GB", "5G", "6000mAH", "256GB")),
    array("SKU" => "66778", "Merk" => "Motorola", "Model" => "Edge 20 Pro", "Harga" => 9000000, "url_gambar" => "img/edge.jpg", "spec" => array("12GB", "5G", "4500mAH", "256GB")),
    array("SKU" => "77889", "Merk" => "LG", "Model" => "Wing", "Harga" => 13000000, "url_gambar" => "img/lg.webp", "spec" => array("8GB", "5G", "4000mAH", "128GB")),
    array("SKU" => "88990", "Merk" => "ZTE", "Model" => "Axon 30", "Harga" => 8500000, "url_gambar" => "img/axon.jpeg", "spec" => array("8GB", "5G", "4200mAH", "128GB")),
    array("SKU" => "99001", "Merk" => "Lenovo", "Model" => "Legion Phone", "Harga" => 15000000, "url_gambar" => "img/legion.webp", "spec" => array("12GB", "5G", "5000mAH", "256GB")),
    array("SKU" => "66789", "Merk" => "Meizu", "Model" => "18 Pro", "Harga" => 12000000, "url_gambar" => "img/meizu.avif", "spec" => array("8GB", "5G", "4500mAH", "256GB")),
    array("SKU" => "77890", "Merk" => "BlackBerry", "Model" => "Key2", "Harga" => 5000000, "url_gambar" => "img/bbkey2.webp", "spec" => array("6GB", "4G", "3500mAH", "64GB")),
    array("SKU" => "88991", "Merk" => "HTC", "Model" => "U12+", "Harga" => 7000000, "url_gambar" => "img/htc.jpg", "spec" => array("6GB", "4G", "3500mAH", "128GB")),
);

$_SESSION["arrHape"] = $arrHape;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>PROJECT UAS-WEBPROG</title>
</head>

<body>
    <div class="side-panel">
        <img class="content-sidePanel" src="logo.png" alt="" id="logo">
        <p class="content-sidePanel" id="toko-hape">WEBPROG CELL</p>
        <div id="credit">
            <p>Developed By</p>
            <table>
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>NRP</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Nathan Garzya Santoso</td>
                    <td>160422041</td>
                </tr>
                <tr>
                    <td>Janet Deby Marlien Manoach</td>
                    <td>160422062</td>
                </tr>
                <tr>
                    <td>Antonius Kustiono Putra</td>
                    <td>160422065</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="content">
        <form action="bandingkan.php" method="get">
            <div class="hp">
                <?php
                foreach ($arrHape as $idx => $hape) {
                    $sku = $hape["SKU"];
                    $merk = $hape["Merk"];
                    $model = $hape["Model"];
                    $harga = number_format($hape["Harga"], 0, ',', '.');
                    $url_gambar = $hape["url_gambar"];
                    echo "<div class='card'>";
                    echo "<p class='nama_harga'>$merk</p>";
                    echo "<img class='img_hape' src='$url_gambar'>";

                    echo "<p class='nama_harga'>$model</p>";
                    echo "<p class='nama_harga'>Rp$harga</p>";
                    echo "<br>";

                    echo "<input type='checkbox' class='checked' id='checked" . $idx . "'value='$sku' name='checked[]'" . ">";
                    echo "<label for='checked" . $idx . "'> Pilih </label>";

                    echo "</div>";
                }
                ?>
            </div>
            <p><input type="submit" value="Bandingkan" name="bandingkan" id="bandingkan" disabled></p>
        </form>
    </div>
    <div class="blank">

    </div>
    <script type="text/javascript">
        $(".checked").click(function () {
            let jumChecked = 0;
            $(".checked").each(function (index) {
                if ($(this).is(":checked")) {
                    jumChecked++;
                }
            });

            console.log(jumChecked);
            if (jumChecked == 3) {
                $(".checked").each(function (index) {
                    if (!$(this).is(":checked")) {
                        $(this).attr("disabled", true);
                    }
                });
                $("#bandingkan").attr("disabled", false);
            }
            else {
                $(".checked").each(function (index) {
                    $(this).attr("disabled", false);
                })
                $("#bandingkan").attr("disabled", true);
            }
        });
        
    </script>
</body>

</html>
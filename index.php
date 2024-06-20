<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .side-panel {
            height: 100%;
            width: 250px;
            top: 0;
            left: 0;
            position: fixed;
            /* overflow-x: hidden; */
            padding-top: 50px;
            background-color: yellow;
        }

        #logo {
            width: 150px;
            height: 150px;
            display: block;
            border-radius: 50%;
        }

        .card {
            /* margin-left: 100px; */
            border-radius: 20px;
            background-color: white;
            width: 200px;
            height: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 20px;
        }

        .content-sidePanel {
            margin-left: auto;
            margin-right: auto;
        }

        #toko-hape {
            padding-top: 5px;
            text-align: center;
        }

        .content {
            margin-left: 275px;
            float: left;
            display: flex; 
            /* boleh pake flex kahh alternatifnyaa? */
            overflow-x: hidden;
        }

        p{
            font-family: 'Franklin Gothic',sans-serif;
        }
        .nama_hape{
            font-weight: bold;
            font-size: 18px;
        }
        .spec{
            display: inline;
        }
        .checked{
            display: inline;
        }
        .img_hape{
            width: 100px;
            height: auto;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <?php
    $arrHape = array(
        array("SKU" => "12345", "Merk" => "Samsung", "Model" => "Galaxy S22", "Harga" => 18000000, "url_gambar" => "img/samsung_s22.jpg", "spec" => array("4GB", "5G", "5150mAH", "256GB")),
        array("SKU" => "54321", "Merk" => "Xiaomi", "Model" => "Mi 11 Pro", "Harga" => 9500000, "url_gambar" => "img/xiaomi_mi11.jpeg", "spec" => array("8GB", "5G", "5050mAH", "256GB")),
        array("SKU" => "AB012", "Merk" => "Redmi", "Model" => "Redmi Note 12", "Harga" => 6500000, "url_gambar" => "img/redmi.avif", "spec" => array("6GB", "5G", "5350mAH", "256GB")),
        array("SKU" => "12345", "Merk" => "Samsung", "Model" => "Galaxy S22 Pro", "Harga" => 19000000, "url_gambar" => "img/s22_pro.jpeg", "spec" => array("4GB", "5G", "5150mAH", "256GB")),
        array("SKU" => "54321", "Merk" => "Xiaomi", "Model" => "Mi 11 Pro", "Harga" => 9500000, "url_gambar" => "img/mi_11.jpg", "spec" => array("8GB", "5G", "5050mAH", "256GB")),
        array("SKU" => "AB012", "Merk" => "Redmi", "Model" => "Redmi Note 12 Pro", "Harga" => 6500000, "url_gambar" => "img/note_12pro.avif", "spec" => array("6GB", "5G", "5350mAH", "256GB")),
        array("SKU" => "78901", "Merk" => "Apple", "Model" => "iPhone 13", "Harga" => 22000000, "url_gambar" => "img/ip13.jpg", "spec" => array("6GB", "5G", "3100mAH", "128GB")),
        array("SKU" => "45678", "Merk" => "Oppo", "Model" => "Find X3 Pro", "Harga" => 16000000, "url_gambar" => "img/findx3.png", "spec" => array("12GB", "5G", "4500mAH", "256GB")),
        array("SKU" => "98765", "Merk" => "Vivo", "Model" => "V21", "Harga" => 7500000, "url_gambar" => "img/v21.png", "spec" => array("8GB", "5G", "4000mAH", "128GB")),
        array("SKU" => "13579", "Merk" => "Realme", "Model" => "GT Master", "Harga" => 8500000, "url_gambar" => "img/gtmaster.jpeg", "spec" => array("8GB", "5G", "4300mAH", "256GB")),
        array("SKU" => "24680", "Merk" => "OnePlus", "Model" => "9 Pro", "Harga" => 19000000, "url_gambar" => "img/9pro.png", "spec" => array("12GB", "5G", "4500mAH", "256GB")),
        array("SKU" => "11223", "Merk" => "Huawei", "Model" => "P50 Pro", "Harga" => 18000000, "url_gambar" => "img/p50.png", "spec" => array("8GB", "5G", "4360mAH", "256GB")),
        array("SKU" => "22334", "Merk" => "Sony", "Model" => "Xperia 1 III", "Harga" => 21000000, "url_gambar" => "img/xperia.webp", "spec" => array("12GB", "5G", "4500mAH", "256GB")),
        array("SKU" => "33445", "Merk" => "Nokia", "Model" => "X20", "Harga" => 6000000, "url_gambar" => "img/x20.jpeg", "spec" => array("6GB", "5G", "4470mAH", "128GB")),
        array("SKU" => "44556", "Merk" => "Google", "Model" => "Pixel 6", "Harga" => 14000000, "url_gambar" => "img/pixel6.jpeg", "spec" => array("8GB", "5G", "4600mAH", "128GB")),
        array("SKU" => "55667", "Merk" => "Asus", "Model" => "ROG Phone 5", "Harga" => 20000000, "url_gambar" => "img/rog.jpeg", "spec" => array("16GB", "5G", "6000mAH", "256GB")),
        array("SKU" => "66778", "Merk" => "Motorola", "Model" => "Edge 20 Pro", "Harga" => 9000000, "url_gambar" => "img/edge.jpg", "spec" => array("12GB", "5G", "4500mAH", "256GB")),
        array("SKU" => "77889", "Merk" => "LG", "Model" => "Wing", "Harga" => 13000000, "url_gambar" => "img/lg.webp", "spec" => array("8GB", "5G", "4000mAH", "128GB")),
        array("SKU" => "88990", "Merk" => "ZTE", "Model" => "Axon 30", "Harga" => 8500000, "url_gambar" => "img/axon.jpeg", "spec" => array("8GB", "5G", "4200mAH", "128GB")),
        array("SKU" => "99001", "Merk" => "Lenovo", "Model" => "Legion Phone Duel", "Harga" => 15000000, "url_gambar" => "img/legion.webp", "spec" => array("12GB", "5G", "5000mAH", "256GB")),
        array("SKU" => "66789", "Merk" => "Meizu", "Model" => "18 Pro", "Harga" => 12000000, "url_gambar" => "img/meizu.avif", "spec" => array("8GB", "5G", "4500mAH", "256GB")),
        array("SKU" => "77890", "Merk" => "BlackBerry", "Model" => "Key2", "Harga" => 5000000, "url_gambar" => "img/bbkey2.webp", "spec" => array("6GB", "4G", "3500mAH", "64GB")),
        array("SKU" => "88991", "Merk" => "HTC", "Model" => "U12+", "Harga" => 7000000, "url_gambar" => "img/htc.jpg", "spec" => array("6GB", "4G", "3500mAH", "128GB")),
    );
    // tambahkan setidaknya 20 data
    
    ?>
    
    <div class="side-panel">
        <img class="content-sidePanel" src="cat1.jpg" alt="" id="logo">
        <p class="content-sidePanel" id="toko-hape">WEBPROG CELL</p>
    </div>
    <div class="content">
        <?php
        foreach ($arrHape as $hape) {
            $sku = $hape["SKU"];
            $merk = $hape["Merk"];
            $model = $hape["Model"];
            $harga = number_format($hape["Harga"], 0, ',', '.');
            $url_gambar = $hape["url_gambar"];
            echo "<div class='card'>";
            echo "<img class='img_hape' src='$url_gambar'>";

            echo "<p class='nama_hape'>$merk $model</p>";
            echo "<p class='desc'>SKU:$sku</p>";

            echo "<p class='desc'></p>";
            echo "<p>Rp$harga</p>";
            foreach ($hape["spec"] as $spec_hape) {
                echo "<p class='spec'>$spec_hape | </p>";
            }
            echo "<br>";

            echo "<input type='checkbox' class='checked' id='".$sku."'value='Pilih'".">";
            echo "<label for='".$sku."'>Pilih </label>";
            echo "</div>";
            echo "<br>";
        }
        ?>
        <input type="button" value="bandingkan" name="bandingkan" id="bandingkan">
    </div>

</body>

</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="side-panel">
        <img class="content-sidePanel" src="img/logo.png" alt="" id="logo">
        <p class="content-sidePanel" id="toko-hape">WEBPROG CELL</p>
    </div>
    <div class="content">
        <div class="hp">
            <?php
            if (isset($_GET["bandingkan"])) {
                $checked = $_GET["checked"];
                foreach ($_SESSION['arrHape'] as $hape) {
                    if (in_array($hape['SKU'], $checked)) {
                        $sku = $hape["SKU"];
                        $merk = $hape["Merk"];
                        $model = $hape["Model"];
                        $harga = number_format($hape["Harga"], 0, ',', '.');
                        $url_gambar = $hape["url_gambar"];
                        echo "<div class='card'>";
                        echo "<img class='img_hape' src='$url_gambar'>";

                        echo "<p class='nama_harga'>$merk $model</p>";
                        echo "<p class='desc'>SKU:$sku</p>";
                        echo "<p class='nama_harga'>Rp$harga</p>";

                        foreach ($hape["spec"] as $spec_hape) {
                            echo "<p class='spec'>$spec_hape | </p>";
                        }
                        echo "</div>";
                    }
                }
            }
            ?>
        </div>
        <form action="bandingkan.php" method="get">
            <p><input type="submit" value="Kembali" name="kembali" id="kembali"></p>
            <?php
            if (isset($_GET["kembali"])) {
                header("location: index.php");
            }
            ?>
        </form>
    </div>
</body>

</html>
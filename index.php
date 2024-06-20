<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .side-panel{
            height: 100%;
            width: 250px;
            top: 0;
            left: 0;
            /* z-index: 1; */
            position: fixed;
            overflow-x: hidden;
            padding-top: 50px;
            background-color: yellow;

        }
        #logo{
            width: 150px;
            height: 150px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius: 50%;
            padding-top: 30px;
            padding-bottom: 30px;
        }
        #toko_hape{
            text-align: center;
            display: block;
            margin-left: auto;
            margin-right: auto;
            padding-top: 30px;
            padding-bottom: 30px;
        }
        .content{
            
        }
    </style>
</head>
<body>
    <?php
        $arrHape = array (
            array("SKU"=>"12345", "Merk"=>"Samsung", "Model"=>"Galaxy S22", "Harga" => 18000000, "url_gambar"=>"https://picsum.photos/175/100", "spec"=>array("4GB", "5G", "5150mAH", "256GB"))
            , array("SKU"=>"54321", "Merk"=>"Xiaomi", "Model"=>"Mi 11 Pro", "Harga" => 9500000, "url_gambar"=>"https://picsum.photos/175/100", "spec"=>array("8GB", "5G", "5050mAH", "256GB"))
            , array("SKU"=>"AB012", "Merk"=>"Redmi", "Model"=>"Redmi Note 12", "Harga" => 6500000, "url_gambar"=>"https://picsum.photos/175/100", "spec"=>array("6GB", "5G", "5350mAH", "256GB"))
        );
        // tambahkan setidaknya 20 data
        
    ?>
    <div class="side-panel">
        <img src="cat1.jpg" alt="" id="logo">
        <p id="toko-hape">NAMA TOKO HAPE</p>
    </div>
    <div class="content">
        <?php

        ?>
        <input type="button" value="bandingkan" name="bandingkan" id="bandingkan">
    </div>

</body>
</html>
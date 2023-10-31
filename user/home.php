<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card-body a {
            background-color: rgb(25, 25, 119);
            font-size: 17px;
        }

        .card-body a:hover {
            background-color: red;
        }

        .card {
            margin-bottom: 7px;
            font-weight: bold;
        }

        .card .card-img-top {
            width: 250px;
            height: 250px;
            margin-left: 20px;
            padding: 5px 0px;
        }

        #gia1 {
            color: red;
        }

        #gia {
            font-size: 14px;
        }

        .card-title {
            font-size: 17px;
        }

        .tgh {

            color: blue;
            border: 0px solid white;
            background-color: white;
        }

        .tgh:hover {
            text-shadow: 0 0 3px;
            color: red;
        }
    </style>
</head>

<body>
    <?php include "_banner.php"; ?>
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="container-fuild">
                <div class="row">
                    <?php
                    $i = 0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                        $hinh = $img_path . $img;
                        if (($i == 2) || ($i == 5) || ($i == 8)) {
                            $mr = "mr";
                        } else {
                            $mr = "";
                        }
                        $tt = $price  - (($price * $giamgia) / 100);
                        echo '<div class="col-md-4 pl-3 pr-3 ' . $mr . '">              
                            <div class="card" style="width: 18rem">
                            <a href="' . $linksp . '"> <img src="' . $hinh . '" class="card-img-top" alt="..." /></a>     
                                   
                                    <div class="card-body">
                                            <h5 class="card-title">' . $name . '</h5>
                                            <p class="card-price">
                                                <span id="gia1">' . number_format($tt) . ' VNĐ</span>
                                                <del id="gia">' . $price . ' VNĐ</del>                           
                                            </p>                     
                                            <a href="' . $linksp . '" class="btn btn-success">Mua ngay</a>                             
                                            <form style="margin-top: 20px;" action="index.php?act=addtocart" method="post">
                                                <input type="hidden" name="id" value="' . $id . '">
                                                <input type="hidden" name="name" value="' . $name . '">
                                                <input type="hidden" name="img" value="' . $img . '">
                                                <input type="hidden" name="price" value="' .  $tt = $price  - (($price * $giamgia) / 100) . '">
                                                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" class="tgh">
                                                <i class="fa-solid fa-cart-shopping"></i>                           
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        ';
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php include "_top10.php"; ?>
    </div>
</body>

</html>
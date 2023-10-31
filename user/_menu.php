<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #navbarSupportedContent ul li a {
            font-size: 19px;
            color: rgb(25, 25, 119);
        }

        #navbarSupportedContent ul li a:hover {
            font-size: 19px;
            color: rgb(25, 25, 119);
            text-shadow: 0 0 5px;
        }

        .container-fluid a:hover {
            color: rgb(25, 25, 119);
            text-shadow: 0 0 5px;
        }

        .container-fluid a {
            font-size: 19px;
            color: rgb(25, 25, 119);
            text-decoration: none;
        }

        .tk {
            display: flex;
            gap: 10px;
        }

        .gh {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=gioithieu">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=lienhe">liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=gopy">Góp ý</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=hoidap">Hỏi đáp</a>
                    </li>
                </ul>
                <div style="width: 18rem">
                    <form class="tk" method="post" action="index.php?act=sanpham">
                        <input type="text" name="kyw" class="form-control" placeholder="Nhập tên sản phẩm" />

                        <input class="btn btn-primary" type="submit" name="timkiem" value="Tìm Kiếm">
                    </form>
                </div>
                <div class="gh">
                    <a href="index.php?act=addtocart"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>
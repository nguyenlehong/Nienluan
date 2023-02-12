<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>SALE UPTO 70% TOÀN BỘ SẢN PHẨM </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" type="text/css" href="view/style.css">
    <script src='main.js'></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- link dat o footer menu  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <!-- link dat o footer menu  -->

</head>

<body>
    <!-- menu -->
    <div class="menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="container-fluid">
                <a class="navbar-brand" href="#">NGUYEENshoop </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="index.php?act=trangchu">TRANG CHỦ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?act=dmsanpham">BỘ SƯU TẬP</a>
                        </li class="nav-item">


                        <!-- kiem tra dang nhap -->
                        <?php
      if(isset($_SESSION['tentk'])){
        extract($_SESSION['tentk']);
      ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <ion-icon name="person-outline"></ion-icon><?=$tentk?>
                            </a>
                            <ul class="dropdown-menu active" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item " href="index.php?act=capnhattk">Cập nhật tài khoản</a></li>

                                <li><a class="dropdown-item " href="index.php?act=dangxuat">Đăng xuất</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?act=mydh">
                                <ion-icon name="reader-outline"></ion-icon> Đơn hàng
                            </a>
                        </li>
                        <?php
      }else{    
      ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <ion-icon name="person-outline"></ion-icon> TÀI KHOẢN
                            </a>
                            <ul class="dropdown-menu active" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item " href="index.php?act=dangky">Đăng nhập </a></li>
                                <li><a class="dropdown-item " href="index.php?act=dangky">Đăng ký</a></li>
                            </ul>
                        </li>

                        <?php 
               }
              ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?act=giohang">
                                <ion-icon name="cart-outline"></ion-icon> GIỎ HÀNG
                            </a>
                        </li>

                        <!-- kiem tra dang nhap -->
                    </ul>
                    <form class="d-flex" action="index.php?act=sanpham" method="POST">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            name="kyw">
                        <button class="btn btn-outline-success" type="submit" name="timkiem">Search</button>
                    </form>

                </div>
            </div>
        </nav>
    </div>
    <!-- menu -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" type="text/css" href="../view/style.css">
    <script src='main.js'></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   
   <!-- link dat o foodter --> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> 

</head>
<body>
     <!-- menu -->
<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">NGUYEENshop </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"><ion-icon style="font-size: 20px;"  name="home"></ion-icon> TRANG CHỦ </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="index.php?act=adddm" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 DANH MỤC</a> 
                <ul class="dropdown-menu active" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item " href="index.php?act=listdm">Danh sách </a></li>  
                  <li><a class="dropdown-item " href="index.php?act=adddm">Thêm danh mục </a></li>  
                </ul>
              </li> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="index.php?act=adddm" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 SẢN PHẨM</a> 
                <ul class="dropdown-menu active" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item " href="index.php?act=listsp">Danh sách sản phẩm </a></li>  
                  <li><a class="dropdown-item " href="index.php?act=addsp">Thêm sản phẩm </a></li>  
                </ul>
              </li> 

              <li class="nav-item">
                <a class="nav-link active" href="index.php?act=listkh"><ion-icon style="font-size: 20px;" name="people-outline"></ion-icon> KHÁCH HÀNG</a>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="index.php?act=listnv" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 NHÂN VIÊN</a> 
                <ul class="dropdown-menu active" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item " href="index.php?act=listnv">Danh sách nhân viên </a></li>  
                  <li><a class="dropdown-item " href="index.php?act">Thêm nhân viên </a></li>  
                </ul>
              </li> 
              <!-- <li class="nav-item">
                <a class="nav-link active" href="index.php?act=thongke"><ion-icon style="font-size: 20px;" name="trending-up"></ion-icon> THỐNG KÊ</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link active" href="index.php?act=dsdonhang"><ion-icon style="font-size: 20px;" name="reader-outline"></ion-icon> ĐƠN HÀNG</a>
              </li>              -->
              <?php
      if(isset($_SESSION['tennv'])){
        extract($_SESSION['tennv']);
      ?>
              <li class="nav-item dropdown " >
                <a class="nav-link dropdown-toggle active" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <ion-icon style="font-size: 20px;" name="person-outline"></ion-icon> <?=$tennv?></a> 
                <ul class="dropdown-menu active" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item " href="index.php?act=dangxuat">Đăng xuất </a></li>  
                </ul>
              </li> 
                    <?php }?>

            </ul> 
                           
          </div>
       
        </div>
      </nav>
     
</div> 
                                            <!-- menu -->
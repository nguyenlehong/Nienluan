
<?php 
session_start();
include "view/menu.php";
include "global.php";
include "model/sanpham.php";
include "model/pdo.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/giohang.php";
// $spnew=loadall_sanpham_home();
$spnew=loadall_sanpham_home();
$sphome=loadall_sanpham_new();
$dsdm=loadall_danhmuc();
$dssp=sp_cart();
if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act){
        case'trangchu':
            include "view/hinhgiamgia.php";
            include "view/spmoi.php";
            include "view/hinhgiamgia2.php";          
            include "view/dkbantin.php";
            include "view/foodter.php";            
            break;
        case 'dangky':           
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $tentk=$_POST['tentk'];
                $matkhau=$_POST['matkhau'];
                $sdt=$_POST['sdt'];
                $diachi=$_POST['diachi'];
                them_taikhoan($tentk,$matkhau,$sdt,$diachi);
                $thongbao="Đã đăng ký thành công!";
            }
            include "view/dangky.php";
            break;
        case 'dangnhap':
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $tentk=$_POST['tentk'];
                $matkhau=$_POST['matkhau'];
                $kiemtratk=kiemtratk($tentk,$matkhau);
                $kiemtranv=kiemtranv($tentk,$matkhau);
                    if(is_array($kiemtratk)){
                        $_SESSION['tentk']=$kiemtratk;
                        header('location: index.php?act=trangchu');			
                    }else{
                        $thongbaodn="Tài khoản không tồn tại!";
                        }
                    if(is_array($kiemtranv)){
                        $_SESSION['tennv']=$kiemtranv;
                        header('location:admin/index.php');			
                    }else{
                        $thongbaodn="Tài khoản không tồn tại!";
                        }            
                }   
            include "view/dangky.php";
            break;
        case 'dangxuat':
            session_unset();
            header('location: index.php?act=trangchu');
            break;
        case 'capnhattk':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tentk=$_POST['tentk'];
                $matkhau=$_POST['matkhau'];
                $sdt=$_POST['sdt'];
                $diachi=$_POST['diachi'];
                $id=$_POST['id'];  
                capnhat_taikhoan($id,$tentk,$matkhau,$sdt,$diachi);
                $_SESSION['tentk']=kiemtratk($tentk,$matkhau);
                $thongbaocapnhat="Cập nhật thành công! Sẽ chuyển về trang đăng nhập sau 3s";
                session_unset();
                header('refresh:5; url=index.php?act=dangky');	
            }
            include "view/capnhattk.php";
            break;

        case 'dmsanpham':
            include "view/dmsp.php";
            break;
        case 'sanpham':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                $iddm=$_GET['iddm'];								
            }else{
                $iddm=0;
            }
                $dssp=loadall_sanpham($kyw,$iddm);
                $tendm=load_ten_dm($iddm);
                include "view/spcungdm.php";
            break;
        
            case 'giohang':
                include "view/giohang.php";
                break;
            case 'themvaogio':
                if(isset($_POST['them'])&&($_POST['them'])) {
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    $size=$_POST['size'];
                    
                    if(isset($_POST['soluong'])){
                        $soluong=$_POST['soluong'];
                    }else{
                        $soluong=1;
                    }
                    
                    $ttien=$soluong * $price;
                    $spadd=[$id,$name,$img,$price,$soluong,$ttien,$size];
                           array_push($_SESSION['giohang'],$spadd);                
                        }
                       
                include "view/giohang.php";
                break;
            case 'xoagh':
                if(isset($_GET['idgio'])){
                    $idgio=$_GET['idgio'];
                    unset($_SESSION['giohang'][($_GET['idgio'])]);
                    // array_slice($_SESSION['giohang'],$_GET['idgh'],1);
                }else{
                    $_SESSION['giohang']=[];
                }               
                header('location: index.php?act=giohang');
                break;
                
            case 'donhang':
                include "view/donhang.php";
                break;
            case 'xacnhandon':
                if(isset($_POST['mua'])&&($_POST['mua'])){
                    if(isset($_SESSION['tentk'])){ 
                        $idtk=$_SESSION['tentk']['id'];
                    }else{ 
                       $id=0;
                    }
                    $tentk=$_POST['tentk'];
                    $diachi=$_POST['diachi'];
                    $sdt=$_POST['sdt'];
                    $pttt=$_POST['pttt'];
                    $ngaydathang=date('h:i:sa d/m/Y');
                    $tongdonhang=tongdonhang();
                    $iddh =them_hoadon($idtk,$tentk,$diachi,$sdt,$pttt,$ngaydathang,$tongdonhang);
                    foreach($_SESSION['giohang'] as $cart){
                        themgiohang($_SESSION['tentk']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$cart[6],$iddh);
                    } 
                    $_SESSION['giohang']=[];
                }
            
                $thongbao="Đặt hàng thành công!";
                $dh=xacnhandon($iddh);
                $gh=xacnhangh($iddh);
                include "view/xacnhandon.php";
                break;
            case 'mydh':            
              $mydh=mydonhang($_SESSION['tentk']['id']);               
                    include "view/mydonhang.php";
                    break;
            case 'chitietgiohang':
                $mydh=mydonhang($_SESSION['tentk']['id']);     
                if(isset($_GET['iddh'])&&($_GET['iddh']))
                $iddh=$_GET['iddh'];
                $dssp=sp_cart("",$iddh);           
                include "view/chitietgiohang.php";
			    break;
            case 'chitietsp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $chitietsp= load_1sp($id);
                    extract($chitietsp);}
                include "view/chitietsp.php";
                break;
        }  
    }
    //  include "view/foodter.php"; 

    ?>
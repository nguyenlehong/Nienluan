<?php
ob_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/giohang.php";
$dssp1=sp_cart2();
session_start();
include "menu.php";
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act){
        case 'adddm':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao="Thêm danh mục thành công";             
            }
            include "danhmuc/adddm.php";
            break;

        case 'listdm':
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
            delete_danhmuc($_GET['id']);
            }
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;   
        case 'updatedm':
            include "danhmuc/updatedm.php";
            break;
            
        case 'addsp':
            if(isset($_POST['luu'])&&($_POST['luu'])){
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota'];
                $hinh=$_FILES['hinh']['name'];
                $target_dir ="../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){                    
                } else {
                }    
                insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                $thongbao="Thêm sản phẩm thành công";
            }
            $listdanhmuc=loadall_danhmuc();
            include "sanpham/addsp.php";
            break;
        case 'listsp':
            if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
            }else{
                $kyw='';
                $iddm=0;
            }
            $listdanhmuc=loadall_danhmuc();
            $listsanpham=loadall_sanpham($kyw,$iddm);
            include "sanpham/listsp.php";
             break;
        case 'xoasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_sanpham($_GET['id']);
                }
            $listsanpham=loadall_sanpham();
            include "sanpham/listsp.php";
            break;

        case 'updatesp':
            include "sanpham/updatesp.php";
            break;
        case 'listkh':
            $danhsachtk=danhsachtk();
            include "khachhang/listkh.php";
            break;
        case 'listnv':
             $danhsachnv=danhsachnv();
            include "nhanvien/listnv.php";
            break;
        case 'xoatk':
            if(isset($_GET['id'])&&($_GET['id']>0)){
               xoa_taikhoan($_GET['id']);
                }
            $danhsachtk=danhsachtk();
            include "khachhang/listkh.php";
            break;
        case 'xoanv':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                   xoa_taikhoannv($_GET['id']);
                    }
                $danhsachnv=danhsachnv();
                include "nhanvien/listnv.php";
                break;
        case 'dsdonhang':
            $dsdonhang=loaddonhang(-1);
            include "donhang/dsdonhang.php";
            break;
        case 'xoadh':
            if(isset($_GET['id'])&&($_GET['id']>0)){
            delete_dh($_GET['id']);
            }
            $dsdonhang=loaddonhang(-1);
            include "donhang/dsdonhang.php";
            break;
        case 'capnhatdh':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sql="select * from donhang where id=".$_GET['id'];
                $cndh=pdo_query_one($sql);
            }
            include "donhang/capnhatdonhang.php";
            break;
        case 'capnhattrangthaidh':
            if(isset($_POST['luu'])&&($_POST['luu'])){
            $id=$_POST['id'];
            $trangthai=$_POST['trangthai'];
            $sql="update donhang set trangthai='$trangthai' where id=".$id;
            pdo_execute($sql);
            $thongbao="Cập nhật thành công";            
            
            $sql="select * from donhang order by id desc";
            $cndh=pdo_query_one($sql);
           
             }
            include "donhang/capnhatdonhang.php";

            break; 
        case 'thongtindh':                      
            if(isset($_GET['id'])&&($_GET['id']))
            $sql="select * from donhang";
            $cndh=pdo_query_one($sql);
            $id=$_GET['id'];
            $dssp1=sp_cart2("",$id);
            
            include "donhang/chitietdh.php";
            break;
        case 'listhd':
            include "hoadon/listhd.php";
            break;
        case 'dangxuat':
            session_unset();
            header('location: ../index.php?act=trangchu');
            ob_end_flush();
            break;  
        default:
            // include "foodter.php";
            $dsdonhang=loaddonhang(-1);
            include "donhang/dsdonhang.php";
           
        }  
        
}else{
    // include "foodter.php";         
    $dsdonhang=loaddonhang(-1);
    include "donhang/dsdonhang.php";   
}
// include "foodter.php";  

?>
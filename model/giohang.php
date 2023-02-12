<?php
function tongdonhang(){
    $tongtien=0;
  foreach($_SESSION['giohang'] as $cart) {
    extract($cart);
    $thanhtien=$cart['3']*$cart['4'];
    $tongtien+=$thanhtien;
}
return $tongtien;
}

function them_hoadon($idtk,$tentk,$diachi,$sdt,$pttt,$ngaydathang,$tongdonhang){
	$sql="insert into donhang(idtk,tentk,diachi,sdt,pttt,ngaydathang,tongdonhang) values('$idtk','$tentk','$diachi','$sdt','$pttt','$ngaydathang','$tongdonhang')";
	return pdo_execute_return_lastInsertId($sql);
}
function themgiohang($idtk,$idsp,$hinh,$tensp,$gia,$soluong,$thanhtien,$size,$iddh){
	$sql="insert into giohang(idtk,idsp,hinh,tensp,gia,soluong,thanhtien,size,iddh) values('$idtk','$idsp','$hinh','$tensp','$gia','$soluong','$thanhtien','$size','$iddh')";
	return pdo_execute($sql);
}
function donhang($id){
	$sql="select * from bill where id=".$id;
	$bill=pdo_query_one($sql);
	return $bill;
}
function xacnhandon($id){
	$sql="select * from donhang where id=".$id;
	$dh=pdo_query_one($sql);
	return $dh;
}
function xacnhangh($iddh){
	$sql="select * from giohang where iddh=".$iddh;
	$gh=pdo_query($sql);
	return $gh;
}
function giohangchitiet($gh){
	global $img_path;
	$tong=0;
	foreach ($gh as $cart) {
		$hinh=$img_path.$cart['hinh'];
		$tong+=$cart['thanhtien'];
echo '	
	<tr>
	<td><img src="'.$hinh.'" alt="" height="80px"</td>
	<td>'.$cart['tensp'].'</td>
	<td>'.$cart['soluong'].'</td>
	<td>'.$cart['gia'].'</td>
  </tr>';
	}
	echo '
	<tr>
	<td></td>
	<td></td>
	<td></td>
	<td>'.$tong.'</td>
  </tr>
	
	';
}
function mydonhang($idtk){
	$sql="select * from donhang where idtk=".$idtk;
	$mydh=pdo_query($sql);
	return $mydh;
}
// function sp_cart($iddh){
// 	$sql="select * from giohang where iddh=".$iddm;
// 	$mydh=pdo_query($sql);
// 	return $mydh;
// }
function sp_cart($kyw="",$iddh=0){
	$sql="select * from giohang where 1";
	if($kyw!=""){
		$sql.=" and name like '%".$kyw."%'";
	}
	if($iddh>0){
		$sql.=" and iddh ='".$iddh."'";
	}
	$sql.=" order by id desc";
	$listdh=pdo_query($sql);
	return $listdh; 
}
function sp_cart2($kyw="",$id=0){
	$sql="select * from giohang where 1";
	if($kyw!=""){
		$sql.=" and name like '%".$kyw."%'";
	}
	if($id>0){
		$sql.=" and iddh ='".$id."'";
	}
	$sql.=" order by id desc";
	$listdh=pdo_query($sql);
	return $listdh; 
}

function loaddonhang($idtk){
	$sql="select * from donhang where 1";
	if($idtk>=0)
	$sql=" and idtk=".$idtk; 
	$sql.=" order by id desc";
	$loaddh=pdo_query($sql);
	return $loaddh;
}
function  delete_dh($id){
	$sql="delete from donhang where id=".$id;
	pdo_execute($sql);
}
?>

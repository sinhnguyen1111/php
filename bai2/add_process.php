<?php
	session_start();
	if(isset($_POST['msv'])){
		$msv = $_POST['msv'];
	}
	if(isset($_POST['user'])){
		$hoten = $_POST['user'];
	}
	if(isset($_POST['phone'])){
		$dienthoai = $_POST['phone'];
	}
	if(isset($_POST['mail'])){
		$mail = $_POST['mail'];
	}
	if(isset($_POST['gender'])){
		$gioitinh = $_POST['gender'];
	}
	if(isset($_POST['addr'])){
		$diachi = $_POST['addr'];
	}
	$_SESSION['info'][$msv]=[
		'msv'=> $msv,
		'user'=> $hoten,
		'phone' => $dienthoai,
		'mail' => $mail,
		'gender' => $gioitinh,
		'addr' => $diachi
	];
	setcookie('msg','Thêm mới thành công!!', time()+10);
	header('location: list.php'); /*đẩy về trang list.php*/


?>
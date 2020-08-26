<?php
echo 'THÔNG TIN SINH VIÊN'.'<br>';
	echo '<pre>';
		echo 'Mã sinh viên: '.$_POST['msv'].'<br>';
		echo 'Họ và tên: '.$_POST['user'].'<br>';
		echo 'Số điện thoại: '.$_POST['phone'].'<br>';
		echo 'Email: '.$_POST['mail'].'<br>';
		echo 'Giới tính: '.$_POST['gender'].'<br>';
		echo 'Địa chỉ: '.$_POST['addr'].'<br>';
	echo '</pre>';
?>
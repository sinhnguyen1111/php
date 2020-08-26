<?php
	session_start();
	if(isset($_GET['msv'])){
		$msv = $_GET['msv'];
	}
	if(isset($_SESSION['info'])){
		$data = $_SESSION['info'][$msv];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<h1>THÔNG TIN SINH VIÊN</h1>
	<ul>
		<li>
			<?php echo 'Mã sinh viên:'.$data['msv']; ?>
		</li>
		<li>
			<?php echo 'Họ và tên:'.$data['user']; ?>
		</li>
		<li>
			<?php echo 'Email:'.$data['mail']; ?>
		</li>
		<li>
			<?php echo 'Số điện thoại:'.$data['phone']; ?>
		</li>
		<li>
			<?php echo 'Giới tính:'.$data['gender']; ?>
		</li>
		<li>
			<?php echo 'Địa chỉ:'.$data['addr']; ?>
		</li>
	</ul>
	
</body>
</html>
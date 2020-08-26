<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		p{
			font-size: 20px;
			font-weight: bold;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<p>ZENT GROUP - PHP - Thực hành về gửi dữ liệu cùng POST</p>
		<form action="post.php" method="POST">
			<label for="">Mã sinh viên</label><br>
			<input type="text" class="form-control" name="msv" placeholder="Nhập mã sinh viên"><br>
			<label for="">Họ và tên</label><br>
			<input type="text"  class="form-control" name="user" placeholder="Nhập họ và tên"><br>
			<label for="">Số điện thoại</label><br>
			<input type="text"  class="form-control" name="phone" placeholder="Nhập số điện thoại"><br>
			<label for="">Email</label><br>
			<input type="text" class="form-control" name="mail" placeholder="Nhập email"><br>
			<label for="">Giới tính</label><br>
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			<input type="radio" name="gender" value="Other">Other<br>
			<label for="">Địa chỉ</label><br>
			<input type="text" class="form-control" name="addr" placeholder="Nhập địa chỉ"><br>
			<input type="submit" value="Lưu thông tin">
		</form>
	</div>
</body>
</html>
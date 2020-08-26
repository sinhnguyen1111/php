<?php
	session_start();
	$listSp=$_SESSION['cart'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<style>
			table{
				/*width: 40%;*/
				margin: 0 auto;
				margin-top: 20px;
			}
		</style>
</head>

<body>
	<?php
		if(isset($_COOKIE['msg'])){
	?>
		<div class="alert alert-success">
			<strong>Thông báo: </strong>
			<?php 
				echo $_COOKIE['msg']; 
			?>
		</div>
	<?php
		}
	?>
	<table border="1px solid black">
		<tr>
			<td colspan="6"></td>
			<td><a href="index.php">Tiếp tục mua hàng</a></td>
		</tr>
		<tr>
			<th style="text-align: center" colspan="7">Thông tin giỏ hàng </th>
		</tr>
		<tr>
			<th>ID</th>
			<th>Tên sản phẩm</th>
			<th>Số lượng</th>
			<th>Đơn giá</th>
			<th>Thành tiền</th>
			<th>Thời gian cập nhật</th>
			<th></th>
		</tr>
		<?php
		$tong=0;
		foreach ($listSp as $key=>$value) {
			
		?>
		<tr>
			<td> <?php echo $value['msp']; ?></td>
			<td> <?php  echo $value['tensp']; ?></td>
			<td> <?php echo $value['soluong']; ?></td>
			<td> <?php echo ($value['dongia']); ?></td>
			<td> <?php echo ($value['soluong']*$value['dongia']); ?></td>
			<td> <?php echo date("d/m/y h:i:s",time());?></td>
			<td><a href="delete.php?msp=<?php echo $key ?>">Xóa khỏi giỏ hàng</a></td>
		</tr>
	<?php
		$tong = $tong+($value['dongia']*$value['soluong']);
		}
	?>
	<tr>
		<td colspan="4" align="center">Tổng tiền</td>
		
		<td><?php echo $tong ?></td>
		<td colspan="2"></td>

	</tr>
	</table>
</body>
</html>
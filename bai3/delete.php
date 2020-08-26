<?php
	session_start();
	$msp=$_GET['id'];
	if(isset($_GET['msp'])){
		$msp = $_GET['msp'];
		unset($_SESSION['cart'][$msp]);
		setcookie('msg','Xóa thành công',time()+10);
	}
	header('location: shopping_cart.php');
	
?>
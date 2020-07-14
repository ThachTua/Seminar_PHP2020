<?php 
	@session_start();
	$id = $_GET['id'];
	$sl=$_GET['soluong'];
	$prd = NULL;
	if(isset($_SESSION['cart'][$id]))
	{
		$prd = $_SESSION['cart'][$id] + $sl;
	}
	else
	{
		$prd = 1;
	}
	$_SESSION['cart'][$id] = $prd;
	//header('location:shopping-cart.php');
	header('location:chitiet.php?id='."$id");
?>
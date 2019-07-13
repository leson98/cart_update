<?php 
	$lifetime = 5*24*24*60;
	$path = '/';
	session_set_cookie_params($lifetime,$path);
	session_start();

	include('../model/m_category.php');
	include('../model/m_product.php');
	$action = filter_input(INPUT_POST, 'action');
	if(empty($action))
	{
		$action = filter_input(INPUT_GET, 'action');
		if(empty($action))
		{
			$action = "list_product";
		}
	}

switch ($action) {
	case 'list_product':
		include('../view/list_product.php');

		break;
	case 'search_category':
		$categoryID=filter_input(INPUT_GET, 'categoryID');
		$products = get_product_by_categoryID($categoryID,$products);
		include('../view/list_product.php');
		# code...
		break;
	case 'add_cart':
		$product_key=filter_input(INPUT_POST, 'product_key');
		$quantity = filter_input(INPUT_POST, 'quantity');
		if(check_product_key($_SESSION['shop_cart_ph29'],$product_key))
		{
			$price=$products[$product_key]['price'];
			$_SESSION['shop_cart_ph29'][$product_key]['quantity']+=$quantity;
			$qty = $_SESSION['shop_cart_ph29'][$product_key]['quantity'];
			$_SESSION['shop_cart_ph29'][$product_key]['total']=$price*$qty;
		}else{
			$price=$products[$product_key]['price'];
			$total=$quantity*$price;
			$product = array(
				'productID'=>$products[$product_key]['productName'],
				'price'=>$products[$product_key]['price'],
				'quantity'=>$quantity,
				'total'=>$total
			);
			$_SESSION['shop_cart_ph29'][$product_key]=$product;		
		}
		include('../view/list_product.php');
		
		break;
	case 'show_list_cart':
		if(isset($_SESSION['shop_cart_ph29']))
		{
			$list_cart = $_SESSION['shop_cart_ph29'];
		}else{
			$list_cart=array();
		}
		$sumtotal = 0;
		foreach ($list_cart as $key => $value) {
			$sumtotal+=$value['total'];
			# code...
		}
		include('../view/list_cart.php');
		# code...
		break;
	
	default:
		# code...
		break;
}

 ?>
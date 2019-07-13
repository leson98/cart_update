<?php
	$products =array(
					array('productID'=>1,'productName'=>'iPhone Xs Max 512GB','categoryID'=>'1','price'=>24990000,'image'=>'iphone-xs1.jpg','comment'=>'Là chiếc smartphone cao cấp nhất của Apple '),
					array('productID'=>2,'productName'=>'iPhone Xs 64GB','categoryID'=>'1','price'=>22390000,'image'=>'iphone-xs2.png','comment'=>'những nâng cấp mạnh mẽ về phần cứng'),
					array('productID'=>3,'productName'=>'iPhone 8 Plus 256GB','categoryID'=>'1','price'=>24990000,'image'=>'iphone-8-plus.png','comment'=>'Là chiếc smartphone cao cấp nhất của Apple '),
					array('productID'=>4,'productName'=>'Samsung Galaxy Note 9 512GB','categoryID'=>'2','price'=>22990000,'image'=>'samsung-galaxy-note-9-512gb-blue-400x460.png','comment'=>'Là chiếc smartphone cao cấp của SS'),
					array('productID'=>5,'productName'=>'Samsung Galaxy S9','categoryID'=>'2','price'=>24990000,'image'=>'samsung-galaxy-s9-black-400x460-400x460.png','comment'=>'Là chiếc smartphone cao cấp nhất của Samsung'),
					array('productID'=>6,'productName'=>'Nokia 7 plus','categoryID'=>'4','price'=>8990000,'image'=>'nokia-7-plus-5-400x460.png','comment'=>'Là chiếc smartphone ...'),
					array('productID'=>7,'productName'=>'OPPO Find X','categoryID'=>'3','price'=>20990000,'image'=>'oppo-find-x-2-400x460-400x460.png','comment'=>'Là chiếc smartphone ...')
	);
	function get_product_by_categoryID($ID,$products){
		$result=array();
		foreach ($products as $key => $value) {
			if($value['categoryID']==$ID){
				$result[]=$value;
			}
		}
		return $result;
	}

	function check_product_key($list_cart,$product_key){
		$result = false;
		foreach ($list_cart as $key => $value) {
			if($key==$product_key){
				$result = true;
				break;
			}
		}
		return $result;
	}
?>
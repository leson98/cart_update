<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			body{
				width: 90%;
				margin: 0 auto;
			}
		</style>
	</head>
	<body>
		<h1 class="text-center">My cart</h1>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>ProductID</th>
						<th>ProductName</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($list_cart as $key => $value):?>
					<tr>
						<td><?php echo $key; ?></td>
						<td><?php echo $value['productID']; ?></td>
						<td><?php echo $value['productName']; ?></td>
						<td><?php echo $value['price']; ?></td>
						<td><?php echo $value['quantity']; ?></td>
						<td><?php echo $value['total']; ?></td>
						<td><a href="?action=delete_cart&$product_key= <?php echo $key; ?>">Delete</a></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
				<tr>
					<td colspan="5">Sum total</td>
					<td><?php echo $sumtotal; ?></td>
				</tr>
			</table>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
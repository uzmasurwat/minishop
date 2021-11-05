<?php include_once "autoload.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>All Products</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>


		


	<div class="wrap-table ">
		<a class="btn btn-sm btn-primary font-weight-bold" href="create.php">Add New Product</a>
		<br>
		<br>
		<div class="card shadow-sm">
			<div class="card-body">
				<h2 class="text-primary font-weight-bolder">All Products</h2>
				<table class="table table-striped">
					<thead class="bg-primary">
						<tr>
							<th class="text-light py-4 font-weight-bolder">#</th>
							<th><h5 class="text-light text-center py-1 font-weight-bold">Name</h5></th>
							<th><h5 class="text-light text-center py-1 font-weight-bold">Category</h5></th>
							<th><h5 class="text-light text-center py-1 font-weight-bold">Price</h5></th>
							<th><h5 class="text-light text-center py-1 font-weight-bold">Sale Price</h5></th>							
							<th><h5 class="text-light text-center py-1 font-weight-bold">Photo</h5></th>
							<th><h5 class="text-light text-center py-1 font-weight-bold">Action</h5></th>
						</tr>
					</thead>
					<tbody>
					<?php

						$i = 1;	
		 				$products_data = all('products');


		 				while($product = $products_data->fetch_object()) :
		
					?>
					
					<tr>
						<td><?php echo $i; $i++; ?></td>
						<td style="width: 30%;"><?php echo  $product->name; ?></td>
						<td style="text-align: center;"><?php echo  $product->category; ?></td>
						<td style="text-align: center;"><?php echo  $product->price; ?></td>
						<td style="text-align: center;"><?php echo  $product->sale_price; ?></td>
						<td><img src="media/products/<?php echo $product->photo; ?>" alt=""></td>
					</tr>

					<?php endwhile; ?>



					</tbody>
				</table>
			</div>
		</div>
	</div>








	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>
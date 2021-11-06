## create file shared


<?php include_once "autoload.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Add new Product</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

	<?php
	
		if(isset($_POST['add_product'])){

			//get values
			$name = $_POST['name'];
			$price = $_POST['price'];
			$sprice = $_POST['sprice'];
			$category = $_POST['category'];
			$description = $_POST['description'];

			$slug = slug($name);

			//$photo = $_POST['photo'];


			if(empty($name) || empty($price) || empty($category) || empty($description) ){

				$msg = validate('All fieldsafe required ');

			}else{

				$file_name = move($_FILES['photo'], 'media/products/');


				create("INSERT INTO products (name, slug, price, sale_price, category, description, photo) VALUES  ('$name', '$slug', '$price', '$sprice', '$category', '$description', '$file_name')");

				$msg = validate('Product is Added', 'success');
				
				formClean();
			
			}
		}
	
	?>


	<div class="wrap ">
		<a class="btn btn-sm btn-primary font-weight-bold" href="index.php">All Products</a>
		<br>
		<br>
		<div class="card shadow-sm">
			<div class="card-body">
				<h2 class="text-primary font-weight-bolder">Add New Product</h2>
				<?php
				if (isset($msg)) {
					echo $msg;
				}
				?>
				<form action="" method="POST" enctype="multipart/form-data">

					<div class="form-group">
						<label for="" class="text-primary font-weight-bolder">Product Name</label>
						<input name="name" class="form-control" value="<?php old('name'); ?>" type="text">
					</div>

					<div class="form-group">
						<label for="" class="text-primary font-weight-bolder">Price</label>
						<input name="price" class="form-control" value="<?php old('price'); ?>" type="text">
					</div>

					<div class="form-group">
						<label for="" class="text-primary font-weight-bolder">Sale Price</label>
						<input name="sprice" class="form-control" value="<?php old('sprice'); ?>" type="text">
					</div>

					<div class="form-group">
						<label for="" class="text-primary font-weight-bolder">Category</label>
						<select class="form-control" name="category" id="">
							<option class="text-primary font-weight-bolder" value="">-select-</option>
							<option class="text-primary font-weight-bolder" value="Men Products">Men Products</option>
							<option class="text-primary font-weight-bolder" value="Women Products">Women Products</option>
							<option class="text-primary font-weight-bolder" value="Kids Products">Kids Products</option>
							<option class="text-primary font-weight-bolder" value="Home Decor">Home Decor</option>							
						</select>
					</div>

					<div class="form-group">
						<label for="" class="text-primary font-weight-bolder">Description</label>
						<textarea name="description" id="" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label for=""><a href="assets/media/img/pp_photo/"><img src="assets/media/img/pp_photo/photo-icon.png" widht="50px" height="50px" alt=""></a</label>
						<input name="photo" class="" value="<?php old('photo'); ?>" type="file">
					</div>
				
					<div class="form-group">
						<input name="add_product" class="btn btn-primary rounded-1" type="submit" value="Add Product">
					</div>
				</form>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crud </title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css");?>">
</head>
<body>
<div class="jumbatron">
	<h1 align="center">Crud </h1>
</div>

<div class="container">
	<h1 align="center">edit</h1>

<!--id'e göre aldığı bilgileri taşıyor.-->
	<form 
	action="<?php echo base_url('crud/update/');?><?php echo $singleProduct->id;?>" 
	method="post">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" placeholder="name" class="form-control" 
			value="<?php echo $singleProduct->name; ?>">
		</div>

		<div class="form-group">
			<label for="name">Price</label>
			<input type="text" name="price" placeholder="price" class="form-control" 
			value="<?php echo $singleProduct->price; ?>">
		</div>

		<div class="form-group">
			<label for="name">Quantity</label>
			<input type="text" name="quantity" placeholder="quantity" class="form-control" 
			value="<?php echo $singleProduct->quantity; ?>">
		</div>

		<input type="submit" name="edit" value="update" class="btn btn-primary">


	</form>
</div>



<!-- <?php
	print_r($singleProduct);//veri tabanından bu şekilde almalıyız.
?> -->

<script src="<?php echo base_url("assets/js/jquery-3.2.1.min.js");?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js");?>"></script>
</body>
</html>
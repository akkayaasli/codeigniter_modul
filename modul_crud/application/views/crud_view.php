<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crud Operation</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css");?>">
</head>
<body>
<div class="jumbutron">
	<h1 align="center">Crud App</h1>
</div>	
<div class="container">
	<div class="clear-fix">
		<h3>All Products</h3>
		<a href="#" class="btn btn-primary" style="float:right" data-toggle="modal" data-target="#exampleModal">Add Product</a>
	</div>

	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Product Quantity</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<!--EDİT AND DELETE***-->
			<?php
				foreach($product_details as $products){
			?>

			<tr>
				<td>
					<?php echo $products->name;?>
				</td>
				<td>
					<?php echo $products->price;?>
				</td>
				<td>
					<?php echo $products->quantity;?>
				</td>	
				<td>
					<a href="<?php echo base_url("crud/editProduct/");?>
							<?php echo $products->id;?>" class="btn btn-warning">Edit</a>
					<a href="<?php echo base_url("crud/deleteProduct/");?>
							<?php echo $products->id;?>" class="btn btn-danger">Delete</a>
				</td>								
			</tr>

			<?php };?>

			<!--****EDİT AND DELETE-->
		</tbody>
	</table>
</div>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    	<form action="<?php echo base_url("crud/addProduct");?>" method="post">
	    <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
	    <div class="modal-body">
	        ...
	        <div class="form-group">
	        	<label for="name">Name</label>
	        	<input type="text" name="name" placeholder="enter your name" class="form-control">
	        </div>
	        <div class="form-group">
	          <label for="price">Price</label>
	          <input type="text" name="price" placeholder="enter your price" class="form-control">
	        </div>
	        <div class="form-group">
	          <label for="quantity">Quantity</label>
	          <input type="text" name="quantity" placeholder="enter your quantity" class="form-control">
	        </div>
	       
	    </div>
	    <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <input type="submit" name="insert" value="Add Product" class="btn btn-info">
	    </div>

    	</form>
    </div>
  </div>
</div>


<!--Ürün eklendiğinde,silindiğinde ve güncellendiğinde ve eksik bilgi olduğunda uyarı veriliyor. Şuan eksik bilgi olduğunda uyarı vermiyor. Diğerleri doğru çalışıyor.-->
<?php 
	if($this->session->flashdata('error')){
?>

<div align="center" style="color:#FFF" class="bg-danger">
	<?php 
		echo $this->session->flashdata('error');
	?>
</div>

<?php
	}?>

<?php 
	if($this->session->flashdata('inserted')){
?>

<div align="center" style="color:#fff" class="bg-success">
	<?php 
		echo $this->session->flashdata('inserted');
	?>
</div>

<?php
}
?>


<?php 
	if($this->session->flashdata('updated')){
?>

<div align="center" style="color:#fff" class="bg-success">
	<?php 
		echo $this->session->flashdata('updated');
	?>
</div>

<?php
	}
?>

<?php 
	if($this->session->flashdata('deleted')){
?>

<div align="center" style="color:#fff" class="bg-success">
	<?php 
		echo $this->session->flashdata('deleted');
	?>
</div>

<?php
	}
?>
<script src="<?php echo base_url("assets/js/jquery-3.2.1.min.js");?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js");?>"></script>
</body>
</html>
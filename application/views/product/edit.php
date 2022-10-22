<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					Product Detail
					<a class="btn btn-info" href="<?=base_url()?>product/index"> Go Back</a>
				</div>
				<div class="card-body">
					<form class="form" method="post" action="<?=base_url()?>product/update">
						<input type="hidden" name="product_id" value="<?=$product->id?>">
						<label>Name</label>
						<input type="text" class="form-control" value="<?=$product->name?>" required name="name">
						<?php foreach ($all_products as $product){?>
							<input type="checkbox" id="products"
								   <?php if (in_array($product->id, $product_ingredients)){?>
									checked
									<?php } ?>
								   name="products[]" value="<?=$product->id;?>" ><label><?=$product->name;?></label><br>
						<?php }?>

						<button class="btn btn-success" type="submit">Save</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

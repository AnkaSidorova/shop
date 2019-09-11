<?php include ROOT . '/views/layouts/header.php'; ?>
<!-- BODY -->

<div class="container">
	<div class="row">			
		<?php foreach($latestProducts as $product): ?>
		<div class="col col-sm-6 col-md-4 col-lg-3 mb-4">
			<div class="card">
				<a href="/product/<?php echo $product['id']?>">
					<img src="/template/img/her.jpg" class="card-img-top" alt="">
				</a>
				<div class="card-body text-center">
					<h5 class="text-dark"><?php echo $product['name']?></h5>
					<hr>
					<p class="text-secondary"><?php echo $product['price']?> руб.</p>
					<button type="button" class="btn btn-dark">В корзину</button>
				</div>
			</div>
		</div>
		<?php endforeach;?>
	</div>
</div>

<!-- FOOTER -->
<?php include ROOT . '/views/layouts/footer.php'; ?>

<?php include ROOT . '/views/layouts/header.php'; ?>
<!-- BODY -->

<div class="container">
	<div class="row">
		<div class="col">
			<div id="carouselExampleIndicators" class="carousel slide mb-4" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active carousel_height">
						<img class="d-block w-100" src="/template/img/men.jpg" alt="Second slide">
					</div>
					<div class="carousel-item carousel_height">
						<img class="d-block w-100" src="/template/img/women.jpg" alt="Second slide">
					</div>
					<div class="carousel-item carousel_height">
						<img class="d-block w-100" src="/template/img/s.jpg" alt="Third slide">						
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
</div>


<div class="container main_block">
	<div class="row">
		<div class="col">
			<div class="mb-4 text-dark font-weight-bold text-center">ПОСЛЕДНИЕ ТОВАРЫ</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
      <?php foreach ($latestProducts as $product): ?>
				<div class="col col-sm-6 col-md-4 col-lg-3 mb-4">
					<div class="card">
						<a href="/product/<?php echo $product['id'] ?>">
							<img src="<?php echo Product::getImage($product['id']); ?>" alt="фото" class="card-img-top"/>
						</a>
						<div class="card-body text-center">
							<h5 class="text-dark"><?php echo $product['name'] ?></h5>
							<hr>
							<p class="text-secondary"><?php echo $product['price'] ?> руб.</p>
							<a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-dark" data-id="<?php echo $product['id']; ?>">В корзину</a>
						</div>
					</div>
				</div>
      <?php endforeach; ?>
	</div>
</div>

<!-- FOOTER -->
<?php include ROOT . '/views/layouts/footer.php'; ?>

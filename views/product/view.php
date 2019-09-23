<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-5 col-lg-4">
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
								<div class="carousel-item active ">
									<img src="<?php echo Product::getImage($product['id']); ?>" class="card-img-slider d-block w-100" alt="First slide" />
								</div>
								<div class="carousel-item ">
									<img src="<?php echo Product::getImage($product['id']); ?>" class="card-img-slider d-block w-100" alt="Second slide" />
								</div>
								<div class="carousel-item ">
									<img src="<?php echo Product::getImage($product['id']); ?>" class="card-img-slider d-block w-100" alt="Third slide" />
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
		</div>
		<div class="col-sm-12 col-md-7 col-lg-8">
			<p class="code">Арт. <?php echo $product['code']; ?></p>
			<h5 class="name_product"><?php echo $product['name']; ?></h5>
			<div class="description_product font-italic mb-3">
          <?php echo $product['description']; ?>
			</div>
			<div class="mb-3"><?php echo $product['price']; ?> руб.</div>
			<div class="dropdown mb-3">
				<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled>
					Размер
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="#">40-42</a>
					<a class="dropdown-item" href="#">42-44</a>
					<a class="dropdown-item" href="#">44-46</a>
				</div>
				<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled>
					Цвет
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="#">Белый</a>
					<a class="dropdown-item" href="#">Черный</a>
					<a class="dropdown-item" href="#">Синий</a>
				</div>
			</div>
			<a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-dark" data-id="<?php echo $product['id']; ?>">Купить</a>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col">
			<div class="m-b-t text-dark text-center font-weight-bold">ПОХОЖИЕ ТОВАРЫ</div>
			<hr>
			<div class="row">
				<div class="card-deck">
            <?php foreach ($sliderProducts as $product): ?>
							<div class="col-6 col-md-3 col-md-4 mb-4">
								<div class="card">
									<a href="/product/<?php echo $product['id'] ?>">
										<img src="<?php echo Product::getImage($product['id']); ?>" class="card-img-top" alt="">
									</a>
									<div class="card-body">
										<h5 class="card-title"><?php echo $product['name']; ?></h5>
										<p class="card-text"><?php echo $product['price']; ?> руб.</p>
									</div>
								</div>
							</div>
            <?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

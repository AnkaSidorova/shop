<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-7">
			<img src="/template/img/her.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="col-sm-12 col-md-5">
			<p class="code">Арт. <?php echo $product['code']; ?></p>
			<h5 class="name_product"><?php echo $product['name']; ?></h5>
			<div class="description_product font-italic mb-3">
          <?php echo $product['description']; ?>
			</div>
			<div class="mb-3"><?php echo $product['price']; ?> руб.</div>
			<div class="dropdown mb-3">
				<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Размер
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="#">40-42</a>
					<a class="dropdown-item" href="#">42-44</a>
					<a class="dropdown-item" href="#">44-46</a>
				</div>
				<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Цвет
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="#">Белый</a>
					<a class="dropdown-item" href="#">Черный</a>
					<a class="dropdown-item" href="#">Синий</a>
				</div>
			</div>
			<button type="button" class="btn btn-dark">Купить</button>
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
					<div class="col-sm-6 col-md-3 mb-4">
						<div class="card">
							<a href="card.php">
								<img src="/template/img/his.jpg" class="card-img-top" alt="">
							</a>
							<div class="card-body">
								<h5 class="card-title">Платье</h5>
								<p class="card-text">1 200 руб.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 mb-4">
						<div class="card">
							<a href="card.php">
								<img src="/template/img/his.jpg" class="card-img-top" alt="">
							</a>
							<div class="card-body">
								<h5 class="card-title">Платье</h5>
								<p class="card-text">1 200 руб.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 mb-4">
						<div class="card">
							<a href="card.php">
								<img src="/template/img/his.jpg" class="card-img-top" alt="">
							</a>
							<div class="card-body">
								<h5 class="card-title">Платье</h5>
								<p class="card-text">1 200 руб.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 mb-4">
						<div class="card">
							<a href="card.php">
								<img src="/template/img/his.jpg" class="card-img-top" alt="">
							</a>
							<div class="card-body">
								<h5 class="card-title">Платье</h5>
								<p class="card-text">1 200 руб.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
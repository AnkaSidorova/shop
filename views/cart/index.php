<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- BODY -->

<div class="container">
	<div class="row">
		<div class="col">
			<div class="m-b-t text-dark text-center font-weight-bold">ВАША КОРЗИНА</div>
		</div>
	</div>
</div>

<?php if ($productsInCart): ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="container">
				<div class="row">
            <?php foreach ($products as $product): ?>
							<div class="card mb-3">
								<div class="row no-gutters">
									<div class="col-md-4">
										<img src="/template/img/her.jpg" class="card-img" alt="фото">
									</div>
									<div class="col-md-8">
										<div class="card-body">
											<div class="row">
												<div class="col-6 col-md-6 col-lg-12">
													<h6 class="card-title"><?php echo $product['name'] ?></h6>
												</div>
												<div class="col-6 col-md-6 col-lg-12">
													<small class="text-secondary">Арт. <?php echo $product['code'] ?></small>
												</div>
												<div class="col-6 col-md-6 col-lg-12">
													<small class="text-secondary">Цена: <?php echo $product['price'] ?> руб.</small>
												</div>
												<div class="col-6 col-md-6 col-lg-12">
													<small class="text-secondary">Кол-во: <?php echo $productsInCart[$product['id']]; ?> шт</small>
												</div>
												<div class="col">
													<small class="text-secondary">
														<a href="/cart/delete/<?php echo $product['id']; ?>" class="text-danger">удалить</a>
													</small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
            <?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Покупки</h5>
					<p class="card-text">Ваша корзина содержит <?php echo Cart::countItems(); ?> товаров</p>
					<p class="card-text">Сумма <?php echo $totalPrice; ?> руб.</p>
					<a href="/cart/checkout" class="btn btn-dark">Оформить заказ</a>
				</div>
			</div>
		</div>

      <?php else: ?>
				<div class="container">
					<div class="col">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Покупки</h5>
								<p class="card-text">Ваша корзина содержит <?php echo Cart::countItems(); ?> товаров</p>
								<p class="card-text">Сумма 0 руб.</p>
								<a href="/cart/checkout" class="btn btn-dark">Оформить заказ</a>
								<a class="btn text-secondary" href="/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
							</div>
						</div>
					</div>
				</div>
      <?php endif; ?>

	</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- BODY -->

<div class="container">
	<div class="row">
		<div class="col">
			<div class="m-b-t text-dark text-center font-weight-bold">ВАША КОРЗИНА</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="container">
				<div class="row">
					<div class="card mb-3">
						<div class="row no-gutters">
							<div class="col-md-4">
								<img src="template/img/her.jpg" class="card-img" alt="">
							</div>
							<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title">Платье</h5>
									<p class="card-text">
										<small class="text-muted">1 200 руб.</small>
									</p>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolor, dolores est excepturi explicabo facere impedit ipsum iure labore laborum neque, numquam placeat quae rem repudiandae, sed unde vitae? Qui!</p>
								</div>
							</div>
						</div>
					</div>
					<div class="card mb-3">
						<div class="row no-gutters">
							<div class="col-md-4">
								<img src="template/img/her.jpg" class="card-img" alt="">
							</div>
							<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title">Платье</h5>
									<p class="card-text">
										<small class="text-muted">1 200 руб.</small>
									</p>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolor, dolores est excepturi explicabo facere impedit ipsum iure labore laborum neque, numquam placeat quae rem repudiandae, sed unde vitae? Qui!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Покупки</h5>
					<p class="card-text">Ваша корзина содержит 0 товаров</p>
					<p class="card-text">Сумма </p>
					<a href="#" class="btn btn-dark">Оформить заказ</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="myModal" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<span class="close">×</span>
			<h2>Оформление заказа</h2>
		</div>
		<form>
			<div class="form-row">
				<div class="col-md-7 mb-3">
					<label for="validationDefault01">ФИО</label>
					<input type="text" class="form-control" id="validationDefault01" placeholder="ФИО" value="Mark" required>
				</div>
				<div class="col-md-5 mb-3">
					<label for="validationDefaultUsername">E-mail</label>
					<input type="text" class="form-control" id="validationDefaultUsername" placeholder="Почта" value="Mark_Otto@mail.ru" required>
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-7 mb-3">
					<label for="validationDefault03">Адрес</label>
					<input type="text" class="form-control" id="validationDefault03" placeholder="Адрес" required>
				</div>
				<div class="col-md-5 mb-3">
					<label for="validationDefault04">Телефон</label>
					<input type="text" class="form-control" id="validationDefault04" placeholder="Телефон" required>
				</div>
			</div>
			<div class="form-row">
				<div class="col mb-3">
					<label for="validationDefault04">Комментарии к заказу</label>
					<textarea class="form-control" id="validationDefault04" placeholder="Комментарии" required></textarea>
				</div>
			</div>
			<button class="btn btn-dark" type="submit">Отправить</button>
		</form>
	</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

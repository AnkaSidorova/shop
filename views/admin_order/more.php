<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
	<div class="row">
		<div class="col">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<a href="/admin/order/" class="text-danger">Вернуться назад</a>
				</li>
				<li class="list-group-item">
					<a href="/user/logout/" class="text-danger">Выйти</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="container main_block">
	<div class="row">
		<div class="col">
			<div class="mb-4 text-dark font-weight-bold text-center">ПРОСМОТР ЗАКАЗА</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col">
			<form action="" method="post">
				<div class="form-group row">
					<label for="validationUsername" class="col-3 col-form-label">ФИО:</label>
					<div class="col-8">
						<input type="text" readonly class="form-control-plaintext" id="validationUsername" value="<?php echo $order['name_user']; ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="validationEmail" class="col-3 col-form-label">E-mail:</label>
					<div class="col-8">
						<input type="text" readonly class="form-control-plaintext" id="validationEmail" value="<?php echo $order['email_user']; ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="validationAddress" class="col-3 col-form-label">Адрес:</label>
					<div class="col-8">
						<input type="text" readonly class="form-control-plaintext" id="validationAddress" value="<?php echo $order['address_user']; ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="validationNumber" class="col-3 col-form-label">Телефон:</label>
					<div class="col-8">
						<input type="text" readonly class="form-control-plaintext" id="validationNumber" value="<?php echo $order['tel_user']; ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="validationComment" class="col-3 col-form-label">Комментарии к заказу:</label>
					<div class="col-8">
						<input type="text" readonly class="form-control-plaintext" id="validationComment" value="<?php echo $order['comment_user']; ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="validationProducts" class="col-3 col-form-label">Товары:</label>
					<div class="col-8">
						<textarea  readonly class="form-control-plaintext" id="validationProducts"><?php echo $order['products']; ?></textarea>
					</div>
				</div>
				<div class="form-group row">
					<label for="validationAmount" class="col-3 col-form-label">Сумма:</label>
					<div class="col-8">
						<textarea  readonly class="form-control-plaintext" id="validationAmount"><?php echo $order['amount'] . ' руб.' ?></textarea>
					</div>
				</div>
				<div class="form-group row">
					<label for="validationDate" class="col-3 col-form-label">Дата заказа:</label>
					<div class="col-8">
						<input type="text" readonly class="form-control-plaintext" id="validationDate" value="<?php echo $order['date_order']; ?>">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

</body></html>

<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
	<div class="row">
		<div class="col">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<a href="/admin/product/" class="text-danger">Вернуться назад</a>
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
			<div class="mb-4 text-dark font-weight-bold text-center">ИЗМЕНЕНИЕ ПАРОЛЯ АДМИНИСТРАТОРА</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row pb-3">
		<div class="col">
			<form action="" method="post">				
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="validationEmail" class="col-3 col-form-label">Почта:</label>
						<div class="col-8">
							<input type="text" readonly class="form-control-plaintext" id="validationEmail" name="name" value="<?php echo $admin['email']; ?>">
						</div>
					</div>
					<div class="form-group col-md-6">
						<label for="inputPrice">Пароль</label>
						<input type="password" class="form-control" id="inputPrice" name="password" value="<?php echo $admin['password']; ?>">
					</div>
				</div>
				
				<input type="submit" class="btn btn-dark" name="submit" value="Обновить">

			</form>
		</div>
	</div>
</div>

</body>
</html>

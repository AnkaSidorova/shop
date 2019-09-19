<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
	<div class="row">
		<div class="col">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<a href="/admin/redact/" class="text-danger">Вернуться назад</a>
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
			<div class="mb-4 text-dark font-weight-bold text-center">ДОБАВЛЕНИЕ АДМИНИСТРАТОРА</div>
		</div>
	</div>
</div>

<?php if (isset($errors) && is_array($errors)): ?>
	<ul>
      <?php foreach ($errors as $error): ?>
				<li> - <?php echo $error; ?></li>
      <?php endforeach; ?>
	</ul>
<?php endif; ?>

<div class="container">
	<div class="row pb-3">
		<div class="col">
			<form action="" method="post">
				<div class="form-row">
					<div class="form-group col">
						<label for="inputEmail">E-mail</label>
						<input type="text" class="form-control" id="inputEmail" name="email">
					</div>
					<div class="form-group col">
						<label for="inputRol">Роль</label>
						<input type="text" class="form-control" id="inputRol" name="role">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col">
						<label for="inputPassword">Пароль</label>
						<input type="password" class="form-control" id="inputPassword" name="password">
					</div>
					<div class="form-group col">
						<label for="inputName">Имя</label>
						<input type="text" class="form-control" id="inputName" name="name">
					</div>
				</div>
				
				<input type="submit" class="btn btn-dark" name="submit" value="Добавить">
				
			</form>
		</div>
	</div>
</div>

</body>
</html>

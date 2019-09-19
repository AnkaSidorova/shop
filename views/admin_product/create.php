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
			<div class="mb-4 text-dark font-weight-bold text-center">ДОБАВЛЕНИЕ ТОВАРА</div>
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
					<div class="form-group col-md-12">
						<label for="inputName">Название товара</label> 
						<input type="text" class="form-control" id="inputName" placeholder="Платье" name="name" required>
					</div>
				</div>
				
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputCode">Артикул</label>
						<input type="text" class="form-control" id="inputCode" placeholder="123456" name="code" required>
					</div>
					<div class="form-group col-md-6">
						<label for="inputPrice">Цена</label>
						<input type="text" class="form-control" id="inputPrice" placeholder="0" name="price" required>
					</div>
				</div>

				<div class="form-group">
					<label for="validationTextarea">Описание товара</label>
					<input type="text" class="form-control" id="validationTextarea" placeholder="Текст" name="description">
				</div>

				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="inputCategory">Категория</label>
						<input type="number" class="form-control" id="inputCategory" placeholder="1/2/3" name="category_id" value="" required>
					</div>
					<div class="form-group col-md-4">
						<label for="inputState">Статус</label>
						<input type="text" class="form-control" id="inputState" placeholder="active/passive" name="status" value="" required>
					</div>
					<div class="form-group col-md-4">
						<label for="inputRecommended">Рекомендации</label>
						<input type="number" class="form-control" id="inputRecommended" placeholder="0/1" name="recommended" value="" required>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group">
						<label for="inputFile">Выберите основное фото товара</label>
						<input type="file" class="form-control-file" id="inputFile" name="img">
					</div>
				</div>
				
				<input type="submit" class="btn btn-dark" name="submit" value="Добавить">
				
			</form>
		</div>
	</div>
</div>

</body>
</html>

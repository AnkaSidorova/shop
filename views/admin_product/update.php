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
			<div class="mb-4 text-dark font-weight-bold text-center">ОБНОВЛЕНИЕ ТОВАРА</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row pb-3">
		<div class="col">
			<form action="" method="post">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="inputName">Название товара</label>
						<input type="text" class="form-control" id="inputName" name="name" value="<?php echo $product['name']; ?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputCode">Артикул</label>
						<input type="text" class="form-control" id="inputCode" name="code" value="<?php echo $product['code']; ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPrice">Цена</label>
						<input type="number" class="form-control" id="inputPrice" name="price" value="<?php echo $product['price']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="validationTextarea">Описание товара</label>
					<textarea class="form-control" id="validationTextarea" name="description"><?php echo $product['description']; ?></textarea>
				</div>

				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="inputCategory">Категория</label>
						<input type="number" class="form-control" id="inputCategory" name="category_id" value="<?php echo $product['category_id']; ?>">
					</div>
					<div class="form-group col-md-4">
						<label for="inputState">Статус</label>
						<input type="text" class="form-control" id="inputCategory" name="status" value="<?php echo $product['status']; ?>">
					</div>
					<div class="form-group col-md-4">
						<label for="inputRecommended">Рекомендации</label>
						<input type="number" class="form-control" id="inputRecommended" name="recommended" value="<?php echo $product['recommended']; ?>">
					</div>
				</div>

<!--				<div class="form-row">-->
<!--					<div class="form-group">-->
<!--						<label for="inputFile">Выберите основное фото товара</label>-->
<!--						<input type="file" class="form-control-file" id="inputFile" name="img">-->
<!--					</div>-->
<!--				</div>-->
				<input type="submit" class="btn btn-dark" name="submit" value="Обновить">

			</form>
		</div>
	</div>
</div>

</body>
</html>

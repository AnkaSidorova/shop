<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
	<div class="row">
		<div class="col">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<a href="/admin/" class="text-danger">Вернуться назад</a>
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
			<div class="mb-4 text-dark font-weight-bold text-center">СПИСОК ТОВАРОВ</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col">
			<table class="table">
				<thead>
				<tr>
					<th>#</th>
					<th>Название</th>
					<th>Артикул</th>
					<th>Цена</th>
					<th>Удалить</th>
					<th>Редактировать</th>
				</tr>
				</thead>
				<tbody>
        <?php foreach ($productsList as $product): ?>
				<tr>            
					<th scope="row"><?php echo $product['id']; ?></th>
					<td><?php echo $product['name']; ?></td>
					<td><?php echo $product['code']; ?></td>
					<td><?php echo $product['price']; ?></td>
					<td>
						<a href="/admin/product/delete/<?php echo $product['id'] ?>" class="btn btn-dark">Удалить</a>
					</td>
					<td>
						<a href="/admin/product/update/<?php echo $product['id'] ?>" class="btn btn-dark">Редактировать</a>
					</td>
				</tr>
        <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


</body></html>

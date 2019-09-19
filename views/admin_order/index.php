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
			<div class="mb-4 text-dark font-weight-bold text-center">СПИСОК ЗАКАЗОВ</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row width_overflow">
		<div class="col">
			<table class="table">
				<thead>
				<tr>
					<th>#</th>
					<th>Имя</th>
					<th>Почта</th>
					<th>Дата</th>
					<th>Подробнее</th>
				</tr>
				</thead>
				<tbody>
        <?php foreach ($orderList as $order): ?>
					<tr>
						<th scope="row"><?php echo $order['id']; ?></th>
						<td><?php echo $order['name_user']; ?></td>
						<td><?php echo $order['email_user']; ?></td>
						<td><?php echo $order['date_order']; ?></td>
						<td>
							<a href="/admin/order/more/<?php echo $order['id'] ?>" class="btn btn-dark">Подбробнее</a>
						</td>
					</tr>
        <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


</body></html>

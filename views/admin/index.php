<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container main_block">
	<div class="row">
		<div class="col">
			<div class="mb-4 text-dark font-weight-bold text-center">ДОСТУПНЫЕ ФУНКЦИИ</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<a href="/admin/product/" class="href_style">Управление товарами</a>
				</li>
				<li class="list-group-item">
					<a href="/admin/order/" class="href_style">Управление заказами</a>
				</li>
				<li class="list-group-item">
					<a href="/admin/admin_panel/" class="href_style">Админ-панель</a>
				</li>
				<li class="list-group-item">
					<a href="/" class="text-danger">Вернуться на сайт</a>
				</li>
				<li class="list-group-item">
					<a href="/user/logout/" class="text-danger">Выйти</a>
				</li>
			</ul>
		</div>
	</div>
</div>


</body>
</html>

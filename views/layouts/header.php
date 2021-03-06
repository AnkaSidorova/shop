<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>an_shop</title>
	<link rel="stylesheet" href="/template/css/style.css" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	
</head>
<body>

<div class="container main_block">
	<div class="row">
		<div class="col-4">
			<div class="pt-3">
				<a href="/user/login/" class="href_style">Вход</a>
			</div>
		</div>
		<div class="col-4">
			<div class="pt-5 text-center">
				<a href="/" class="name_shop">
					<img src="/template/img/shopping-bag.png" alt="логотип">
					<p>D I E S E L</p>
				</a>
			</div>
		</div>
		<div class="col-4 float-right">
			<div class="basket_shop pt-3">
				<a href="/cart/" class="href_style">Корзина
					<span id="cart-count">(<?php echo Cart::countItems(); ?>)</span>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col">
			<ul class="nav justify-content-center">
				<li class="nav-item">
					<a class="nav-link href_style text-danger" href="/">Главная</a>
				</li>
				<li class="nav-item">
					<a class="nav-link href_style" href="/catalog/">Каталог</a>
				</li>
				<li class="nav-item">
					<a class="nav-link href_style" href="#">Доставка</a>
				</li>
				<li class="nav-item">
					<a class="nav-link href_style" href="#">Контакты</a>
				</li>
			</ul>
			<hr>
		</div>
	</div>
</div>

<div class="container">
	<div class="row pb-sm-3">
		<div class="col">
			<ul class="nav justify-content-center">
          <?php foreach ($categories as $categoryItem) : ?>
						<li class="nav-item">
							<a class="nav-link font-weight-bold page_site" href="/category/<?php echo $categoryItem['id']; ?>">
                  <?php echo $categoryItem['name']; ?>
							</a>
						</li>
          <?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

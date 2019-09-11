<?php

//if (isset($_POST['add'])) {
//    $name = $_POST['name'];
//    $description = $_POST['description'];
//    $price = $_POST['price'];
//    $status = $_POST['status'];
//    $category = $_POST['category'];
//    $img = $_POST['img'];
//
//    $sql = "INSERT INTO product (name, description, price, status, category, img) 
//VALUES ('$name','$description','$price','$status','$category','$img')";
//
//    if (mysqli_query($conn, $sql)) {
//        echo 'New record created successfully';
//    } else {
//        echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
//    }
//}
//
//mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>an_shop</title>
	<link rel="stylesheet" href="template/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

<!-- HEADER -->
<div class="container main_block">
	<div class="row">
		<div class="col">
			<div class="pt-5 text-center">
				<a href="" class="name_shop">
					<img src="template/img/shopping-bag.png" alt="логотип">
					<p>D I E S E L</p>
					<p>admin-panel</p>
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
					<a class="nav-link href_style text-danger" href="/new_shop/">Главная</a>
				</li>
				<li class="nav-item">
					<a class="nav-link href_style" href="#">Товары</a>
				</li>
				<li class="nav-item">
					<a class="nav-link href_style" href="#">Настройки</a>
				</li>
				<li class="nav-item">
					<a class="nav-link href_style" href="#">Заказы</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<hr>

<div class="container main_block">
	<div class="row">
		<div class="col">
			<div class="mb-4 text-dark font-weight-bold text-center">ДОБАВЛЕНИЕ ТОВАРА</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row pb-3">
		<div class="col">
			<form action="admin.php" method="post">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputName">Название товара</label>
						<input type="text" class="form-control" id="inputName" placeholder="Платье" name="name">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPrice">Цена</label>
						<input type="number" class="form-control" id="inputPrice" placeholder="0" name="price">
					</div>
				</div>
				<div class="form-group">
					<label for="validationTextarea">Описание товара</label>
					<textarea class="form-control" id="validationTextarea" placeholder="Текст" required></textarea>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="inputCategory">Категория</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="category" id="exampleRadios1" value="option1" checked>
							<label class="form-check-label" for="exampleRadios1"> жен </label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="category" id="exampleRadios2" value="option2">
							<label class="form-check-label" for="exampleRadios2"> муж </label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="category" id="exampleRadios3" value="option1">
							<label class="form-check-label" for="exampleRadios3"> обувь </label>
						</div>
					</div>
					<div class="form-group col-md-8">
						<label for="inputState">Статус</label>
						<select id="inputState" class="form-control" name="status">
							<option selected> active</option>
							<option> passive</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group">
						<label for="inputFile">Выберите основное фото товара</label>
						<input type="file" class="form-control-file" id="inputFile" name="img">
					</div>
				</div>
				<button type="submit" class="btn btn-dark" name="add">Добавить</button>
			</form>
		</div>
	</div>
</div>

<div class="container main_block">
	<div class="row">
		<div class="col">
			<div class="mb-4 text-dark font-weight-bold text-center">ВСЕ ТОВАРЫ</div>
			<div class="form">
				<div class="form-group">
					<label for="exampleFormControlSelect1">Выберите тип товара</label>
					<select class="form-control" id="exampleFormControlSelect1">
						<option>жен</option>
						<option>муж</option>
						<option>shoes</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col">
			<table class="table table-hover">
				<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Название</th>
					<th scope="col">Цена</th>
					<th scope="col">Описание</th>
					<th scope="col">Статус</th>
					<th scope="col">Удалить</th>
					<th scope="col">Редактировать</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<th scope="row">1</th>
					<th>Платье</th>
					<th>1200</th>
					<th>Черное платье</th>
					<th>active</th>
					<th><button type="submit" class="btn btn-dark" name="add">Удалить</button></th>
					<th><button type="submit" class="btn btn-dark" name="add">Редактировать</button></th>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>


<!-- FOOTER -->


<div class="container">
	<div class="row footer">
		<div class="col copyrate font-italic">
			<div>An_shop©2019г. Все права защищены.</div>
		</div>
	</div>
</div>

</body>
</html>


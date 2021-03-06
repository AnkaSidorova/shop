<?php include ROOT . '/views/layouts/header.php'; ?>


<div class="container">
	<div class="row">
		<div class="col">
			<div class="m-b-t text-dark text-center font-weight-bold">ОФОРМЛЕНИЕ ЗАКАЗА</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col">
			<form action="" method="post" id="form">
				<div class="form-row">
					<div class="col-md-7 mb-3">
						<label for="validationDefault01">ФИО</label>
						<input type="text" name="name_user" class="form-control" id="validationDefault01" placeholder="Иванов Иван Иванович" required>
					</div>
					<div class="col-md-5 mb-3">
						<label for="validationDefaultUsername">E-mail</label>
						<input type="text" name="email_user" class="form-control" id="validationDefaultUsername" placeholder="Mark_Otto@mail.ru" required>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-7 mb-3">
						<label for="validationDefault03">Адрес</label>
						<input type="text" name="address_user" class="form-control" id="validationDefault03" placeholder="г.Москва, ул.Бульвар Гагарина 65А" required>
					</div>
					<div class="col-md-5 mb-3">
						<label for="validationDefault04">Телефон</label>
						<input type="number" name="tel_user" class="form-control" id="validationDefault04" placeholder="+7 (342) 77-55-777" required>
					</div>
				</div>
				<div class="form-row">
					<div class="col mb-3">
						<label for="validationDefault04">Комментарии к заказу</label>
						<textarea class="form-control" name="comment_user" id="validationDefault04" placeholder="Комментарии"></textarea>
					</div>
				</div>

				<div class="form-group row">
					<label for="price" class="col-3 col-md-1 col-form-label">Сумма:</label>
					<div class="col-9 col-md-11">
						<input type="text" readonly name="price" class="form-control-plaintext" id="price" value="<?php echo $totalPrice . ' руб.' ?>">
					</div>
				</div>			
				
				<button class="btn btn-dark" type="submit" name="submit" id="addOrder">Оформить</button>
			</form>
		</div>
	</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>


<script>
  $('#form').trigger('reset');
  $(function () {
    'use strict';
    $('#form').on('submit', function () {
      let formData = $('#form').serialize();
      $.ajax({
        url: "/cart/send/",
        type: "POST",
        data: formData,
        success: function (formData) {
          console.log(formData);
          alert('Ваш заказ отправлен! Ожидайте письма на вашу почту!');
        }
      });
    });
  });
</script>


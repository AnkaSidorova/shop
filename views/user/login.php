<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container main_block">
	<div class="row">
		<div class="col">
			<div class="mb-4 text-dark font-weight-bold text-center">Введите ваши данные</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col">
        <?php if (isset($errors) && is_array($errors)): ?><?php foreach ($errors as $error): ?>
					<div class="alert alert-danger" role="alert">
              <?php echo $error; ?>
					</div>
        <?php endforeach; ?>                
        <?php endif; ?>
            
			<form action="" method="post" class="signup-form">
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="<?php echo $email; ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-10">
						<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" value="<?php echo $password; ?>">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<input type="submit" name="submit" class="btn btn-dark" value="Вход"/>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include('/template/header.php'); ?>

<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
		<div class="panel-heading">
			Регистрация
		</div>
		<?php if(isset($errors) && is_array($errors)): ?>
		<?php foreach ($errors as $item): ?>
			<?=$item; ?>
		<?php endforeach; ?>
	<?php endif; ?>
		<div class="panel-body">

			<form  method="post" autocomplete="off">
				<div class="form-group">
					<label for="name">Имя</label>
					<input type="text" name="name" id="name" class="form-control" value="">
						<span class="help-block"></span>
					
				</div>
				<div class="form-group">
					<label for="surname">Фамилия</label>
					<input type="text" name="surname" id="surname" class="form-control" value="">
						<span class="help-block"> </span>
					
				</div>
				<div class="form-group">
					<label for="middlename">Отчество</label>
					<input type="text" name="middlename" id="middlename" class="form-control" value="">
						<span class="help-block"></span>
				</div>
				<div class="form-group">
					<label for="Email">Email</label>
					<input type="email" name="email" id="Email" class="form-control" value="">
						<span class="help-block"></span>
				</div>
				<div class="form-group">
					<label for="telephon">Телефон</label>
					<input type="text" name="telephon" id="telephon" class="form-control" value="">
						<span class="help-block"></span>
				</div>
				<div class="form-group">
					<label for="password">Пароль</label>
					<input type="password" name="password" id="password" class="form-control">
						<span class="help-block"></span>
				</div>
				
				
				<div class="form-group">
					<button type="submit" name="register" class="btn btn-primary">Зарегистрироваться</button>
				</div>
			</form>
		</div>
	</div>
		</div>
	</div>
	<?php include('/template/footer.php'); ?>
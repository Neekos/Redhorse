
<?php include('/template/header.php'); ?>
<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
		<div class="panel-heading">
			Авторизация
		</div>
		<?php if(isset($errors) && is_array($errors)): ?>
		<?php foreach ($errors as $item): ?>
			<p><?=$item; ?></p>
		<?php endforeach; ?>
		<?php endif; ?>
		<div class="panel-body">
			<form   method="post">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Пароль</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>
				
				
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary">Войти</button>
				</div>
			</form>
		</div>
	</div>
		</div>
	</div>

	<?php include('/template/footer.php'); ?>
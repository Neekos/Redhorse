<?php 
	include('template/admin/header.php');
?>

	<div class="container">
		<div class="row">
			<form enctype="multipart/form-data" method="post">
				<label for="title">Заголовок</label>
				<input type="text" name="title" id="title" class="form-control">
				<label for="discription">Описание</label>
				<input type="text" name="discription" id="discription" class="form-control">
				<label for="img">Выберите фото</label>
				<input type="file" name="img" id="img" class="form-control">
				<label for="text">Содержание</label>
				<textarea rows="10" cols="45" name="text" class="form-control" id="text"></textarea><br>
				<input type="submit" name="Files" class="form-control" style="width: 200px;">
			</form>
		</div>
	</div>

<?php 
	include('template/admin/footer.php');
?>
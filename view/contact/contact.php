<?php 
	include('template/header.php');
?>

	<div class="container">
		<div class="row">
		<h1>Мы рады вам!</h1>
			<div class="col-md-6">
				
		<div class="col-md-8 col-md-offset-2 form-control" style="margin-left: -5.333333%;">
			<div class="panel panel-default">
		<div class="panel-heading">
			Форма обратной связи
		</div>
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
					<label for="message">Сообщение</label>
					<textarea rows="10" cols="37" name="message" id="message" class="form-control">Писать тут!</textarea>
						<span class="help-block"></span>
				</div>
				<div class="form-group">
					<button type="submit" name="register" class="btn btn-primary">Отправить</button>
				</div>
			</form>
		</div>
	</div>
		</div>
			</div>
			<div class="col-md-6">
				 <section ><!--Start Box-->
		          <div class="zerogrid">
		            <div class="row">
		              <div class="col-1-2">
		              </div>
		                  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aaaa9edcc2c5b046a73977a1fd5285737de3edea2f213028c53f634e7bb3d34a7&amp;width=550&amp;height=270&amp;lang=ru_RU&amp;scroll=true">
		                  </script>
		            </div>
		          </div>
		        </section>
		        <div>
		          <h2>Контакты</h2>
		          <p>15-й км автодороги Абакан-Саяногорск <br>
		          не доезжая с.Белый Яр</p>
		          <p>8 (3902) 31-31-40<br>
		          </p>
		          <p>ksk-abakan@mail.ru</p>
		        </div>
			</div>	
		</div>
	</div>
<?php 
	include('template/footer.php');
?>
<?php include('/template/header.php'); ?>


<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
		<div class="panel-heading">
			<center><h1>Запись</h1></center>
		</div>
		<div class="panel-body">

			<form   autocomplete="off" id="zapis">
				<div class="form-group">
					<label for="name">Имя</label>
					<input type="text" name="name" id="name" class="form-control" value="">
						<span class="help-block"></span>
					
				</div>
				<div class="form-group">
					<label for="middlename">Отчество</label>
					<input type="text" name="middlename" id="middlename" class="form-control" value="">
						<span class="help-block"></span>
				</div>
				<div class="form-group">
					<label for="email">email</label>
					<input type="email" name="email" id="email" class="form-control" value="">
						<span class="help-block"></span>
				</div>
				<div class="form-group">
					<label for="telephon">Телефон</label>
					<input type="tel" name="telephon" id="telephon" class="form-control" value="">
						<span class="help-block"></span>
				</div>
				<div class="form-group">
					<label for="services">Услуга</label>
					<input type="text" name="services" id="services" class="form-control" readonly>
						<span class="help-block"></span>
				</div>
				<div class="form-group">
					<button type="submit" name="register" class="btn btn-primary">Записаться</button>
				</div>
			</form>
		</div>
	</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){  
     
          
        // контроль и отправка данных на сервер в фоновом режиме  
        // при нажатии на кнопку "отправить сообщение"  
        $("#zapis").submit(function(e){  
       		e.preventDefault();
             $.ajax({  
                 type: "POST",  
                 url: "zapis.php",  
                 data:$(this).serialize()}).done(function(){
                 	alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
                 	$('#name').val('');
                 	$('#middlename').val('');
                 	$('#email').val('');
                 	$('#telephon').val('');
                 	$('#services').val('');
                 }) ; 
              
             return false;  
        });  
          
    });

	</script>
<?php include('/template/footer.php'); ?>
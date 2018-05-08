<?php include('template/header.php'); ?>
<h1>Гостевая книга</h1>

	
	<div id="mes">

		
	
	</div>
	
<br>
<h3>Добавить сообщение</h3>
<!-- форма отправки сообщения -->

<!-- проверка заполнения формы -->
<script type="text/javascript">
	

</script>

<!-- код формы -->

		<div class="panel-body">
			<form  id="myform" autocomplete="off">
			<div class="form-group">
					<label for="username">Имя</label>
					<input type="text" name="username" id="username" class="form-control" value="">
						<span class="help-block"></span>
				</div>
					<label for="msg">Сообщение</label>
					<textarea rows="10" cols="37" name="msg" id="msg" class="form-control" placeholder="Сообщение"></textarea>
						<span class="help-block"></span>
				</div>
				<div class="form-group">
					<button type="submit" name="register" class="btn btn-primary">Отправить</button>
				</div>
			</form>
		</div>

<script type="text/javascript">
	function Show_messages(){

		$.ajax({
			url: "/view/review/show.php",
			cache:false,
			success: function(html){
				$("#mes").html(html);
			}
		});

		} 
</script>

<script type="text/javascript">
		
		$(document).ready(function(){  
    
        Show_messages();  
          
        // контроль и отправка данных на сервер в фоновом режиме  
        // при нажатии на кнопку "отправить сообщение"  
        $("#myform").submit(function(e){  
       		e.preventDefault();
             $.ajax({  
                 type: "POST",  
                 url: "review.php",  
                 data:$(this).serialize()}).done(function(){
                 	Show_messages();
                 }) ; 
              
             return false;  
        });  
          
    });
	</script>
    <?php include('template/footer.php'); ?>

<?php 
	include('template/header.php');
?>

<section id="container">
	<div class="zerogrid">
		<div class="wrap-container clearfix">
			<div id="main-content">
				<div class="wrap-content" style="padding: 0;">
					<article>
						<div class="art-header">
							<div class="embed-container maps">
								<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aaaa9edcc2c5b046a73977a1fd5285737de3edea2f213028c53f634e7bb3d34a7&amp;width=100%&amp;height=350&amp;lang=ru_RU&amp;scroll=true">
		                  </script>
							</div>
						</div>
						<div class="art-content">
							<h1 class="entry-title">Наши контакты</h1>
							<div class="row">
								<div class="col-1-3">
									<div class="wrap-col">
										<h2>Контакты</h2>
								          <p>15-й км автодороги Абакан-Саяногорск <br>
								          не доезжая с.Белый Яр</p>
								          <p>8 (3902) 31-31-40<br>
								          </p>
								          <p>ksk-abakan@mail.ru</p>
									</div>
								</div>
								<div class="col-2-3">
									<div class="wrap-col">
										<div class="contact">
											<div id="contact_form">
												<form  id="form" >
													<label class="row">
														<div class="col-1-2">
															<div class="wrap-col">
																<input type="text" name="name" id="name" placeholder="Введите ваше имя" required="required">
															</div>
														</div>
														<div class="col-1-2">
															<div class="wrap-col">
																<input type="email" name="email" id="email" placeholder="Введите ваш email" required="required">
															</div>
														</div>
													</label>
													<label class="row">
														<div class="wrap-col">
															<input type="text" name="telephon" id="telephon" placeholder="Введите ваш номер телефона" required="required">
														</div>
													</label>
													<label class="row">
														<div class="wrap-col">
															<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required" placeholder="Оставьте сообщение"></textarea>
														</div>
													</label>
													<center><input class="sendButton" type="submit" name="submit" value="Submit"></center>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>
	<script type="text/javascript">
		
		$(document).ready(function(){  
    
        //Show_messages();  
          
        // контроль и отправка данных на сервер в фоновом режиме  
        // при нажатии на кнопку "отправить сообщение"  
        $("#form").submit(function(e){  
       		e.preventDefault();
             $.ajax({  
                 type: "POST",  
                 url: "contact.php",  
                 data:$(this).serialize()}).done(function(){
                 	alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
                 	$('#name').val('');
                 	$('#email').val('');
                 	$('#telephon').val('');
                 	$('#message').val('');
                 }) ; 
              
             return false;  
        });  
          
    });
	</script>
	
<?php 
	include('template/footer.php');
?>
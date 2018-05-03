<?php include('template/header.php'); ?>
<h1>Гостевая книга</h1>

	<div id="messages">

	</div>
	
<br>
<h3>Добавить сообщение</h3>
<!-- форма отправки сообщения -->

<!-- проверка заполнения формы -->


<!-- код формы -->
<form id="myForm">
<table border="1 px solid black">
	<tr>
		<td width="160">
			Имя пользователя:
		</td>
		<td>
			<input id="username" name="username" style="width: 300px; border:1px solid black">
		</td>
	</tr>
	<tr>
		<td width="160" valign="top">
			Сообщение:
		</td>
		<td>
			<textarea id="msg" name="msg" style="width: 300px; border:1px solid black"></textarea>
		</td>
	</tr>		
	<tr>
		<td width="160">
			&nbsp;
		</td>
		<td>
			<input id="btn" type="submit" value="Отправить сообщение">
		</td>
	</tr>
</table>
</form>

<script>
 		function Show_messages(){

		$.ajax({
			url: "show.php",
			cache:false,
			success: function(html){
				$("#messages").html(html);
			}
		});

		} 

	$(document).ready(function(){  
    
        //Show_messages();  
          
        // контроль и отправка данных на сервер в фоновом режиме  
        // при нажатии на кнопку "отправить сообщение"  
        $("#myForm").submit(function(e){  
       e.preventDefault();
       
            var name = $("#username").val();  
            var msg  = $("#msg").val();  
            if (name =='')  
            {  
                alert ("Заполните имя пользователя!");  
                 return false;  
            }  
             if (msg =='')  
             {  
                 alert ("Заполните текст сообщения!");  
                 return false;  
             }
  
             $.ajax({  
                 type: "POST",  
                 url: "/controllers/reviewController.php",  
                 data: "username="+name+"&msg="+msg+"&action=add",  
                 success: function(msg){  
                     Show_messages();  
                }  
             });  
              
             return false;  
        });  
          
    });

 	</script>
    <?php include('template/footer.php'); ?>

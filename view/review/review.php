<?php 
	require_once ('template/header.php');

	
 ?>
 <div id="messages">
 	<?php foreach ($message as $value): ?>
 		<h1>Гость:<?=$value['username'] ?></h1>
 		<h1>Написал:<?=$value['msg'] ?></h1>
 		<p>Когда:<?=$value['dat'] ?></p>
 	<?php endforeach ?>

 </div>
 	
 	<form id="myForm">
 		<input id="username">
 		<input id="msg">
 		<input type="submit">
 	</form>
 	<script type="text/javascript">

function splash()
    {
        if (document.myForm.username.value  =='')
            {
                alert ("Заполните имя пользователя!");
                return false;   
            }
            
        if (document.myForm.msg.value  =='')
            {
                alert ("Заполните текст сообщения!");
                return false;   
            }
        
        return true;   
    }
    
 		function Show_messages(){

		$.ajax({
			url: "view/review/review.php";
			cache:false,
			success: function(html){
				$("#messages").html(html);
			}
		});
	} $(document).ready(function(){  
  
        show_messages();  
          
        // контроль и отправка данных на сервер в фоновом режиме  
        // при нажатии на кнопку "отправить сообщение"  
        $("#myForm").submit(function(){  
          
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
                url: "action.php",  
                data: "username="+name+"&msg="+msg+"&action=add",  
                success: function(msg){  
                    show_messages();  
               }  
            });  
              
            return false;  
        });  
          
    });

 	</script>
 <?php 
	require_once ('template/footer.php');

	
 ?>
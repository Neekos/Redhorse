<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Главная</title>
    <script type="text/javascript"  src="/template/js/jquery.js" ></script>
    <!-- Bootstrap -->
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/template/css/zerogrid.css">
    <link rel="stylesheet" href="/template/css/style.css">
    <link rel="stylesheet" href="/template/css/menu.css">
    <link rel="stylesheet" href="/template/css/lightbox.css">
    <link href="/template/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="wrap-body">

<header >
  <div class="zerogrid">
    <div class="wrap-header">
      <div class="logo t-center"><a href="index.html"><img src="/template/images/logo1.png"/></a></div>  
      <div id='cssmenu' class="align-center">
        <ul>
           <li class="active"><a href='/'><span>Главная</span></a></li>
           <li><a href='{{ path_for('news') }}'><span>Новости</span></a></li>
           <li class='last'><a href='/services/'><span>услуги</span></a>
           </li>
           <li><a href='{{ path_for('galereya') }}'><span>Галерея</span></a></li>
           <li><a href='{{ path_for('akcyi') }}'><span>Акции</span></a></li>
           <li><a href='/review/'><span>Отзывы</span></a></li>
           <li class='last'><a href='/contact/'><span>Контакты</span></a></li>
           <?php if (User::isGuest()): ?>
             <li class='last'><a href='/user/registration/'><span>Зарегистрироваться</span></a></li>
           <li class='last'><a href='/user/login/'><span>Войти</span></a></li>
           <?php else: ?>
           <?php if(isset($_SESSION['admin'])): ?>
            <li class='last'><a href='/admin/'><span>Админпанель</span></a></li>
           <?php else: ?>
           <li class='last'><a href='/cabinet/'><span>Кабинет</span></a></li>
         <?php endif; ?>
           <li class='last'><a href='/logout/'><span>Выйти</span></a></li> 
          
           <?php endif; ?>


        </ul>
      </div>
    </div>


	
	
    




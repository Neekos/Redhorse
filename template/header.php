<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
    <script type="text/javascript"  src="/template/js/jquery.js" ></script>
    <!-- Bootstrap -->
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/template/css/zerogrid.css">
    <link rel="stylesheet" href="/template/css/style.css">
    <link rel="stylesheet" href="/template/css/menu.css">
    <link rel="stylesheet" href="/template/css/lightbox.css">
    <link href="/template/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
    <script type="text/javascript" src="/template/js/activ.js" ></script>
    <script src="/template/js/script.js"></script>

    <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
  <![endif]-->
  </head>
  <body>
  <div class="wrap-body">

<header >
  <div class="zerogrid">
    <div class="wrap-header">
      <div class="logo t-center"><a href="/"><img src="/template/images/logo1.png"/></a></div>  
      <div id='cssmenu' class="align-center">
        <ul class="menu">
           <li class=""><a href='/'><span>Главная</span></a></li>
           <li><a href='{{ path_for('news') }}'><span>Новости</span></a></li>
           <li class='last'><a href='/services/'><span>услуги</span></a>
           </li>
           <li><a href='/galereya/'><span>Галерея</span></a></li>
           <li><a href='/akci/'><span>Акции</span></a></li>
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


	
	
    




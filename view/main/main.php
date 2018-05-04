<?php 
	include('/template/header.php');
 ?>
 
    <div style="margin-bottom: 30px;" >
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="/template/images/plakat.jpg" alt="Chania">
                      <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="call3">
                               
                            </div>
                            </div>
                        </div>
                        <h3></h3>
                        <p></p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="/template/images/plakat.jpg" alt="Chicago">
                      <div class="carousel-caption">
                      <div class="container">
                            <div class="row">
                                <div class="call3">
                                
                            </div>
                            </div>
                        </div>
                        <h3></h3>
                        <p></p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="/template/images/plakat.jpg" alt="New York">
                      <div class="carousel-caption">
                      <div class="container">
                            <div class="row">
                                <div class="call3">
                                
                            </div>
                            </div>
                        </div>
                        <h3></h3>
                        <p></p>
                      </div>
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
    </div>
</header>
             
<section id="container">
      <div class="wrap-container">
        <section class="content-box box-1 box-style-1"><!--Start Box-->
          <div class="zerogrid">
            
            <div class="row">
              <div class="col-1-2">
                <div class="wrap-col item">
                  <h2 class="header"><a href="#">Добро пожаловать! мы рады вас видеть.</a></h2>
                  <p>Здесь предоставлена подробная информация нашего место положения, контакты и предоставляемые услуги.</p>
                  <a href="/contact/" class="button-1">Узнать больше</a>
                </div>
              </div>
              <div class="col-1-2">
                <div class="wrap-col item">
                
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="content-box box-2 box-style-2 t-center"><!--Start Box-->
          <div class="zerogrid">
            <div class="row">
              <a href="#" class="button-2">Обучение</a>

            </div>
          </div>
        </section>
        <section class="content-box box-3 box-style-1"><!--Start Box-->
          <div class="zerogrid">
            <div class="row">
              <h2 class="header t-center">Галерея</h2>
              <div class="row">
                <?php foreach ($photo as $value): ?>
                  <div class="col-1-4">
                    <div class="wrap-col">
                      <a class="example-image-link" href="<?=$value['img'];?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                        <div class="zoom-container">
                          <div class="zoom-caption">
                            <div class="caption-inner">
                              <div class="caption-inner1">
                                <i class="fa fa-eye"></i>
                              </div>
                            </div>
                          </div>
                          <img class="example-image" src="<?=$value['img'];?>" alt=""/>
                        </div>
                      </a>
                    </div>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
        </section>
        <section class="content-box box-1 box-style-1"><!--Start Box-->
          <div class="zerogrid">
            <div class="row">
              <h2 class="header t-center">Новости</h2>
              <?php foreach ($article as $art): ?>
                <div class="col-1-3">
                  <div class="wrap-col ">
                    <div class="item">
                      <div class="zoom-container">
                        <img src="<?=$art['img'] ?>">
                      </div>
                      <div class="item-content">
                        <h3 class="item-header"><a href="#"><?=$art['title'] ?></a></h3>
                        <p><?=$art['discription'] ?></p><hr> <p><?=$art['date_time'] ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </section>
        <section class="content-box box-4 box-style-3"><!--Start Box-->
          <div class="zerogrid">
            <div class="row">
              <div class="col-1-2">
                <div class="wrap-col item">
                  <h2 class="header">Контакты</h2>
                  <p>15-й км автодороги Абакан-Саяногорск <br>
                  не доезжая с.Белый Яр</p>
                  <p>8 (3902) 31-31-40<br>
                  </p>
                  <p>ksk-abakan@mail.ru</p>
                </div>
              </div>
              <div class="col-1-2">
                <div class="wrap-col item">
                  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aaaa9edcc2c5b046a73977a1fd5285737de3edea2f213028c53f634e7bb3d34a7&amp;width=550&amp;height=270&amp;lang=ru_RU&amp;scroll=true">
                  </script>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
<?php 
	include('/template/footer.php');
 ?>
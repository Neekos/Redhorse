<?php 
	include('template/admin/header.php');
	include('template/admin/sidebar.php');
 ?>
 	<div class="col-md-8 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Статьи
                </div>
                <div class="panel-body">
                    <div class="col-lg-12"> 
                    <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped"> 
                    <thead> 
                    <tr> 
                    <th>№</th> 
                    <th>Заголовок</th>
                    <th>Описание</th>
                    <th>Содержание</th>
                    <th>фото</th>  
                    <th>Время публикации</th> 
                    <th></th> 
                    <th></th>  
                    </tr> 
                    </thead> 
                    <tbody> 
                    <?php foreach ($news as $value): ?>
                    <tr> 
                   
                    <td><?=$value['id'] ?></td>
                    <td><?=$value['title'] ?></td>
                    <td><?=$value['discription'] ?></td> 
                    <td><?=$value['text'] ?></td>
                    <td><img src="<?=$value['img'] ?>" style="max-width: 150px;"></td>
                    <td><?=$value['date_time'] ?></td>
                    <td> <a href=""><button class="btn btn-primary" >Редактировать </button></a></td>
                    <td> <a href=""><button class="btn btn-primary" >удалить </button></a></td> 
                    </tr> 
                    <?php endforeach ?>

                    </tbody> 
                    </table> 
                    </div>
                    <a href="/admin/news/add/"> <input type="submit" name="add" value="Написать статью"> </a> 
                    </div> 
                </div>
            </div>
		</div>
 <?php include('template/admin/footer.php'); ?>
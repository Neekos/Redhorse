<?php include('/template/header.php'); ?>
<hr>
<div class="col-md-12 content">
    <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Катание на лошади или пони по лесу</h3>
                    <h3>Верховые прогулки</h3>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12"> 
	                    <div class="table-responsive"> 
		                    <table class="table table-bordered table-hover table-striped"> 
		                    <thead> 
		                    <tr>
						 		<td rowspan="2" >№</td>
						 		<td rowspan="2" >Время</td>
						 		<td colspan="2">Стоимость, руб./чел</td>
						 		<td rowspan="2" colspan="2">Операция</td>
						 	</tr>
						 	<tr>
						 		
						 		<td>Будни</td>
						 		<td>Выходные</td>
						 		
						 	</tr>
						 	<tr>
						 		<td><?=$data_res1['3']['id']; ?></td>
						 		<td><?=$data_res1['3']['time']; ?></td>
						 		<td><?=$data_res1['3']['bud']; ?></td>
						 		<td><?=$data_res1['3']['vix']; ?></td>
						 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
						 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
						 	</tr>
						 	<tr>
						 		<td><?=$data_res1['4']['id']; ?></td>
						 		<td><?=$data_res1['4']['time']; ?></td>
						 		<td><?=$data_res1['4']['bud']; ?></td>
						 		<td><?=$data_res1['4']['vix']; ?></td>
						 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
						 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
						 	</tr>
						 	<tr>
						 		<td><?=$data_res1['5']['id']; ?></td>
						 		<td><?=$data_res1['5']['time']; ?></td>
						 		<td><?=$data_res1['5']['bud']; ?></td>
						 		<td><?=$data_res1['5']['vix']; ?></td>
						 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
						 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
						 	</tr>

		                    </tbody> 
		                    </table> 
	                    </div>
                    </div> 
                </div>
    </div>    
</div>	
<hr>
 <div class="col-md-12 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Индивидуальные занятия с тренером для детей и взрослых</h3>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12"> 
                    <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped"> 
                    <thead> 
                    <tr>
				 		<td  >№</td>
				 		<td >Способ оплаты</td>
				 		<td >Заморозка</td>
				 		<td >Будний день</td>
				 		<td >Выходной день</td>
				 		<td colspan="2">Операция</td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res2['2']['id']; ?></td>
				 		<td><?=$data_res2['2']['oplata']; ?></td>
				 		<td><?=$data_res2['2']['zam']; ?></td>
				 		<td ><?=$data_res2['2']['bud']; ?></td>
				 		<td ><?=$data_res2['2']['vix']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res2['3']['id']; ?></td>
				 		<td><?=$data_res2['3']['oplata']; ?></td>
				 		<td><?=$data_res2['3']['zam']; ?></td>
				 		<td><?=$data_res2['3']['bud']; ?></td>
				 		<td><?=$data_res2['3']['vix']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res2['4']['id']; ?></td>
				 		<td><?=$data_res2['4']['oplata']; ?></td>
				 		<td><?=$data_res2['4']['zam']; ?></td>
				 		<td><?=$data_res2['4']['bud']; ?></td>
				 		<td><?=$data_res2['4']['vix']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res2['5']['id']; ?></td>
				 		<td><?=$data_res2['5']['oplata']; ?></td>
				 		<td><?=$data_res2['5']['zam']; ?></td>
				 		<td colspan="2"><?=$data_res2['5']['bud']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res2['6']['id']; ?></td>
				 		<td><?=$data_res2['6']['oplata']; ?></td>
				 		<td><?=$data_res2['6']['zam']; ?></td>
				 		<td colspan="2"><?=$data_res2['6']['bud']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>

                    </tbody> 
                    </table> 
                    </div>
                    
                    </div> 
                </div>
            </div>
		</div>
		<hr>
 <div class="col-md-12 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Развивающие занятия для детей от 2-х лет по программе "Я люблю свою лошадку". Пони-клуб (для детей с 5 до 8 лет)</h3>
               
                </div>
                <div class="panel-body">
                    <div class="col-lg-12"> 
                    <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped"> 
                    <thead> 
                   <tr>
				 		<td  >№</td>
				 		<td >Способ оплаты</td>
				 		<td >Заморозка</td>
				 		<td >Будний день</td>
				 		<td >Выходной день</td>
				 		<td colspan="2">Операция</td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res3['2']['id']; ?></td>
				 		<td><?=$data_res3['2']['oplata']; ?></td>
				 		<td><?=$data_res3['2']['zam']; ?></td>
				 		<td ><?=$data_res3['2']['bud']; ?></td>
				 		<td ><?=$data_res3['2']['vix']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res3['3']['id']; ?></td>
				 		<td><?=$data_res3['3']['oplata']; ?></td>
				 		<td><?=$data_res3['3']['zam']; ?></td>
				 		<td><?=$data_res3['3']['bud']; ?></td>
				 		<td><?=$data_res3['3']['vix']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res3['4']['id']; ?></td>
				 		<td><?=$data_res3['4']['oplata']; ?></td>
				 		<td><?=$data_res3['4']['zam']; ?></td>
				 		<td><?=$data_res3['4']['bud']; ?></td>
				 		<td><?=$data_res3['4']['vix']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res3['5']['id']; ?></td>
				 		<td><?=$data_res3['5']['oplata']; ?></td>
				 		<td><?=$data_res3['5']['zam']; ?></td>
				 		<td colspan="2"><?=$data_res3['5']['bud']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res3['6']['id']; ?></td>
				 		<td><?=$data_res3['6']['oplata']; ?></td>
				 		<td><?=$data_res3['6']['zam']; ?></td>
				 		<td colspan="2"><?=$data_res3['6']['bud']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res3['7']['id']; ?></td>
				 		<td><?=$data_res3['7']['oplata']; ?></td>
				 		<td><?=$data_res3['7']['zam']; ?></td>
				 		<td colspan="2"><?=$data_res3['7']['bud']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
                    </tbody> 
                    </table> 
                    </div>
                    
                    </div> 
                </div>
            </div>
		</div>
		<hr>
 <div class="col-md-12 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Школа верховой езды для детей и врозслых</h3>
                    <p>Продолжительность одного занятия - 60 мин с учетом седловки. Занятия проходят в группах. В группу не более 5 человек.</p>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12"> 
                    <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped"> 
                    <thead> 
                    <tr>
				 		<td  >№</td>
				 		<td >Способ оплаты</td>
				 		<td >Заморозка</td>
				 		<td >Будний день</td>
				 		<td >Выходной день</td>
				 		<td colspan="2">Операция</td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res4['2']['id']; ?></td>
				 		<td><?=$data_res4['2']['oplata']; ?></td>
				 		<td><?=$data_res4['2']['zam']; ?></td>
				 		<td ><?=$data_res4['2']['bud']; ?></td>
				 		<td ><?=$data_res4['2']['vix']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res4['3']['id']; ?></td>
				 		<td><?=$data_res4['3']['oplata']; ?></td>
				 		<td><?=$data_res4['3']['zam']; ?></td>
				 		<td><?=$data_res4['3']['bud']; ?></td>
				 		<td><?=$data_res4['3']['vix']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res4['4']['id']; ?></td>
				 		<td><?=$data_res4['4']['oplata']; ?></td>
				 		<td><?=$data_res4['4']['zam']; ?></td>
				 		<td><?=$data_res4['4']['bud']; ?></td>
				 		<td><?=$data_res4['4']['vix']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res4['5']['id']; ?></td>
				 		<td><?=$data_res4['5']['oplata']; ?></td>
				 		<td><?=$data_res4['5']['zam']; ?></td>
				 		<td colspan="2"><?=$data_res4['5']['bud']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res4['6']['id']; ?></td>
				 		<td><?=$data_res4['6']['oplata']; ?></td>
				 		<td><?=$data_res4['6']['zam']; ?></td>
				 		<td colspan="2"><?=$data_res4['6']['bud']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res4['7']['id']; ?></td>
				 		<td><?=$data_res4['7']['oplata']; ?></td>
				 		<td><?=$data_res4['7']['zam']; ?></td>
				 		<td colspan="2"><?=$data_res4['7']['bud']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>

                    </tbody> 
                    </table> 
                    </div>
                    
                    </div> 
                </div>
            </div>
		</div>
		<hr>
		<div class="col-md-12 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Оздоровительная верховая езда (иппотерапия)</h3>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12"> 
                    <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped"> 
                    <thead> 
                    <tr>
				 		<td  >№</td>
				 		<td >Способ оплаты</td>
				 		<td >Заморозка</td>
				 		<td >Стоимость</td>

				 		<td colspan="2">Операция</td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res5['2']['id']; ?></td>
				 		<td><?=$data_res5['2']['oplata']; ?></td>
				 		<td><?=$data_res5['2']['zam']; ?></td>
				 		<td ><?=$data_res5['2']['price']; ?></td>
				 		
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res5['3']['id']; ?></td>
				 		<td><?=$data_res5['3']['oplata']; ?></td>
				 		<td><?=$data_res5['3']['zam']; ?></td>
				 		<td ><?=$data_res5['3']['price']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res5['4']['id']; ?></td>
				 		<td><?=$data_res5['4']['oplata']; ?></td>
				 		<td><?=$data_res5['4']['zam']; ?></td>
				 		<td ><?=$data_res5['4']['price']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
                    </tbody> 
                    </table> 
                    </div>
                    
                    </div> 
                </div>
            </div>
		</div>
		<div class="col-md-12 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Аренда лошадей для фотосессии</h3>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12"> 
                    <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped"> 
                    <thead> 
                    <tr>
				 		<td rowspan="2">№</td>
				 		<td rowspan="2">Кол-во лошадей</td>
				 		<td colspan="2" >Стоимость</td>
				 		

				 		<td colspan="2" rowspan="2">Операция</td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res6['2']['timemin']; ?></td>
				 		<td><?=$data_res6['2']['timemax']; ?></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res6['3']['id']; ?></td>
				 		<td><?=$data_res6['3']['count']; ?></td>
				 		<td><?=$data_res6['3']['timemin']; ?></td>
				 		<td ><?=$data_res6['3']['timemax']; ?></td>
				 		
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res6['4']['id']; ?></td>
				 		<td><?=$data_res6['4']['count']; ?></td>
				 		<td><?=$data_res6['4']['timemin']; ?></td>
				 		<td ><?=$data_res6['4']['timemax']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	
                    </tbody> 
                    </table> 
                    </div>
                    
                    </div> 
                </div>
            </div>
		</div>
		<div class="col-md-12 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Аренда собак для фотосессии, прогулки со взрослыми животными и щенками на поводке</h3>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12"> 
                    <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped"> 
                    <thead> 
                    <tr>
				 		<td rowspan="2">№</td>
				 		<td rowspan="2">Кол-во собак</td>
				 		<td colspan="2" >Стоимость</td>
				 		

				 		<td colspan="2" rowspan="2">Операция</td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res7['2']['timemin']; ?></td>
				 		<td><?=$data_res7['2']['timemax']; ?></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res7['3']['id']; ?></td>
				 		<td><?=$data_res7['3']['count']; ?></td>
				 		<td><?=$data_res7['3']['timemin']; ?></td>
				 		<td ><?=$data_res7['3']['timemax']; ?></td>
				 		
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res7['4']['id']; ?></td>
				 		<td><?=$data_res7['4']['count']; ?></td>
				 		<td><?=$data_res7['4']['timemin']; ?></td>
				 		<td ><?=$data_res7['4']['timemax']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	
                    </tbody> 
                    </table> 
                    </div>
                    
                    </div> 
                </div>
            </div>
		</div>

		<div class="col-md-12 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Аренда площадок</h3>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12"> 
                    <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped"> 
                    <thead> 
                    <tr>
				 		<td  >№</td>
				 		<td >Площадка</td>
				 		<td >Способ оплаты</td>
				 		<td >Будни</td>
				 		<td >Выходные</td>

				 		<td colspan="2">Операция</td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res8['2']['id']; ?></td>
				 		<td><?=$data_res8['2']['plosh']; ?></td>
				 		<td><?=$data_res8['2']['oplata']; ?></td>
				 		<td><?=$data_res8['2']['bud']; ?></td>
				 		<td ><?=$data_res8['2']['vix']; ?></td>
				 		
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	<tr>
				 		<td><?=$data_res8['3']['id']; ?></td>
				 		<td><?=$data_res8['3']['plosh']; ?></td>
				 		<td><?=$data_res8['3']['oplata']; ?></td>
				 		<td><?=$data_res8['3']['bud']; ?></td>
				 		<td ><?=$data_res8['3']['vix']; ?></td>
				 		<td> <a href=""><button class="btn btn-primary" >Записаться </button></a></td>
				 		<td> <a href=""><button class="btn btn-primary" >Оформить заказ </button></a></td>
				 	</tr>
				 	
                    </tbody> 
                    </table> 
                    </div>
                    
                    </div> 
                </div>
            </div>
		</div>
<?php include('/template/footer.php'); ?>

<?php 

	foreach($data_res as $item){
		//var_dump($item);
  	}
 ?>	

 


 <table border="1px solid black">
 	<?php foreach ($data_res as $value): ?>
	 	<tr>
			<td><?=$value['id']; ?></td> 
			<td><?=$value['time']; ?></td> 
			<td><?=$value['price_bud']; ?></td> 
			<td><?=$value['price_vixod']; ?></td>
			<td><?=$value['sum']; ?></td>
	 	</tr>
 	<?php endforeach; ?>
 	<div class="container">
 		<div class="row">
 			<table border="1px solid black">
 				<tr>
 					<td>Время</td>
 				</tr>
 				<tr>
 					<td><?=$data_res['2']['time']; ?></td>
 				</tr>
 				<tr>
 					<td><?=$data_res['3']['time']; ?></td>
 				</tr>
 				
 			</table>
 		</div>
 	</div>
 	<br>
 	 
 	 
 </table>
<table border="1px solid black">
 	 	

 	 	<?php foreach ($data_res as $value): ?>
			 	<tr>
					
					<td><?=$value['время']; ?></td> 
					<td><?=$value['цена']; ?></td> 
					<td><?=$value['Кол-во']; ?></td>
			 	</tr>
 	<?php endforeach; ?>
 	 </table>
 <h1Тренера</h1>
 <table border="1px solid black">
 	<?php foreach ($data_res2 as $value2): ?>
	 	<tr>
			<td><?=$value2['№']; ?></td> 
			<td><?=$value2['Имя']; ?></td> 
			<td><?=$value2['Фамилия']; ?></td> 
			<td><?=$value2['Стаж']; ?></td>
			
	 	</tr>
 	<?php endforeach; ?>
 	
 	 
 </table>

 <hr>

 <table border="1px solid black">
 
 	<?php foreach ($data_res3 as $value3): ?>
 		<tr>

 			<td><?=$value3['№']; ?></td>
 			<td><?=$value3['Время']; ?></td>
 			<td><?=$value3['Стоимость в выходные']; ?></td>
 			<td><?=$value3['Стоимость в будни']; ?></td>
	 </tr>
 	<?php endforeach ?>
 </table>

 <hr>
  <table border="1px solid black">
 
 	<?php foreach ($data_res4 as $value4): ?>
 		<tr>

 		
 			<td><?=$value4['id']; ?></td>
 			<td><?=$value4['name']; ?></td>
 			<td><?=$value4['zam']; ?></td>
 			<td><?=$value4['priceone']; ?></td>
 			<td><?=$value4['priceonev']; ?></td>
 			<td><?=$value4['priceabo']; ?></td>
 			<td><?=$value4['priceabov']; ?></td>
	 </tr>
 	<?php endforeach ?>
 </table>

 <hr>
 <table border="1px solid black">
 	<tr>
 		<td rowspan="2" >№</td>
 		<td rowspan="2">Абонемент</td>
 		<td rowspan="2">Заморозка</td>
 		<td colspan="2">Стоимость одного занятия</td>
 		<td colspan="2">Стоимость абонемента</td>
 	</tr>
 	<tr>
 		
 		<td>Будни</td>
 		<td>Выходные</td>
 		<td>Будни</td>
 		<td>Выходные</td>
 	</tr>
 	<tr>
 		<td><?=$data_res4['4']['id']; ?></td>
 		<td><?=$data_res4['4']['name']; ?></td>
 		<td><?=$data_res4['4']['zam']; ?></td>
 		<td ><?=$data_res4['4']['priceone']; ?></td>
 		<td ><?=$data_res4['4']['priceonev']; ?></td>
 		<td ><?=$data_res4['4']['priceabo']; ?></td>
		<td ><?=$data_res4['4']['priceabov']; ?></td>
 	</tr>
 	<tr>
 		<td><?=$data_res4['5']['id']; ?></td>
 		<td><?=$data_res4['5']['name']; ?></td>
 		<td><?=$data_res4['5']['zam']; ?></td>
 		<td colspan="2"><?=$data_res4['5']['priceone']; ?></td>
 		<td colspan="2"><?=$data_res4['5']['priceabo']; ?></td>
 	</tr>
 	<tr>
 		<td><?=$data_res4['6']['id']; ?></td>
 		<td><?=$data_res4['6']['name']; ?></td>
 		<td><?=$data_res4['6']['zam']; ?></td>
 		<td colspan="2"><?=$data_res4['6']['priceone']; ?></td>
 		<td colspan="2"><?=$data_res4['6']['priceabo']; ?></td>
 	</tr>
 </table>

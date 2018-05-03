

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

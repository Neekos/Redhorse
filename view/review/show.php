 
	<table border="0" cellspacing="3" cellpadding="0" width="90%"  style="margin: 10px 0px;">
	<tr>
		<td width="150" style="color: #999999;">Имя пользователя:</td>
		<td><?=$value['username']; ?></td>
	</tr>
	<tr>
		<td width="150" style="color: #999999;">Дата опубликования:</td>
		<td><?php echo $value['dat']; ?></td>
	</tr>	
	<tr>
		<td colspan="2" style="color: #999999;">---------------------------------------------------------------</td>
	</tr>		
	<tr>
		<td colspan="2">
			<?php echo $value['msg']; ?>
			<br>
		</td>
	</tr>
	
	</table>
	

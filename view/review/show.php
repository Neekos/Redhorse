
			<table border="0" cellspacing="3" cellpadding="0" width="90%" <? echo $col; ?> style="margin: 10px 0px;">
			<tr>
				<td width="150" style="color: #999999;">Имя пользователя:</td>
				<td><?php echo $row['username']; ?></td>
			</tr>
			<tr>
				<td width="150" style="color: #999999;">Дата опубликования:</td>
				<td><?php echo $row['dat']; ?></td>
			</tr>	
			<tr>
				<td colspan="2" style="color: #999999;">---------------------------------------------------------------</td>
			</tr>		
			<tr>
				<td colspan="2">
					<?php echo $row['msg']; ?>
					<br>
				</td>
			</tr>
			
			</table>
	
	

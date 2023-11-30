<?php /* Smarty version 2.6.26, created on 2023-05-12 20:38:48
         compiled from timetable_view.tpl */ ?>

<br>
<br>

<!DOCTYPE html>
<html>

<body>

	<table border="5" cellspacing="0" align="center">
		<!--<caption>Timetable</caption>-->
		<tr>
			<td align="center" height="50"
				width="150"><br>
				<b>Day/Period</b></br>
			</td>
			<td align="center" height="50"
				width="150">
				<b>I<br>9:30-10:30</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>II<br>10:30-11:20</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>III<br>11:30-12:30</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>12:30-01:30</b>

			</td>
			<td align="center" height="50"
				width="150">
				<b>IV<br>01:30-2:30</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>V<br>2:30-3:20</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>VI<br>3:30-4:30</b>
			</td>
			
		</tr>
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
		<tr>
			
			<td align="center" height="50">
				<b><?php echo $this->_tpl_vars['j']['day']; ?>
</b></td>
			<td align="center" height="50"><?php echo $this->_tpl_vars['j']['s1']; ?>
</td>
			<td align="center" height="50"><?php echo $this->_tpl_vars['j']['s2']; ?>
</td>
			<td align="center" height="50"><?php echo $this->_tpl_vars['j']['s3']; ?>
</td>
	
		<td align="center" height="50">LUNCH</td>
			<!-- <td rowspan="6" align="center" height="50">
				<p style="color:black;font-size:25px;">L<br>U<br>N<br>C<br>H</p>
			</td> -->
			
		
			<td align="center" height="50"><?php echo $this->_tpl_vars['j']['s4']; ?>
</td>
			<td align="center" height="50"><?php echo $this->_tpl_vars['j']['s5']; ?>
</td>
			<td align="center" height="50"><?php echo $this->_tpl_vars['j']['s6']; ?>
</td>
			
		</tr>

		
		<?php endforeach; endif; unset($_from); ?>
		
	</table>


</body>

</html>

<br>
<br>
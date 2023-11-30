<?php /* Smarty version 2.6.26, created on 2023-05-12 20:22:04
         compiled from hod_timetable_view2.tpl */ ?>

<br>
<br>

<!DOCTYPE html>
<html>

<body>
	<p style="color:black;font-size:25px;" align="center"><b>TIME TABLE VIEW</b></p>
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
			<td align="center" height="50"
				width="150">
				<b>Edit</b>
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
			<td align="center" height="50"><a href="hod_timetable_edit.php?tkey=<?php echo $this->_tpl_vars['j']['tkey']; ?>
" class="btn btn-success">Edit</a></td>
		</tr>

		
		<?php endforeach; endif; unset($_from); ?>
		
	</table>

<table border="2" cellspacing="0" align="center">
<tr>

<td><a href="timetable_delete.php?year=<?php echo $this->_tpl_vars['j']['year']; ?>
&&sem=<?php echo $this->_tpl_vars['j']['sem']; ?>
" class="btn btn-danger">Delete</a></td>
</tr>
</table>
</body>

</html>

<br>
<br>
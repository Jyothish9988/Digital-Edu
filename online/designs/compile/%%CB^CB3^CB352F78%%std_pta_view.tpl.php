<?php /* Smarty version 2.6.26, created on 2023-05-12 20:38:36
         compiled from std_pta_view.tpl */ ?>

<br>
<br>

<!DOCTYPE html>
<html>

<body>
<center><h2>Upcoming Meetings</h2></center>
		
		<br>
		<br>
	<table class="table table-striped table-bordered">
		<?php $_from = $this->_tpl_vars['pta']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
		<tr>
			
			<td>
			<p><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is hereby informed to all students,parents,and staff of college that PTA meeting will be held on <b><?php echo $this->_tpl_vars['j']['date']; ?>
</b> at <b><?php echo $this->_tpl_vars['j']['time']; ?>
</b> onwards .So Parents and Teachers are requested to attend the meeting positively for the betterment of the institution.</h4></p>
			<br>
			<p><h3>
				<b>Sd/-<br>
					HOD
				</b>
			</h3>
			</p>
		</td>
		<td>
		<br>
		
		</td>

		

			
		</tr>


			<?php endforeach; endif; unset($_from); ?>
		
		
	</table>


</body>

</html>

<br>
<br>
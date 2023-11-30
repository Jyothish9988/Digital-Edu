<?php /* Smarty version 2.6.26, created on 2023-05-12 20:31:34
         compiled from tr_std_attendance_view2.tpl */ ?>

<br>
<br>

<!DOCTYPE html>
<html>

<body>
	<center>
	<form method="POST" action="">
        <input type="hidden" name="hide" value="h">
        <tr>
          <th>Date</th>
          <td>
               
                                    <input type="date" name="date" value="date" >
                                 
            </td>
            <td>
              <input type="submit" value="Search" class="btn btn-success">
            </td>
        </tr>
      </form>
  </center>
	<p style="color:black;font-size:25px;" align="center"><b>TIME TABLE VIEW</b></p>
	<table border="5" cellspacing="0" align="center" id="example-table">
		<!--<caption>Timetable</caption>-->
<!-- 	<tr>
		<td align="center" height="50"
				width="300"><br>
				<?php $_from = $this->_tpl_vars['day']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k']):
?>
				<b><?php echo $this->_tpl_vars['k']['day']; ?>
</b>
				<?php endforeach; endif; unset($_from); ?>
			</td>
		</tr> -->

	
		<tr>
		<td align="center" height="50"
				width="150">
				<b>SEM <?php echo $this->_tpl_vars['sem']; ?>
<br>				<?php $_from = $this->_tpl_vars['day']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k']):
?>
				<?php echo $this->_tpl_vars['k']['day']; ?>
</b>
				<?php endforeach; endif; unset($_from); ?>
			</td>
			<td align="center" height="50"
				width="150"><br>
				<b>Time</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>I &nbsp;<br>9:30-10:30</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>II &nbsp;<br>10:30-11:20</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>III &nbsp;<br>11:30-12:30</b>
			</td>



			<td align="center" height="50"
				width="150">
				<b>IV &nbsp;<br>01:30-2:30</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>V &nbsp;<br>2:30-3:20</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>VI &nbsp;<br>3:30-4:30</b>
			</td>
			
		</tr>

<tr>
		<td align="center" height="50" width="150"><br>
				<b>Roll no</b>
	</td>
	<td align="center" height="50" width="150"><br>
				<b>Name/Period</b>
	</td>
<?php $_from = $this->_tpl_vars['cs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cs']):
?>
	<td align="center" height="50">
				<b><?php echo $this->_tpl_vars['cs']['s1']; ?>
</b>
	</td>

	<td align="center" height="50">
				<b><?php echo $this->_tpl_vars['cs']['s2']; ?>
</b>
	</td>

	<td align="center" height="50">
				<b><?php echo $this->_tpl_vars['cs']['s3']; ?>
&nbsp;</b>
	</td>

	<td align="center" height="50">
				<b><?php echo $this->_tpl_vars['cs']['s4']; ?>
</b>
	</td>

	<td align="center" height="50">
				<b><?php echo $this->_tpl_vars['cs']['s5']; ?>
</b>
	</td>

	<td align="center" height="50">
				<b><?php echo $this->_tpl_vars['cs']['s6']; ?>
</b>
	</td>
<?php endforeach; endif; unset($_from); ?>
</tr>


<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
<tr>
	
	<td align="center" height="50">
				<?php echo $this->_tpl_vars['r']++; ?>

		</td>
		<td align="center" height="50">
				<?php echo $this->_tpl_vars['j']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['j']['name2']; ?>

		</td>
		<td align="center" height="50">

			<?php if ($this->_tpl_vars['j']['s1'] == '1'): ?> P <?php else: ?> A <?php endif; ?>
		</td>		
				<td align="center" height="50">
			<?php if ($this->_tpl_vars['j']['s2'] == '1'): ?> P <?php else: ?> A <?php endif; ?>
		</td>	
				<td align="center" height="50">
			<?php if ($this->_tpl_vars['j']['s3'] == '1'): ?> P <?php else: ?> A <?php endif; ?>
		</td>	
				<td align="center" height="50">
			<?php if ($this->_tpl_vars['j']['s4'] == '1'): ?> P <?php else: ?> A <?php endif; ?>
		</td>	
				<td align="center" height="50">
			<?php if ($this->_tpl_vars['j']['s5'] == '1'): ?> P <?php else: ?> A <?php endif; ?>
		</td>	
				<td align="center" height="50">
			<?php if ($this->_tpl_vars['j']['s6'] == '1'): ?> P <?php else: ?> A <?php endif; ?>
		</td>		
</tr>
<?php endforeach; endif; unset($_from); ?>


		
	</table>

<button id="download" class="btn-success">Export table to excel</button>

<?php echo '
  <script src="images/table2excel.js"></script>
<script>
 document.getElementById(\'download\').addEventListener(\'click\',function(){

var table2excel = new Table2Excel();
  table2excel.export(document.querySelectorAll("#example-table"));
 });
  

</script>
'; ?>


</body>

</html>

<br>
<br>
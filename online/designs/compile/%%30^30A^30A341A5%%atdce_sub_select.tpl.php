<?php /* Smarty version 2.6.26, created on 2023-05-08 11:42:25
         compiled from atdce_sub_select.tpl */ ?>

<br>
<br>                           







    <body>

<form method="post" action="" onsubmit="">
<table  class="table table-striped table-bordered">
    <tr><td>Subject</td>
                                <td>

                                  <select class="form-control" name="subject" placeholder="Enter Subject........
                                   " readonly>
                             
                                   

                                   <option><?php echo $this->_tpl_vars['sub1']; ?>
</option>

                             
                               </select>
</td>

    </tr>

<tr>
    <th>Admission No</th>
    <th>Roll no</th>
    <th>Name</th>
    
    <th>Present</th>
    <th>Absent</th>
</tr>



    <input type="hidden" value="h" name="hide">


<?php $_from = $this->_tpl_vars['absent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k']):
?>

<tr>

    <td><?php echo $this->_tpl_vars['k']['adno']; ?>
</td>
    <td><?php echo $this->_tpl_vars['r']++; ?>
</td>
    <td><?php echo $this->_tpl_vars['k']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['k']['name2']; ?>
</td>
    
<?php if ($this->_tpl_vars['k'][$this->_tpl_vars['sub']] == 1): ?>


    <td><input type="checkbox" id="atdce" name="present[]" value="<?php echo $this->_tpl_vars['k']['std_key']; ?>
-1" onclick="checkOnly(this)" checked></td>
    <td><input type="checkbox" id="atdce2" name="absent[]" value="<?php echo $this->_tpl_vars['k']['std_key']; ?>
-0" onclick="checkOnly(this)"></td>
<?php else: ?>
    <td><input type="checkbox" id="atdce" name="present[]" value="<?php echo $this->_tpl_vars['k']['std_key']; ?>
-1" onclick="checkOnly(this)"></td>
    <td><input type="checkbox" id="atdce2" name="absent[]" value="<?php echo $this->_tpl_vars['k']['std_key']; ?>
-0" onclick="checkOnly(this)" checked></td>


<?php endif; ?>
</tr>

<?php endforeach; endif; unset($_from); ?>


<?php echo '
<script type="text/javascript">
    function checkOnly(obj) {
        if($(obj).is(\':checked\')) {
            $(obj).closest(\'tr\').find(\'input[type="checkbox"]\').not(obj).prop(\'checked\', false);
        } else {
            $(obj).closest(\'tr\').find(\'input[type="checkbox"]\').not(obj).prop(\'checked\', true);
        }
    }

</script>
'; ?>



<tr>
    
<td><input type="submit" value="Submit" ></td>

</tr>

</table>
</form>
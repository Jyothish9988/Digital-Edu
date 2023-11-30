<?php /* Smarty version 2.6.26, created on 2023-05-08 09:56:12
         compiled from admin_fee_paid_view.tpl */ ?>
<html>
<?php echo '
<head>
  <script src="images/table2excel.js"></script>
 </head>
 '; ?>

<body>
<center><h4 class="card-title">Student Fee View</h4></center>
<table>
          <form method="POST" action="">
        <input type="hidden" name="hide" value="h">
        <tr>
          <th>Students</th>
          <td>
                <input type="text" name="name1" class="form-control" placeholder="Enter Student name...">
            </td>
            <td>
              <input type="submit" value="Search" class="btn btn-success">
            </td>
        </tr>
      </form>
</table>
<br>
<br>
 
<table  class="table table-striped table-bordered" id="example-table">
<td>
             
</td>
<thead>
 <tr><td>SEM <?php echo $this->_tpl_vars['sem']; ?>
</td></tr>
     <tr>
                                               
          <th>Admission No</th>
          <th>Name</th>
          <th>Dte of Join</th>
          <th>No Sem Paid</th>
          
     </tr>
</thead>

<tbody>
             <?php if ($this->_tpl_vars['data'] == null): ?>
 
          <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>                                   
        <tr>
          <td><?php echo $this->_tpl_vars['j']['adno']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['j']['name2']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['doj']; ?>
</td>
          <td><?php echo $this->_tpl_vars['j']['fsem']; ?>
</td>
          
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php else: ?>
        <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k']):
?>                                   
        <tr>
          <td><?php echo $this->_tpl_vars['k']['adno']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['k']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['k']['name2']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['k']['doj']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['k']['fsem']; ?>
</td>
          
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>

     
</tbody>
        
</table>
<button id="download" class="btn-success">Export table to excel</button>

<?php echo '
<script>
 document.getElementById(\'download\').addEventListener(\'click\',function(){

var table2excel = new Table2Excel();
  table2excel.export(document.querySelectorAll("#example-table"));
 });
  

</script>
'; ?>

</body>
</html>
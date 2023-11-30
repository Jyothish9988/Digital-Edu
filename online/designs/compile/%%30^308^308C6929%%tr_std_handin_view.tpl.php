<?php /* Smarty version 2.6.26, created on 2023-05-12 20:30:14
         compiled from tr_std_handin_view.tpl */ ?>
<br>
<br>
<html>
<?php echo '
<head>
  <script src="images/table2excel.js"></script>
 </head>
 '; ?>

<body>
<h4 class="card-title" align="center">Hand In View</h4>
<table>


  <div style="overflow-x:auto">
<table  class="table table-striped table-bordered" id="example-table">

   <thead>
              <tr><td align="right">SEM <?php echo $this->_tpl_vars['sem']; ?>
</td></tr>
    </thead>
<thead>

 
     <tr>
                                               
          <th align="center">Admission No</th>
          <th align="center">Name</th>
          <th align="center">Date</th>
          <th align="center">Time</th>
          <th align="center">Hand In</th>
     </tr>
</thead>

<tbody>
         <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>                             
        <tr>
          <td align="center"><?php echo $this->_tpl_vars['j']['adno']; ?>
</td> 
          <td align="center"><?php echo $this->_tpl_vars['j']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['j']['name2']; ?>
</td> 
          <td align="center"><?php echo $this->_tpl_vars['j']['date']; ?>
</td>
          <td align="center"><?php echo $this->_tpl_vars['j']['time']; ?>
</td>

          <td align="center" class="text-success"><?php echo $this->_tpl_vars['j']['handin']; ?>
</td>

        </tr>

        <?php endforeach; endif; unset($_from); ?>
        
</tbody>
        
</table>
</div>


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
<br>
<br>      
     
   

                                          
      
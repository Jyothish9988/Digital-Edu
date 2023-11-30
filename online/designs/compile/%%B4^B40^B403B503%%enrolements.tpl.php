<?php /* Smarty version 2.6.26, created on 2023-05-18 03:44:42
         compiled from enrolements.tpl */ ?>
<br>
<br>
<h4 class="card-title" align="center">Notes View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
                                               
          <th>Admission No</th>
          <th>Student</th>
          <th>Course</th>
          <th>Details</th>

     </tr>
</thead>

<tbody>
          <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                          
        <tr>
          <td><?php echo $this->_tpl_vars['j']['adno']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['j']['name2']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['course']; ?>
</td>
          <td><?php echo $this->_tpl_vars['j']['details']; ?>
</td>
          
        </tr>
        <?php endforeach; endif; unset($_from); ?>
</tbody>
        
</table>
<br>
<br>      
     
   

                                          
      
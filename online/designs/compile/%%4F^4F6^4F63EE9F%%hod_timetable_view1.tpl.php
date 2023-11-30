<?php /* Smarty version 2.6.26, created on 2023-05-12 20:21:57
         compiled from hod_timetable_view1.tpl */ ?>

<h4 class="card-title">News View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
                                               
          <th>Year</th>
          <th>Sem</th>
          <th>View</th>
          
     </tr>
</thead>

<tbody>
          <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                          
        <tr>
          <td><?php echo $this->_tpl_vars['j']['year']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['sem']; ?>
</td> 
          <td><a href="hod_timetable_view2.php?year=<?php echo $this->_tpl_vars['j']['year']; ?>
&&sem=<?php echo $this->_tpl_vars['j']['sem']; ?>
" class="btn btn-primary">View</a></td>
          
        </tr>
        <?php endforeach; endif; unset($_from); ?>
</tbody>
        
</table>
        
     
   

                                          
      
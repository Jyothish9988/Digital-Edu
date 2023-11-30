<?php /* Smarty version 2.6.26, created on 2023-05-16 18:07:45
         compiled from fees_upload_view.tpl */ ?>

<h4 class="card-title">Fees View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
                                               
          <th>Upload Date</th>
          <th>Sem</th>
          <th>Year</th>
          <th>Fees</th>
          <th>Edit</th>
          <th>Delete</th>
     </tr>
</thead>

<tbody>
          <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                          
        <tr>
          <td><?php echo $this->_tpl_vars['j']['cdate']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['sem']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['year']; ?>
</td>
          <td><?php echo $this->_tpl_vars['j']['fee']; ?>
</td>
          <td><a href="fees_upload_edit.php?fekey=<?php echo $this->_tpl_vars['j']['fekey']; ?>
" class="btn btn-primary">Edit</a></td>
          <td><a href="fees_delete.php?fekey=<?php echo $this->_tpl_vars['j']['fekey']; ?>
" class="btn btn-primary">Delete</a></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
</tbody>
        
</table>
        
     
   

                                          
      
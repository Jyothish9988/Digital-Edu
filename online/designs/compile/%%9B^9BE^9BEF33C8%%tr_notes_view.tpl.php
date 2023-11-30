<?php /* Smarty version 2.6.26, created on 2023-05-12 20:30:08
         compiled from tr_notes_view.tpl */ ?>
<br>
<br>
<h4 class="card-title" align="center">Notes View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
                                               
          <th>Subject</th>
          <th>Topic</th>
          <th>Sem</th>
          <th>Date</th>
          <th>Download</th>
          <th>Edit</th>
          <th>Delete</th>
          <th>View</th>
     </tr>
</thead>

<tbody>
          <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                          
        <tr>
          <td><?php echo $this->_tpl_vars['j']['sname']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['topic']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['sem']; ?>
</td>
          <td><?php echo $this->_tpl_vars['j']['date']; ?>
</td>
          <td><a href="uploads/<?php echo $this->_tpl_vars['j']['ntkey']; ?>
/<?php echo $this->_tpl_vars['j']['name']; ?>
" class="btn btn-success">Download</a></td>
          <td><a href="tr_note_edit.php?ntkey=<?php echo $this->_tpl_vars['j']['ntkey']; ?>
" class="btn btn-primary">Edit</a></td>
          <td><a href="note_delete.php?ntkey=<?php echo $this->_tpl_vars['j']['ntkey']; ?>
" class="btn btn-danger">Delete</a></td>
          <td><a href="tr_std_handin_view.php?ntkey=<?php echo $this->_tpl_vars['j']['ntkey']; ?>
&&sem=<?php echo $this->_tpl_vars['j']['sem']; ?>
" class="btn btn-info">View</a></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
</tbody>
        
</table>
<br>
<br>      
     
   

                                          
      
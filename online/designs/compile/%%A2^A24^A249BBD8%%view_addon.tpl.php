<?php /* Smarty version 2.6.26, created on 2023-05-18 03:42:31
         compiled from view_addon.tpl */ ?>

<h4 class="card-title">Gallery View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
           <th>Image</th>                                    
          <th>Course</th>
          <th>Details</th>
          <th>Date</th>
          <th>Enrolements</th>
          <th>Edit</th>
          <th>Delete</th>
     </tr>
</thead>

<tbody>
          <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                          
        <tr>
          <td><img src="uploads/<?php echo $this->_tpl_vars['j']['akey']; ?>
/<?php echo $this->_tpl_vars['j']['img1']; ?>
" heigh="150px" width="150px"></td>
          <td><?php echo $this->_tpl_vars['j']['course']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['details']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['date']; ?>
</td>
          <td><a href="enrolements.php?akey=<?php echo $this->_tpl_vars['j']['akey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
&&course=<?php echo $this->_tpl_vars['j']['course']; ?>
" class="btn btn-success">Enrolments</a></td>
          <td><a href="addon_edit.php?akey=<?php echo $this->_tpl_vars['j']['akey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-primary">Edit</a></td>
          <td><a href="addon_delete.php?key=<?php echo $this->_tpl_vars['j']['akey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
</tbody>
        
</table>
         
     
   

                                          
      
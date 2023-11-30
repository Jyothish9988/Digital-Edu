<?php /* Smarty version 2.6.26, created on 2023-05-12 20:29:44
         compiled from tr_leave_apply_view.tpl */ ?>
<br>
<br>
<h4 class="card-title" align="center">Applied Leaves View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
          <th>TR ID</th>                                    
          <th>Date</th>
          <th>Name</th>
          <th>Title</th>
          <th>Report</th>
          <th>Status</th>
          <th>Edit</th>
          <th>Delete</th>
     </tr>
</thead>

<tbody>
          <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                          
        <tr>

          
          <td><?php echo $this->_tpl_vars['j']['trid']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['date']; ?>
</td>
          <td><?php echo $this->_tpl_vars['j']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['j']['name2']; ?>
</td>  
          <td><?php echo $this->_tpl_vars['j']['title']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['report']; ?>
</td>
          <td>
           <?php if ($this->_tpl_vars['j']['lstatus'] == '1'): ?>
                                        Approved
                                        
                                       
                                        

                                        <?php elseif ($this->_tpl_vars['j']['lstatus'] == '2'): ?>
                                        
                                
                                       Rejected
                                        

                                        <?php else: ?>
                                        
                                       Pending
                                        
                                       
                                        <?php endif; ?>
          </td>
          <td><a href="tr_leave_apply_view_edit.php?lekey=<?php echo $this->_tpl_vars['j']['lekey']; ?>
" class="btn btn-primary">Edit</a></td>
          <td><a href="tr_leave_apply_delete.php?lekey=<?php echo $this->_tpl_vars['j']['lekey']; ?>
" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
</tbody>
        
</table>
<br>
<br>      
     
   

                                          
      
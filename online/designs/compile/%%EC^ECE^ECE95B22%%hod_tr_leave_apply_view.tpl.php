<?php /* Smarty version 2.6.26, created on 2023-05-12 20:20:16
         compiled from hod_tr_leave_apply_view.tpl */ ?>
<br>
<br>
<h4 class="card-title" align="center">Notes View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
          <th>Admission No</th>                                    
          <th>Date</th>
          <th>Name</th>
          <th>Title</th>
          <th>Report</th>
          
          <th>Approve</th>
          <th>Reject</th>
     </tr>
</thead>

<tbody>
          <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                          
        <tr>

          
          <td><?php echo $this->_tpl_vars['j']['adno']; ?>
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
                                         <?php if ($this->_tpl_vars['j']['lstatus'] == '1'): ?>
                                         <td>Approved</td>
                                        
                                        <td><a href="hod_std_leave_apply_reject.php?lekey=<?php echo $this->_tpl_vars['j']['lekey']; ?>
&&sem=<?php echo $this->_tpl_vars['j']['sem']; ?>
" class="btn btn-danger">Reject</a></td>
                                        

                                        <?php elseif ($this->_tpl_vars['j']['lstatus'] == '2'): ?>
                                        <td><a href="hod_std_leave_apply_approve.php?lekey=<?php echo $this->_tpl_vars['j']['lekey']; ?>
&&sem=<?php echo $this->_tpl_vars['j']['sem']; ?>
" class="btn btn-success">Approve</a></td>
                                
                                        <td>Rejected</td>
                                        

                                        <?php else: ?>
                                        <td><a href="hod_std_leave_apply_approve.php?lekey=<?php echo $this->_tpl_vars['j']['lekey']; ?>
&&sem=<?php echo $this->_tpl_vars['j']['sem']; ?>
" class="btn btn-success">Approve</a></td>

                                        <td><a href="hod_std_leave_apply_reject.php?lekey=<?php echo $this->_tpl_vars['j']['lekey']; ?>
&&sem=<?php echo $this->_tpl_vars['j']['sem']; ?>
" class="btn btn-danger">Reject</a></td>
                                       
                                        <?php endif; ?>


         
        </tr>
        <?php endforeach; endif; unset($_from); ?>
</tbody>
        
</table>
<br>
<br>      
     
   

                                          
      
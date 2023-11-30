<?php /* Smarty version 2.6.26, created on 2023-05-18 05:30:59
         compiled from contact_view_tr.tpl */ ?>

<h4 class="card-title">Contact View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
                                               
          <th>Designation</th>
          <th>Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Id</th>
          <th>Subject</th>
          <th>Message</th>
          <th>Date</th>
          <th>Reply</th>
          <th>Delete</th>
     </tr>
</thead>

<tbody>
          <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                          
        <tr>
          <td><?php echo $this->_tpl_vars['j']['desig']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['name1']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['email']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['contact']; ?>
</td>
          <td><?php echo $this->_tpl_vars['j']['ido']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['subject']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['message']; ?>
</td>  
          <td><?php echo $this->_tpl_vars['j']['date']; ?>
</td>
          <td><a href="contact_reply.php?key=<?php echo $this->_tpl_vars['j']['cokey']; ?>
" class="btn btn-primary">Reply</a></td>
          <td><a href="contact_delete_tr.php?cokey=<?php echo $this->_tpl_vars['j']['cokey']; ?>
" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
</tbody>
        
</table>
        
     
   

                                          
      
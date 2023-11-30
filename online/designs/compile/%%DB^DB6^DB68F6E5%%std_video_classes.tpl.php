<?php /* Smarty version 2.6.26, created on 2023-05-12 20:39:11
         compiled from std_video_classes.tpl */ ?>


<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
                                               
          <th>Time</th>
          <th>Subject</th>
          <th>Topic</th>
          <th>Teacher</th>
          <th></th>
     </tr>
</thead>

<tbody>
          <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                          
        <tr>
          <td><?php echo $this->_tpl_vars['j']['time']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['sub']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['topic']; ?>
</td>
          <td><?php echo $this->_tpl_vars['j']['lid']; ?>
</td>
          <td><a href="<?php echo $this->_tpl_vars['j']['url']; ?>
" class="btn btn-primary">Join</a></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
</tbody>
        
</table>
        
     
   

                                          
      
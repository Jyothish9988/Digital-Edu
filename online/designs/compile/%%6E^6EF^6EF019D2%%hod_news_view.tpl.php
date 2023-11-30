<?php /* Smarty version 2.6.26, created on 2023-05-12 20:21:22
         compiled from hod_news_view.tpl */ ?>

<h4 class="card-title">News View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
                                               
          <th>Title</th>
          <th>Report</th>
          <th>Date</th>
          <th>Edit</th>
          <th>Delete</th>
     </tr>
</thead>

<tbody>
          <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                          
        <tr>
          <td><?php echo $this->_tpl_vars['j']['title']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['report']; ?>
</td> 
          <td><?php echo $this->_tpl_vars['j']['date']; ?>
</td>
          <td><a href="hod_news_edit.php?key=<?php echo $this->_tpl_vars['j']['nkey']; ?>
" class="btn btn-primary">Edit</a></td>
          <td><a href="hod_news_delete.php?key=<?php echo $this->_tpl_vars['j']['nkey']; ?>
" class="btn btn-primary">Delete</a></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
</tbody>
        
</table>
        
     
   

                                          
      
<?php /* Smarty version 2.6.26, created on 2023-05-12 20:42:55
         compiled from std_all_notes_views.tpl */ ?>


   <div class="container" align="center">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
  <center>
    <table class="table table-stripped" align="center" >
      <form method="POST" action="">
        <input type="hidden" name="hide" value="h">
        <tr>
          <th></th>
          <td>
                <input type="text" name="sname" class="form-control" placeholder="Subject name...">
            </td>
            
            <td>
                <input type="text" name="topic" class="form-control" placeholder="Topic name...">
            </td>
            <td>
              <input type="submit" value="Search" class="btn btn-success">
            </td>
       </tr>
       </form>
  </table>
</center>
</div>
</div>
</div>
<br>
<br><br>

<div class="container-fluid">
     <div class="row">
        <?php if ($this->_tpl_vars['data'] == null): ?>

<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
   

<div class="col-sm-3">
      <div class="card">
<div class="container-fluid">

<div class="item popular-item">
                    <div class="thumb">
                        <img src="images/book.jpg"  height="150px" width="150px"> 
                        <div class="text-content">
                            <h4>Subject:<?php echo $this->_tpl_vars['j']['sname']; ?>
</h4>
                            <h5>Sem:<?php echo $this->_tpl_vars['j']['sem']; ?>
</h5><br>
                            <span>Topic:<?php echo $this->_tpl_vars['j']['topic']; ?>
</span><br>
                            <span>Date:<?php echo $this->_tpl_vars['j']['date']; ?>
</span>

                        </div>
                        
                            <a href="uploads/<?php echo $this->_tpl_vars['j']['ntkey']; ?>
/<?php echo $this->_tpl_vars['j']['note']; ?>
" class="btn btn-success">DOWNLOAD</a>
     
                    </div>
                </div>
</div>
</div>
</div>


 <?php endforeach; endif; unset($_from); ?>
 </div>
 <?php else: ?>
 <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k']):
?>
   

<div class="col-sm-3">
      <div class="card">
<div class="container-fluid">

<div class="item popular-item">
                    <div class="thumb">
                        <img src="images/book.jpg"  height="150px" width="150px"> 
                        <div class="text-content">
                            <h4>Subject:<?php echo $this->_tpl_vars['k']['sname']; ?>
</h4>
                            <h5>Sem:<?php echo $this->_tpl_vars['k']['sem']; ?>
</h5><br>
                            <span>Topic:<?php echo $this->_tpl_vars['k']['topic']; ?>
</span><br>
                            <span>Date:<?php echo $this->_tpl_vars['k']['date']; ?>
</span>

                        </div>
                        
                            
                            <a href="std_notes_download.php?ntkey=<?php echo $this->_tpl_vars['k']['ntkey']; ?>
&&note=<?php echo $this->_tpl_vars['k']['note']; ?>
" class="btn btn-success">DOWNLOAD</a>
     
                    </div>
                </div>
</div>
</div>
</div>


 <?php endforeach; endif; unset($_from); ?>
 <?php endif; ?>
 </div>

</div>

<br>
<br><br>
<br><br>
<br><br>
<br><br>
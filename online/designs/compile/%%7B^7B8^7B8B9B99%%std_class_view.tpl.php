<?php /* Smarty version 2.6.26, created on 2023-05-12 20:42:46
         compiled from std_class_view.tpl */ ?>

<div class="container-fluid">
     <div class="row">
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
   
  
<div class="col-sm-3">
      <div class="card">
<div class="container-fluid">

<div class="item popular-item">
                    <div class="thumb">
                        <img src="images/giphy.gif"  height="150px" width="150px"> 
                        '
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
                        
                            <a href="play.php?value=uploads/<?php echo $this->_tpl_vars['j']['ntkey']; ?>
/<?php echo $this->_tpl_vars['j']['note']; ?>
" class="btn btn-success">PLAY</a>
     
                    </div>
                    
                </div>
</div>
</div>
</div>


 <?php endforeach; endif; unset($_from); ?>
 </div>
</div>
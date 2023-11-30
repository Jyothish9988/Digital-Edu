<?php /* Smarty version 2.6.26, created on 2023-05-16 04:01:58
         compiled from book_fetch.tpl */ ?>

<div><br><br></div>




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
                        <img src="uploads/<?php echo $this->_tpl_vars['j']['bkey']; ?>
/<?php echo $this->_tpl_vars['j']['img1']; ?>
"  height="200px" width="200px"> 
                        <div class="text-content">
                            <h4><?php echo $this->_tpl_vars['j']['bnam']; ?>
</h4>
                            <span><?php echo $this->_tpl_vars['j']['ban']; ?>
</span>
                        </div>
                        <!-- <div class="plus-button"> -->
                            <a href="uploads/<?php echo $this->_tpl_vars['j']['bkey']; ?>
/<?php echo $this->_tpl_vars['j']['img2']; ?>
" class="btn btn-success">DOWNLOAD</a>
                        <!-- </div> -->
                    </div>
                </div>
</div>
</div>
</div>
 <?php endforeach; endif; unset($_from); ?>
</div>



</div>


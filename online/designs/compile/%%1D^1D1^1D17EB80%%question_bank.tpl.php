<?php /* Smarty version 2.6.26, created on 2023-05-15 07:22:47
         compiled from question_bank.tpl */ ?>


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
                        <img src="images/pdf.jpeg"  height="200px" width="200px"> 
                        <div class="text-content">
                            <h4>Subject:<?php echo $this->_tpl_vars['j']['subject']; ?>
</h4>
                            <span>Year<?php echo $this->_tpl_vars['j']['year']; ?>
</span>
                        </div>
                        <!-- <div class="plus-button"> -->
                            <a href="uploads/<?php echo $this->_tpl_vars['j']['qkey']; ?>
/<?php echo $this->_tpl_vars['j']['img1']; ?>
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
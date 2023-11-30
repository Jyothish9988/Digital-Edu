<?php /* Smarty version 2.6.26, created on 2023-05-12 20:48:34
         compiled from std_leave_apply_view_edit.tpl */ ?>

<br>
<br>

 <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="" method="POST">
                                        <input type="hidden" name="hidden" value='h'>
                                        <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">LEAVE TITLE <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="title" value="<?php echo $this->_tpl_vars['j']['title']; ?>
"placeholder="Enter Leave Title..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Subject <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="report" value="<?php echo $this->_tpl_vars['j']['report']; ?>
" placeholder="Enter Subject..">
                                            </div>
                                        </div>
                                        <?php endforeach; endif; unset($_from); ?>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php /* Smarty version 2.6.26, created on 2023-05-15 07:07:33
         compiled from admin_newly_enrolled_tr.tpl */ ?>
<div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">New Enrolled Teachers Table</strong>
                            </div>

                             <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Teacher no</th>
                                            <th>Name</th>
                                            <th>Date Of Join</th>
                                            <th>Address</th>
                                            <th>Pin</th>
                                            <th>DOB</th>
                                            <th>SEX</th>
                                            <th>Qualification</th>
                                            <th>Contact</th>
                                           
                                            <th>Edit</th>
                                             <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                    <tbody>
                                        
                                <tr>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['trid']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['j']['name2']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['doj']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['address']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['pin']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['dob']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['sex']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['quan']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['tpno']; ?>
</td>
                                      
                                       <td align="center"><a href="tr_edit.php?tr_key=<?php echo $this->_tpl_vars['j']['tr_key']; ?>
&&sem=<?php echo $this->_tpl_vars['j']['sem']; ?>
" class="btn btn-outline-danger">Edit</a></td> 
                
                                        <td align="center"><a href="tr_delete.php?tr_key=<?php echo $this->_tpl_vars['j']['tr_key']; ?>
&&sem=<?php echo $this->_tpl_vars['j']['sem']; ?>
" class="btn btn-outline-danger">Delete</a></td> 




                                </tr>
                                    </tbody>
                                     <?php endforeach; endif; unset($_from); ?>

                                </table>
                            </div>
                        </div>
                    </div>
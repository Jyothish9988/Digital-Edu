<?php /* Smarty version 2.6.26, created on 2023-05-16 18:09:33
         compiled from admin_newly_enrolled_std.tpl */ ?>
<div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">New Enrolled Students Table</strong>
                            </div>

                             <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Admission no</th>
                                            <th>Name</th>
                                            <th>Date Of Join</th>
                                            <th>Address</th>
                                            <th>Pin</th>
                                            <th>DOB</th>
                                            <th>SEX</th>
                                            <!-- <th>Qualification</th> -->
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
                                        <td align="center"><?php echo $this->_tpl_vars['j']['adno']; ?>
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
                                        <!-- <td align="center"><?php echo $this->_tpl_vars['j']['quan']; ?>
</td> -->
                                        <td align="center"><?php echo $this->_tpl_vars['j']['spno']; ?>
</td>
                                      

                                       <td align="center"><a href="std_edit.php?std_key=<?php echo $this->_tpl_vars['j']['std_key']; ?>
&&sem=<?php echo $this->_tpl_vars['j']['sem']; ?>
" class="btn btn-outline-danger">Edit</a></td> 
                                        <td align="center"><a href="std_delete.php?std_key=<?php echo $this->_tpl_vars['j']['std_key']; ?>
&&sem=<?php echo $this->_tpl_vars['j']['sem']; ?>
" class="btn btn-outline-danger">Delete</a></td>


                



                                </tr>
                                    </tbody>
                                     <?php endforeach; endif; unset($_from); ?>

                                </table>
                            </div>
                        </div>
                    </div>
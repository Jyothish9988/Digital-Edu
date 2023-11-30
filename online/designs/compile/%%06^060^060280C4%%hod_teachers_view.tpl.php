<?php /* Smarty version 2.6.26, created on 2023-05-12 20:16:05
         compiled from hod_teachers_view.tpl */ ?>

  <div style="overflow-x:auto">
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">

                                <thead>
                                         <tr>
                                             <th>Id No</th>
                                             <th>Name</th>
                                             <th>Address</th>
                                             <th>Pin</th>
                                             <th>DOB</th>
                                             <th>Sex</th>
                                             <th>Phone No</th>
                                             <th>Profile</th>
                                             <th></th>
                                             <th></th>
                                             
                                         </tr>
                                    </thead>
                                <tbody>

                                   
                                
                                 <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                <tr>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['trid']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['j']['name2']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['address']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['pin']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['dob']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['sex']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['tpno']; ?>
</td>
                                        <td align="center"><a href="teacher_profile.php?tr_key=<?php echo $this->_tpl_vars['j']['tr_key']; ?>
" class="btn btn-success">View Profile</a></td>
                                       <?php if ($this->_tpl_vars['j']['astus'] == '0'): ?>
                                         <td>Approved</td>
                                        
                                        <td><a href="hod_tr_reject.php?tr_key=<?php echo $this->_tpl_vars['j']['lkey']; ?>
" class="btn btn-danger">Reject</a></td>
                                        <?php elseif ($this->_tpl_vars['j']['astus'] == '1'): ?>
                                        <td><a href="hod_tr_approve.php?tr_key=<?php echo $this->_tpl_vars['j']['lkey']; ?>
" class="btn btn-success">Approve</a></td>
                                
                                        <td>Rejected</td>
                                        <?php else: ?>
                                        <td><a href="hod_tr_approve.php?tr_key=<?php echo $this->_tpl_vars['j']['lkey']; ?>
" class="btn btn-success">Approve</a></td>
                                        <td>Rejected</td>
                                        <?php endif; ?>
                                        <td align="center"><a href="hod_tr_delete.php?tr_key=<?php echo $this->_tpl_vars['j']['tr_key']; ?>
" class="btn btn-outline-danger">Delete</a></td> 
                                        



                                </tr>
                                <?php endforeach; endif; unset($_from); ?>
                                </tbody>
                            </table>


                             <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Teacher Id</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Pin</th>
                                            <th>DOB</th>
                                            <th>SEX</th>
                                            <th>Qualification</th>
                                            <th>Contact</th>
                                           
                                             <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <?php $_from = $this->_tpl_vars['view2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                    <tbody>
                                        
                                <tr>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['trid']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['j']['name2']; ?>
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
                                      
                                        <td align="center"><a href="hod_tr_delete.php?tr_key=<?php echo $this->_tpl_vars['j']['tr_key']; ?>
" class="btn btn-outline-danger">Delete</a></td> 
                



                                </tr>
                                    </tbody>
                                     <?php endforeach; endif; unset($_from); ?>

                                </table>
                            </div>
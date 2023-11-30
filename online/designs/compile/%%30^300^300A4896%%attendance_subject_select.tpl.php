<?php /* Smarty version 2.6.26, created on 2023-04-01 06:24:08
         compiled from attendance_subject_select.tpl */ ?>


<br>
<br>                           
<center>
    <h2><b>Attendance Panel</b></h2><br>
                    <form action="" method="post" >
                        <input type="hidden" name="hide" value="h">
                        
                        <table class="table table-bordered" style="width:100%">
                            <tr><td>Subject</td>
                                <td>
                                  
                                   <select class="form-control" name="subject" placeholder="Enter Subject........
                                   " >
                             
                                   <?php $_from = $this->_tpl_vars['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                   <!-- <option viewonly>Select</option> -->
                                   

                                   <option><?php echo $this->_tpl_vars['j']['s1']; ?>
</option>
                                   <option><?php echo $this->_tpl_vars['j']['s2']; ?>
</option>
                                   <option><?php echo $this->_tpl_vars['j']['s3']; ?>
</option>
                                   <option><?php echo $this->_tpl_vars['j']['s4']; ?>
</option>
                                   <option><?php echo $this->_tpl_vars['j']['s5']; ?>
</option>
                                   <option><?php echo $this->_tpl_vars['j']['s6']; ?>
</option>
                                   <?php endforeach; endif; unset($_from); ?>
                             
                               </select>
                                </td>
                            </tr>   
                        </table>
                        <div class="submit mt-20">
                          <input type="submit" name="submit" value="Submit">
                        </div>
                     </form>

</center>
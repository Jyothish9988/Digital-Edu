<?php /* Smarty version 2.6.26, created on 2023-05-13 06:15:52
         compiled from all_student_info.tpl */ ?>

	<!--dashboard area-->
	<div class="dashboard-content">
		<div class="dashboard-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="left">
							<p><span>dashboard</span>Control panel</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="right text-right">
							<a href="dashboard.php"><i class="fas fa-home"></i>home</a>
							<span class="disabled">all student info</span>
						</div>
					</div>
				</div>
			</div>					
		</div>
        <div class="student-wrapper">
           <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="std-info">
                            <table id="dtBasicExample" class="table table-dark table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Admission No</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Pin</th>
                                        <th>DOB</th>
                                        <th>SEX</th>
                                        <th>Dept</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        
                        
                                    </tr>
                                </thead>
                                <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                <tbody>

                                   
                                
                                 
                                <tr>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['adno']; ?>
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
                                        <td align="center"><?php echo $this->_tpl_vars['j']['course']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['spno']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['j']['email']; ?>
</td>



                                </tr>
                              
                                </tbody>
                                  <?php endforeach; endif; unset($_from); ?>
                            </table>
                        </div>
                    </div>
                </div>
           </div>
        </div>
	</div>
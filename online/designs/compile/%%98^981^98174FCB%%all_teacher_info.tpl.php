<?php /* Smarty version 2.6.26, created on 2023-05-15 08:31:04
         compiled from all_teacher_info.tpl */ ?>

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
							<span class="disabled">all teacher info</span>
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
                                             <th>Id No</th>
                                             <th>Name</th>
                                             <th>Address</th>
                                             <th>Pin</th>
                                             <th>DOB</th>
                                             <th>Sex</th>
                                             <th>Phone No</th>
                                             <th>Email</th>
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
                                        <td align="center"><?php echo $this->_tpl_vars['j']['email']; ?>
</td>
                                        



                                </tr>
                                <?php endforeach; endif; unset($_from); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
           </div>
        </div>
	</div>
	
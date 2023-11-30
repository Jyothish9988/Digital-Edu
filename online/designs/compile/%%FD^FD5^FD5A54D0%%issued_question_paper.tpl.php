<?php /* Smarty version 2.6.26, created on 2023-05-13 06:08:20
         compiled from issued_question_paper.tpl */ ?>

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
							<span class="disabled">display books</span>
						</div>
					</div>
				</div>				
			</div>	
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dbooks">
                            <table id="dtBasicExample" class="table table-striped table-dark text-center">
                           <thead>
                                <tr>
                                    <th></th>
                                    <th>Subject name</th>
                                    <th>Year</th>
                                    <th>File</th>
                                    <th>Delete</th>
                                    
                                </tr>
                           </thead>
                            
                            <tbody>
                                <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                <tr>
                                    <td><img src="images/pdf.jpeg"></td>
                                    <td><?php echo $this->_tpl_vars['j']['subject']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['j']['year']; ?>
</td>
                                    <td><a href="uploads/<?php echo $this->_tpl_vars['j']['qkey']; ?>
/<?php echo $this->_tpl_vars['j']['img1']; ?>
" class="btn btn-success">DOWNLOAD</a></td>
                                    <td><a href="delete_questionpaper.php?qkey=<?php echo $this->_tpl_vars['j']['qkey']; ?>
"><i class="fas fa-trash"></i></a></td>
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
	
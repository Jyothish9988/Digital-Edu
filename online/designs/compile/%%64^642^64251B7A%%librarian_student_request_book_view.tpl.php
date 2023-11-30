<?php /* Smarty version 2.6.26, created on 2023-05-16 18:27:32
         compiled from librarian_student_request_book_view.tpl */ ?>

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
							<a href=""><i class="fas fa-home"></i>home</a>
							<span class="disabled">student requested books</span>
						</div>
					</div>
				</div>
				<div class="issued-content">
					<div class="row">
						<div class="col-md-12">
							<div class="rbook-info status">
								<table id="dtBasicExample" class="table  table-striped table-dark text-center">
									<thead>
										<tr>
											<th>Admission No</th>
											<th>Name</th>
											<th>Book Name</th>
											<th>Author</th>								
											<th>Publisher</th>
											<th>Date</th>
											<th>Book Url</th>										
										</tr>
									</thead>
									<tbody>
										<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
										<tr>
											<th><?php echo $this->_tpl_vars['j']['adno']; ?>
</th>
											<th><?php echo $this->_tpl_vars['j']['name1']; ?>
 <?php echo $this->_tpl_vars['j']['name2']; ?>
</th>
											<th><?php echo $this->_tpl_vars['j']['bnam']; ?>
</th>
											<th><?php echo $this->_tpl_vars['j']['ban']; ?>
</th>								
											<th><?php echo $this->_tpl_vars['j']['bpn']; ?>
</th>
											<th><?php echo $this->_tpl_vars['j']['date']; ?>
</th>
											<th><?php echo $this->_tpl_vars['j']['url']; ?>
</th>										
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
	</div>
 
    </script>
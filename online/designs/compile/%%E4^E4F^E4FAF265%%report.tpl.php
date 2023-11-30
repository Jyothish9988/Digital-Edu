<?php /* Smarty version 2.6.26, created on 2023-03-01 07:19:23
         compiled from report.tpl */ ?>
<br>
<br>
<br>
<center>
<h2>Admin Reporting</h2>
</center>
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
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Title <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="title" placeholder="Title.." >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Report <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="report" placeholder="Enter Report.." >
                                            </div>
                                        </div>
                                        
                                        
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
<br>
<br>
<br>



            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="left">
                            <span><H5 align="left">Reports View</H5></span>
                        </div>
                        <div class="dashboard-content">
                            <table class="table table-striped table-bordered">
                           <thead>
                                <tr>
                                    <!-- <th>Book image</th> -->
                                    <th>Date</th>
                                    <th>Semester</th>
                                    <th>Title</th>
                                    <th>Report</th>
                                    <th>Reply</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                               
                                    
                                </tr>
                           </thead>
                            
                            <tbody>
                                <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                <tr>
                                   
                                    <td><?php echo $this->_tpl_vars['j']['date']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['j']['resem']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['j']['title']; ?>
</td>
                                    
                                    <td><?php echo $this->_tpl_vars['j']['report']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['j']['reply']; ?>
</td>
                                    <td><a href="tr_report_edit.php?rkey=<?php echo $this->_tpl_vars['j']['rkey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-success">Edit</a></td>
                                    <td><a href="tr_report_delete.php?rkey=<?php echo $this->_tpl_vars['j']['rkey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-outline-danger">Delete</a></td>
                                    

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
    <br>
    <br>
    <br>
	
     
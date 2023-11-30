<?php /* Smarty version 2.6.26, created on 2023-05-16 18:09:55
         compiled from admin_teachers_view.tpl */ ?>





 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Teachers table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Teachers Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Teacher Id</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Pin</th>
                                            <th>DOB</th>
                                            <th>SEX</th>
                                            <!-- <th>Qualification</th> -->
                                            <!-- <th>Contact</th> -->
                                            <th>Profile</th>
                                            <th>Approve</th>
                                            <th>Reject</th>
                                             <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
                                        <!-- <td align="center"><?php echo $this->_tpl_vars['j']['quan']; ?>
</td> -->
                                        <!-- <td align="center"><?php echo $this->_tpl_vars['j']['tpno']; ?>
</td> -->

                                         <td align="center"><a href="teacher_profile.php?tr_key=<?php echo $this->_tpl_vars['j']['tr_key']; ?>
" class="btn btn-success">View Profile</a></td>
                                     
                                         <?php if ($this->_tpl_vars['j']['astus'] == '0'): ?>
                                         <td>Approved</td>
                                        
                                        <td><a href="tr_reject.php?tr_key=<?php echo $this->_tpl_vars['j']['lkey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-danger">Reject</a></td>
                                        <?php elseif ($this->_tpl_vars['j']['astus'] == '1'): ?>
                                        <td><a href="tr_approve.php?tr_key=<?php echo $this->_tpl_vars['j']['lkey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-success">Approve</a></td>
                                
                                        <td>Rejected</td>
                                        <?php else: ?>
                                        <td><a href="tr_approve.php?tr_key=<?php echo $this->_tpl_vars['j']['lkey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-success">Approve</a></td>
                                        <td>Rejected</td>
                                        <?php endif; ?>
                                        <td align="center"><a href="tr_delete.php?tr_key=<?php echo $this->_tpl_vars['j']['tr_key']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-outline-danger">Delete</a></td> 
                                        



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
        </div>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="admin/vendors/jquery/dist/jquery.min.js"></script>
    <script src="admin/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="admin/assets/js/main.js"></script>


    <script src="admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="admin/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="admin/vendors/jszip/dist/jszip.min.js"></script>
    <script src="admin/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="admin/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="admin/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="admin/assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
<?php /* Smarty version 2.6.26, created on 2023-05-12 23:52:46
         compiled from hod_students_view.tpl */ ?>
<!--  <div class="breadcrumbs">
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
        </div> -->

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Students Table</strong>
                            </div>
                            

                            <div class="card-body">
                                <center>
                                
    <table class="table table-stripped">
      <form method="POST" action="">
        <input type="hidden" name="hide" value="h">
        <tr>
          <th>Search</th>
          <td>
                <input type="text" name="name1" class="form-control" placeholder="Enter Student Name...">
            </td>
            <td>
              <input type="submit" value="Search" class="btn btn-success">
            </td>
        </tr>
      </form>
    </table>
  </center>
  <div style="overflow-x:auto">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Admission no</th>
                                            <th>Name</th>
                                            <th>Date of Join</th>
                                            <th>Address</th>
                                            <th>Pin</th>
                                            <th>DOB</th>
                                            <th>SEX</th>
                                            <th>Contact</th>
                                            <th>Profile</th>
                                            <th>Approve</th>
                                            <th>Reject</th>
                                            <th>Suspend</th>
                                             <th>  <input type="submit" value="Delete" class="btn btn-outline-danger"> <input type="checkbox" id="chkall" onclick="checkall(this)" /></th>

                                        </tr>
                                    </thead>
                                    <?php if ($this->_tpl_vars['data'] == null): ?>
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

                                        <td align="center"><?php echo $this->_tpl_vars['j']['spno']; ?>
</td>

                                        <td align="center"><a href="student_profile.php?std_key=<?php echo $this->_tpl_vars['j']['std_key']; ?>
" class="btn btn-success">View Profile</a></td>



                                    <?php if ($this->_tpl_vars['j']['astus'] == '0'): ?>
                                    <td>Approved</td>
                                    <td><a href="hod_std_reject.php?std_key=<?php echo $this->_tpl_vars['j']['lkey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-danger">Reject</a></td>
                                    <td><a href="hod_std_suspend.php?std_key=<?php echo $this->_tpl_vars['j']['lkey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-warning">Suspend</a></td>


                                    <?php elseif ($this->_tpl_vars['j']['astus'] == '1' && $this->_tpl_vars['j']['sspd'] != null): ?>                                            
                                    <td><a href="hod_std_approve.php?std_key=<?php echo $this->_tpl_vars['j']['lkey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-success">Approve</a></td>
                                    <td></td>
                                    <td><a class="btn btn-warning">Suspended till <?php echo $this->_tpl_vars['j']['sspd']; ?>
</a></td>


                                    <?php elseif ($this->_tpl_vars['j']['astus'] == '1'): ?>
                                    <td><a href="hod_std_approve.php?std_key=<?php echo $this->_tpl_vars['j']['lkey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-success">Approve</a></td>
                                    <td>Rejected</td>
                                    <td></td>

                                    <?php else: ?>
                                    <td><a href="hod_std_approve.php?std_key=<?php echo $this->_tpl_vars['j']['lkey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-success">Approve</a></td>


                                    <?php endif; ?>

                                       
 <form method="POST" action="">
 <input type="hidden" name="hide" value="h">
                                        <td><input type="checkbox" id="stddlt" name="stddlt[]" value="<?php echo $this->_tpl_vars['j']['std_key']; ?>
" ></td>



                                </tr>
                                    </tbody>
                                     <?php endforeach; endif; unset($_from); ?>

                                                           
                </form>

                                     <?php else: ?>
                                <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
                                    <tbody>
                                        
                                <tr>
                                        <td align="center"><?php echo $this->_tpl_vars['a']['adno']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['a']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['a']['name2']; ?>
</td>

                                        <td align="center"><?php echo $this->_tpl_vars['a']['doj']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['a']['address']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['a']['pin']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['a']['dob']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['a']['sex']; ?>
</td>

                                        <td align="center"><?php echo $this->_tpl_vars['a']['spno']; ?>
</td>
                                     
                                    <?php if ($this->_tpl_vars['a']['astus'] == '0'): ?>
                                    <td>Approved</td>
                                    <td><a href="hod_std_reject.php?std_key=<?php echo $this->_tpl_vars['a']['lkey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-danger">Reject</a></td>
                                    <td><a href="hod_std_suspend.php?std_key=<?php echo $this->_tpl_vars['a']['lkey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-warning">Suspend</a></td>

                                    <?php elseif ($this->_tpl_vars['j']['astus'] == '1' && $this->_tpl_vars['j']['sspd'] != null): ?>
                                    <td><a href="hod_std_approve.php?std_key=<?php echo $this->_tpl_vars['j']['lkey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-success">Approve</a></td>
                                    <td></td>
                                    <td><a class="btn btn-warning">Suspended till <?php echo $this->_tpl_vars['j']['sspd']; ?>
</a></td>

                                    <?php elseif ($this->_tpl_vars['a']['astus'] == '1'): ?>
                                    <td><a href="hod_std_approve.php?std_key=<?php echo $this->_tpl_vars['a']['lkey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-success">Approve</a></td>
                                    <td>Rejected</td>
                                    <td></td>

                                        

<?php else: ?>
                                    <td><a href="hod_std_approve.php?std_key=<?php echo $this->_tpl_vars['j']['lkey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-success">Approve</a></td>


 
                                        <?php endif; ?>


                                </tr>
                                    </tbody>
                                    <?php endforeach; endif; unset($_from); ?>
                                    <?php endif; ?>
                                    

                                </table>
</div>

                                <?php echo '
                                

<script type="text/javascript">
function checkall(source) {
    var checkboxes = document.getElementsByName(\'stddlt[]\');
    for(var i=0, n=checkboxes.length;i<n;i++) {
        checkboxes[i].checked = source.checked;
    }
}
</script>
'; ?>

                            </div>
 
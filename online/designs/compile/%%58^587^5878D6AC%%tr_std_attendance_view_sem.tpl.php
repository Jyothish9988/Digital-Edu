<?php /* Smarty version 2.6.26, created on 2023-05-12 20:23:01
         compiled from tr_std_attendance_view_sem.tpl */ ?>
<br>
<br>
<html>
<?php echo '
<head>
  <script src="images/table2excel.js"></script>
 </head>
 '; ?>

<body>
<h4 class="card-title" align="center">Attendance View Sem <?php echo $this->_tpl_vars['sem']; ?>
</h4>
 
<!-- <table>
          <form method="POST" action="">
        <input type="hidden" name="hide" value="h">
        <tr>
          <th>Date</th>
          <td>
               
                                    <input type="date" name="date" value="date" >
                                 
            </td>
            <td>
              <input type="submit" value="Search" class="btn btn-success">
            </td>
        </tr>
      </form>
</table> -->
 <div style="overflow-x:auto">
<table  class="table table-striped table-bordered" id="example-table">
   
 
<thead>

 <tr><td>SEM&nbsp;<?php echo $this->_tpl_vars['sem']; ?>
 Attendance</td><td align="center">Total Working Days  &nbsp;<?php echo $this->_tpl_vars['td']; ?>
</td></tr>

     <tr>
                                               
          <th align="center">Admission No</th>
          <th align="center">Roll No</th>
          <th align="center">Name</th>
    <!--       <th align="center">Present No</th>
          <th align="center">Absent No</th> -->
          
          <th align="center">Attendance</th>
          <th align="center">Exam Eligibility</th>
     </tr>
</thead>

<tbody>
             <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>                         
        <tr>
          <td align="center"><?php echo $this->_tpl_vars['j']['adno']; ?>
</td> 
          <td align="center"><?php echo $this->_tpl_vars['r']++; ?>
</td>
          <td align="center"><?php echo $this->_tpl_vars['j']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['j']['name2']; ?>
</td> 
<!--          
          <td align="center"><?php echo $this->_tpl_vars['j']['Present']; ?>
</td>
          <td align="center"><?php echo $this->_tpl_vars['j']['Absent']; ?>
</td> -->
         
          <td align="center"><?php echo $this->_tpl_vars['j']['Percent']; ?>
</td>
          <?php if ($this->_tpl_vars['j']['Percent'] >= 75): ?>
          <td align="center">Eligible</td>
          <?php else: ?>
          <td align="center">Ineligible</td>
          <?php endif; ?>
        </tr>
        <?php endforeach; endif; unset($_from); ?>

        
</tbody>
        
</table>
</div>
<button id="download" class="btn-success">Export table to excel</button>

<?php echo '
<script>
 document.getElementById(\'download\').addEventListener(\'click\',function(){

var table2excel = new Table2Excel();
  table2excel.export(document.querySelectorAll("#example-table"));
 });
  

</script>
'; ?>

</body>
</html>
<br>
<br>      
     
   

                                          
      
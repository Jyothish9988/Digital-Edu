<?php /* Smarty version 2.6.26, created on 2023-05-15 07:54:05
         compiled from tr_std_attendance_view_month.tpl */ ?>
<head>
<style>
<?php echo '
body {
    line-height: 1.6;
    margin: 2em;
}

th {
    background-color: #001f3f;
    color: #fff;
    padding: 0.5em 1em;
}

td {
    border-top: 1px solid #eee;
    padding: 0.5em 1em;
}

input {
    cursor: pointer;
}

/* Column types */
th.missed-col {
    background-color: #f00;
}

td.missed-col {
    background-color: #ffecec;
    color: #f00;
    text-align: center;
}

.name-col {
    text-align: left;
}

</style>
 <script src="images/table2excel.js"></script>
'; ?>

</head>


<h1>DIGITALEDU Attendance</h1>

<form action="" method="post">
    <input type="hidden" name="hide" value="h">
    <!-- <input type="text" id="month"> -->
    <select name="date" id="month" >
         
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option  value="12">December</option>
    </select> 
    <input type="submit" value="Submit" >
</form>

<div class="row">
     <div style="overflow-x:auto">
    <!-- <div class="col-lg-3" style="padding: 0; margin: 0; min-height: 300px;"> -->
        <div>
        <div class="table-container">
            <table class="table table-striped table-bordered" id="example-table">
                <thead>
                    <tr>
                        <th>Roll no.</th>
                        <th class="name-col">Student Name</th>
                        <?php $_from = $this->_tpl_vars['days']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
                            <th class="name-col"><?php echo $this->_tpl_vars['a']; ?>
</th>
                        <?php endforeach; endif; unset($_from); ?>
                        <th>Percent</th>
                    </tr>
                </thead>
                <tbody>
                     
                    <?php $_from = $this->_tpl_vars['std']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                        <tr class="student">
                            <td><?php echo $this->_tpl_vars['r']++; ?>
</td>
                            <td class="name-col"><?php echo $this->_tpl_vars['j']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['j']['name2']; ?>
</td>
                            <?php $_from = $this->_tpl_vars['atdce']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
                                <?php if (( $this->_tpl_vars['a']['lid'] == $this->_tpl_vars['j']['lid'] )): ?>
                                    <td><b><?php echo $this->_tpl_vars['a']['status']; ?>
</b></td>
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>   
                             <?php $_from = $this->_tpl_vars['percent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
                             <?php if ($this->_tpl_vars['b']['lid'] == $this->_tpl_vars['j']['lid']): ?>
                            <td><?php echo $this->_tpl_vars['b']['percent']; ?>
</td>  
                            <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>       
                        </tr>
                    <?php endforeach; endif; unset($_from); ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
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


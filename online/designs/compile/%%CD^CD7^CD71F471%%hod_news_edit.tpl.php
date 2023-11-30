<?php /* Smarty version 2.6.26, created on 2023-05-13 18:45:08
         compiled from hod_news_edit.tpl */ ?>
<?php echo '
<script>    
        function ver()
  {
  
    var title= document.getElementById("t1").value;
    var report= document.getElementById("t2").value;
    
    
    

    
    // var dob=document.getElementById("t12");
    let allowedMimes = [\'png\', \'jpg\', \'jpeg\']; //allowed image mime types
    let allowedMimesbook = [\'pdf\', \'docx\', \'pptx\'];
    let maxMb = 2; //maximum allowed size (MB) of image 
    let maxMb1=5;      
    var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[A-Za-z]+$/;
    var filter = /^([a-zA-Z0-9_\\.\\-])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+$/;
    var number= /^[0-9]+$/;
    if(title==\'\')
    {
      alert(\'Please enter  Title !\');
      return false;
    }

    else if(report==\'\')
    {
      alert(\'Please enter Report !\');
      return false;
    }
        
  }
    </script> 
    '; ?>

<br>
<br>
<center><h4>News Edit</h4></center><br>
<br><br>
<br>
<table align="center">
<form method="POST" action="" >      
                  <input type="hidden" name="hidden" value='h'>

         
            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>      
<tr>
      <td><b>Title</b></td>
      <td><input type="text" name="title" value="<?php echo $this->_tpl_vars['j']['title']; ?>
"class="form-control" id="t1"></td>
</tr>

<tr><td><b>Report</b></td><td><textarea  
      name="report" class="form-control" id="t2"><?php echo $this->_tpl_vars['j']['report']; ?>
</textarea></td></tr>




<tr><td></td><th><button type="submit" onclick="return ver()" class="btn btn-success">Submit</button></th></tr>             
<?php endforeach; endif; unset($_from); ?>

</form>
</table>
<br>
<br>
<br>
<br><br>
<br><br>
<br>



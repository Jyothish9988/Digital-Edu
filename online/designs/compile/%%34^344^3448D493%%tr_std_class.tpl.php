<?php /* Smarty version 2.6.26, created on 2023-05-16 07:14:33
         compiled from tr_std_class.tpl */ ?>
<head>
<?php echo '
  <script>    
        function subject()
  {
    



// Generate random room name if needed
if (!location.hash) 
{
  location.hash = Math.floor(Math.random() * 0xFFFFFF).toString(16);
}
const roomHash = location.hash.substring(1);

var rsh=roomHash;
document.getElementById("rid").value = rsh;

var url=document.getElementById("t1").value;
var sub=document.getElementById("t2").value;


 if(url==\'\')
    {
      alert(\'Url should not be empty\');
      return false;
    }

   

 if(sub==\'SELECT SUBJECT\')
    {
      alert(\'Subject should not be empty\');
      return false;
    }

   }
  </script> 
    '; ?>

</head>
	<!--dashboard area-->
    <br>

    <br>
	<div class="dashboard-content">
		<div class="dashboard-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="left">
							<span><H5 align="left">Class Submission</H5></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="right text-right">
							
							
						</div>
					</div>
				</div>				
			</div>	

			<div class="container" align="center">
				<?php echo '
					<form action="" method="post" >
                        <input type="hidden" name="hidden" value="h">
                        <input type="hidden" name="hash" id="rid">
                        <table class="table table-striped table-bordered">
						
                              <tr><td>Subject</td>
                                <td>
                                  '; ?>

                                   <select class="form-control" name="sub" placeholder="Enter Subject........
                                   " >
                             
                                   <?php $_from = $this->_tpl_vars['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                   <!-- <option viewonly>Select</option> -->
                                   

                                   <option><?php echo $this->_tpl_vars['j']['s1']; ?>
</option>
                                   <option><?php echo $this->_tpl_vars['j']['s2']; ?>
</option>
                                   <option><?php echo $this->_tpl_vars['j']['s3']; ?>
</option>
                                   <option><?php echo $this->_tpl_vars['j']['s4']; ?>
</option>
                                   <option><?php echo $this->_tpl_vars['j']['s5']; ?>
</option>
                                   <option><?php echo $this->_tpl_vars['j']['s6']; ?>
</option>
                                   <?php endforeach; endif; unset($_from); ?>
                             
                               </select>
                               <?php echo '
                                </td>
                            </tr>
                           
                            <tr>
                                <td>
                                    <textarea name="topic" class="form-control" id="t1" placeholder="topic..."></textarea>
                                </td>
                            </tr>

                             <!-- <tr>
                                <td>
                                    <textarea name="url" class="form-control" id="t3" placeholder="URL here...."></textarea>
                                </td>
                            </tr> -->
                            <tr>
                        </table>
                        <input type="submit" name="submit" value="Submit" onClick="return subject()" class="btn btn-info">
                    </form>
				</div>
'; ?>


<br>
<br>
<br>



            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="left">
                            <span><H5 align="left">Class Schedule View</H5></span>
                        </div>
                        <div class="dashboard-content">
                            <table id="dtBasicExample" class="table table-striped table-dark text-center">
                           <thead>
                                <tr>
                                    <!-- <th>Book image</th> -->
                                    <th>Subject</th>
                                    <th>Topic</th>
                                    <!-- <th>Url</th> -->
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th></th>
                                    
                                </tr>
                           </thead>
                            
                            <tbody>
                                <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                <tr>
                                    <!-- <td><img src="uploads/<?php echo $this->_tpl_vars['j']['bkey']; ?>
/<?php echo $this->_tpl_vars['j']['img1']; ?>
"></td> -->
                                    <td><?php echo $this->_tpl_vars['j']['sub']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['j']['topic']; ?>
</td>
                                    <!-- <td><?php echo $this->_tpl_vars['j']['url']; ?>
</td> -->
                                    <td><?php echo $this->_tpl_vars['j']['date']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['j']['time']; ?>
</td>
                                    <td><a href="url_edit.php?clkey=<?php echo $this->_tpl_vars['j']['clkey']; ?>
&&sem=<?php echo $this->_tpl_vars['j']['sem']; ?>
" class="btn btn-info submit">Edit</a></td>
                                    <td><a href="url_delete.php?clkey=<?php echo $this->_tpl_vars['j']['clkey']; ?>
&&sem=<?php echo $this->_tpl_vars['j']['sem']; ?>
"><i class="fas fa-trash"></i></a></td>
                                    <td><a href="tr_video_class.php?clkey=<?php echo $this->_tpl_vars['j']['clkey']; ?>
&&sem=<?php echo $this->_tpl_vars['j']['sem']; ?>
&&subject=<?php echo $this->_tpl_vars['j']['sub']; ?>
">Take online class</a></td>

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
	
     
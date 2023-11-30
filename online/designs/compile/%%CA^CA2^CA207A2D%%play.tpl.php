<?php /* Smarty version 2.6.26, created on 2023-05-12 20:47:56
         compiled from play.tpl */ ?>
<br>
<br>
<br>
<button onclick="goback()" class="btn btn-outline-success"> Back</button>

<div align="center" >
						<div >
							<!-- Video player 1422x800 -->
							<video width="1200" height="600" controls="controls">
							  <source src="<?php echo $this->_tpl_vars['value']; ?>
" type="video/mp4">							  
						
							</video>
						</div>
</div>

<br> 
<br>
<br>
<?php echo '
  <script>
  function goback(){
    window.history.back();
  }
  </script> 
'; ?>
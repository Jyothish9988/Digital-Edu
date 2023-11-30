<br>
<br>
<br>
<button onclick="goback()" class="btn btn-outline-success"> Back</button>

<div align="center" >
						<div >
							<!-- Video player 1422x800 -->
							<video width="1200" height="600" controls="controls">
							  <source src="{$value}" type="video/mp4">							  
						
							</video>
						</div>
</div>

<br> 
<br>
<br>
{literal}
  <script>
  function goback(){
    window.history.back();
  }
  </script> 
{/literal}
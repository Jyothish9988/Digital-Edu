<head>
{literal}
  <script>    
        function subject()
  {
    
var url=document.getElementById("t1").value;
var sub=document.getElementById("t2").value;


 if(url=='')
    {
      alert('Url should not be empty');
      return false;
    }

   

 if(sub=='SELECT SUBJECT')
    {
      alert('Subject should not be empty');
      return false;
    }

   }
  </script> 
    {/literal}
</head>
	<!--dashboard area-->
	<div class="dashboard-content">
		<div class="dashboard-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
                        <br>
                        <br>

						<div class="left">
							<span><h5>Class Schedule Update</h5></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="right text-right">
							
						</div>
					</div>
				</div>				
			</div>	

			<div class="container" align="center">
				
					<form action="" method="post" >
                        <input type="hidden" name="hidden" value="h">
                        <table class="table table-striped table-bordered">
						{foreach from=$data item="j"}
                            <tr>
                                <td>
                                   <input type="text" name="sub" value="{$j.sub}" class="form-control" id="t2" placeholder="Enter subject">
                                </td>
                            </tr>
                           
                            <tr>
                                <td>
                                    <textarea name="topic"  class="form-control" id="t1" placeholder="topic...">{$j.topic}</textarea>
                                </td>
                            </tr>

                             <tr>
                                <td>
                                    <textarea name="url" class="form-control" id="t3" placeholder="URL here....">{$j.url}</textarea>
                                </td>
                            </tr>
                            <tr>
                                {/foreach}
                        </table>
                        <input type="submit" name="submit" value="Submit" onClick="return subject()" class="btn btn-info">
                    </form>
				</div>



          			
		</div>
	</div>
	
     
	<!--dashboard area-->
	<div class="dashboard-content">
		<div class="dashboard-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="left">
							<p><span>dashboard</span>Control panel</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="right text-right">
							<a href="dashboard.php"><i class="fas fa-home"></i>home</a>
							<span class="disabled">notice upload</span>
						</div>
					</div>
				</div>
				<br>
<br>
<br>
<br>
				
				<div class="sendMessage" align="center">
					<form action="" method="post" >
                        <input type="hidden" name="hide" value="h">
                        <table class="table table-bordered table-striped">
                        	{foreach from=$pta item="j"}
						
                           <tr>
                                <td>
                                   <input type="text" class="form-control" value="{$j.batch}" placeholder="Select Batch" name="batch">
                                </td>
                            </tr>
                            

                             <tr>
                                <td>
                                   <input type="date" class="form-control" value="{$j.date}" placeholder="Select Date" name="date">
                                </td>
                            </tr>
                           {/foreach}
                            
                        </table>
                        <input type="submit" name="submit" value="Upload" class="btn btn-info">
                    </form>
				</div>
			
			</tr>
			</div>					
		</div>
	</div>
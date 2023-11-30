

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
<br>{foreach from=$data item="j"}
				
				<div class="sendMessage" align="center">
					<form action="" method="post" >
                        <input type="hidden" name="hide" value="h">
                        <table class="table table-bordered table-striped">
						
                            <tr>
                                <td>
                                   <input type="text" class="form-control" placeholder="Enter title" name="title" value="{$j.title}">
                                </td>
                            </tr>
                           
                            <tr>
                                <td>
                                    <textarea name="notice" class="form-control" placeholder="Message here...." >{$j.notice}</textarea>
                                </td>
                            </tr>
                            <tr>
                        </table>
                        <input type="submit" name="submit" value="Upload" class="btn btn-info">
                    </form>
				</div>
			 {/foreach}
			</tr>
			</div>					
		</div>
	</div>
 

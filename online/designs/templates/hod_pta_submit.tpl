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
						
                           <tr>
                                <td>
                                   <input type="text" class="form-control" placeholder="Select Batch" name="batch">
                                </td>
                            </tr>
                            

                             <tr>
                                <td>
                                   <input type="date" class="form-control" placeholder="Select Date" name="date">
                                </td>
                            </tr>
                           
                            
                        </table>
                        <input type="submit" name="submit" value="Upload" class="btn btn-info">
                    </form>
				</div>
			
			</tr>
			</div>					
		</div>
	</div>
 
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
                                    <th>Batch</th>
                                    <th>Time</th>
                                    <th>Date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    
                                </tr>
                           </thead>
                            
                            <tbody>
                                {foreach from=$pta item="j"}
                                <tr>
                                    <!-- <td><img src="uploads/{$j.bkey}/{$j.img1}"></td> -->
                                    <td>{$j.batch}</td>
                                    <td>{$j.time}</td>
                                    <td>{$j.date}</td>
                                    <td><a href="hod_pta_edit.php?ptakey={$j.ptakey}&&sem={$j.sem}" class="btn btn-info submit">Edit</a></td>
                                    <td><a href="hod_pta_delete.php?ptakey={$j.ptakey}&&sem={$j.sem}"><i class="fas fa-trash"></i></a></td>

                                </tr>
                                {/foreach}
                                                             </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
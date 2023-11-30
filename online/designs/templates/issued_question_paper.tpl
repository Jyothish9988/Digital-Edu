
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
							<span class="disabled">display books</span>
						</div>
					</div>
				</div>				
			</div>	
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dbooks">
                            <table id="dtBasicExample" class="table table-striped table-dark text-center">
                           <thead>
                                <tr>
                                    <th></th>
                                    <th>Subject name</th>
                                    <th>Year</th>
                                    <th>File</th>
                                    <th>Delete</th>
                                    
                                </tr>
                           </thead>
                            
                            <tbody>
                                {foreach from=$data item="j"}
                                <tr>
                                    <td><img src="images/pdf.jpeg"></td>
                                    <td>{$j.subject}</td>
                                    <td>{$j.year}</td>
                                    <td><a href="uploads/{$j.qkey}/{$j.img1}" class="btn btn-success">DOWNLOAD</a></td>
                                    <td><a href="delete_questionpaper.php?qkey={$j.qkey}"><i class="fas fa-trash"></i></a></td>
                                </tr>
                                {/foreach}
                                                             </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>				
		</div>
	</div>
	
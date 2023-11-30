
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
							<a href=""><i class="fas fa-home"></i>home</a>
							<span class="disabled">student requested books</span>
						</div>
					</div>
				</div>
				<div class="issued-content">
					<div class="row">
						<div class="col-md-12">
							<div class="rbook-info status">
								<table id="dtBasicExample" class="table  table-striped table-dark text-center">
									<thead>
										<tr>
											<th>Admission No</th>
											<th>Name</th>
											<th>Book Name</th>
											<th>Author</th>								
											<th>Publisher</th>
											<th>Date</th>
											<th>Book Url</th>										
										</tr>
									</thead>
									<tbody>
										{foreach from=$data item="j"}
										<tr>
											<th>{$j.adno}</th>
											<th>{$j.name1} {$j.name2}</th>
											<th>{$j.bnam}</th>
											<th>{$j.ban}</th>								
											<th>{$j.bpn}</th>
											<th>{$j.date}</th>
											<th>{$j.url}</th>										
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
	</div>
 
    </script>
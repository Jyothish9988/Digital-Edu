
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
							<span class="disabled">all student info</span>
						</div>
					</div>
				</div>
			</div>					
		</div>
        <div class="student-wrapper">
           <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="std-info">
                            <table id="dtBasicExample" class="table table-dark table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Admission No</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Pin</th>
                                        <th>DOB</th>
                                        <th>SEX</th>
                                        <th>Dept</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        
                        
                                    </tr>
                                </thead>
                                {foreach from=$view1 item="j"}
                                <tbody>

                                   
                                
                                 
                                <tr>
                                        <td align="center">{$j.adno}</td>
                                        <td align="center">{$j.name1}&nbsp;{$j.name2}</td>
                                        <td align="center">{$j.address}</td>
                                        <td align="center">{$j.pin}</td>
                                        <td align="center">{$j.dob}</td>
                                        <td align="center">{$j.sex}</td>
                                        <td align="center">{$j.course}</td>
                                        <td align="center">{$j.spno}</td>
                                        <td align="center">{$j.email}</td>



                                </tr>
                              
                                </tbody>
                                  {/foreach}
                            </table>
                        </div>
                    </div>
                </div>
           </div>
        </div>
	</div>

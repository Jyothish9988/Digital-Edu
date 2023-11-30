
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
                                    <th>Book image</th>
                                    <th>Book name</th>
                                    <th>Book file</th>
                                    <th>Author name</th>
                                    <th>Subject</th>
                                    <th>Semester</th>
                                    <th>Delete book</th>
                                </tr>
                           </thead>
                            
                            <tbody>
                                {foreach from=$data item="j"}
                                <tr>
                                    <td><img src="uploads/{$j.bkey}/{$j.img1}"></td>
                                    <td>{$j.bnam}</td>
                                    <td>{$j.img2}</td>
                                    <td>{$j.ban}</td>
                                    <td>{$j.subject}</td>
                                    <td>{$j.sem}</td>

                                    <td><a href="delete_book.php?bkey={$j.bkey}"><i class="fas fa-trash"></i></a></td>
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
	
     
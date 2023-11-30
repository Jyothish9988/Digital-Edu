<br>
<br>
<br>
<center>
<h2>Admin Reporting</h2>
</center>
<br>
<br>

<div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="" method="POST">
                                        <input type="hidden" name="hidden" value='h'>
                                        {foreach from=$data item="j"}
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Title <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" value="{$j.title}" class="form-control" id="val-username" name="title" placeholder="Title.." >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Report <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="report" placeholder="Enter Report.." value="{$j.report}">
                                            </div>
                                        </div>
                                        
                                        {/foreach}
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<br>
<br>
<br>



           <!--  <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="left">
                            <span><H5 align="left">Reports View</H5></span>
                        </div>
                        <div class="dashboard-content">
                            <table class="table table-striped table-bordered">
                           <thead>
                                <tr>
                                   
                                    <th>Date</th>
                                    <th>Semester</th>
                                    <th>Title</th>
                                    <th>Report</th>
                                    <th>Reply</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                               
                                    
                                </tr>
                           </thead>
                            
                            <tbody>
                                {foreach from=$data item="j"}
                                <tr>
                                   
                                    <td>{$j.date}</td>
                                    <td>{$j.resem}</td>
                                    <td>{$j.title}</td>
                                    
                                    <td>{$j.date}</td>
                                    <td>{$j.reply}</td>
                                    <td><a href="#" class="btn btn-success">Edit</a></td>
                                    <td><a href="url_delete.php?rkey={$j.rkey}" class="btn btn-outline-danger">Delete</a></td>
                                    

                                </tr>
                                {/foreach}
                                                             </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->				
		</div>
	</div>
    <br>
    <br>
    <br>
	
     
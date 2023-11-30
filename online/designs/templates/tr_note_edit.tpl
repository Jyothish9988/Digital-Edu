
<br>
<br>

 <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    
                                    <form class="form-valide" action="" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="hide" value='h'>
                                         {foreach from=$view1 item="j"}
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Subject Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="sname" placeholder="Enter Subject Name.." value="{$j.sname}" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Topic <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="topic" placeholder="Enter Topic Name.." value="{$j.topic}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Sem <span class="text-danger">*</span>
                                            </label>
                <select name="sem" class="form-control" id="t13" value="">
					<option >{$j.sem}</option>
					<option disabled>UG</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<!-- 					<option  disabled>PG</option>
<option>SEM 1</option>
<option>SEM 2</option>
<option>SEM 3</option>
<option>SEM 4</option> -->
				</select>
                                        </div>
<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Type <span class="text-danger">*</span>
                                            </label>
                <select name="type" class="form-control" id="t13">
                    <option >Select</option>
                    
<option>Notes</option>
<option>Video</option>

                </select>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">File<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-email" name="note" placeholder="Please Select File..">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        {/foreach}
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
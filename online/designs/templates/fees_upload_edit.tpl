<br>
<br>
<br>
<br>
<br>
<br>
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
                                            <label class="col-lg-4 col-form-label" for="val-username">Fee amount <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="fee" placeholder="Enter Fee Amount.." value="{$j.fee}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Sem <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select type="text" name="sem" id="t1" class="form-control" placeholder="Enter Sem" >
                                                
                                                <option>{$j.sem}</option>
                                                <option>SELECT SEM</option>
                                                <option disabled>UG</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>

                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Year <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select type="text" name="year" id="t1" class="form-control" placeholder="Select Year" value="{$j.year}">
                                                
                                                <option>{$j.year}</option>
                                                <option>SELECT YEAR</option>
                                                <option>2020</option>
                                                <option>2021</option>
                                                <option>2022</option>
                                                <option>2023</option>
                                                <option>2024</option>
                                                <option>2025</option>
                                                <option>2026</option>
                                                <option>2027</option>
                                                <option>2028</option>
                                                <option>2029</option>
                                                <option>2030</option>

                                            </select>
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
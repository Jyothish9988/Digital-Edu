<div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">New Enrolled Students Table</strong>
                            </div>

                             <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Admission no</th>
                                            <th>Name</th>
                                            <th>Date Of Join</th>
                                            <th>Address</th>
                                            <th>Pin</th>
                                            <th>DOB</th>
                                            <th>SEX</th>
                                            <!-- <th>Qualification</th> -->
                                            <th>Contact</th>
                                           <th>Edit</th>
                                             <th>Delete</th>
                                        </tr>
                                    </thead>
                                    {foreach from=$data item="j"}
                                    <tbody>
                                        
                                <tr>
                                        <td align="center">{$j.adno}</td>
                                        <td align="center">{$j.name1}&nbsp;{$j.name2}</td>
                                        <td align="center">{$j.doj}</td>
                                        <td align="center">{$j.address}</td>
                                        <td align="center">{$j.pin}</td>
                                        <td align="center">{$j.dob}</td>
                                        <td align="center">{$j.sex}</td>
                                        <!-- <td align="center">{$j.quan}</td> -->
                                        <td align="center">{$j.spno}</td>
                                      

                                       <td align="center"><a href="std_edit.php?std_key={$j.std_key}&&sem={$j.sem}" class="btn btn-outline-danger">Edit</a></td> 
                                        <td align="center"><a href="std_delete.php?std_key={$j.std_key}&&sem={$j.sem}" class="btn btn-outline-danger">Delete</a></td>


                



                                </tr>
                                    </tbody>
                                     {/foreach}

                                </table>
                            </div>
                        </div>
                    </div>
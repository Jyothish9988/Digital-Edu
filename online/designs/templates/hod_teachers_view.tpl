
  <div style="overflow-x:auto">
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">

                                <thead>
                                         <tr>
                                             <th>Id No</th>
                                             <th>Name</th>
                                             <th>Address</th>
                                             <th>Pin</th>
                                             <th>DOB</th>
                                             <th>Sex</th>
                                             <th>Phone No</th>
                                             <th>Profile</th>
                                             <th></th>
                                             <th></th>
                                             
                                         </tr>
                                    </thead>
                                <tbody>

                                   
                                
                                 {foreach from=$view1 item="j"}
                                <tr>
                                        <td align="center">{$j.trid}</td>
                                        <td align="center">{$j.name1}&nbsp;{$j.name2}</td>
                                        <td align="center">{$j.address}</td>
                                        <td align="center">{$j.pin}</td>
                                        <td align="center">{$j.dob}</td>
                                        <td align="center">{$j.sex}</td>
                                        <td align="center">{$j.tpno}</td>
                                        <td align="center"><a href="teacher_profile.php?tr_key={$j.tr_key}" class="btn btn-success">View Profile</a></td>
                                       {if $j.astus=='0'}
                                         <td>Approved</td>
                                        
                                        <td><a href="hod_tr_reject.php?tr_key={$j.lkey}" class="btn btn-danger">Reject</a></td>
                                        {elseif $j.astus=='1'}
                                        <td><a href="hod_tr_approve.php?tr_key={$j.lkey}" class="btn btn-success">Approve</a></td>
                                
                                        <td>Rejected</td>
                                        {else}
                                        <td><a href="hod_tr_approve.php?tr_key={$j.lkey}" class="btn btn-success">Approve</a></td>
                                        <td>Rejected</td>
                                        {/if}
                                        <td align="center"><a href="hod_tr_delete.php?tr_key={$j.tr_key}" class="btn btn-outline-danger">Delete</a></td> 
                                        



                                </tr>
                                {/foreach}
                                </tbody>
                            </table>


                             <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Teacher Id</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Pin</th>
                                            <th>DOB</th>
                                            <th>SEX</th>
                                            <th>Qualification</th>
                                            <th>Contact</th>
                                           
                                             <th>Delete</th>
                                        </tr>
                                    </thead>
                                    {foreach from=$view2 item="j"}
                                    <tbody>
                                        
                                <tr>
                                        <td align="center">{$j.trid}</td>
                                        <td align="center">{$j.name1}&nbsp;{$j.name2}</td>
                                        <td align="center">{$j.address}</td>
                                        <td align="center">{$j.pin}</td>
                                        <td align="center">{$j.dob}</td>
                                        <td align="center">{$j.sex}</td>
                                        <td align="center">{$j.quan}</td>
                                        <td align="center">{$j.tpno}</td>
                                      
                                        <td align="center"><a href="hod_tr_delete.php?tr_key={$j.tr_key}" class="btn btn-outline-danger">Delete</a></td> 
                



                                </tr>
                                    </tbody>
                                     {/foreach}

                                </table>
                            </div>
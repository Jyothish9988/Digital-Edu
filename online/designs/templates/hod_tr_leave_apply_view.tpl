<br>
<br>
<h4 class="card-title" align="center">Notes View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
          <th>Admission No</th>                                    
          <th>Date</th>
          <th>Name</th>
          <th>Title</th>
          <th>Report</th>
          
          <th>Approve</th>
          <th>Reject</th>
     </tr>
</thead>

<tbody>
          {foreach from=$view1 item="j"}
                                          
        <tr>

          
          <td>{$j.adno}</td> 
          <td>{$j.date}</td>
          <td>{$j.name1}&nbsp;{$j.name2}</td>  
          <td>{$j.title}</td> 
          <td>{$j.report}</td>
                                         {if $j.lstatus=='1'}
                                         <td>Approved</td>
                                        
                                        <td><a href="hod_std_leave_apply_reject.php?lekey={$j.lekey}&&sem={$j.sem}" class="btn btn-danger">Reject</a></td>
                                        

                                        {elseif $j.lstatus=='2'}
                                        <td><a href="hod_std_leave_apply_approve.php?lekey={$j.lekey}&&sem={$j.sem}" class="btn btn-success">Approve</a></td>
                                
                                        <td>Rejected</td>
                                        

                                        {else}
                                        <td><a href="hod_std_leave_apply_approve.php?lekey={$j.lekey}&&sem={$j.sem}" class="btn btn-success">Approve</a></td>

                                        <td><a href="hod_std_leave_apply_reject.php?lekey={$j.lekey}&&sem={$j.sem}" class="btn btn-danger">Reject</a></td>
                                       
                                        {/if}


         
        </tr>
        {/foreach}
</tbody>
        
</table>
<br>
<br>      
     
   

                                          
      
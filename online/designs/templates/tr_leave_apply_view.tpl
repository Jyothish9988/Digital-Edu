<br>
<br>
<h4 class="card-title" align="center">Applied Leaves View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
          <th>TR ID</th>                                    
          <th>Date</th>
          <th>Name</th>
          <th>Title</th>
          <th>Report</th>
          <th>Status</th>
          <th>Edit</th>
          <th>Delete</th>
     </tr>
</thead>

<tbody>
          {foreach from=$view1 item="j"}
                                          
        <tr>

          
          <td>{$j.trid}</td> 
          <td>{$j.date}</td>
          <td>{$j.name1}&nbsp;{$j.name2}</td>  
          <td>{$j.title}</td> 
          <td>{$j.report}</td>
          <td>
           {if $j.lstatus=='1'}
                                        Approved
                                        
                                       
                                        

                                        {elseif $j.lstatus=='2'}
                                        
                                
                                       Rejected
                                        

                                        {else}
                                        
                                       Pending
                                        
                                       
                                        {/if}
          </td>
          <td><a href="tr_leave_apply_view_edit.php?lekey={$j.lekey}" class="btn btn-primary">Edit</a></td>
          <td><a href="tr_leave_apply_delete.php?lekey={$j.lekey}" class="btn btn-danger">Delete</a></td>
        </tr>
        {/foreach}
</tbody>
        
</table>
<br>
<br>      
     
   

                                          
      
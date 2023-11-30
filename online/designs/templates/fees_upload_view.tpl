
<h4 class="card-title">Fees View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
                                               
          <th>Upload Date</th>
          <th>Sem</th>
          <th>Year</th>
          <th>Fees</th>
          <th>Edit</th>
          <th>Delete</th>
     </tr>
</thead>

<tbody>
          {foreach from=$data item="j"}
                                          
        <tr>
          <td>{$j.cdate}</td> 
          <td>{$j.sem}</td> 
          <td>{$j.year}</td>
          <td>{$j.fee}</td>
          <td><a href="fees_upload_edit.php?fekey={$j.fekey}" class="btn btn-primary">Edit</a></td>
          <td><a href="fees_delete.php?fekey={$j.fekey}" class="btn btn-primary">Delete</a></td>
        </tr>
        {/foreach}
</tbody>
        
</table>
        
     
   

                                          
      
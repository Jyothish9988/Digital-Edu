<br>
<br>
<h4 class="card-title" align="center">Notes View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
                                               
          <th>Subject</th>
          <th>Topic</th>
          <th>Sem</th>
          <th>Date</th>
          <th>Download</th>
          <th>Edit</th>
          <th>Delete</th>
          <th>View</th>
     </tr>
</thead>

<tbody>
          {foreach from=$view1 item="j"}
                                          
        <tr>
          <td>{$j.sname}</td> 
          <td>{$j.topic}</td> 
          <td>{$j.sem}</td>
          <td>{$j.date}</td>
          <td><a href="uploads/{$j.ntkey}/{$j.name}" class="btn btn-success">Download</a></td>
          <td><a href="tr_note_edit.php?ntkey={$j.ntkey}" class="btn btn-primary">Edit</a></td>
          <td><a href="note_delete.php?ntkey={$j.ntkey}" class="btn btn-danger">Delete</a></td>
          <td><a href="tr_std_handin_view.php?ntkey={$j.ntkey}&&sem={$j.sem}" class="btn btn-info">View</a></td>
        </tr>
        {/foreach}
</tbody>
        
</table>
<br>
<br>      
     
   

                                          
      
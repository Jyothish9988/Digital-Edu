
<h4 class="card-title">Gallery View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
           <th>Image</th>                                    
          <th>Course</th>
          <th>Details</th>
          <th>Date</th>
          <th>Enrolements</th>
          <th>Edit</th>
          <th>Delete</th>
     </tr>
</thead>

<tbody>
          {foreach from=$data item="j"}
                                          
        <tr>
          <td><img src="uploads/{$j.akey}/{$j.img1}" heigh="150px" width="150px"></td>
          <td>{$j.course}</td> 
          <td>{$j.details}</td> 
          <td>{$j.date}</td>
          <td><a href="enrolements.php?akey={$j.akey}&&sem={$sem}&&course={$j.course}" class="btn btn-success">Enrolments</a></td>
          <td><a href="addon_edit.php?akey={$j.akey}&&sem={$sem}" class="btn btn-primary">Edit</a></td>
          <td><a href="addon_delete.php?key={$j.akey}&&sem={$sem}" class="btn btn-danger">Delete</a></td>
        </tr>
        {/foreach}
</tbody>
        
</table>
         
     
   

                                          
      
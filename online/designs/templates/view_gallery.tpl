
<h4 class="card-title">Gallery View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
           <th>Image</th>                                    
          <th>Heading</th>
          <th>Subject</th>
          <th>Date</th>
          <th>Edit</th>
          <th>Delete</th>
     </tr>
</thead>

<tbody>
          {foreach from=$data item="j"}
                                          
        <tr>
          <td><img src="uploads/{$j.gkey}/{$j.img1}" heigh="150px" width="150px"></td>
          <td>{$j.heading}</td> 
          <td>{$j.subject}</td> 
          <td>{$j.date}</td>
          <td><a href="gallery_edit.php?key={$j.gkey}" class="btn btn-primary">Edit</a></td>
          <td><a href="gallery_delete.php?key={$j.gkey}" class="btn btn-primary">Delete</a></td>
        </tr>
        {/foreach}
</tbody>
        
</table>
        
     
   

                                          
      
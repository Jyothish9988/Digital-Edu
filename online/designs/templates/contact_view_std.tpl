
<h4 class="card-title">Contact View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
                                               
          <th>Designation</th>
          <th>Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Id</th>
          <th>Subject</th>
          <th>Message</th>
          <th>Date</th>
          <th>Reply</th>
          <th>Delete</th>
     </tr>
</thead>

<tbody>
          {foreach from=$data item="j"}
                                          
        <tr>
          <td>{$j.desig}</td> 
          <td>{$j.name1}</td> 
          <td>{$j.email}</td> 
          <td>{$j.contact}</td>
          <td>{$j.ido}</td> 
          <td>{$j.subject}</td> 
          <td>{$j.message}</td>  
          <td>{$j.date}</td>
          <td><a href="contact_reply.php?key={$j.cokey}" class="btn btn-primary">Reply</a></td>
          <td><a href="contact_delete_std.php?cokey={$j.cokey}" class="btn btn-danger">Delete</a></td>
        </tr>
        {/foreach}
</tbody>
        
</table>
        
     
   

                                          
      
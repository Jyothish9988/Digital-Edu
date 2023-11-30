

<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
                                               
          <th>Time</th>
          <th>Subject</th>
          <th>Topic</th>
          <th>Teacher</th>
          <th></th>
     </tr>
</thead>

<tbody>
          {foreach from=$view1 item="j"}
                                          
        <tr>
          <td>{$j.time}</td> 
          <td>{$j.sub}</td> 
          <td>{$j.topic}</td>
          <td>{$j.lid}</td>
          <td><a href="{$j.url}" class="btn btn-primary">Join</a></td>
        </tr>
        {/foreach}
</tbody>
        
</table>
        
     
   

                                          
      
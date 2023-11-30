
<h4 class="card-title">News View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
                                               
          <th>Year</th>
          <th>Sem</th>
          <th>View</th>
          
     </tr>
</thead>

<tbody>
          {foreach from=$data item="j"}
                                          
        <tr>
          <td>{$j.year}</td> 
          <td>{$j.sem}</td> 
          <td><a href="hod_timetable_view2.php?year={$j.year}&&sem={$j.sem}" class="btn btn-primary">View</a></td>
          
        </tr>
        {/foreach}
</tbody>
        
</table>
        
     
   

                                          
      
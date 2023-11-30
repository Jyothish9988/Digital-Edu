<br>
<br>
<h4 class="card-title" align="center">Notes View</h4>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
<thead>
     <tr>
                                               
          <th>Admission No</th>
          <th>Student</th>
          <th>Course</th>
          <th>Details</th>

     </tr>
</thead>

<tbody>
          {foreach from=$view1 item="j"}
                                          
        <tr>
          <td>{$j.adno}</td> 
          <td>{$j.name1}&nbsp;{$j.name2}</td> 
          <td>{$j.course}</td>
          <td>{$j.details}</td>
          
        </tr>
        {/foreach}
</tbody>
        
</table>
<br>
<br>      
     
   

                                          
      
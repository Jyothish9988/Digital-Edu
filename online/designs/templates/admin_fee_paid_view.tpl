<html>
{literal}
<head>
  <script src="images/table2excel.js"></script>
 </head>
 {/literal}
<body>
<center><h4 class="card-title">Student Fee View</h4></center>
<table>
          <form method="POST" action="">
        <input type="hidden" name="hide" value="h">
        <tr>
          <th>Students</th>
          <td>
                <input type="text" name="name1" class="form-control" placeholder="Enter Student name...">
            </td>
            <td>
              <input type="submit" value="Search" class="btn btn-success">
            </td>
        </tr>
      </form>
</table>
<br>
<br>
 
<table  class="table table-striped table-bordered" id="example-table">
<td>
             
</td>
<thead>
 <tr><td>SEM {$sem}</td></tr>
     <tr>
                                               
          <th>Admission No</th>
          <th>Name</th>
          <th>Dte of Join</th>
          <th>No Sem Paid</th>
          
     </tr>
</thead>

<tbody>
             {if $data==null}
 
          {foreach from=$data item="j"}                                   
        <tr>
          <td>{$j.adno}</td> 
          <td>{$j.name1}&nbsp;{$j.name2}</td> 
          <td>{$j.doj}</td>
          <td>{$j.fsem}</td>
          
        </tr>
        {/foreach}
        {else}
        {foreach from=$data item="k"}                                   
        <tr>
          <td>{$k.adno}</td> 
          <td>{$k.name1}&nbsp;{$k.name2}</td> 
          <td>{$k.doj}</td> 
          <td>{$k.fsem}</td>
          
        </tr>
        {/foreach}
        {/if}

     
</tbody>
        
</table>
<button id="download" class="btn-success">Export table to excel</button>

{literal}
<script>
 document.getElementById('download').addEventListener('click',function(){

var table2excel = new Table2Excel();
  table2excel.export(document.querySelectorAll("#example-table"));
 });
  

</script>
{/literal}
</body>
</html>
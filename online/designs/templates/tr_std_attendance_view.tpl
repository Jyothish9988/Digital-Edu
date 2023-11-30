<br>
<br>
<html>
{literal}
<head>
  <script src="images/table2excel.js"></script>
 </head>
 {/literal}
<body>
<h4 class="card-title" align="center">Attendance View</h4>
<table>
          <form method="POST" action="">
        <input type="hidden" name="hide" value="h">
        <tr>
          <th>Date</th>
          <td>
               
                                    <input type="date" name="date" value="date" >
                                 
            </td>
            <td>
              <input type="submit" value="Search" class="btn btn-success">
            </td>
        </tr>
      </form>
</table>

  <div style="overflow-x:auto">
<table  class="table table-striped table-bordered" id="example-table">
   {foreach from=$data item="j"}
   <thead>
              <tr><td align="right">SEM {$j.sem}</td></tr>
    </thead>
<thead>

 
     <tr>
                                               
          <th align="center">Admission No</th>
          <th align="center">Name</th>
          <th align="center">Date</th>
          <th align="center">Time</th>
          <th align="center">Attendance</th>
     </tr>
</thead>

<tbody>
                                      
        <tr>
          <td align="center">{$j.adno}</td> 
          <td align="center">{$j.name1}&nbsp;{$j.name2}</td> 
          <td align="center">{$j.date}</td>
          <td align="center">{$j.time}</td>
          {if $j.present=='1'}
          <td align="center">PRESENT</td>
          {else}
          <td align="center">ABSENT</td>
          {/if}
        </tr>

        {/foreach}
        
</tbody>
        
</table>
</div>


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
<br>
<br>      
     
   

                                          
      
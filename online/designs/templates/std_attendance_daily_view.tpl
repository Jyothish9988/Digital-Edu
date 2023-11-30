<br>
<br>
<html>
{literal}
<head>
  <script src="images/table2excel.js"></script>
 </head>
 {/literal}


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
<table  class="table table-striped table-bordered" id="example-table">
     <thead>
              <tr><td align="right">SEM {$sem}</td>
              <td align="right">DATE: {$date}</td></tr>
    </thead>


<thead>

 
     <tr>
          <th align="center">Adno</th>                                   
          <th align="center">Roll no</th>
          <th align="center">Name</th>
          <th align="center">Attendance</th>
     </tr>
</thead>

<tbody>
             {foreach from=$data item="j"}                            
        <tr>
          <td align="center">{$j.adno}</td>
          <td align="center">{$r++}</td>
          <td align="center">{$j.name1}&nbsp;{$j.name2}</td>
          <td align="center">{$j.present}</td>
        </tr>
        {/foreach}
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
<br>
<br>      
     
   

                                          
      
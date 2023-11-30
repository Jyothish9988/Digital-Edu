<br>
<br>
<html>
{literal}
<head>
  <script src="images/table2excel.js"></script>
 </head>
 {/literal}
<body>
<h4 class="card-title" align="center">Hand In View</h4>
<table>


  <div style="overflow-x:auto">
<table  class="table table-striped table-bordered" id="example-table">

   <thead>
              <tr><td align="right">SEM {$sem}</td></tr>
    </thead>
<thead>

 
     <tr>
                                               
          <th align="center">Admission No</th>
          <th align="center">Name</th>
          <th align="center">Date</th>
          <th align="center">Time</th>
          <th align="center">Hand In</th>
     </tr>
</thead>

<tbody>
         {foreach from=$data item="j"}                             
        <tr>
          <td align="center">{$j.adno}</td> 
          <td align="center">{$j.name1}&nbsp;{$j.name2}</td> 
          <td align="center">{$j.date}</td>
          <td align="center">{$j.time}</td>

          <td align="center" class="text-success">{$j.handin}</td>

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
     
   

                                          
      
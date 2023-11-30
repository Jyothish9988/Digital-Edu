<br>
<br>
<html>
{literal}
<head>
  <script src="images/table2excel.js"></script>
 </head>
 {/literal}
<body>
<h4 class="card-title" align="center">Attendance View Sem {$sem}</h4>
 
<!-- <table>
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
</table> -->
 <div style="overflow-x:auto">
<table  class="table table-striped table-bordered" id="example-table">
   
 
<thead>

 <tr><td>SEM&nbsp;{$sem} Attendance</td><td align="center">Total Working Days  &nbsp;{$td}</td></tr>

     <tr>
                                               
          <th align="center">Admission No</th>
          <th align="center">Roll No</th>
          <th align="center">Name</th>
    <!--       <th align="center">Present No</th>
          <th align="center">Absent No</th> -->
          
          <th align="center">Attendance</th>
          <th align="center">Exam Eligibility</th>
     </tr>
</thead>

<tbody>
             {foreach from=$data item="j"}                         
        <tr>
          <td align="center">{$j.adno}</td> 
          <td align="center">{$r++}</td>
          <td align="center">{$j.name1}&nbsp;{$j.name2}</td> 
<!--          
          <td align="center">{$j.Present}</td>
          <td align="center">{$j.Absent}</td> -->
         
          <td align="center">{$j.Percent}</td>
          {if $j.Percent>=75}
          <td align="center">Eligible</td>
          {else}
          <td align="center">Ineligible</td>
          {/if}
        </tr>
        {/foreach}

        
</tbody>
        
</table>
</div>
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
     
   

                                          
      
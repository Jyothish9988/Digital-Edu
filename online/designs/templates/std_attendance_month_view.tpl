<br>
<br>
<html>


{literal}
<head>
  <style>
    body {
    line-height: 1.6;
    margin: 2em;
}

th {
    background-color: #001f3f;
    color: #fff;
    padding: 0.5em 1em;
}

td {
    border-top: 1px solid #eee;
    padding: 0.5em 1em;
}

input {
    cursor: pointer;
}

/* Column types */
th.missed-col {
    background-color: #f00;
}

td.missed-col {
    background-color: #ffecec;
    color: #f00;
    text-align: center;
}

.name-col {
    text-align: left;
}
  </style>
  <script src="images/table2excel.js"></script>
 </head>


<body>

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
   {foreach from=$data item="j"}
   <thead>
              <tr><td align="right">NAME {$j.name1}&&{$j.name2}SEM {$j.sem}</td></tr>
    </thead>
<thead>

 
     <tr>
                                               
          <!-- <th align="center">Admission No</th> -->
          <!-- <th align="center">Name</th> -->
          <th align="center">Month</th>
          <!-- <th align="center">Time</th> -->
          <th align="center">Attendance</th>
     </tr>
</thead>

<tbody>
                                      
        <tr>
          <!-- <td align="center">{$j.adno}</td>  -->
          <!-- <td align="center">{$j.name1}&nbsp;{$j.name2}</td>  -->
          <td align="center">{$j.date}</td>
          <!-- <td align="center">{$j.time}</td> -->
          {if $j.present=='1'}
          <td align="center">PRESENT</td>
          {else}
          <td align="center">ABSENT</td>
          {/if}
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
     
   

                                          
      
<head>
<style>
{literal}
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
{/literal}
</head>


<h1>DIGITALEDU Attendance</h1>

<form action="" method="post">
    <input type="hidden" name="hide" value="h">
    <!-- <input type="text" id="month"> -->
    <select name="date" id="month" >
         
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option  value="12">December</option>
    </select> 
    <input type="submit" value="Submit" >
</form>

<div class="row">
     <div style="overflow-x:auto">
    <!-- <div class="col-lg-3" style="padding: 0; margin: 0; min-height: 300px;"> -->
        <div>
        <div class="table-container">
            <table class="table table-striped table-bordered" id="example-table">
                <thead>
                    <tr>
                        <th>Roll no.</th>
                        <th class="name-col">Student Name</th>
                        {foreach from=$days item="a"}
                            <th class="name-col">{$a}</th>
                        {/foreach}
                        <th>Percent</th>
                    </tr>
                </thead>
                <tbody>
                     
                    {foreach from=$std item="j"}
                        <tr class="student">
                            <td>{$r++}</td>
                            <td class="name-col">{$j.name1}&nbsp;{$j.name2}</td>
                            {foreach from=$atdce item="a"}
                                {if ($a.lid == $j.lid)}
                                    <td><b>{$a.status}</b></td>
                                {/if}
                            {/foreach}   
                             {foreach from=$percent item="b"}
                             {if $b.lid==$j.lid}
                            <td>{$b.percent}</td>  
                            {/if}
                            {/foreach}       
                        </tr>
                    {/foreach}

                </tbody>
            </table>
        </div>
    </div>
</div>
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


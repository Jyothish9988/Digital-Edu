{literal}
<head>
  <script src="images/table2excel.js"></script>

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
 </head>
 {/literal}
<h1>Udacity Attendance</h1>


        <table align="center">
            <thead>
                <tr>
                    <th class="name-col">Month</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>13</th>
                    <th>14</th>
                    <th>15</th>
                    <th>16</th>
                    <th>17</th>
                    <th>18</th>


                    <th class="missed-col">Days Missed-col</th>
                </tr>
            </thead>
            <tbody>
                <tr class="student">
                    <td class="name-col">{$j.month}</td>
      {if $j.present=='1'}
          <td align="center">P</td>
          {else}
          <td align="center">A</td>
          {/if}
                    <td class="missed-col">{$abcount}</td>
                </tr>
<!--                 <tr class="student">
                    <td class="name-col">Lilly the Lizard</td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="missed-col">0</td>
                </tr>
                <tr class="student">
                    <td class="name-col">Paulrus the Walrus</td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="missed-col">0</td>
                </tr>
                <tr class="student">
                    <td class="name-col">Gregory the Goat</td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="missed-col">0</td>
                </tr>
                <tr class="student">
                    <td class="name-col">Adam the Anaconda</td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="attend-col"><input type="checkbox"></td>
                    <td class="missed-col">0</td>
                </tr> -->
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


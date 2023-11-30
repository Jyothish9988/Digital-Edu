
<br>
<br>

<!DOCTYPE html>
<html>

<body>
	<center>
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
  </center>
	<p style="color:black;font-size:25px;" align="center"><b>TIME TABLE VIEW</b></p>
	<table border="5" cellspacing="0" align="center" id="example-table">
		<!--<caption>Timetable</caption>-->
<!-- 	<tr>
		<td align="center" height="50"
				width="300"><br>
				{foreach from=$day item="k"}
				<b>{ $k.day}</b>
				{/foreach}
			</td>
		</tr> -->

	
		<tr>
		<td align="center" height="50"
				width="150">
				<b>SEM {$sem}<br>				{foreach from=$day item="k"}
				{ $k.day}</b>
				{/foreach}
			</td>
			<td align="center" height="50"
				width="150"><br>
				<b>Time</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>I &nbsp;<br>9:30-10:30</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>II &nbsp;<br>10:30-11:20</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>III &nbsp;<br>11:30-12:30</b>
			</td>



			<td align="center" height="50"
				width="150">
				<b>IV &nbsp;<br>01:30-2:30</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>V &nbsp;<br>2:30-3:20</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>VI &nbsp;<br>3:30-4:30</b>
			</td>
			
		</tr>

<tr>
		<td align="center" height="50" width="150"><br>
				<b>Roll no</b>
	</td>
	<td align="center" height="50" width="150"><br>
				<b>Name/Period</b>
	</td>
{foreach from=$cs item="cs"}
	<td align="center" height="50">
				<b>{$cs.s1}</b>
	</td>

	<td align="center" height="50">
				<b>{$cs.s2}</b>
	</td>

	<td align="center" height="50">
				<b>{$cs.s3}&nbsp;</b>
	</td>

	<td align="center" height="50">
				<b>{$cs.s4}</b>
	</td>

	<td align="center" height="50">
				<b>{$cs.s5}</b>
	</td>

	<td align="center" height="50">
				<b>{$cs.s6}</b>
	</td>
{/foreach}
</tr>


{foreach from=$data item="j"}
<tr>
	
	<td align="center" height="50">
				{$r++}
		</td>
		<td align="center" height="50">
				{$j.name1}&nbsp;{$j.name2}
		</td>
		<td align="center" height="50">

			{if $j.s1=='1'} P {else} A {/if}
		</td>		
				<td align="center" height="50">
			{if $j.s2=='1'} P {else} A {/if}
		</td>	
				<td align="center" height="50">
			{if $j.s3=='1'} P {else} A {/if}
		</td>	
				<td align="center" height="50">
			{if $j.s4=='1'} P {else} A {/if}
		</td>	
				<td align="center" height="50">
			{if $j.s5=='1'} P {else} A {/if}
		</td>	
				<td align="center" height="50">
			{if $j.s6=='1'} P {else} A {/if}
		</td>		
</tr>
{/foreach}


		
	</table>

<button id="download" class="btn-success">Export table to excel</button>

{literal}
  <script src="images/table2excel.js"></script>
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
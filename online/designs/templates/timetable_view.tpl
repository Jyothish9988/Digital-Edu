
<br>
<br>

<!DOCTYPE html>
<html>

<body>

	<table border="5" cellspacing="0" align="center">
		<!--<caption>Timetable</caption>-->
		<tr>
			<td align="center" height="50"
				width="150"><br>
				<b>Day/Period</b></br>
			</td>
			<td align="center" height="50"
				width="150">
				<b>I<br>9:30-10:30</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>II<br>10:30-11:20</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>III<br>11:30-12:30</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>12:30-01:30</b>

			</td>
			<td align="center" height="50"
				width="150">
				<b>IV<br>01:30-2:30</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>V<br>2:30-3:20</b>
			</td>
			<td align="center" height="50"
				width="150">
				<b>VI<br>3:30-4:30</b>
			</td>
			
		</tr>
		{foreach from=$data item=j}
		<tr>
			
			<td align="center" height="50">
				<b>{$j.day}</b></td>
			<td align="center" height="50">{$j.s1}</td>
			<td align="center" height="50">{$j.s2}</td>
			<td align="center" height="50">{$j.s3}</td>
	
		<td align="center" height="50">LUNCH</td>
			<!-- <td rowspan="6" align="center" height="50">
				<p style="color:black;font-size:25px;">L<br>U<br>N<br>C<br>H</p>
			</td> -->
			
		
			<td align="center" height="50">{$j.s4}</td>
			<td align="center" height="50">{$j.s5}</td>
			<td align="center" height="50">{$j.s6}</td>
			
		</tr>

		
		{/foreach}
		
	</table>


</body>

</html>

<br>
<br>
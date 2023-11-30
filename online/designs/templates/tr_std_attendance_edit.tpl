

<form method="post" action="">


	<body>
<table  class="table table-striped table-bordered">
<tr>
	<th>Admission No</th>
	<th>Name</th>
	
	<th>Present</th>
	<th></th>
</tr>



	<input type="hidden" value="h" name="hide">


{foreach from=$data item="j"}
<tr>

	<td>{$j.adno}</td>
	<td>{$j.name1}&nbsp;{$j.name2}</td>



	<td><input type="checkbox" id="atdce" name="present[]" value="{$j.std_key}"></td>



</tr>

{/foreach}
<tr>
<td> <input type="submit" value="submit"></td>
		
</tr>

</table>
</form>
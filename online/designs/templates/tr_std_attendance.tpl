
<form method="post" action="" onsubmit="return valid()">


	<body>


<table  class="table table-striped table-bordered">

<tr>
	<th>Admission No</th>
	<th>Roll no</th>
	<th>Name</th>
	
	<th>Present</th>
	<th>Absent</th>
</tr>



	<input type="hidden" value="h" name="hide">


{foreach from=$absent item="k"}

<tr>

	<td>{$k.adno}</td>
	<td>{$r++}</td>
	<td>{$k.name1}&nbsp;{$k.name2}</td>
	
{if $k.$sub==1}


	<td><input type="checkbox" id="atdce" name="present[]" value="{$k.std_key}-1" onclick="checkOnly(this)" checked></td>
	<td><input type="checkbox" id="atdce2" name="absent[]" value="{$k.std_key}-0" onclick="checkOnly(this)"></td>
{else}
	<td><input type="checkbox" id="atdce" name="present[]" value="{$k.std_key}-1" onclick="checkOnly(this)"></td>
	<td><input type="checkbox" id="atdce2" name="absent[]" value="{$k.std_key}-0" onclick="checkOnly(this)" checked></td>


{/if}
</tr>

{/foreach}


{literal}
<script type="text/javascript">
    function checkOnly(obj) {
        if($(obj).is(':checked')) {
            $(obj).closest('tr').find('input[type="checkbox"]').not(obj).prop('checked', false);
        } else {
            $(obj).closest('tr').find('input[type="checkbox"]').not(obj).prop('checked', true);
        }
    }

</script>
{/literal}


<tr>
	
<td><input type="submit" value="Submit" ></td>

</tr>

</table>
</form>
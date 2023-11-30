<!--  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div> 
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Teachers table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Students Table</strong>
                            </div>
                            

                            <div class="card-body">
                                <center>
                                
    <table class="table table-stripped">
      <form method="POST" action="">
        <input type="hidden" name="hide" value="h">
        <tr>
          <th>Search</th>
          <td>
                <input type="text" name="name1" class="form-control" placeholder="Enter Student Name...">
            </td>
            <td>
              <input type="submit" value="Search" class="btn btn-success">
            </td>
        </tr>
      </form>
    </table>
  </center>
  <div style="overflow-x:auto">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Admission no</th>
                                            <th>Name</th>
                                            <th>Date of Join</th>
                                            <th>Address</th>
                                            <th>Pin</th>
                                            <th>DOB</th>
                                            <th>SEX</th>
                                            <th>Contact</th>
                                            <th>Profile</th>
                                            <th>Approve</th>
                                            <th>Reject</th>
                                            <th>Suspend</th>
                                             <th>  <input type="submit" value="Delete" class="btn btn-outline-danger"> <input type="checkbox" id="chkall" onclick="checkall(this)" /></th>

                                        </tr>
                                    </thead>
                                    {if $data==null}
                                    {foreach from=$view1 item="j"}
                                    <tbody>
                                        
                                <tr>
                                        <td align="center">{$j.adno}</td>
                                        <td align="center">{$j.name1}&nbsp;{$j.name2}</td>

                                        <td align="center">{$j.doj}</td>
                                        <td align="center">{$j.address}</td>
                                        <td align="center">{$j.pin}</td>
                                        <td align="center">{$j.dob}</td>
                                        <td align="center">{$j.sex}</td>

                                        <td align="center">{$j.spno}</td>

                                        <td align="center"><a href="student_profile.php?std_key={$j.std_key}" class="btn btn-success">View Profile</a></td>



                                    {if $j.astus=='0'}
                                    <td>Approved</td>
                                    <td><a href="hod_std_reject.php?std_key={$j.lkey}&&sem={$sem}" class="btn btn-danger">Reject</a></td>
                                    <td><a href="hod_std_suspend.php?std_key={$j.lkey}&&sem={$sem}" class="btn btn-warning">Suspend</a></td>


                                    {elseif $j.astus=='1' AND $j.sspd!=null}                                            
                                    <td><a href="hod_std_approve.php?std_key={$j.lkey}&&sem={$sem}" class="btn btn-success">Approve</a></td>
                                    <td></td>
                                    <td><a class="btn btn-warning">Suspended till {$j.sspd}</a></td>


                                    {elseif $j.astus=='1'}
                                    <td><a href="hod_std_approve.php?std_key={$j.lkey}&&sem={$sem}" class="btn btn-success">Approve</a></td>
                                    <td>Rejected</td>
                                    <td></td>

                                    {else}
                                    <td><a href="hod_std_approve.php?std_key={$j.lkey}&&sem={$sem}" class="btn btn-success">Approve</a></td>


                                    {/if}

                                       
 <form method="POST" action="">
 <input type="hidden" name="hide" value="h">
                                        <td><input type="checkbox" id="stddlt" name="stddlt[]" value="{$j.std_key}" ></td>



                                </tr>
                                    </tbody>
                                     {/foreach}

                                                           
                </form>

                                     {else}
                                {foreach from=$data item="a"}
                                    <tbody>
                                        
                                <tr>
                                        <td align="center">{$a.adno}</td>
                                        <td align="center">{$a.name1}&nbsp;{$a.name2}</td>

                                        <td align="center">{$a.doj}</td>
                                        <td align="center">{$a.address}</td>
                                        <td align="center">{$a.pin}</td>
                                        <td align="center">{$a.dob}</td>
                                        <td align="center">{$a.sex}</td>

                                        <td align="center">{$a.spno}</td>
                                     
                                    {if $a.astus=='0'}
                                    <td>Approved</td>
                                    <td><a href="hod_std_reject.php?std_key={$a.lkey}&&sem={$sem}" class="btn btn-danger">Reject</a></td>
                                    <td><a href="hod_std_suspend.php?std_key={$a.lkey}&&sem={$sem}" class="btn btn-warning">Suspend</a></td>

                                    {elseif $j.astus=='1' AND $j.sspd!=null}
                                    <td><a href="hod_std_approve.php?std_key={$j.lkey}&&sem={$sem}" class="btn btn-success">Approve</a></td>
                                    <td></td>
                                    <td><a class="btn btn-warning">Suspended till {$j.sspd}</a></td>

                                    {elseif $a.astus=='1'}
                                    <td><a href="hod_std_approve.php?std_key={$a.lkey}&&sem={$sem}" class="btn btn-success">Approve</a></td>
                                    <td>Rejected</td>
                                    <td></td>

                                        

{else}
                                    <td><a href="hod_std_approve.php?std_key={$j.lkey}&&sem={$sem}" class="btn btn-success">Approve</a></td>


 
                                        {/if}


                                </tr>
                                    </tbody>
                                    {/foreach}
                                    {/if}
                                    

                                </table>
</div>

                                {literal}
                                

<script type="text/javascript">
function checkall(source) {
    var checkboxes = document.getElementsByName('stddlt[]');
    for(var i=0, n=checkboxes.length;i<n;i++) {
        checkboxes[i].checked = source.checked;
    }
}
</script>
{/literal}
                            </div>
 
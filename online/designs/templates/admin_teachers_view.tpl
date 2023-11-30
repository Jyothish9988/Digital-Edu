




 <div class="breadcrumbs">
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
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Teachers Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Teacher Id</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Pin</th>
                                            <th>DOB</th>
                                            <th>SEX</th>
                                            <!-- <th>Qualification</th> -->
                                            <!-- <th>Contact</th> -->
                                            <th>Profile</th>
                                            <th>Approve</th>
                                            <th>Reject</th>
                                             <th>Delete</th>
                                        </tr>
                                    </thead>
                                    {foreach from=$view1 item="j"}
                                    <tbody>
                                        
                                <tr>
                                        <td align="center">{$j.trid}</td>
                                        <td align="center">{$j.name1}&nbsp;{$j.name2}</td>
                                        <td align="center">{$j.address}</td>
                                        <td align="center">{$j.pin}</td>
                                        <td align="center">{$j.dob}</td>
                                        <td align="center">{$j.sex}</td>
                                        <!-- <td align="center">{$j.quan}</td> -->
                                        <!-- <td align="center">{$j.tpno}</td> -->

                                         <td align="center"><a href="teacher_profile.php?tr_key={$j.tr_key}" class="btn btn-success">View Profile</a></td>
                                     
                                         {if $j.astus=='0'}
                                         <td>Approved</td>
                                        
                                        <td><a href="tr_reject.php?tr_key={$j.lkey}&&sem={$sem}" class="btn btn-danger">Reject</a></td>
                                        {elseif $j.astus=='1'}
                                        <td><a href="tr_approve.php?tr_key={$j.lkey}&&sem={$sem}" class="btn btn-success">Approve</a></td>
                                
                                        <td>Rejected</td>
                                        {else}
                                        <td><a href="tr_approve.php?tr_key={$j.lkey}&&sem={$sem}" class="btn btn-success">Approve</a></td>
                                        <td>Rejected</td>
                                        {/if}
                                        <td align="center"><a href="tr_delete.php?tr_key={$j.tr_key}&&sem={$sem}" class="btn btn-outline-danger">Delete</a></td> 
                                        



                                </tr>
                                    </tbody>
                                     {/foreach}

                                </table>
                            </div>



                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="admin/vendors/jquery/dist/jquery.min.js"></script>
    <script src="admin/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="admin/assets/js/main.js"></script>


    <script src="admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="admin/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="admin/vendors/jszip/dist/jszip.min.js"></script>
    <script src="admin/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="admin/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="admin/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="admin/assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>

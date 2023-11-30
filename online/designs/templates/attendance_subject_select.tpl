

<br>
<br>                           
<center>
    <h2><b>Attendance Panel</b></h2><br>
                    <form action="" method="post" >
                        <input type="hidden" name="hide" value="h">
                        
                        <table class="table table-bordered" style="width:100%">
                            <tr><td>Subject</td>
                                <td>
                                  
                                   <select class="form-control" name="subject" placeholder="Enter Subject........
                                   " >
                             
                                   {foreach from=$sub item="j"}
                                   <!-- <option viewonly>Select</option> -->
                                   

                                   <option>{$j.s1}</option>
                                   <option>{$j.s2}</option>
                                   <option>{$j.s3}</option>
                                   <option>{$j.s4}</option>
                                   <option>{$j.s5}</option>
                                   <option>{$j.s6}</option>
                                   {/foreach}
                             
                               </select>
                                </td>
                            </tr>   
                        </table>
                        <div class="submit mt-20">
                          <input type="submit" name="submit" value="Submit">
                        </div>
                     </form>

</center>

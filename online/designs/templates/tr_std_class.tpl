<head>
{literal}
  <script>    
        function subject()
  {
    



// Generate random room name if needed
if (!location.hash) 
{
  location.hash = Math.floor(Math.random() * 0xFFFFFF).toString(16);
}
const roomHash = location.hash.substring(1);

var rsh=roomHash;
document.getElementById("rid").value = rsh;

var url=document.getElementById("t1").value;
var sub=document.getElementById("t2").value;


 if(url=='')
    {
      alert('Url should not be empty');
      return false;
    }

   

 if(sub=='SELECT SUBJECT')
    {
      alert('Subject should not be empty');
      return false;
    }

   }
  </script> 
    {/literal}
</head>
	<!--dashboard area-->
    <br>

    <br>
	<div class="dashboard-content">
		<div class="dashboard-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="left">
							<span><H5 align="left">Class Submission</H5></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="right text-right">
							
							
						</div>
					</div>
				</div>				
			</div>	

			<div class="container" align="center">
				{literal}
					<form action="" method="post" >
                        <input type="hidden" name="hidden" value="h">
                        <input type="hidden" name="hash" id="rid">
                        <table class="table table-striped table-bordered">
						
                              <tr><td>Subject</td>
                                <td>
                                  {/literal}
                                   <select class="form-control" name="sub" placeholder="Enter Subject........
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
                               {literal}
                                </td>
                            </tr>
                           
                            <tr>
                                <td>
                                    <textarea name="topic" class="form-control" id="t1" placeholder="topic..."></textarea>
                                </td>
                            </tr>

                             <!-- <tr>
                                <td>
                                    <textarea name="url" class="form-control" id="t3" placeholder="URL here...."></textarea>
                                </td>
                            </tr> -->
                            <tr>
                        </table>
                        <input type="submit" name="submit" value="Submit" onClick="return subject()" class="btn btn-info">
                    </form>
				</div>
{/literal}

<br>
<br>
<br>



            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="left">
                            <span><H5 align="left">Class Schedule View</H5></span>
                        </div>
                        <div class="dashboard-content">
                            <table id="dtBasicExample" class="table table-striped table-dark text-center">
                           <thead>
                                <tr>
                                    <!-- <th>Book image</th> -->
                                    <th>Subject</th>
                                    <th>Topic</th>
                                    <!-- <th>Url</th> -->
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th></th>
                                    
                                </tr>
                           </thead>
                            
                            <tbody>
                                {foreach from=$data item="j"}
                                <tr>
                                    <!-- <td><img src="uploads/{$j.bkey}/{$j.img1}"></td> -->
                                    <td>{$j.sub}</td>
                                    <td>{$j.topic}</td>
                                    <!-- <td>{$j.url}</td> -->
                                    <td>{$j.date}</td>
                                    <td>{$j.time}</td>
                                    <td><a href="url_edit.php?clkey={$j.clkey}&&sem={$j.sem}" class="btn btn-info submit">Edit</a></td>
                                    <td><a href="url_delete.php?clkey={$j.clkey}&&sem={$j.sem}"><i class="fas fa-trash"></i></a></td>
                                    <td><a href="tr_video_class.php?clkey={$j.clkey}&&sem={$j.sem}&&subject={$j.sub}">Take online class</a></td>

                                </tr>
                                {/foreach}
                                                             </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>				
		</div>
	</div>
	
     
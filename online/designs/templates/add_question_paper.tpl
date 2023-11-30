
	<!--dashboard area-->
    {literal}
    <script type="text/javascript">
       function ver()
    
  {
  
    var snam= document.getElementById("t1").value;
    var year= document.getElementById("t2").value;
    var qfl= document.getElementById("t3").value;
    var qfl1=document.getElementById("t3");

    
    

    
    // var dob=document.getElementById("t12");
     //allowed image mime types
    let allowedMimesqn = ['pdf', 'docx', 'pptx','doc'];
      let cYear = new Date().getFullYear();
    //maximum allowed size (MB) of image 
    let maxMb1=5;      
    var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[A-Za-z]+$/;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var number= /^[0-9]+$/;
    if(snam=='')
    {
      alert('Please enter  Subject Name');
      return false;
    }
        else if(!letters.test(snam))
    {
      alert('Subject Name field required only alphabet characters');
      return false;
    }
    
 
     else if(year=='')
    {
      alert('Please enter question paper year');
      return false;
    }

        else if(!number.test(year))
    {
      alert('Year field required only numbers ');
      return false;
    }
    else if(year.length!=4||year>cYear)
    {
        alert('Please enter a valid year');
        return false;
    }



       else if (qfl=='') 
    { // if the image input does not have value
      alert('No file selected');
      return false;            
    }
    else if(!allowedMimesqn.includes(qfl.split('.').pop()))
    {
      alert("Only pdf,docx,pptx,doc alowed");
      return false;
    }
  else if ((qfl1.files[0].size / (1048576) > maxMb1))
    { // if the file size is gratter than maxMb
     alert(`File should be less than ${maxMb1} MB`);       
     return false;
    }



    
  }
    </script> 
    {/literal}




	<div class="dashboard-content">
		<div class="dashboard-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="left">
							<p><span>dashboard</span>Control panel</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="right text-right">
							<a href="dashboard.php"><i class="fas fa-home"></i>home</a>
							<span class="disabled">add book</span>
						</div>
					</div>
				</div>
				<div class="bstore">
					<form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="hide" value="h">
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                   <input type="text" class="form-control" name="subject" placeholder="Subject name" required id="t1"> 
                                </td>
                            </tr>

    
                             
                             <tr>
                                <td>
                                    <input type="text" class="form-control" name="year" placeholder="Year" required id="t2">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    File
                                    <input type="file" class="form-control" name="img1" required id="t3">
                                </td>
                            </tr>

                           

                            
                            
                        </table>
                        <div class="submit mt-20">
                        	<input type="submit" name="submit" class="btn btn-info submit" onclick="return ver()" value="Publish">
                        </div>
                	</form>
				</div>				
			</div>					
		</div>
	</div>

			
	</div>
        </div>
    </div>

    <div class="footer text-center">
        <p>&copy; All rights reserved utter pompously</p>
    </div>

    <script src="librarian/inc/js/jquery-2.2.4.min.js"></script>
    <script src="librarian/inc/js/bootstrap.min.js"></script>
    <script src="librarian/inc/js/bootstrap-select.min.js"></script>
    <script src="librarian/inc/js/waypoints.min.js"></script>
    <script src="librarian/inc/js/jquery.counterup.min.js"></script>
    <script src="librarian/inc/js/datatables.min.js"></script>
    <script src="librarian/inc/js/datatables.js"></script>
    <script src="librarian/inc/js/custom.js"></script>
</body>
</html>
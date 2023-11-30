<?php /* Smarty version 2.6.26, created on 2023-05-13 06:15:56
         compiled from add_books.tpl */ ?>

	<!--dashboard area-->

  <?php echo '
<script>    
        function ver()
  {
  
    var bnam= document.getElementById("t1").value;
    var bimg= document.getElementById("t2").value;
    var bimg1=document.getElementById("t2");
       var bfl=document.getElementById("t3").value;
       var bfl1=document.getElementById("t3");
    var ban=document.getElementById("t4").value;
    var sub=document.getElementById("t5").value;
    var sem=document.getElementById("t6").value;

    
    

    
    // var dob=document.getElementById("t12");
    let allowedMimes = [\'png\', \'jpg\', \'jpeg\']; //allowed image mime types
    let allowedMimesbook = [\'pdf\', \'docx\', \'pptx\'];
    let maxMb = 2; //maximum allowed size (MB) of image 
    let maxMb1=5;      
    var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[A-Za-z]+$/;
    var filter = /^([a-zA-Z0-9_\\.\\-])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+$/;
    var number= /^[0-9]+$/;
    if(bnam==\'\')
    {
      alert(\'Please enter  Book Name\');
      return false;
    }
        else if(!letters.test(bnam))
    {
      alert(\'First Name field required only alphabet characters\');
      return false;
    }
    
 

       else if (bimg==\'\') 
    { // if the image input does not have value
      alert(\'No image selected\');
      return false;            
    }
    else if(!allowedMimes.includes(bimg.split(\'.\').pop()))
    {
      alert("Only png,jpg,jpeg alowed");
      return false;
    }
  else if ((bimg1.files[0].size / (1048576) > maxMb))
    { // if the file size is gratter than maxMb
     alert(`Image should be less than ${maxMb} MB`);       
     return false;
    }


       else if (bfl==\'\') 
    { // if the image input does not have value
      alert(\'No file selected\');
      return false;            
    }
    else if(!allowedMimesbook.includes(bfl.split(\'.\').pop()))
    {
      alert("Only pdf,doc,pptx alowed");
      return false;
    }
  else if ((bfl1.files[0].size / (1048576) > maxMb1))
    { // if the file size is gratter than maxMb
     alert(`File should be less than ${maxMb1} MB`);       
     return false;
    }



    else if(ban==\'\')
    {
      alert(\'Please enter Book Author Name\');
      return false;
    }
    else if(!letters.test(ban))
    {
      alert(\'Book Author Name field required only alphabet characters\');
      return false;
    }


    else if(sub==\'\')
    {
      alert(\'Subject should not be empty\');
      return false;
    }
        else if(!letters.test(sub))
    {
      alert(\'Subject field required only alphabet characters\');
      return false;
    }

    
     else if(sem==\'\')
    {
      alert(\'Please enter your sem\');
      return false;
    }

        else if(!number.test(sem))
    {
      alert(\'Sem field required only numbers \');
      return false;
    }
    
  }
    </script> 
    '; ?>




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
                                   <input type="text" class="form-control" name="bnam" placeholder="Books name" id="t1"required> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Books image
                                    <input type="file" class="form-control" name="img1" id="t2"required>
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    Books file
                                    <input type="file" class="form-control" name="img2" id="t3" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="ban" placeholder="Books author name" id="t4" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" id="t5" required>
                                </td>
                               
                            </tr>
                            <tr>
                             <td>
                                    <input type="text" class="form-control" name="sem" placeholder="Semester" id="t6" required>
                                </td>
                            </tr>
                            
                        </table>
                        <div class="submit mt-20">
                        	<input type="submit" name="submit" class="btn btn-info submit" onclick="return ver()" value="Add Book">
                        </div>
                	</form>
				</div>				
			</div>					
		</div>
	</div>

	
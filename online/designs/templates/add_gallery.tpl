<html>
<head>
	{literal}
<script>    
        function ver()
  {
  
    var heading= document.getElementById("t1").value;
    var subject= document.getElementById("t2").value;
    var photo=document.getElementById("t3");
    var photoData=document.getElementById("t3").value;
    
    

    
    // var dob=document.getElementById("t12");
    let allowedMimes = ['png', 'jpg', 'jpeg']; //allowed image mime types
    let allowedMimesbook = ['pdf', 'docx', 'pptx'];
    let maxMb = 2; //maximum allowed size (MB) of image 
    let maxMb1=5;      
    var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[A-Za-z]+$/;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var number= /^[0-9]+$/;

    if(heading=='')
    {
      alert('Please enter  Heading !');
      return false;
    }

    else if(subject=='')
    {
      alert('Please enter Subject !');
      return false;
    }
    else if (photoData=='') 
    { // if the image input does not have value
      alert('No image selected');
      return false;            
    }
    else if(!allowedMimes.includes(photoData.split('.').pop()))
    {
      alert("Only png,jpg,jpeg alowed");
      return false;
    }
  else if ((photo.files[0].size / (1048576) > maxMb))
    { // if the file size is gratter than maxMb
     alert(`Image should be less than ${maxMb} MB`);       
     return false;
    }
        
  }
    </script> 
    {/literal}
	</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<form method="post" onsubmit=""  enctype="multipart/form-data">
<input type="hidden" name="hide" value="h">    
<center>
<table>
<tr>
	<td>Heading</td>
	<td><input type="text" name="heading" id="t1" class="form-control"></td>
	
</tr>
<tr>
	<td>Subject</td>
	
	<td><textarea name="subject"  class="form-control" id="t2" height="100%" ></textarea></td>
</tr>
<tr>
	<td>Photo</td>
	<td><input type="file" name="photo" id="t3" class="form-control"></td>
</tr>
<tr>
	<td><input type="submit" value="Add Gallery"   onClick="return ver()" class="btn btn-primary"></td>
</tr>
				
			</table>

</center>

</body>
</html>



</form>
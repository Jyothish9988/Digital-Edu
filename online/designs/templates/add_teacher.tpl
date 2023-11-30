<head>
	{literal}
<script>    
        function registration()
  {
    var trid= document.getElementById("t0").value;
    var name1= document.getElementById("t1").value;
    var name2= document.getElementById("t2").value;
    var address= document.getElementById("t3").value;
    var pin=document.getElementById("t4").value;
    var dob=document.getElementById("t5").value;  
    var sex=document.getElementById("t6").value;
    var quan=document.getElementById("t7").value;
    var contact=document.getElementById("t8").value;
    var adh=document.getElementById("t9").value;
    var photo=document.getElementById("t10");
    var photoData=document.getElementById("t10").value;
    var doj=document.getElementById("t11").value;


    let allowedMimes = ['png', 'jpg', 'jpeg']; //allowed image mime types
    let maxMb = 2; //maximum allowed size (MB) of image       
    var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[A-Za-z]+$/;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var number= /^[0-9]+$/;
   



    if(trid=='')
    
    {
      alert('Please enter  Admission Number');
      return false;
    }
    else if(!number.test(trid))
    {
      alert('Admission Number field required only numbers ');
      return false;
    }

    if(name1=='')
    {
      alert('Please enter your First name');
      return false;
    }
    else if(!letters.test(name1))
    {
      alert('First Name field required only alphabet characters');
      return false;
    }

    if(name2=='')
    {
      alert('Please enter your Last name');
      return false;
    }
    else if(!letters.test(name2))
    {
      alert('Last Name field required only alphabet characters');
      return false;
    }

    if(address=='')
    {
      alert('Address should not be empty');
      return false;
    }

     if(pin=='')
    {
      alert('Please enter your pincode');
      return false;
    }
    else if(!number.test(pin))
    {
      alert('Pincode field required only numbers');
      return false;
    }
    if(document.getElementById("t4").value.length != 6)
    {
      alert ('Pincode minimum length is 6');
      return false;
    }

    if(dob=='')
    {
      alert('Date of Birth should not be empty');
      return false;
    }

     if(doj=='')
    {
      alert('Date of Join should not be empty');
      return false;
    }

    if(sex=='Select gender')
    {
      alert('Gender not be empty');
      return false;
    }

if(contact=='')
    
    {
      alert('Please enter your contact');
      return false;
    }
    else if(!number.test(contact))
    {
      alert('Contact Number field required only numbers ');
      return false;
    }

    if(adh=='')
    
    {
      alert('Please enter your Aadhar');
      return false;
    }
    else if(!number.test(adh))
    {
      alert('Aadhar Number field required only numbers ');
      return false;
    }
  


    

    if (photoData=='') 
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
<form method="post" onsubmit=""  enctype="multipart/form-data">
<input type="hidden" name="hide" value="h">    
<center>
<table>

        <!-- adno,name,photo,address,pin,dob,sex,religion,caste,fname,fjob,fpno,mname,mjob,mpno,course,spno,aadhar,dep,ten,tencer,plustwo,plustwocer,doj,grad,email -->

				<tr><td>Teacher"s Id</td><td><input type="text" name="trid" id="t0" class="form-control"></td></tr>
				<tr><td>First Name</th><td><input type="text" name="name1" class="form-control" id="t1"></td></tr>
				<tr><td>Last Name</th><td><input type="text" name="name2" class="form-control" id="t2"></td></tr>
				<tr><td>Address</td><td><input type="text" name="address" class="form-control" id="t3"></td></tr>
				<tr><td>Pin</td><td><input type="text" name="pin" class="form-control" id="t4"></td></tr>
				<tr><td>DOB</td><td><input type="date" name="dob"  class="form-control" id="t5" max="{$prevdate}"></td></tr>
          <tr><td>DOJ</td><td><input type="date" name="doj"  class="form-control" id="t11"></td></tr>
				<!-- <tr><td>SEX</td><td><input type="text" name="sex" class="form-control" id="t13"></td></tr> -->
				<tr><td>SEX</td><td><select name="sex" class="form-control" id="t6">
					<option>Select gender</option>
					<option>Male</option>
					<option>Female</option>
					<option>Other</option>
				</td></tr>
				<tr><td>Qualification</td><td><input type="text" name="quan" class="form-control" id="t7"></td></tr>
				<tr><td>Contact</td><td><input type="text" name="tpno" class="form-control" id="t8"></td></tr>

				<tr><td>Aadhar No</td><td><input type="text" name="adharno" class="form-control" id="t9"></td></tr>
        <tr><td>Email</td><td><input type="text" name="email" class="form-control" ></td></tr>
				<tr><td>Photo</td><td><input type="file" name="photo" id="t10" class="form-control"></td></tr>
<tr><td><input type="submit" value="Add Teacher" onClick="return registration()" class="btn btn-success"></td></tr>
				
			</table>
</center>

</body>
</html>



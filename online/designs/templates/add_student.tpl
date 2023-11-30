

<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DigitalEdu an Education Category Bootstrap Responsive Website Template</title>
    <!--/google-fonts-->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <!--//google-fonts-->
    <!-- Template CSS -->
    <link rel="stylesheet" href="user/assets/css/style-starter.css">

</head>
  {literal}
<script>    
        function registration()
  {
    var adno= document.getElementById("t0").value;
    var name1= document.getElementById("t1").value;
    var name2= document.getElementById("t2").value;
    var addr=document.getElementById("t3").value;
    var sex=document.getElementById("t4").value;
    var pin=document.getElementById("t5").value;
    var dep= document.getElementById("t6").value;
    var dob=document.getElementById("t7").value;
    var doj=document.getElementById("t8").value;
    var grad=document.getElementById("t9").value;  
    var adhr=document.getElementById("t10").value;
    var contact=document.getElementById("t11").value;
    var email=document.getElementById("t12").value;
    var photo=document.getElementById("t13");
    var photoData=document.getElementById("t13").value;
    
    

    
    // var dob=document.getElementById("t12");
    let allowedMimes = ['png', 'jpg', 'jpeg']; //allowed image mime types
    let maxMb = 2; //maximum allowed size (MB) of image       
    var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[A-Za-z]+$/;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var number= /^[0-9]+$/;
    if(adno=='')
    {
      alert('Please enter  Admission Number');
      return false;
    }
    else if(!number.test(adno))
    {
      alert('Admission Number field required only numbers ');
      return false;
    }
    else if(name1=='')
    {
      alert('Please enter your First name');
      return false;
    }
    else if(!letters.test(name1))
    {
      alert('First Name field required only alphabet characters');
      return false;
    }
    else if(name2=='')
    {
      alert('Please enter your Last name');
      return false;
    }
    else if(!letters.test(name2))
    {
      alert('Last Name field required only alphabet characters');
      return false;
    }
    else if(addr=='')
    {
      alert('Address should not be empty');
      return false;
    }
      else if(sex=='Select gender')
    {
      alert('Gender should not be empty');
      return false;
    }
     else if(pin=='')
    {
      alert('Please enter your pincode');
      return false;
    }
    else if(dep=='')
    {
      alert('Department should not be empty');
      return false;
    }
     else if(dob=='')
    {
      alert('Date of birth should not be empty');
      return false;
    }



    else if(doj=='')
    {
      alert('Date of Join should not be empty');
      return false;
    }
    else if(grad=='Select')
    {
      alert('Graduation should not be empty');
      return false;
    }
      else if(adhr=='')
    {
      alert('Please enter your Aadhar');
      return false;
    }

    else if(contact=='')
    {
      alert('Please enter your contact');
      return false;
    }
    else if(!number.test(contact))
    {
      alert('Contact Number field required only numbers ');
      return false;
    }
      else if(email=='')
      {
      alert('Please enter your Email Address');
      return false;
    }

        else if(!filter.test(email))
        {
      alert('Please enter valid email address');
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
<form method="post" onsubmit=""  enctype="multipart/form-data">
<input type="hidden" name="hide" value="h">    
<center>
<table>


				<tr><td>Admission no</td><td><input type="text" name="adno" id="t0" class="form-control"></td></tr>
				<tr><td>First Name</th><td><input type="text" name="name1" class="form-control" id="t1"></td></tr>
				<tr><td>Last Name</th><td><input type="text" name="name2" class="form-control" id="t2"></td></tr>
        <tr><td>Address</td><td><input type="text" name="address" id="t3" class="form-control"></td></tr>
        <tr><td>SEX</td><td><select name="sex" class="form-control" id="t4">
          <option>Select gender</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select>
        </td></tr>
        <tr><td>Pin</td><td><input type="text" name="pin" id="t5" class="form-control"></td></tr>
				<tr><td>Department</td><td><input type="text" name="dep" class="form-control" id="t6"></td></tr>
          <tr><td>Date of birth </td><td><input type="date" name="dob" class="form-control" id="t7" max="{$prevdate}"></td></tr>
				<tr><td>Date of join </td><td><input type="date" name="doj" class="form-control" id="t8"></td></tr>
      
				<tr><td>Graduation </td><td><select name="grad" class="form-control" id="t9">
					<option>Select</option>
					<option>UG</option>
					<option>PG</option>
				</select>
				</td></tr>
        
        
        <tr><td>Adhaar</td><td><input type="text" name="adharno" id="t10" class="form-control"></td></tr>
				<tr><td>Contact</td><td><input type="text" name="spno" id="t11" class="form-control"></td></tr>
        <tr><td>Email</td><td><input type="text" name="email" id="t12" class="form-control"></td></tr>
				<tr><td>Photo</td><td><input type="file" name="photo" id="t13" class="form-control"></td></tr>

<tr><td><input type="submit" value="Add student" onClick="return registration()" class="btn btn-success"></td></tr>
				
			</table>

</center>
</form>
</body>
</html>






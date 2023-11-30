<html>

<head>
	{literal}
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DigitalEdu an Education Category Bootstrap Responsive Website Template - Contact : W3Layouts</title>
    <!--/google-fonts-->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <!--//google-fonts-->
    <!-- Template CSS -->
    <link rel="stylesheet" href="user/assets/css/style-starter.css">

</head>

<script>    
        function registration()
  {
    var adno= document.getElementById("t0").value;
    var name1= document.getElementById("t1").value;
    var name2= document.getElementById("t2").value;
    var dep= document.getElementById("t3").value;
    var doj=document.getElementById("t4").value;
    var grad=document.getElementById("t5").value;  
    var contact=document.getElementById("t6").value;
    var photo=document.getElementById("t7");
    var photoData=document.getElementById("t7").value;

    var addr=document.getElementById("t9");
    var sex=document.getElementById("t11");
    var pin=document.getElementById("t10");
    var adr=document.getElementById("t8");
    var dob=document.getElementById("t12");


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

    if(dep=='')
    {
      alert('Department should not be empty');
      return false;
    }
     if(dob=='')
    {
      alert('Date of Join should not be empty');
      return false;
    }

    if(doj=='')
    {
      alert('Date of Join should not be empty');
      return false;
    }

    if(grad=='Select')
    {
      alert('Graduation should not be empty');
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

      if(pin=='')
    {
      alert('Please enter your pincode');
      return false;
    }

     if(sex=='Select')
    {
      alert('Gender should not be empty');
      return false;
    }

    if(addr=='')
    {
      alert('Address should not be empty');
      return false;
    }
        if(adhr=='')
    
    {
      alert('Please enter your Aadhar');
      return false;
    }


  }

    </script> 

	</head>

<body>
	<br>
	<br>
	<br>
<form method="post" onsubmit=""  enctype="multipart/form-data"> 
<input type="hidden" name="hide" value="h">    
<center>
<table>
  {/literal}
  {foreach from=$data item="j"}


				<tr><td>Admission no</td><td><input type="text" name="adno" id="t0" class="form-control" value="{$j.adno}"></td></tr>
				<tr><td>First Name</th><td><input type="text" name="name1" class="form-control" id="t1" value="{$j.name1}"></td></tr>
				<tr><td>Last Name</th><td><input type="text" name="name2" class="form-control" id="t2" value="{$j.name2}"></td></tr>
        <tr><td>Address</td><td><input type="text" name="address" id="t9" class="form-control" value="{$j.address}"></td></tr>
        <tr><td>SEX</td><td><select name="sex" class="form-control" id="t11" value="">
          <option>{$j.sex}</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </td></tr>
        <tr><td>Pin</td><td><input type="text" name="pin" id="t10" class="form-control" value="{$j.pin}"></td></tr>
				<tr><td>Department</td><td><input type="text" name="dep" class="form-control" id="t3" value="{$j.dep}"></td></tr>
          <tr><td>Date of birth </td><td><input type="date" name="dob" class="form-control" id="t12" value="{$j.dob}"></td></tr>
				<tr><td>Date of join </td><td><input type="date" name="doj" class="form-control" id="t4" value="{$j.doj}"></td></tr>
      
				<tr><td>Graduation </td><td><select name="grad" class="form-control" id="t5">
					{if $j.grad=="UG"}
          <option>{$j.grad}</option>
					<option>PG</option>
          {else}
          <option>{$j.grad}</option>
          <option>UG</option>
          {/if}
				</select>
				</td></tr>
        
        
        <tr><td>Adhaar</td><td><input type="text" name="adharno" id="t8" class="form-control" value="{$j.aadhar}"></td></tr>
				<tr><td>Contact</td><td><input type="text" name="spno" id="t6" class="form-control" value="{$j.spno}"></td></tr>
				<tr><td>Photo</td><td><input type="file" name="photo" id="t7" class="form-control" value="{$j.photo}"></td></tr>
  
<tr><td><input type="submit" value="Edit student" onClick="return registration()" class="btn btn-success"></td></tr>
				
        {/foreach}
        {literal}
			</table>

</center>

</body>
</html>



</form>
{/literal}

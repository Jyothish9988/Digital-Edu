 <!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
  {literal}
   

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education - List of Meetings</title>

    <!-- Bootstrap core CSS -->
    <link href="student/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="student/assets/css/fontawesome.css">
    <link rel="stylesheet" href="student/assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="student/assets/css/owl.css">
    <link rel="stylesheet" href="student/assets/css/lightbox.css">

  
<!-- <title>Consultancy Profile Widget Flat Responsive Widget Template :: w3layouts</title> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Consultancy Profile Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- js -->
<script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="profile/js/sliding.form.js"></script>
<!-- //js -->
<link href="profile/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="profile/css/font-awesome.min.css" />
<link rel="stylesheet" href="profile/css/smoothbox.css" type='text/css' media="all" />
<link href="//fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<script>    
        function registration()
  {

    var adno= document.getElementById("t0").value;
    var name1= document.getElementById("t1").value;
    var name2= document.getElementById("t2").value;
    var address= document.getElementById("t3").value;
    var pin= document.getElementById("t4").value;
    var adhr= document.getElementById("t5").value;
    var dob= document.getElementById("t6").value;
    var sex= document.getElementById("t7").value;
    var religion= document.getElementById("t8").value;
    var caste= document.getElementById("t9").value;
    var fname= document.getElementById("t10").value;
    var foc= document.getElementById("t11").value;
    var fpno= document.getElementById("t12").value;
    var mname= document.getElementById("t13").value;
    var moc= document.getElementById("t14").value;
    var mpno= document.getElementById("t15").value;
    var contact=document.getElementById("t16").value;
    var doj=document.getElementById("t17").value;
    var grad=document.getElementById("t18").value;
    var email=document.getElementById("t19").value;

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

    if(adhr=='')
    
    {
      alert('Please enter your Aadhar');
      return false;
    }
    else if(!number.test(adhr))
    {
      alert('Aadhar Number field required only numbers ');
      return false;
    }

    if(dob=='')
    {
      alert('Dob should not be empty');
      return false;
    }
    
    if(sex=='Select')
    {
      alert('Gender should not be empty');
      return false;
    }

    if(religion=='')
    {
      alert('Religion should not be empty');
      return false;
    }

    if(caste=='')
    {
      alert('Caste should not be empty');
      return false;
    }

     if(fname=='')
    {
      alert('Please enter Father Name');
      return false;
    }
    else if(!letters.test(fname))
    {
      alert('Name field required only alphabet characters');
      return false;
    }

    if(foc=='')
    {
      alert('Father occupation should not be empty');
      return false;
    }

    if(fpno=='')
    
    {
      alert('Please enter Father contact');
      return false;
    }
    else if(!number.test(fpno))
    {
      alert('Contact Number field required only numbers ');
      return false;
    }

    if(mname=='')
    {
      alert('Please enter Mother Name');
      return false;
    }
    else if(!letters.test(mname))
    {
      alert('Name field required only alphabet characters');
      return false;
    }

    if(moc=='')
    {
      alert('Mother occupation should not be empty');
      return false;
    }

    if(fpno=='')
    
    {
      alert('Please enter Mothercontact');
      return false;
    }
    else if(!number.test(mpno))
    {
      alert('Contact Number field required only numbers ');
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

    if(email=='')
    {
      alert('Please enter your user email id');
      return false;
    }
    else if(!filter.test(email))
    {
      alert('Invalid email');
      return false;
    }
  
  }

    </script> 


<body>
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <!-- <a href="index.html" class="logo">
                          ...................................
                      </a> -->
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                     <ul class="nav">
                          
                          <li><a href="student_main_header.php" class="active">Home</a></li>
<!--                           <li class="nav-item">
                            <a class="nav-item" href="std_profile.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item" href="library.php">Library</a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-item" href="services.html">Courses</a>
                        </li> -->
                       
                        <li class="nav-item">
                            <a class="nav-item" href="logout.php">Logout</a>
                        </li>
                          
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <div class="main">

    
    <div id="wrapper" class="w3ls_wrapper w3layouts_wrapper">
      <div id="steps" style="margin:0 auto;" class="agileits w3_steps">
        <form id="formElem" name="formElem" action="" method="post" class="w3_form w3l_form_fancy">
          <input type="hidden" name="hide" value="h">
          <fieldset class="step agileinfo w3ls_fancy_step">
            
            {/literal}


           {foreach from=$data item="j"}
            <legend>About</legend>
            <div class="abt-agile">
         
              <div >
                  <img src="uploads/{$j.std_key}/{$j.photo}" class="abt-agile-left" height="240px" width="640px">   
                   
              </div>
              <div class="abt-agile-right">
                
 <!-- NAME -->
<h3>{$j.name1} {$j.name2}</h3>
<h5>Student</h5>
<!-- <table> -->
<ul class="address">
  <li>
    <ul class="address-text">
        <li>Admission</li>
        <li><input type="text" name="adno" id="t0" class="form-control" value="{$j.adno}" readonly></li>
    </ul>
  </li>
  <li>
    <ul class="address-text">
          <li>First Name</li>
          <li></th><input type="text" name="name1" class="form-control" id="t1" value="{$j.name1}"></li>
      </ul>
  </li>
   <li>
    <ul class="address-text">
          <li>Last Name</li>
          <li></th><input type="text" name="name2" class="form-control" id="t2" value="{$j.name2}"></li>
      </ul>
  </li>
  <li>
    <ul class="address-text">
        <li>Address</li>
        <li><textarea name="address" class="form-control" id="t3" >{$j.address}</textarea></li>
    </ul>
  </li>

  <li>
    <ul class="address-text">
  <li>Pin</li>
  <li><input type="text" name="pin" id="t4" class="form-control" value="{$j.pin}"></li>
    </ul>
  </li>

<!--   <li>
    <ul class="address-text">
  <li>Adhaar</li>
  <li><input type="text" name="aadhar" id="t5" class="form-control" value="{$j.aadhar}" ></li>
    </ul>
  </li> -->

<li>
    <ul class="address-text">
    <li>DOB</li>
    <li><input type="date" name="dob" class="form-control" id="t6" value="{$j.dob}" readonly></li>
  </ul>
</li>

<li>
    <ul class="address-text">

           <li>SEX</li>

    <li>
          <select name="sex" class="form-control" id="t7" >
          <option>{$j.sex}</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select>
      </li>
        
        </ul>
</li>

<li>
    <ul class="address-text">
      <li>Religion</li>
      <li><input type="text" name="religion" class="form-control" id="t8" value="{$j.religion}"></li>
    </ul>
</li>

<li>
    <ul class="address-text">
      <li>Caste</li>
      <li><input type="text" name="caste" id="t9" class="form-control" value="{$j.caste}"></li>
    </ul>
</li>
</ul>
<ul class="address">
<li>
    <ul class="address-text">
        <li>Father Name</li>
        <li><input type="text" name="fname" id="t10" class="form-control" value="{$j.fname}"></li>
    </ul>
</li>

<li>
    <ul class="address-text">
      <li>Occupation</li>
      <li><input type="text" name="fjob" class="form-control" id="t11" value="{$j.fjob}"></li>
    </ul>
</li>

<li>
    <ul class="address-text">
      <li>Contact</li>
      <li><input type="text" name="fpno" class="form-control" id="t12" value="{$j.fpno}"></li>
    </ul>
</li>
</ul>
<ul class="address">
<li>
    <ul class="address-text">
      <li>Mother Name</li>
      <li><input type="text" name="mname" id="t13" class="form-control" value="{$j.mname}"></li>
    </ul>
</li>

<li>
    <ul class="address-text">
        <li>Occupation</li>
        <li><input type="text" name="mjob" class="form-control" id="t14" value="{$j.mjob}"></li>
    </ul>
</li>

<!-- <li>
    <ul class="address-text">
      <li>Contact</li>
      <li><input type="text" name="mpno" class="form-control" id="t15" value="{$j.mpno}"></li>
    </ul>
</li> -->
</ul>
<ul class="address">
<li>
    <ul class="address-text">
      <li>Contact</li>
      <li><input type="text" name="spno" id="t16" class="form-control" value="{$j.spno}" readonly></li>
    </ul>
</li>

<li>
    <ul class="address-text">
      <li>Date of Join</li>
      <li><input type="text" name="doj" class="form-control" id="t17" value="{$j.doj}"></li>
    </ul>
</li>

<li>
    <ul class="address-text">
      <li>UG/PG</li>
      <li><input type="text" name="grad" class="form-control" id="t18" value="{$j.grad}"></li>
    </ul>
</li>

<li>
    <ul class="address-text">
      <li>Email</li>
      <li><input type="text" name="email" class="form-control" id="t19" value="{$j.email}"></li>
    </ul>
</li>


<input type="submit" value="Submit" class="btn btn-success"  onClick="return registration()">
</ul>
<!-- </table> -->

                 
                {/foreach}
                
                {literal}


               
          </fieldset>



         
        </form>
      </div>
    </div>
    <div class="agileits_copyright">
      <p>© 2017 Consultancy Profile Widget. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
  </div>
  <script type="text/javascript" src="profile/js/smoothbox.jquery2.js"></script>
  {/literal}
</body>
</html>
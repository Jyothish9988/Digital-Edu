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

<body>
 
  <div class="main">
 <button onclick="goback()" class="btn btn-outline-success"> Back</button>
    
    <div id="wrapper" class="w3ls_wrapper w3layouts_wrapper">
      <div id="steps" style="margin:0 auto;" class="agileits w3_steps">
        <form id="formElem" name="formElem" action="" method="post" class="w3_form w3l_form_fancy">
          <input type="hidden" name="hide" value="h">
          <fieldset class="step agileinfo w3ls_fancy_step">
            
            {/literal}


           {foreach from=$data item="j"}
           <!-- <span><a href="library_home_back.php" class="btn btn-outline-success">HOME</a></span> -->
            <legend> About</legend>
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
          <li></th><input type="text" name="name1" class="form-control" id="t1" value="{$j.name1}"" readonly></li>
      </ul>
  </li>
   <li>
    <ul class="address-text">
          <li>Last Name</li>
          <li></th><input type="text" name="name2" class="form-control" id="t2" value="{$j.name2}" readonly></li>
      </ul>
  </li>
  <li>
    <ul class="address-text">
        <li>Address</li>
        <li><textarea name="address" class="form-control" id="t3" readonly >{$j.address}</textarea></li>
    </ul>
  </li>

  <li>
    <ul class="address-text">
  <li>Pin</li>
  <li><input type="text" name="pin" id="t4" class="form-control" value="{$j.pin}" readonly></li>
    </ul>
  </li>

  <li>
    <ul class="address-text">
  <li>Adhaar</li>
  <li><input type="text" name="aadhar" id="t5" class="form-control" value="{$j.aadhar}" readonly></li>
    </ul>
  </li>

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
         
        </select>
      </li>
        
        </ul>
</li>

<li>
    <ul class="address-text">
      <li>Religion</li>
      <li><input type="text" name="religion" class="form-control" id="t8" value="{$j.religion}" readonly></li>
    </ul>
</li>

<li>
    <ul class="address-text">
      <li>Caste</li>
      <li><input type="text" name="caste" id="t9" class="form-control" value="{$j.caste}" readonly></li>
    </ul>
</li>
</ul>
<ul class="address">
<li>
    <ul class="address-text">
        <li>Father Name</li>
        <li><input type="text" name="fname" id="t10" class="form-control" value="{$j.fname}" readonly></li>
    </ul>
</li>

<li>
    <ul class="address-text">
      <li>Occupation</li>
      <li><input type="text" name="fjob" class="form-control" id="t11" value="{$j.fjob}" readonly></li>
    </ul>
</li>

<li>
    <ul class="address-text">
      <li>Contact</li>
      <li><input type="text" name="fpno" class="form-control" id="t12" value="{$j.fpno}" readonly></li>
    </ul>
</li>
</ul>
<ul class="address">
<li>
    <ul class="address-text">
      <li>Mother Name</li>
      <li><input type="text" name="mname" id="t13" class="form-control" value="{$j.mname}" readonly></li>
    </ul>
</li>

<li>
    <ul class="address-text">
        <li>Occupation</li>
        <li><input type="text" name="mjob" class="form-control" id="t14" value="{$j.mjob}" readonly></li>
    </ul>
</li>

<li>
    <ul class="address-text">
      <li>Contact</li>
      <li><input type="text" name="mpno" class="form-control" id="t15" value="{$j.mpno}" readonly></li>
    </ul>
</li>
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
      <li><input type="text" name="doj" class="form-control" id="t17" value="{$j.doj}" readonly></li>
    </ul>
</li>

<li>
    <ul class="address-text">
      <li>UG/PG</li>
      <li><input type="text" name="grad" class="form-control" id="t18" value="{$j.grad}" readonly></li>
    </ul>
</li>

<li>
    <ul class="address-text">
      <li>Email</li>
      <li><input type="text" name="email" class="form-control" id="t19" value="{$j.email}" readonly></li>
    </ul>
</li>


<!-- <input type="submit" value="Submit" class="btn btn-success"  onClick="return registration()"> -->
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
  <script>
  function goback(){
    window.history.back();
  }
  </script> 
  {/literal}
</body>
</html>
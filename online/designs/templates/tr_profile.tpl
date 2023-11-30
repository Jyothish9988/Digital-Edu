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
                          
                          <li><a href="teacher_main_header.php" class="active">Home</a></li>
                    
                       
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
              <!-- <div class="abt-agile-left"> -->
              <!-- </div> -->
              <div >
                <img src="uploads/{$j.tr_key}/{$j.photo}" class="abt-agile-left" height="240px" width="640px">
              </div>
              <div class="abt-agile-right">
                
<h3>{$j.name1} {$j.name2}</h3>
<h5>Teacher</h5>
<ul class="address">
  <li>
    <ul class="address-text">
      <li>Teacher"s Id</li>
      <li><input type="text" name="trid" id="t1" class="form-control" value="{$j.trid}" readonly></li>
    </ul>
  </li>

  <li>
    <ul class="address-text">
      <li>First name</li>
      <li><input type="text" name="name1" id="t1" class="form-control" value="{$j.name1}" readonly></li>
    </ul>
  </li>

  <li>
    <ul class="address-text">
      <li>Last name</li>
      <li><input type="text" name="name2" id="t1" class="form-control" value="{$j.name2}" readonly></li>
    </ul>
  </li>

 <li>
    <ul class="address-text">
      <li>Address</li>
      <li><input type="text" name="address" class="form-control" id="t5" value="{$j.address}"></li>
    </ul>
  </li>

 <li>
    <ul class="address-text">
      <li>Pin</li>
      <li><input type="text" name="pin" class="form-control" id="t13" value="{$j.pin}"></li>
    </ul>
  </li>

 <li>
    <ul class="address-text">
      <li>DOB</li>
      <li><input type="date" name="dob" id="t1" class="form-control" value="{$j.dob}"></li>
    </ul>
  </li>

 <li>
    <ul class="address-text">
      <li>SEX</li>
      <li><input type="text" name="sex" class="form-control" id="t13" value="{$j.sex}"></li>
    </ul>
  </li>

 <li>
    <ul class="address-text">
      <li>Qualification</li>
      <li><input type="text" name="quan" class="form-control" id="t13" value="{$j.quan}"></li>
    </ul>
  </li>

 <li>
    <ul class="address-text">
      <li>Contact</li>
      <li><input type="text" name="tpno" class="form-control" id="t13" value="{$j.tpno}" readonly></li>
    </ul>
  </li>

 <li>
    <ul class="address-text">
      <li>Aadhar No</li>
      <li><input type="text" name="adharno" class="form-control" id="t13" value="{$j.adharno}" readonly></li>
    </ul>
  </li>

  <li>
    <ul class="address-text">
      <li>Email</li>
      <li><input type="text" name="email" class="form-control" id="t13" value="{$j.email}" ></li>
    </ul>
  </li>

<input type="submit" value="Submmit" class="btn btn-success">
</ul>


                 
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
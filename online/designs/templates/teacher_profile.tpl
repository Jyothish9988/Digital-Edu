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
        <form id="formElem" name="formElem" action="#" method="post" class="w3_form w3l_form_fancy">
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
                <!-- NAME -->
                <h3>{$j.name1}&nbsp;{$j.name1}</h3>

                <h5>Teacher</h5>


                <ul class="address">
                  <li>

                  <li>
                    <ul class="address-text">
                      <li><b>ID</b></li>
                      <li>: {$j.trid}</li>
                    </ul>
                  </li>

                    <li>
                    <ul class="address-text">
                      <li><b>Address </b></li>
                      <li>: {$j.address}</li>
                    </ul>
                  </li>

                  <li>
                    <ul class="address-text">
                      <li><b>Pin </b></li>
                      <li>: {$j.pin}</li>
                    </ul>
                  </li>

                  <li>
                    <ul class="address-text">
                      <li><b>D.O.B </b></li>
                      <li>: {$j.dob}</li>
                    </ul>
                  </li>

                  <li>
                    <ul class="address-text">
                      <li><b>Sex </b></li>
                      <li>: {$j.sex}</li>
                    </ul>
                  </li>

                  <li>
                    <ul class="address-text">
                      <li><b>Qualification</b></li>
                      <li>&nbsp;:&nbsp; {$j.quan}</li>
                    </ul>
                  </li>

                  <li>
                    <ul class="address-text">
                      <li><b>Contact</b></li>
                      <li>: {$j.tpno}</li>
                    </ul>
                  </li>

                   <li>
                    <ul class="address-text">
                      <li><b>Aadhar</b></li>
                      <li>: {$j.adhrno}</li>
                    </ul>
                  </li>

                   <li>
                    <ul class="address-text">
                      <li><b>Email</b></li>
                      <li>: {$j.email}</li>
                    </ul>
                  </li>

                   <li>
                    <ul class="address-text">
                      <li><b>Date of Join</b></li>
                      <li>: {$j.doj}</li>
                    </ul>
                  </li>

                 <!--  <li>
                    <ul class="address-text">
                      <li><b>Course </b></li>
                      <li>: {$j.course}</li>
                    </ul>
                  </li>

                  <li>
                    <ul class="address-text">
                      <li><b>Contact </b></li>
                      <li>: {$j.spno}</li>
                    </ul>
                  </li>
 -->
                {/foreach}
                
                {literal}


                <!-- <div class="agilecontactw3ls-grid">
                
                <form action="" method="post">
                  <input type="hidden" name="hide" value="h">
                    <input type="text" name="pswd" placeholder="New Password" required="">
                    <!-- <input type="text" name="Email" placeholder="Confirm Password" required=""> -->
                    
                    <!-- <div class="send-button">
                      <input type="submit" value="Submit">
                    </div>
                  </form> -->
                
              </div> -->
              </div>
                
            </div>
 <!--            <marquee width="100%" direction="left" height="100px">
                  <font color="red">
Please verify and update your password to continue login
</font>
</marquee> -->
          </fieldset>



         
        </form>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
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
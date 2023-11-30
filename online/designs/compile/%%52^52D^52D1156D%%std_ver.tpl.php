<?php /* Smarty version 2.6.26, created on 2023-05-17 08:07:47
         compiled from std_ver.tpl */ ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo '
   

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
<link rel="stylesheet" href="profile/css/smoothbox.css" type=\'text/css\' media="all" />
<link href="//fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
<link href=\'//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic\' rel=\'stylesheet\' type=\'text/css\'>
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
                          <li><a href="index.php">Home</a></li>
                          <li><a href="about.php" class="active">About Us</a></li>
                          <li><a href="contact.php">Contact</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Registration</a>
                              <ul class="sub-menu">
                                  <li><a href="std_reg.php">Student</a></li>
                                  <li><a href="tr_reg.php">Teacher</a></li>
                              </ul>
                          </li>
                          <li><a href="login.php">Login</a></li> 
                          
                      </ul>        
                      <a class=\'menu-trigger\'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <div class="main">
     
    <!-- <h1>Consultancy Profile Widget</h1> -->
    <!-- <div id="navigation" style="display:none;" class="w3_agile">
      <ul>
        <li class="selected">
          <a href="#"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-folder" aria-hidden="true"></i><span>Work</span></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span>Contact</span></a>
        </li>
      </ul>
    </div> -->
    
    <div id="wrapper" class="w3ls_wrapper w3layouts_wrapper">
      <div id="steps" style="margin:0 auto;" class="agileits w3_steps">
        <form id="formElem" name="formElem" action="#" method="post" class="w3_form w3l_form_fancy">
          <fieldset class="step agileinfo w3ls_fancy_step">
            '; ?>

            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
            <legend>About</legend>
            <div class="abt-agile">
              <!-- <div class="abt-agile-left">
              </div> -->
              <div >
                <img src="uploads/<?php echo $this->_tpl_vars['j']['std_key']; ?>
/<?php echo $this->_tpl_vars['j']['photo']; ?>
" class="abt-agile-left" height="240px" width="640px">
              </div>
              <div class="abt-agile-right">
                <!-- NAME -->
                <h3><?php echo $this->_tpl_vars['j']['name1']; ?>
 <?php echo $this->_tpl_vars['j']['name2']; ?>
</h3>

                <h5>Student</h5>


                <ul class="address">
                  <li>

                  <li>
                    <ul class="address-text">
                      <li><b>Admission</b></li>
                      <li>: <?php echo $this->_tpl_vars['j']['adno']; ?>
</li>
                    </ul> 
                  </li>

                    <li>
                    <ul class="address-text">
                      <li><b>Dep</b></li>
                      <li>:&nbsp;<?php echo $this->_tpl_vars['j']['dep']; ?>
</li>
                    </ul>
                  </li>

                  <li>
                    <ul class="address-text">
                      <li><b>Date of Join</b></li>
                      <li>: <?php echo $this->_tpl_vars['j']['doj']; ?>
</li>
                    </ul>
                  </li>

                  <li>
                    <ul class="address-text">
                      <li><b>UG/PG</b></li>
                      <li>: <?php echo $this->_tpl_vars['j']['grad']; ?>
</li>
                    </ul>
                  </li>

                  <li>
                    <ul class="address-text">
                      <li><b>Contact</b></li>
                      <li>: <?php echo $this->_tpl_vars['j']['spno']; ?>
</li>
                    </ul>
                  </li>

                
                <?php endforeach; endif; unset($_from); ?>
                
                <?php echo '


                <div class="agilecontactw3ls-grid">
                
                <form action="" method="post">
                  <input type="hidden" name="hide" value="h">
                    <input type="text" name="pswd" placeholder="New Password" required="">
                    <!-- <input type="text" name="Email" placeholder="Confirm Password" required=""> -->
                    
                    <div class="send-button">
                      <input type="submit" value="Submit">
                    </div>
                  </form>
                
              </div>
              </div>
                
            </div>
            <marquee width="100%" direction="left" height="100px">
                  <font color="red">
Please verify and update your password to continue login
</font>
</marquee>
          </fieldset>



         
        </form>
      </div>
    </div>
    <div class="agileits_copyright">
      <p>Student Profile | Design by <a href="index.php">DIGITALEDU © 2023</a></p>
    </div>
  </div>
  <script type="text/javascript" src="profile/js/smoothbox.jquery2.js"></script>
  '; ?>

</body>
</html>
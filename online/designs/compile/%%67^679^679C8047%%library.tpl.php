<?php /* Smarty version 2.6.26, created on 2023-05-12 20:15:27
         compiled from library.tpl */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Venue - Responsive Web Template</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="library/css/bootstrap.min.css">
        <link rel="stylesheet" href="library/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="library/css/fontAwesome.css">
        <link rel="stylesheet" href="library/css/hero-slider.css">
        <link rel="stylesheet" href="library/css/owl-carousel.css">
        <link rel="stylesheet" href="library/css/datepicker.css">
        <link rel="stylesheet" href="library/css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="library/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>
<?php echo '
<body>
 
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                            <img src="images/lib2.png" alt="Venue Logo" height="200px" width="200px">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class=\'active\'><a href="library_home_back.php">Home</a></li>
                                <li class=\'active\'><a href="question_bank.php">Question Bank</a></li>
                                <li><a href="#">UG Textbooks</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Semester 1</a>
                                            <ul class="sub-menu">
                                                <li><a href="book_fetch.php?subject=english1">Spaeking And Listening Skills</a></li>
                                                <li><a href="book_fetch.php?subject=maths1">Mathematics I</a></li>
                                                <li><a href="book_fetch.php?subject=cfo">Computer Fundamentals & Organisation</a></li>
                                                <li><a href="book_fetch.php?subject=de">Digital Electronics</a></li>
                                                <li><a href="book_fetch.php?subject=C Programming">C Programming</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Semester 2</a>
                                            <ul class="sub-menu">
                                                <li><a href="book_fetch.php?subject=english2">Writing & Presentation</a></li>
                                                <li><a href="book_fetch.php?subject=maths2">Mathematics II</a></li>
                                                <li><a href="book_fetch.php?subject=evs">Environmental Studies</a></li>
                                                <li><a href="book_fetch.php?subject=ds">Data Stuctures in C</a></li>
                                                <li><a href="book_fetch.php?subject=web">Web Programming</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Semester 3</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Programming Java</a></li>
                                                <li><a href="#">Software Engineering</a></li>
                                                <li><a href="#">Operating System</a></li>
                                                <li><a href="#">Value Education</a></li>
                                                <li><a href="#">DBMS</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Semester 4</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Design Analysis & Algorithm</a></li>
                                                <li><a href="#">Microprocessor</a></li>
                                                <li><a href="#">Computer Network</a></li>
                                                <li><a href="#">PHP & MYSQL</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="#">Semester 5</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Computer Graphics</a></li>
                                                <li><a href="#">System Software</a></li>
                                                <li><a href="#">Programming Python</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a href="#">Semester 6</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Data Mining</a></li>
                                                <li><a href="#">IOT</a></li>
                                                <li><a href="#">AI</a></li>
                                        
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="scrollTo" data-scrollTo="blog" href="req_book_std.php">Book Request</a></li>
                                <!-- <li><a class="scrollTo" data-scrollTo="services" href="#">Our Services</a></li>
                                <li><a class="scrollTo" data-scrollTo="contact" href="#">Contact Us</a></li> -->
                            </ul>
                        </nav>

                        <!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
      

    
    <!-- <section class="banner" id="top"> -->
<section id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                <!-- <span>Video Presentation</span> -->
                <h2>Welcome to Digital Library</h2>
                 <!-- <section class="featured-places" id="blog"> -->
    
           
           
               
                

          


        
    <!-- </section> -->
                <!-- <a href="#" target="_blank"><i class="fa fa-play"></i></a> -->
            </div>
        </div>
        <video autoplay="" loop="" muted>
            <source src="images/lib3.mp4" type="video/mp4" />





        </video>
        
    </section>
     
'; ?>




<!-- -------------------------------------------------------------------------------- -->
<br>
<br>
  <center>
    <table class="table table-stripped">
      <form method="POST" action="">
        <input type="hidden" name="hide" value="h">
        <tr>
          <th>Books</th>
          <td>
                <input type="text" name="bnam" class="form-control" placeholder="Book name...">
            </td>
            <td>
              <input type="submit" value="Search" class="btn btn-success">
            </td>
        </tr>
      </form>
    </table>
  </center>
  <br>
  <br>
  <?php if ($this->_tpl_vars['data'] == null): ?>
  
  <div class="container">
  <div class="row">
  <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>

    
      <div class ="col-sm-3">
        <img src="uploads/<?php echo $this->_tpl_vars['j']['bkey']; ?>
/<?php echo $this->_tpl_vars['j']['img1']; ?>
" height="250px;" width="250px;" /><br>
        <b><?php echo $this->_tpl_vars['j']['bnam']; ?>
</b><br>
        <b><?php echo $this->_tpl_vars['j']['ban']; ?>
</b><br>
      </div>
    
    <?php endforeach; endif; unset($_from); ?>
    </div>
  </div>
  <?php else: ?>
  <div class="container">
  <div class="row">
      <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
      <div class ="col-sm-3">
        <img src="uploads/<?php echo $this->_tpl_vars['a']['bkey']; ?>
/<?php echo $this->_tpl_vars['a']['img1']; ?>
" height="250px;" width="250px;" /><br>
        <b><?php echo $this->_tpl_vars['a']['bnam']; ?>
</b><br>
        <b><?php echo $this->_tpl_vars['a']['ban']; ?>
</b><br>
         <a href="uploads/<?php echo $this->_tpl_vars['j']['bkey']; ?>
/<?php echo $this->_tpl_vars['j']['img2']; ?>
" class="btn btn-success">DOWNLOAD</a>
      </div>

    <?php endforeach; endif; unset($_from); ?>
    </div>
  </div>
  <?php endif; ?>



<!-- ------------------------------------------------------------------------- -->

 
        
        

<?php echo '

    <!-- <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="library/img/footer_logo.png" alt="Venue Logo">
                        </div>
                        <p>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellus, id efficitur leo. In hac habitasse platea dictumst.</p>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#"><i class="fa fa-stop"></i>Help FAQs</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Register</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Login</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>My Profile</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>How It Works?</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>More About Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#"><i class="fa fa-stop"></i>Our Clients</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Partnerships</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Blog Entries</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Contact Information</h4>
                        </div>
                        <p>Praesent iaculis gravida elementum. Proin fermentum neque facilisis semper pharetra. Sed vestibulum vehicula tincidunt.</p>
                        <ul>
                            <li><span>Phone:</span><a href="#">010-050-0550</a></li>
                            <li><span>Email:</span><a href="#">hi@company.co</a></li>
                            <li><span>Address:</span><a href="#">company.co</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <br>
    <br>
    <br>
    

    <div class="sub-footer">
        <p>Copyright &copy; Digital EDU
    
    	</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write(\'<script src="library/js/vendor/jquery-1.11.2.min.js"><\\/script>\')</script>

    <script src="library/js/vendor/bootstrap.min.js"></script>
    
    <script src="library/js/datepicker.js"></script>
    <script src="library/js/plugins.js"></script>
    <script src="library/js/main.js"></script>
</body>
'; ?>

</html>
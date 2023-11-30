<?php /* Smarty version 2.6.26, created on 2023-05-12 21:25:44
         compiled from student_home.tpl */ ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Student</title>

    <!-- Bootstrap core CSS -->
    <link href="student/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="student/assets/css/fontawesome.css">
    <link rel="stylesheet" href="student/assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="student/assets/css/owl.css">
    <link rel="stylesheet" href="student/assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

  <!-- Sub Header -->
 

  <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          Digital EDU
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                     
                      <ul class="nav">
                          <li ><a href="student_main_header.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="active">Home</a></li>
                          <!-- <li><a href="std_profile.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">Profile</a></li> -->
                          <li ><a href="library.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">Library</a></li>
                          <li ><a href="std_pta_view.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">PTA</a></li>
                          <li ><a href="timetable_view.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">Timetable</a></li>
                          <li ><a href="std_tr_chat.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">Chat</a></li>
                          <!-- <li ><a href="">Attendance</a></li> -->
                          <!-- <li ><a href="std_video_classes.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">Class</a></li> -->
                          <!-- <li ><a href="std_tr_chat.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">Chat</a></li> -->
                           
                                                      <li class="has-sub">
                              <a href="">Attendance</a>
                              <ul class="sub-menu">
         
                                <li>
                                    <a href="std_attendance_view.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
&&subject=<?php echo $this->_tpl_vars['subject']; ?>
">Day View</a>
                                </li>

                                <li>
                                    <a href="std_attendance_view_month.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
&&subject=<?php echo $this->_tpl_vars['subject']; ?>
">Month View</a>
                                </li>

                                 <li>
                                    <a href="std_attendance_view_sem.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
&&subject=<?php echo $this->_tpl_vars['subject']; ?>
">Sem View</a>
                                </li>
                              </ul>
                          </li>



                          <li class="has-sub">
                              <a href="">Classes</a>
                              <ul class="sub-menu">
                                  <li><a href="std_video_classes.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">Class</a></li>
                                  <li><a href="std_class_view.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">Recorded Class</a></li>
                              </ul>
                          </li>

                          <li class="has-sub">
                              <a href="">Notes</a>
                              <ul class="sub-menu">
                                  <li><a href="std_notes_views.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">Notes View</a></li>
                                  <!-- <li><a href="std_all_notes_view.php">Notes Search</a></li> -->
                              </ul>
                          </li>
                          <li class="has-sub">
                              <a href="">Leave</a>
                              <ul class="sub-menu">
                                  <li><a href="std_leave_apply.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">Leave Apply</a></li>
                                  <li><a href="std_leave_apply_view.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">Leave Apply View</a></li>
                              </ul>
                          </li>
                          <li><a href="std_report.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">Report</a></li>
                       
                          <li><a href="logout.php">Logout</a></li> 

                          <?php echo '
                       
                      </ul>        
                      <a class=\'menu-trigger\'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header> <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="student/assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Hello Students</h6>
              <h2>Welcome to Education</h2>
              <p>Digital Edu, also known as Online education, is the education platform for UG College students who may not always be physically present at a school,or where the learner and the teacher are separated in both time and distance. Traditionally, this usually involved correspondence courses wherein the student corresponded with the school via mail, Video Conferencing and messages</p>
              <div class="main-button-red">
                  <!-- <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div> -->
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <img src="student/assets/images/service-icon-01.png" alt="">
              </div>
              <div class="down-content">
                <h4>Best Education</h4>
                <!-- <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p> -->
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="student/assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Best Teachers</h4>
                <!-- <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p> -->
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="student/assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Best Students</h4>
                <!-- <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p> -->
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="student/assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Online Meeting</h4>
                <!-- <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p> -->
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="student/assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Best Networking</h4>
                <!-- <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p> -->
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Upcoming Meetings</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
            <h4>Meeting Catgories</h4>
            <ul>
              <li><a href="#">Sed tempus enim leo</a></li>
              <li><a href="#">Aenean molestie quis</a></li>
              <li><a href="#">Cras et metus vestibulum</a></li>
              <li><a href="#">Nam et condimentum</a></li>
              <li><a href="#">Phasellus nec sapien</a></li>
            </ul>
            <div class="main-button-red">
              <a href="meetings.html">All Upcoming Meetings</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>$22.00</span>
                  </div>
                  <a href="meeting-details.html"><img src="student/assets/images/meeting-01.jpg" alt="New Lecturer Meeting"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>10</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>New Lecturers Meeting</h4></a>
                  <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>$36.00</span>
                  </div>
                  <a href="meeting-details.html"><img src="student/assets/images/meeting-02.jpg" alt="Online Teaching"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>24</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>Online Teaching Techniques</h4></a>
                  <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>$14.00</span>
                  </div>
                  <a href="meeting-details.html"><img src="student/assets/images/meeting-03.jpg" alt="Higher Education"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>26</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>Higher Education Conference</h4></a>
                  <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>$48.00</span>
                  </div>
                  <a href="meeting-details.html"><img src="student/assets/images/meeting-04.jpg" alt="Student Training"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>30</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>Student Training Meetup</h4></a>
                  <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR BACHELOR DEGREE</h3>
                <p>You are allowed to use this edu meeting CSS template for your school or university or business. You can feel free to modify or edit this layout.</p>
                <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR BACHELOR DEGREE</h3>
                <p>You are not allowed to redistribute the template ZIP file on any other template website. Please contact us for more information.</p>
                <div class="main-button-yellow">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
                <div class="accordion-head">
                    <span>About Edu Meeting HTML Template</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>If you want to get the latest collection of HTML CSS templates for your websites, you may visit <a rel="nofollow" href="https://www.toocss.com/" target="_blank">Too CSS website</a>. If you need a working contact form script, please visit <a href="https://templatemo.com/contact" target="_parent">our contact page</a> for more info.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>HTML CSS Bootstrap Layout</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Etiam posuere metus orci, vel consectetur elit imperdiet eu. Cras ipsum magna, maximus at semper sit amet, eleifend eget neque. Nunc facilisis quam purus, sed vulputate augue interdum vitae. Aliquam a elit massa.<br><br>
                        Nulla malesuada elit lacus, ac ultricies massa varius sed. Etiam eu metus eget nibh consequat aliquet. Proin fringilla, quam at euismod porttitor, odio odio tempus ligula, ut feugiat ex erat nec mauris. Donec viverra velit eget lectus sollicitudin tincidunt.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>Please tell your friends</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Ut vehicula mauris est, sed sodales justo rhoncus eu. Morbi porttitor quam velit, at ullamcorper justo suscipit sit amet. Quisque at suscipit mi, non efficitur velit.<br><br>
                        Cras et tortor semper, placerat eros sit amet, porta est. Mauris porttitor sapien et quam volutpat luctus. Nullam sodales ipsum ac neque ultricies varius.</p>
                    </div>
                </div>
            </article>
            <article class="accordion last-accordion">
                <div class="accordion-head">
                    <span>Share this to your colleagues</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Maecenas suscipit enim libero, vel lobortis justo condimentum id. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br><br>
                        Sed eleifend metus sit amet magna tristique, posuere laoreet arcu semper. Nulla pellentesque ut tortor sit amet maximus. In eu libero ullamcorper, semper nisi quis, convallis nisi.</p>
                    </div>
                </div>
            </article>
        </div>
        </div>
      </div>
    </div>
  </section>
 -->

 <br>
 <br>
 <br>
 '; ?>

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Our Popular Addon-Courses</h2>

          </div>
        </div>
        <div class="col-lg-12">

          <div class="owl-courses-item owl-carousel">



<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>

            <div class="item">
              <img src="uploads/<?php echo $this->_tpl_vars['j']['akey']; ?>
/<?php echo $this->_tpl_vars['j']['img1']; ?>
" alt="Course One" height="200px" width="200px">
              <div class="down-content">
                <h4><?php echo $this->_tpl_vars['j']['course']; ?>
</h4>
                <h3><?php echo $this->_tpl_vars['j']['details']; ?>
</h3>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <?php if ($this->_tpl_vars['j']['addon'] != $this->_tpl_vars['j']['akey']): ?>
                       <span><a href="addon_enroll.php?key=<?php echo $this->_tpl_vars['j']['akey']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
" class="btn btn-primary">Enroll</a></span>
                       <?php else: ?>
                       <span><a class="btn btn-success">Enrolled</a></span>


                     <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<?php endforeach; endif; unset($_from); ?>

          </div>
        </div>
      </div>
    </div>
                          <marquee  direction="right" height="100px">
Please note that our Add-On Courses are conducted Offline....
</marquee>
  </section>
<?php echo '
  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>A Few Facts About Our University</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-digit">94</div>
                    <div class="count-title">Succesed Students</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">15</div>
                    <div class="count-title">Current Teachers</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">2345</div>
                    <div class="count-title">Seates</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">32</div>
                    <div class="count-title">Awards</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="student/assets/images/play-icon.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Let\'s get in touch</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>010-020-0340</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>info@meeting.edu</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>www.meeting.edu</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
          <br>
          Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
          <br>
          Distibuted By: <a href="https://themewagon.com" target="_blank" title="Build Better UI, Faster">ThemeWagon</a>
        </p>
    </div>
  </section>
 -->
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="student/vendor/jquery/jquery.min.js"></script>
    <script src="student/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="student/assets/js/isotope.min.js"></script>
    <script src="student/assets/js/owl-carousel.js"></script>
    <script src="student/assets/js/lightbox.js"></script>
    <script src="student/assets/js/tabs.js"></script>
    <script src="student/assets/js/video.js"></script>
    <script src="student/assets/js/slick-slider.js"></script>
    <script src="student/assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $(\'.nav li:first\').addClass(\'active\');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, \'\'),
          reqSection = $(\'.section\').filter(\'[data-section="\' + direction + \'"]\'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $(\'body, html\').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $(\'body, html\').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $(\'.section\').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data(\'section\'),
              reqLink = $(\'a\').filter(\'[href*=\\\\#\' + currentId + \']\');
              reqLink.closest(\'li\').addClass(\'active\').
              siblings().removeClass(\'active\');
            }
          });
        };

        $(\'.main-menu, .responsive-menu, .scroll-to-section\').on(\'click\', \'a\', function (e) {
          e.preventDefault();
          showSection($(this).attr(\'href\'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
'; ?>

</html>
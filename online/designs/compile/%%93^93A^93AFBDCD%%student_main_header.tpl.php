<?php /* Smarty version 2.6.26, created on 2023-05-13 00:06:09
         compiled from student_main_header.tpl */ ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Student Home</title>

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
<?php echo '

<style type="text/css">a.navbar-brand {
    font-size: 0.8em;
    color: #fff;
    padding: 0;
    font-weight: 700;
    margin: 0;
    letter-spacing: 1px;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.37);
    position: relative;
    text-transform: uppercase;
}

a.navbar-brand.logo span {}

.navbar .navbar-brand span.sub-log {
  width: 40px;
  border-radius: 20px 20px 0px 0px;
  border-top: 8px solid #fff;
}
.nav-fixed .navbar-expand-lg .navbar-brand span.sub-log {
  border-top: 8px solid var(--primary-color);
}

</style>
<body>

  <!-- Sub Header -->
  

  <!-- ***** Header Area Start ***** -->
  '; ?>

  
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <h1><a class="navbar-brand" href="index.html">
                        Digital<span class="sub-log">E</span>du
                    </a></h1>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li ><a href="student_main_header.php" class="active">Home</a></li>
                          <li><a href="std_profile.php">Profile</a></li>
                          <li ><a href="library.php">Library</a></li>
                          <!-- <li ><a href="std_tr_chat.php?sem=">Chat</a></li> -->
                          <li ><a href="std_fee_pay.php">Fees</a></li>
                          
                        
                          <li class="has-sub">
                              <a href="javascript:void(0)">Notes</a>
                              <ul class="sub-menu">
                                  <!-- <li><a href="meetings.html">Notes View</a></li> -->
                                  <li><a href="std_all_notes_view.php">Notes Search</a></li>
                              </ul>
                          </li>
                          <!-- <li><a href="library_main_header_student.php">Library</a></li>  -->
                          <li><a href="logout.php">Logout</a></li> 
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

  <?php echo '
  <!-- ***** Header Area End ***** -->

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

  
            '; ?>


            
                <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                <?php if ($this->_tpl_vars['j']['sem'] == 1): ?>

<section class="meetings-page" id="meetings">
   <div class="col-lg-12 container our-courses">
          <div class="section-heading">
            <h2>Classroom</h2>
          </div>
        </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">


            <div class="col-lg-12">
              <div class="row grid">
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM I</span>
                      </div>
                      <a href="student_home.php?sem=1"><img src="student/assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="student_home.php?sem=1"><h4>Semester I</h4></a>
                      <p>Novice Level<br><a href="student_home.php?sem=1" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                            </div>



          </div>
        </div>
      </div>
    </div>
  
  </section>
                <?php elseif ($this->_tpl_vars['j']['sem'] == 2): ?>
                <section class="meetings-page" id="meetings">

        <div class="col-lg-12 container our-courses">
          <div class="section-heading">
            <h2>Classroom</h2>
          </div>
        </div>


    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">


            <div class="col-lg-12">
              <div class="row grid">
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM I</span>
                      </div>
                      <a href="student_home.php?sem=1"><img src="student/assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="student_home.php?sem=1"><h4>Semester I</h4></a>
                      <p>Novice Level<br><a href="student_home.php?sem=1" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM II</span>
                      </div>
                      <a href="student_home.php?sem=2"><img src="student/assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="student_home.php?sem=2"><h4>Semester II</h4></a>
                      <p>Advanced Beginner Level<br><a href="student_home.php?sem=2" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>


                            </div>



          </div>
        </div>
      </div>
    </div>
  
  </section>
                <?php elseif ($this->_tpl_vars['j']['sem'] == 3): ?>

<section class="meetings-page" id="meetings">
   <div class="col-lg-12 container our-courses">
          <div class="section-heading">
            <h2>Classroom</h2>
          </div>
        </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">


            <div class="col-lg-12">
              <div class="row grid">
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM I</span>
                      </div>
                      <a href="student_home.php?sem=1"><img src="student/assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="student_home.php?sem=1"><h4>Semester I</h4></a>
                      <p>Novice Level<br><a href="student_home.php?sem=1" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM II</span>
                      </div>
                      <a href="student_home.php?sem=2"><img src="student/assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                       <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="student_home.php?sem=2"><h4>Semester II</h4></a>
                      <p>Advanced Beginner Level<br><a href="student_home.php?sem=2" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM III</span>
                      </div>
                      <a href="student_home.php?sem=3"><img src="student/assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="student_home.php?sem=3"><h4>Semester III</h4></a>
                      <p>Competent Level<br><a href="student_home.php?sem=3" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                            </div>



          </div>
        </div>
      </div>
    </div>
  
  </section>
<?php elseif ($this->_tpl_vars['j']['sem'] == 4): ?>

<section class="meetings-page" id="meetings">
   <div class="col-lg-12 container our-courses">
          <div class="section-heading">
            <h2>Classroom</h2>
          </div>
        </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">


            <div class="col-lg-12">
              <div class="row grid">
 <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM I</span>
                      </div>
                      <a href="student_home.php?sem=1"><img src="student/assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                       <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="student_home.php?sem=1"><h4>Semester I</h4></a>
                      <p>Novice Level<br><a href="student_home.php?sem=1" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM II</span>
                      </div>
                      <a href="student_home.php?sem=2"><img src="student/assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="student_home.php?sem=2"><h4>Semester II</h4></a>
                      <p>Advanced Beginner Level<br><a href="student_home.php?sem=2" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM III</span>
                      </div>
                      <a href="student_home.php?sem=3"><img src="student/assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                       <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="student_home.php?sem=3"><h4>Semester III</h4></a>
                      <p>Competent Level<br><a href="student_home.php?sem=3" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM IV</span>
                      </div>
                      <a href="student_home.php?sem=4"><img src="student/assets/images/meeting-04.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="#"><h4>Semester IV</h4></a>
                      <p>Proficient Level<br><a href="student_home.php?sem=4" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                            </div>



          </div>
        </div>
      </div>
    </div>
  
  </section>
<?php elseif ($this->_tpl_vars['j']['sem'] == 5): ?>

<section class="meetings-page" id="meetings">
   <div class="col-lg-12 container our-courses">
          <div class="section-heading">
            <h2>Classroom</h2>
          </div>
        </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">


            <div class="col-lg-12">
              <div class="row grid">
<div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM I</span>
                      </div>
                      <a href="student_home.php?sem=1"><img src="student/assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="student_home.php?sem=1"><h4>Semester I</h4></a>
                      <p>Novice Level<br><a href="student_home.php?sem=1" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM II</span>
                      </div>
                      <a href="student_home.php?sem=2"><img src="student/assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="student_home.php?sem=2"><h4>Semester II</h4></a>
                      <p>Advanced Beginner Level<br><a href="student_home.php?sem=2" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM III</span>
                      </div>
                      <a href="student_home.php?sem=3"><img src="student/assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="student_home.php?sem=3"><h4>Semester III</h4></a>
                      <p>Competent Level<br><a href="student_home.php?sem=3" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM IV</span>
                      </div>
                      <a href="student_home.php?sem=4"><img src="student/assets/images/meeting-04.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="#"><h4>Semester IV</h4></a>
                      <p>Proficient Level<br><a href="student_home.php?sem=4" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM V</span>
                      </div>
                      <a href="student_home.php?sem=5"><img src="student/assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="#"><h4>Semester V</h4></a>
                      <p>Expert Level<br><a href="student_home.php?sem=5" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                            </div>



          </div>
        </div>
      </div>
    </div>
  
  </section>
<?php elseif ($this->_tpl_vars['j']['sem'] == 6): ?>

<section class="meetings-page" id="meetings">
   <div class="col-lg-12 container our-courses">
          <div class="section-heading">
            <h2>Classroom</h2>
          </div>
        </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">


            <div class="col-lg-12">
              <div class="row grid">
<div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM I</span>
                      </div>
                      <a href="student_home.php?sem=1"><img src="student/assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="student_home.php?sem=1"><h4>Semester I</h4></a>
                      <p>Novice Level<br><a href="student_home.php?sem=1" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM II</span>
                      </div>
                      <a href="student_home.php?sem=2"><img src="student/assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="student_home.php?sem=2"><h4>Semester II</h4></a>
                      <p>Advanced Beginner Level<br><a href="student_home.php?sem=2" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM III</span>
                      </div>
                      <a href="student_home.php?sem=3"><img src="student/assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="student_home.php?sem=3"><h4>Semester III</h4></a>
                      <p>Competent Level<br><a href="student_home.php?sem=3" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM IV</span>
                      </div>
                      <a href="student_home.php?sem=4"><img src="student/assets/images/meeting-04.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="#"><h4>Semester IV</h4></a>
                      <p>Proficient Level<br><a href="student_home.php?sem=4" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM V</span>
                      </div>
                      <a href="student_home.php?sem=5"><img src="student/assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="#"><h4>Semester V</h4></a>
                      <p>Expert Level<br><a href="student_home.php?sem=5" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>


                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM VI</span>
                      </div>
                      <a href="student_home.php?sem=6"><img src="student/assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <a href="#"><img src="images/ioc.jpg" width="50px" height="50px"></a>
                      </div>
                      <a href="#"><h4>Semester VI</h4></a>
                      <p>Skill enhancement level<br><a href="student_home.php?sem=6" class="btn btn-info submit">Select</a></p>
                    </div>
                  </div>
                </div>

                            </div>



          </div>
        </div>
      </div>
    </div>
  
  </section>
                <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
  <?php echo '             
            </div>



          </div>
        </div>
      </div>
    </div>
  
  </section>

  
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
                    <div class="count-digit">126</div>
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
                    <div class="count-title">New Students</div>
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

  <section class="contact-us" id="contact">
    <!-- <div class="container">
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
    </div> -->
    <div class="footer">
      <p>Copyright © 2022 Digital Edu ., Ltd. All Rights Reserved. 
          
        </p>
    </div>
  </section>

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
'; ?>

</body>
</html>
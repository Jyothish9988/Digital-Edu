<!DOCTYPE html>
<html lang="en">
{literal}
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
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

<body>

   

  <!-- Sub Header -->
<!--   <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>This is an educational <em>HTML CSS</em> template by TemplateMo website.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> -->
  </div>

  <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="#" class="logo">
                          Digital EDU
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                    
                      <ul class="nav">
                        {/literal}
                          <li ><a href="student_main_header.php?sem={$sem}" class="active">Home</a></li>
                          <!-- <li><a href="std_profile.php?sem={$sem}">Profile</a></li> -->
                          <li ><a href="library.php?sem={$sem}">Library</a></li>
                          <li ><a href="std_pta_view.php?sem={$sem}">PTA</a></li>
                          <li ><a href="timetable_view.php?sem={$sem}">Timetable</a></li>
                           <!-- <li ><a href="std_attendance_view.php?sem={$sem}">Attendance</a></li> -->
                          <!-- <li ><a href="std_video_classes.php?sem={$sem}">Class</a></li> -->
                          <li ><a href="std_tr_chat.php?sem={$sem}">Chat</a></li>
                                     <li class="has-sub">
                              <a href="">Attendance</a>
                              <ul class="sub-menu">
         
                                <li>
                                    <a href="std_attendance_view.php?sem={$sem}&&subject={$subject}">Day View</a>
                                </li>

                                <li>
                                    <a href="std_attendance_view_month.php?sem={$sem}&&subject={$subject}">Month View</a>
                                </li>

                                 <li>
                                    <a href="std_attendance_view_sem.php?sem={$sem}&&subject={$subject}">Sem View</a>
                                </li>
                              </ul>
                          </li>



                          <li class="has-sub">
                              <a href="">Classes</a>
                              <ul class="sub-menu">
                                  <li><a href="std_video_classes.php?sem={$sem}">Class</a></li>
                                  <li><a href="std_class_view.php?sem={$sem}">Recorded Class</a></li>
                              </ul>
                          </li>

                        
                          <li class="has-sub">
                              <a href="">Notes</a>
                              <ul class="sub-menu">
                                 <li><a href="std_notes_views.php?sem={$sem}">Notes View</a></li>
                                  <!-- <li><a href="std_all_notes_view.php">Notes Search</a></li> -->
                              </ul>
                          </li>

                          <!-- <li class="has-sub">
                              <a href="">Leave</a>
                              <ul class="sub-menu">
                                  <li><a href="std_leave_apply.php?sem={$sem}">Leave Apply</a></li>
                                  <li><a href="std_leave_apply_view.php?sem={$sem}">Leave Apply View</a></li>
                              </ul>
                          </li> -->
                          
                          <li class="has-sub">
                              <a href="">Leave</a>
                              <ul class="sub-menu">
                                  <li><a href="std_leave_apply.php?sem={$sem}">Leave Apply</a></li>
                                  <li><a href="std_leave_apply_view.php?sem={$sem}">Leave Apply View</a></li>
                              </ul>
                          </li>

                           <li><a href="std_report.php?sem={$sem}">Report</a></li>
                          {literal}
                      
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
  </header> <!-- ***** Header Area End ***** -->
 <!-- ***** Header Area End ***** -->

<section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          
          
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
  {/literal}
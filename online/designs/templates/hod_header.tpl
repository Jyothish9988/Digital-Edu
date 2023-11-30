<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE html>
<html lang="zxx">
{literal}
<head>
    <title>Aegis Corporate Category Bootstrap Responsive Web Template | Single :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Medizin Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="hod/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="hod/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="hod/css/slider.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="hod/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
    <!-- //Fonts -->
</head>

<body>
    <!-- mian-content -->
    <div class="main-w3layouts-header-sec inner-page" id="home">
        <div class="overlay-innerpage">
            <!-- header -->
            <header>
                <div class="container">
                    <div class="header d-lg-flex justify-content-between align-items-center">
                        <div class="header-section">
                            <h1>
                                <a class="navbar-brand logo editContent" href="#">
                                    <span class="fa fa-angellist"></span> Digital EDU
                                </a>
                            </h1>
                        </div>

                      
                    <div class="nav_section">
                        <nav>
                            <label for="drop" class="toggle mt-lg-0 mt-1"><span class="fa fa-bars" aria-hidden="true"></span></label>
                            <input type="checkbox" id="drop" />
                            <ul class="menu">
                                <li class="active"><a href="hod_main_header.php">Home</a></li>
                                <!-- <li><a href="#services">Features</a></li> -->
                                <li ><a href="library.php">Library</a></li>
                                {/literal}
                                <li ><a href="hod_pta_submit.php?sem={$sem}">PTA</a></li>

                                <li>
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                    <a href="">Students <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul class="inner-dropdown">
                                        
                                        <li><a href="hod_students_view.php?sem={$sem}">UG Students</a></li>
                                        <!-- <li><a href="hod_students_attendance_view.php?sem={$sem}">UG Attendance</a></li> -->
                                         <li><a href="hod_fee_paid_view.php?sem={$sem}">Fee List</a></li>
                                         <li><a href="hod_std_leave_view.php?sem={$sem}">Leave Applications</a></li>
                                        
                                     
                                    </ul>

                                </li>

                                                     <li>
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                    <a href="">Attendance<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul class="inner-dropdown">
                                        

                                <li>
                                    <a href="hod_std_attendance_view.php?sem={$sem}&&subject={$subject}">Day View</a>
                                </li>

                                <li>
                                    <a href="hod_std_attendance_view_month.php?sem={$sem}&&subject={$subject}">Month View</a>
                                </li>

                                 <li>
                                    <a href="hod_std_attendance_view_sem.php?sem={$sem}&&subject={$subject}">Sem View</a>
                                </li>
                                       
                                     
                                    </ul>

                                </li>

{literal}




                              <!--   <li>
                                    <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                    <a >Teachers<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul class="inner-dropdown">
                                        <li><a href="hod_teachers_view.php">Teachers View</a></li>
                                        <li><a href="hod_tr_leave_apply_view.php">Leave Applications</a></li>
                                    </ul>
                                </li> -->

                               <!--  <li>
                                    
                                    <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                    <a >News<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul class="inner-dropdown">
                                        <li><a href="hod_news.php">News Upload</a></li>
                                        <li><a href="hod_news_view.php">News View</a></li>
                                    </ul>
                                </li> -->

                                <li>
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                    <a href="">Chat<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul class="inner-dropdown">
                                        <li><a href="hod_tr_chat.php">Teachers</a></li>
                                        {/literal}
                                        <li><a href="hod_std_chat.php?sem={$sem}">Student</a></li>
                                        <!-- <li><a href="about.html">Reviews</a></li> -->
                                        {literal}
                                    </ul>
                                </li>


                                <!-- <li>
                                    
                                    <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                    <a href="">Timetable<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul class="inner-dropdown">
                                        <li><a href="timetable_upload.php">Timetable Upload</a></li>
                                        <li><a href="hod_timetable_view1.php">Time Table View</a></li>
                                        
                                    </ul>
                                </li> -->

                                <li>
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                    <a href="">Addon-Course<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul class="inner-dropdown">
                                        {/literal}
                                        <li><a href="add_addon.php?sem={$sem}">Add Addon Course</a></li>
                                        
                                        <li><a href="view_addon.php?sem={$sem}">View Addon</a></li>
                                        <!-- <li><a href="enrolements.php?sem={$sem}">Enrolments</a></li> -->
                                        <!-- <li><a href="about.html">Reviews</a></li> -->
                                        {literal}
                                    </ul>
                                </li>
                                


                                <!-- <li><a href="#skills">Skills</a></li> -->
                                <!-- <li><a href="#gallery">Portfolio</a></li> -->
                                <li><a href="logout.php">Logout</a></li>

                            </ul>
                        </nav>
                    </div>
                    

                    </div>
                </div>
            </header>
            <!-- //header -->
        </div>
    </div>

    <!-- //banner -->



    <section class="collections-gid-w3layouts">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 progress-content text-left p-lg-5 my-lg-5">
                    <div class="py-lg-3 px-lg-5 p-md-5 p-3">
                        <h3 class="title-w3pvt mb-5">Our Vision</h3>

                        <p>PrDigital Edu, also known as Online education, is the education platform for UG College students who may not always be physically present at a school,or where the learner and the teacher are separated in both time and distance. Traditionally, this usually involved correspondence courses wherein the student corresponded with the school via mail, Video Conferencing and messages</p>
                        <ul class="tic-info list-unstyled mt-5">
                            <li>

                                <span class="fa fa-check mr-2"></span> Online Classes

                            </li>
                            <li>

                                <span class="fa fa-check mr-2"></span>Online Meeting

                            </li>
                            <li>

                                <span class="fa fa-check mr-2"></span> College Gallery
                            </li>
                            <li>
                                <span class="fa fa-check mr-2"></span>Online study Meterials

                            </li>
                            
                        </ul>
                    </div>

                </div>
                <div class="col-lg-6 progress-content-img two px-lg-0">
                    <img src="hod/images/img2.jpg" alt="" class="img-fluid image1">
                </div>
            </div>
        </div>
    </section>
    


    <section class="about py-md-5 py-5" id="services">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center mb-5">Our Features</h3>
            <div class="feature-grids row mt-5">
                <div class="col-lg-4 gd-bottom process-1 text-lg-right text-center  p-lg-5">

                    <h3 class="my-3">Very Customisable</h3>
                    <!-- <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p> -->
                </div>
                <div class="col-lg-4 gd-bottom text-center">
                    <img src="hod/images/process.png" alt="" class="img-fluid image1">
                </div>
                <div class="col-lg-4 gd-bottom process-1 text-lg-left text-center  p-lg-5">


                    <h3 class="my-3">Easy Handling</h3>
                    <!-- <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p> -->

                </div>

            </div>
            <div class="feature-grids row mt-3">
                <div class="col-lg-4 gd-bottom">


                </div>
                <div class="col-lg-4 gd-bottom text-center p-lg-5">


                    <h3 class="my-3">One touch access</h3>
                    <!-- <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p> -->

                </div>
                <div class="col-lg-4">

                </div>

            </div>

        </div>
    </section>
    
{/literal}
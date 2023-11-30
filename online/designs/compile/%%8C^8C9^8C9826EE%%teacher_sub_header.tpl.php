<?php /* Smarty version 2.6.26, created on 2023-05-08 08:51:28
         compiled from teacher_sub_header.tpl */ ?>

<!DOCTYPE html>
<html lang="en">
<?php echo '
<head>
<title>Teacher Home</title>





  
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="keywords" content="Success path Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  '; ?>

  <!--// Meta tag Keywords -->
  <!-- css files -->
  <link rel="stylesheet" href="teacher/css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
  <link rel="stylesheet" href="teacher/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
  <link rel="stylesheet" href="teacher/css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
  <!-- //css files -->

  <!-- web-fonts -->
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
  <link rel="stylesheet" href="student/assets/css/templatemo-edu-meeting.css">
  <!-- //web-fonts -->
  
</head>

<body>


<!-- Navigation -->
<header>
    <div class="top-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand text-uppercase" href="index.html">Digital EDU</i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <?php if ($this->_tpl_vars['clkey'] != null): ?>
  <div class="collapse navbar-collapse justify-content-center pr-md-4" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                 <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Attendance
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li>
                                    <a href="attendance_subject_select.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
&&subject=<?php echo $this->_tpl_vars['subject']; ?>
">Attendance</a>
                                </li>
                                <li>
                                    <a href="tr_std_attendance_view.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
&&subject=<?php echo $this->_tpl_vars['subject']; ?>
">Day View</a>
                                </li>

                                <li>
                                    <a href="tr_std_attendance_view_month.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
&&subject=<?php echo $this->_tpl_vars['subject']; ?>
">Month View</a>
                                </li>

                                 <li>
                                    <a href="tr_std_attendance_view_sem.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
&&subject=<?php echo $this->_tpl_vars['subject']; ?>
">Sem View</a>
                                </li>
                               
                            </ul>
                        </li>
                    </ul>
                </div>

                <?php else: ?>
                <div class="collapse navbar-collapse justify-content-center pr-md-4" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="teacher_main_header.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                    <!--     <li class="nav-item">
                            <a class="nav-link" href="tr_profile.php">Profile</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="library.php">Library</a>
                        </li>
                     
                        <li class="nav-item">
                            <a class="nav-link" href="timetable_view_tr.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">Timetable</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="tr_std_chat.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">Chat</a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="tr_std_class.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">Class</a>
                        </li>

                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Attendance
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li>
                                    <a href="attendance_subject_select.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
&&subject=<?php echo $this->_tpl_vars['subject']; ?>
">Attendance</a>
                                </li>
                                <li>
                                    <a href="tr_std_attendance_view.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
&&subject=<?php echo $this->_tpl_vars['subject']; ?>
">Day View</a>
                                </li>

                                <li>
                                    <a href="tr_std_attendance_view_month.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
&&subject=<?php echo $this->_tpl_vars['subject']; ?>
">Month View</a>
                                </li>

                                 <li>
                                    <a href="tr_std_attendance_view_sem.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
&&subject=<?php echo $this->_tpl_vars['subject']; ?>
">Sem View</a>
                                </li>
                               
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="tr_report.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
">Report</a>
                        </li>

                     


                        <!-- tr leaves -->
                     <!--    <li class="nav-item">
                            <a class="nav-link" href="tr_notes_upload.php"></a>
                        </li> -->

                       <!--  <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Leave Apply
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li>
                                    <a href="tr_leave_apply.php">Apply</a>
                                </li>
                                <li>
                                    <a href="tr_leave_apply_view.php">View</a>
                                </li>
                               
                            </ul>
                        </li> -->
                        <!-- ---------tr leaves end------ -->

                        <!-- ---------notes begin---- -->
                       <!--  <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Notes
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li>
                                    <a href="tr_notes_upload.php">Notes Upload</a>
                                </li>
                                <li>
                                    <a href="tr_notes_view.php">Notes View</a>
                                </li>
                                <li>
                                    <a href="tr_all_notes_view.php">All Notes View</a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- ------notes end--------- -->
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
                <?php endif; ?>
            </nav>
        </div>
    </div>
</header>
<!-- //Navigation -->



<!-- inner page banner -->
<section class="innerpage_banner py-5">
  <div class="dot1">
    
  </div>
</section>
<!-- //inner page banner -->

<?php /* Smarty version 2.6.26, created on 2023-05-17 07:44:43
         compiled from librarian_header.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Management System</title>
    <link rel="stylesheet" href="librarian/inc/css/bootstrap.min.css">
    <link rel="stylesheet" href="librarian/inc/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="librarian/inc/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="librarian/inc/css/datatables.min.css">
    <link rel="stylesheet" href="librarian/inc/css/pro1.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
</head>
<body>
  <div class="main-content">
        <div class="wrapper">
            <div class="left-sidebar">
                <div class="p-title">
                    <h3><a href=""><i class="fas fa-book"></i><span>lms</span></a></h3>
                </div>
                <<!-- div class="gap-40"></div>
                <div class="profile">
                    <div class="profile-pic">
                        
              
            </h2>
                    </div>
                </div> -->
                <!-- <div class="gap-30"></div> -->
                <div class="sidebar-menu">
                    <h3>General</h3>
                    <div class="border"></div>
                    <ul>
                        <li class="menu">

                            <a href="librarian.php"><i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        
                          <!-- <li class="menu">

                            <a href="profile.php"><i class="fas fa-id-card"></i>profile</a>
                        </li> -->
                        <li class="menu">

                            <a href="all_student_info.php"><i class="fas fa-desktop"></i>all student information</a>
                        </li>
                        <li class="menu">

                            <a href="all_teacher_info.php"><i class="fas fa-desktop"></i>all teacher information</a>
                        </li>
                        <li class="menu menu-toggle2">
                            <a href="#"><i class="fas fa-location-arrow"></i>manage book <span class="fa fa-chevron-down"></span></a>
                            <ul class="menus2">
                                <li><a href="add_books.php">add book</a></li>
                                <li><a href="issued_books.php">display books</a></li>
                            </ul>
                        </li>
                       <li class="menu menu-toggle1">
                            <a href="#"><i class="fas fa-list-alt"></i>manage question paper <span class="fa fa-chevron-down"></span></a>
                            <ul class="menus1">
                                <li><a href="add_question_paper.php">add question paper</a></li>
                                <li><a href="issued_question_paper.php">display question paper</a></li>
                            </ul>
                        </li>
                        
                       

<li class="menu menu-toggle4">
    <a href="#"><i class="far fa-share-square"></i>Book Request <span class="fa fa-chevron-down"></span></a>
    <ul class="menus4">
        <li><a href="librarian_student_request_book_view.php">student</a></li>
        <li><a href="librarian_teacher_request_book_view.php">teacher</a></li>
    </ul>
</li>



                        <li class="menu menu-toggle4">
                            <a href="#"><i class="far fa-share-square"></i>Notice<span class="fa fa-chevron-down"></span></a>
                            <ul class="menus4">
                                <li><a href="notice_upload.php">Notice Upload</a></li>
                                <li><a href="upload_notice_view.php">Notice View</a></li>
                            </ul>
                        </li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>

                    </ul>
                </div>
            </div>
            <div class="content">
                <div class="inner">
                    <div class="heading text-center">
                        <h3>Librarian control panel</h3>
                    </div>
                    <div class="header-profile text-right">
                        <ul>
                            <li class="icon">
                                <a href="logout.php" ><i class="fas fa-key"></i>Logout</a>
                                <!-- <span c onclick="window.location='logout.php'"><b></b></span> -->
                            </li>
                            <li class="dropdown">
                              
                                <ul class="dropdown-menu">
                                    <li class="user-header text-center">
                                        
                                        <p>- Librarian</p>
                                    </li>
                                    <li class="user-footer">
                                        <ul>
                                            <li>
                                                <a href="profile.php">profile</a>
                                            </li>
                                            <li>
                                                <a href="logout.php">logout</a>
                                            </li>
                                        </ul>
                                    </li>                                                       
                                </ul>
                            </li>
                        </ul>
                    </div>                                                          
                </div>
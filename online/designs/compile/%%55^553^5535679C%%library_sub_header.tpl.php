<?php /* Smarty version 2.6.26, created on 2023-05-12 20:15:41
         compiled from library_sub_header.tpl */ ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Library</title>
        
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
<!--
    Venue Template
    http://www.templatemo.com/tm-522-venue
-->
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
                                <li class=\'active\'><a href="library.php">Home</a></li>
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
      

    
    <section id="top">
        
            <img src="images/lib.jpeg" width="1800px" height="300px">
       
    </section>

    <!-- <section class="popular-places" id="popular">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Popular Places</span>
                        <h2>Integer sapien odio</h2>
                    </div>
                </div> 
            </div> 
            <div class="owl-carousel owl-theme">
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="library/img/popular_item_1.jpg" alt="">
                        <div class="text-content">
                            <h4>Mauris tempus</h4>
                            <span>76 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="library/img/popular_item_2.jpg" alt="">
                        <div class="text-content">
                            <h4>Aenean dolor</h4>
                            <span>18 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="library/img/popular_item_3.jpg" alt="">
                        <div class="text-content">
                            <h4>Nunc at quam</h4>
                            <span>55 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="library/img/popular_item_4.jpg" alt="">
                        <div class="text-content">
                            <h4>Fusce ac turpis</h4>
                            <span>66 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="library/img/popular_item_5.jpg" alt="">
                        <div class="text-content">
                            <h4>Lorem ipsum</h4>
                            <span>82 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="library/img/popular_item_1.jpg" alt="">
                        <div class="text-content">
                            <h4>Praesent nec</h4>
                            <span>76 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="library/img/popular_item_2.jpg" alt="">
                        <div class="text-content">
                            <h4>Suspendisse</h4>
                            <span>36 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="library/img/popular_item_3.jpg" alt="">
                        <div class="text-content">
                            <h4>Bibendum</h4>
                            <span>48 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="library/img/popular_item_4.jpg" alt="">
                        <div class="text-content">
                            <h4>Quisque sodales</h4>
                            <span>66 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="library/img/popular_item_5.jpg" alt="">
                        <div class="text-content">
                            <h4>Pellentesque</h4>
                            <span>85 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="library/img/popular_item_1.jpg" alt="">
                        <div class="text-content">
                            <h4>Commodo</h4>
                            <span>76 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="library/img/popular_item_2.jpg" alt="">
                        <div class="text-content">
                            <h4>Adipiscing</h4>
                            <span>32 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="library/img/popular_item_3.jpg" alt="">
                        <div class="text-content">
                            <h4>Etiam hendrerit</h4>
                            <span>49 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="library/img/popular_item_4.jpg" alt="">
                        <div class="text-content">
                            <h4>Suspendisse</h4>
                            <span>63 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="library/img/popular_item_5.jpg" alt="">
                        <div class="text-content">
                            <h4>Sit amet dictum</h4>
                            <span>86 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     -->
    '; ?>
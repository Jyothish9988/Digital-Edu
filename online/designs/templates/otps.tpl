<!DOCTYPE html>
<html lang="en">

  <head>

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
    {literal}
<script>
  function otp(){
   var otp= document.getElementById("t1").value;
    var number= /^[0-9]+$/;
    if(otp=='')
    {
      alert('Please enter  otp');
      return false;
    }
    else if(!number.test(otp))
    {
      alert('otp field required only numbers ');
      return false;
    }
  }
</script>


  </head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          Edu Meeting
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="index.php">Home</a></li>
                          <li><a href="meetings.html" class="active">About Us</a></li>
                          <li><a href="index.html">Contact</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Registration</a>
                              <ul class="sub-menu">
                                  <li><a href="std_reg.php">Student</a></li>
                                  <li><a href="tr_reg.php">Teacher</a></li>
                              </ul>
                          </li>
                          <li><a href="login.php">Login</a></li> 
                          
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
  <!-- ---------------------------------container------------------------- -->
  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- <h6>Here are our upcoming meetings</h6> -->
          <!-- <h2>Student Registration</h2> -->
        </div>
      </div>
    </div>
  </section>
  <!-- ------------------------------container close------------------------------ -->
  <br>
  <br>
  <br>

 <!-- ------------------------------------------body---------------------------------- -->
	<center>
		<table align="center">
			
			 <form method="POST" onsubmit="return otp()">
        <input type="hidden" name="hide" value="h">
				<tr><td>Enter OTP! </td><td><input type="otp" name="otp" id="t1"></td>
          <!-- <td><input type="submit" value="Resend OTP" class="btn btn-danger" ></td> -->
        </tr>
				<tr><td><input type="submit" value="submit" class="btn btn-success" onclick="return otp()"></td></tr>

					
			</form>
		</table>
	</center>
</body>
<!-- ------------------------------body end------------------------------------------ -->

<br>
<br>
<br>
  <section class="contact-us" id="contact">
<div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
          <br>
          Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
          <br>
          Distibuted By: <a href="https://themewagon.com" target="_blank" title="Build Better UI, Faster">ThemeWagon</a>
        </p>
    </div>
 <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="student/jquery/jquery.min.js"></script>
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
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
{/literal}
</html>

<?php /* Smarty version 2.6.26, created on 2023-05-08 08:07:25
         compiled from teacher_footer.tpl */ ?>


<?php echo '

<!-- //footer -->

<!-- Vertically centered Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase text-center" id="exampleModalLongTitle"> Success path</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="images/ban11.jpg" class="img-fluid mb-3" alt="Modal Image" />
        Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum, ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- //Vertically centered Modal -->

<!-- js-scripts -->     

    <!-- js -->
    <script type="text/javascript" src="teacher/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="teacher/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
    <!-- //js -->   
    
    <!-- Banner Responsive slider -->
    <script src="teacher/js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $(\'.events\').append("<li>before event fired.</li>");
                },
                after: function () {
                    $(\'.events\').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- // Banner Responsive slider -->
    <!-- script for responsive tabs -->                     
<script src="teacher/js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$(\'#horizontalTab\').easyResponsiveTabs({
type: \'default\', //Types: default, vertical, accordion           
width: \'auto\', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: \'accordion\', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $(\'#tabInfo\');
var $name = $(\'span\', $info);
$name.text($tab.text());
$info.show();
}
});
$(\'#verticalTab\').easyResponsiveTabs({
type: \'vertical\',
width: \'auto\',
fit: true
});
});
</script>
<!--script for responsive tabs -->
<!-- Calendar -->
                <script src="teacher/js/jquery-ui.js"></script>
                  <script>
                          $(function() {
                            $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
                          });
                  </script>
            <!-- //Calendar -->
<!-- stats -->
    <script src="teacher/js/jquery.waypoints.min.js"></script>
    <script src="teacher/js/jquery.countup.js"></script>
    <script>
        $(\'.counter\').countUp();
    </script>
    <!-- //stats -->
    <!-- flexSlider --><!-- for testimonials -->
    <script defer src="teacher/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function(){
          $(\'.flexslider\').flexslider({
            animation: "slide",
            start: function(slider){
              $(\'body\').removeClass(\'loading\');
            }
          });
        });
    </script>
    <!-- //flexSlider --><!-- for testimonials -->

    <!-- start-smoth-scrolling -->
    <script src="teacher/js/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="teacher/js/move-top.js"></script>
    <script type="text/javascript" src="teacher/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $(\'html,body\').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- here stars scroslling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: \'toTop\', // fading element id
                containerHoverID: \'toTopHover\', // fading element hover id
                scrollSpeed: 1200,
                easingType: \'linear\' 
                };
            */
                                
            $().UItoTop({ easingType: \'easeOutQuart\' });
                                
            });
    </script>
    <!-- //here ends scrolling icon -->
    <!-- start-smoth-scrolling -->
    
<!-- //js-scripts -->

</body>
'; ?>

</html>
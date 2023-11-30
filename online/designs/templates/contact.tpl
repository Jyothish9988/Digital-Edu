
{literal}


<script>    
        function registration()
  {
    var desig= document.getElementById("t0").value;
    var name1= document.getElementById("t1").value;
    var name2= document.getElementById("t2").value;
    var email= document.getElementById("t3").value;
    var contact=document.getElementById("t4").value;
    var id=document.getElementById("t5").value;  
    var subject=document.getElementById("t6").value;
    var message=document.getElementById("t7").value;


        
  var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[A-Za-z]+$/;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var number= /^[0-9]+$/;
   



    if(desig=='Select')
    {
      alert('Designaion should not be empty');
      return false;
    }

    if(name1=='')
    {
      alert('Please enter your First name');
      return false;
    }
    else if(!letters.test(name1))
    {
      alert('First Name field required only alphabet characters');
      return false;
    }

    if(name2=='')
    {
      alert('Please enter your Last name');
      return false;
    }
    else if(!letters.test(name2))
    {
      alert('Last Name field required only alphabet characters');
      return false;
    }

    if(email=='')
    {
      alert('Please enter your user email id');
      return false;
    }
    else if(!filter.test(email))
    {
      alert('Invalid email');
      return false;
    }

    if(contact=='')
    
    {
      alert('Please enter your contact');
      return false;
    }
    else if(!number.test(contact))
    {
      alert('Contact Number field required only numbers ');
      return false;
    }


    if(id=="")
    {
     alert("Please enter your ID.");
    return false;
    }

    if(subject=="")
    {
     alert("Please enter your Subject.");
    return false;
    }

    if(message=="")
    {
     alert("Please enter your Message.");
    return false;
    }
  }

    </script> 

<body>
    
    <!-- contact1 -->
    <section class="w3l-contact-1 py-5" id="contact">
        <div class="contacts-9 py-lg-5 py-md-4">
            <div class="container">
                <div class="d-grid contact-view mb-5 pb-lg-5">
                    <div class="cont-details">
                        <div class="contactct-fm-text text-left mb-md-5 mb-4">
                            <div class="header-title mb-md-5 mt-4">
                                <span class="sub-title">Find Us</span>
                                <h3 class="hny-title text-left">Additional information </h3>
                            </div>
                            <p class="mb-sm-5 mb-4">
                                <br> We guarantee that you’ll be able to have any issue resolved within 24
                                hours.</p>

                        </div>
                        <div class="cont-top">
                            <div class="cont-left text-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Phone number</h6>
                                <p><a href="tel:+917736419988">+91 7736419988</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-envelope-o"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Send Email</h6>
                                <p><a href="mailto:edudigital643@gmail.com" class="mail">edudigital643@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Office Address</h6>
                                <p class="pr-lg-5">Digital Edu Near North Trivandrum 695604.</p>
                            </div>
                        </div>
                    </div>


                    <div class="map-content-9">
                        <div class="contactct-fm map-content-9 pl-lg-4">
                            <div class="contactct-fm-text text-left">
                                <div class="header-title mb-md-5 mt-4">
                                    <span class="sub-title">Contact Us</span>
                                    <h3 class="hny-title text-left">Fill out the form.</h3>
                                </div>
                                <p class="mb-sm-5 mb-4">Contact support for admission and login problems .</p>
                            </div>



                           <form method="post" onsubmit="" >
                            <input type="hidden" name="hide" value="h">  

                                <div class="twice">
                                    <select name="desig" class="form-control" id="t0">
                                         <option viewonly>Select</option>
                                         <option>Teacher</option>
                                         <option>Student</option>
                                         <!-- <option>HOD</option> -->
                                    </select>
                                </div>

                                <div class="twice-two">
                                    <input type="text" class="form-control" name="name1" 
                                        placeholder=" First Name" required=""  id="t1">
                                    <input type="text" class="form-control" name="name2" 
                                        placeholder=" Last Name" required=""  id="t2">
                                   
                                </div>

                                <div class="twice">
                                 <input type="email" class="form-control" name="email" 
                                        placeholder="Email" required=""  id="t3">
                                </div>

                                <div class="twice">
                                 <input type="text" class="form-control" name="contact" 
                                        placeholder="Contact" required=""  id="t4">
                                </div>

                                <div class="twice">
                                    <input type="text" class="form-control" name="id" value="ID Optional"
                                        placeholder="Id" required=""  id="t5">
                                </div>

                                <div class="twice">
                                    <input type="text" class="form-control" name="subject" 
                                        placeholder="Subject" required=""  id="t6">
                                </div>

                                

                                <textarea name="message" class="form-control" placeholder="Message"
                                    required=""  id="t7"></textarea>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary btn-style mt-4" onClick="return registration()">Send Message</button>
                                </div>
                            </form>


                        </div>
                    </div>


                </div>
                <!-- <div class="map-iframe">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
                        width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
                </div> -->

            </div>
    </section>
    {/literal}
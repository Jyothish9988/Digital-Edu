{literal}
<script>    
        function ver()
  {
  
    var title= document.getElementById("t1").value;
    var details= document.getElementById("t2").value;
    var photo=document.getElementById("t3");
    var photoData=document.getElementById("t3").value;
    
    

    
    // var dob=document.getElementById("t12");
    let allowedMimes = ['png', 'jpg', 'jpeg']; //allowed image mime types
    let allowedMimesbook = ['pdf', 'docx', 'pptx'];
    let maxMb = 2; //maximum allowed size (MB) of image 
    let maxMb1=5;      
    var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[A-Za-z]+$/;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var number= /^[0-9]+$/;
    if(title=='')
    {
      alert('Please enter  Course Name !');
      return false;
    }

    else if(details=='')
    {
      alert('Please enter Addon Details !');
      return false;
    }
    else if (photoData=='') 
    { // if the image input does not have value
      alert('No image selected');
      return false;            
    }
    else if(!allowedMimes.includes(photoData.split('.').pop()))
    {
      alert("Only png,jpg,jpeg alowed");
      return false;
    }
  else if ((photo.files[0].size / (1048576) > maxMb))
    { // if the file size is gratter than maxMb
     alert(`Image should be less than ${maxMb} MB`);       
     return false;
    }
        
  }
    </script> 
    {/literal}
<br>
<br>
 <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    {foreach from=$data item="j"}     
                                    <form method="post" onsubmit=""  enctype="multipart/form-data">
                                    <input type="hidden" name="hide" value="h">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">COURSE NAME<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="t1" name="title" value="{$j.course}"placeholder="Enter COURSE NAME ..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">COURSE DETAILS <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea name="details" class="form-control" id="t2" placeholder="Enter COURSE DETAILS.." >{$j.details}</textarea>
                                                <!-- <input type="text" class="form-control" id="val-email" name="report" > -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">IMAGE<span class="text-danger">* PLEASE REUPLOAD IMAGE</span>
                                            </label>
                                            <div class="col-lg-6">
                                        <img src="uploads/{$j.akey}/{$j.img1}" heigh="150px" width="150px" placeholder="PLEASE REUPLOAD IMAGE">
                                        <!-- </div>
                                            <div class="col-lg-6"> -->
                                                <input type="file" name="photo" id="t3" class="form-control" >
                                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary" onClick="return ver()">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    {/foreach}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
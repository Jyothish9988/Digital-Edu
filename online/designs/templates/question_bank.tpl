

<div><br><br></div>




<div class="container-fluid">



<div class="row">
{foreach from=$data item="j"}
<div class="col-sm-3">
      <div class="card">
<div class="container-fluid">

<div class="item popular-item">
                    <div class="thumb">
                        <img src="images/pdf.jpeg"  height="200px" width="200px"> 
                        <div class="text-content">
                            <h4>Subject:{$j.subject}</h4>
                            <span>Year{$j.year}</span>
                        </div>
                        <!-- <div class="plus-button"> -->
                            <a href="uploads/{$j.qkey}/{$j.img1}" class="btn btn-success">DOWNLOAD</a>
                        <!-- </div> -->
                    </div>
                </div>
</div>
</div>
</div>
 {/foreach}
</div>



</div>

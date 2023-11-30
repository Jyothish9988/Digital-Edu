
<div><br><br></div>




<div class="container-fluid">



<div class="row">
{foreach from=$data item="j"}
<div class="col-sm-3">
      <div class="card">
<div class="container-fluid">

<div class="item popular-item">
                    <div class="thumb">
                        <img src="uploads/{$j.bkey}/{$j.img1}"  height="200px" width="200px"> 
                        <div class="text-content">
                            <h4>{$j.bnam}</h4>
                            <span>{$j.ban}</span>
                        </div>
                        <!-- <div class="plus-button"> -->
                            <a href="uploads/{$j.bkey}/{$j.img2}" class="btn btn-success">DOWNLOAD</a>
                        <!-- </div> -->
                    </div>
                </div>
</div>
</div>
</div>
 {/foreach}
</div>



</div>



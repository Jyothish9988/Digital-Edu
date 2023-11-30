
<div class="container-fluid">
     <div class="row">
{foreach from=$data item="j"}
   
  
<div class="col-sm-3">
      <div class="card">
<div class="container-fluid">

<div class="item popular-item">
                    <div class="thumb">
                        <img src="images/giphy.gif"  height="150px" width="150px"> 
                        '
                        <div class="text-content">
                            <h4>Subject:{$j.sname}</h4>
                            <h5>Sem:{$j.sem}</h5><br>
                            <span>Topic:{$j.topic}</span><br>
                            <span>Date:{$j.date}</span>

                        </div>
                        
                            <a href="play.php?value=uploads/{$j.ntkey}/{$j.note}" class="btn btn-success">PLAY</a>
     
                    </div>
                    
                </div>
</div>
</div>
</div>


 {/foreach}
 </div>
</div>

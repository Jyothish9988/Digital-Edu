

   <div class="container" align="center">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
  <center>
    <table class="table table-stripped" align="center" >
      <form method="POST" action="">
        <input type="hidden" name="hide" value="h">
        <tr>
          <th></th>
          <td>
                <input type="text" name="sname" class="form-control" placeholder="Subject name...">
            </td>
            
            <td>
                <input type="text" name="topic" class="form-control" placeholder="Topic name...">
            </td>
            <td>
              <input type="submit" value="Search" class="btn btn-success">
            </td>
       </tr>
       </form>
  </table>
</center>
</div>
</div>
</div>
<br>
<br><br>

<div class="container-fluid">
     <div class="row">
        {if $data==null}

{foreach from=$data item="j"}
   

<div class="col-sm-3">
      <div class="card">
<div class="container-fluid">

<div class="item popular-item">
                    <div class="thumb">
                        <img src="images/book.jpg"  height="150px" width="150px"> 
                        <div class="text-content">
                            <h4>Subject:{$j.sname}</h4>
                            <h5>Sem:{$j.sem}</h5><br>
                            <span>Topic:{$j.topic}</span><br>
                            <span>Date:{$j.date}</span>

                        </div>
                        
                            <a href="uploads/{$j.ntkey}/{$j.note}" class="btn btn-success">DOWNLOAD</a>
     
                    </div>
                </div>
</div>
</div>
</div>


 {/foreach}
 </div>
 {else}
 {foreach from=$data item="k"}
   

<div class="col-sm-3">
      <div class="card">
<div class="container-fluid">

<div class="item popular-item">
                    <div class="thumb">
                        <img src="images/book.jpg"  height="150px" width="150px"> 
                        <div class="text-content">
                            <h4>Subject:{$k.sname}</h4>
                            <h5>Sem:{$k.sem}</h5><br>
                            <span>Topic:{$k.topic}</span><br>
                            <span>Date:{$k.date}</span>

                        </div>
                        
                            
                            <a href="std_notes_download.php?ntkey={$k.ntkey}&&note={$k.note}" class="btn btn-success">DOWNLOAD</a>
     
                    </div>
                </div>
</div>
</div>
</div>


 {/foreach}
 {/if}
 </div>

</div>

<br>
<br><br>
<br><br>
<br><br>
<br><br>

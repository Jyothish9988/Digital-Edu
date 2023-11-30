<br>
<br>
<br><br>

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
                <input type="text" name="sem" class="form-control" placeholder="Sem name...">
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
</div>

<br>
<br><br>
<br><br>
<br><br>
<br><br>

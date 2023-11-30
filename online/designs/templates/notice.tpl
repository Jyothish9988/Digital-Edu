{literal}
<script>
#fixedmarq {
position:fixed;
margin-left:auto;
margin-right: auto;

 }
</script>
{/literal}
<br><br>

<center>
        <!--  <marquee width="100%" direction="up" height="100px" align="center">
            This is a sample scrolling text that has scrolls in the upper direction.
         </marquee> -->
   <div id="fixedmarq">
      <marquee width="640" height="300" bgcolor="#FFFFFF" direction="up">
         <span style="font-weight: 400; font-family: changa-    one; font-style: normal; font-size:24px; color:#000000">
            {foreach from=$data item="j"}
            {$j.title}&nbsp;:&nbsp;{$j.notice}
            <br>
            {$j.date}
            <br>
            <br>
            {/foreach}

      </marquee>
   </div>


</center>






<img src="images/notice.png" >


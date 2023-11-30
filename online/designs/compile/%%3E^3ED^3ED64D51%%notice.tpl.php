<?php /* Smarty version 2.6.26, created on 2023-05-12 20:29:32
         compiled from notice.tpl */ ?>
<?php echo '
<script>
#fixedmarq {
position:fixed;
margin-left:auto;
margin-right: auto;

 }
</script>
'; ?>

<br><br>

<center>
        <!--  <marquee width="100%" direction="up" height="100px" align="center">
            This is a sample scrolling text that has scrolls in the upper direction.
         </marquee> -->
   <div id="fixedmarq">
      <marquee width="640" height="300" bgcolor="#FFFFFF" direction="up">
         <span style="font-weight: 400; font-family: changa-    one; font-style: normal; font-size:24px; color:#000000">
            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
            <?php echo $this->_tpl_vars['j']['title']; ?>
&nbsp;:&nbsp;<?php echo $this->_tpl_vars['j']['notice']; ?>

            <br>
            <?php echo $this->_tpl_vars['j']['date']; ?>

            <br>
            <br>
            <?php endforeach; endif; unset($_from); ?>

      </marquee>
   </div>


</center>






<img src="images/notice.png" >

<?php /* Smarty version 2.6.26, created on 2023-05-12 18:35:16
         compiled from chat_std.tpl */ ?>


    <!-- RIGHT SECTION -->
    <!-- hod -->
<?php if ($this->_tpl_vars['rid'] == 46): ?>
     <section id="main-right" class="main-right">
      
      <div id="header-right" class="header-right">
        <!-- profile pict -->

        <div id="header-img" class="profile header-img">
          
          <img src="images/hod.jpg" alt="" >
          </div>
          <h4 align="text-left" class="name friend-name">HOD</h4>
        
<?php endif; ?>


<!-- tr -->
   <?php if ($this->_tpl_vars['rid'] != 46): ?>
     <section id="main-right" class="main-right">
      
      <div id="header-right" class="header-right">
        <!-- profile pict -->
     
        <div id="header-img" class="profile header-img">
          <?php $_from = $this->_tpl_vars['det']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['det']):
?>
          <img src="uploads/<?php echo $this->_tpl_vars['tr_key']; ?>
/<?php echo $this->_tpl_vars['det']['photo']; ?>
" alt="">
          </div>
          <h4 align="text-left" class="name friend-name"><?php echo $this->_tpl_vars['det']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['det']['name2']; ?>
</h4>
           <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

        

        <!-- name -->
        <!-- <h4 class="name friend-name"><?php echo $this->_tpl_vars['k']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['k']['name2']; ?>
</h4> -->
        
        <!-- some btn -->
        <div class="some-btn">
          <span class="glyphicon glyphicon-facetime-video"></span>
          <span class="glyphicon glyphicon-earphone"></span>
          <span class="glyphicon glyphicon-option-vertical option-btn"></span>
        </div>
      </div>

      <!-- chat area -->
      <div id="chat-area" class="chat-area">
        <!-- chat content -->
        <!-- FRIENDS CHAT TEMPLATE -->
        <?php $_from = $this->_tpl_vars['msgs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k']):
?>
        <?php if ($this->_tpl_vars['k']['slid'] != $this->_tpl_vars['sid']): ?>
        <div id="friends-chat" class="friends-chat">
          <div class="profile friends-chat-photo">
            <img src="uploads/<?php echo $this->_tpl_vars['k']['std_key']; ?>
/<?php echo $this->_tpl_vars['k']['photo']; ?>
" alt="">
          </div>


          <div class="friends-chat-content">
            <p class="friends-chat-name"><?php echo $this->_tpl_vars['k']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['k']['name2']; ?>
</p>
            <p class="friends-chat-balloon"><?php echo $this->_tpl_vars['k']['msg']; ?>
</p>
            <h5 class="chat-datetime"><?php echo $this->_tpl_vars['k']['date']; ?>
 | <?php echo $this->_tpl_vars['k']['time']; ?>
</h5>
          </div>
        </div>

        
        <!-- YOUR CHAT TEMPLATE -->
        <?php else: ?>
        <div id="your-chat" class="your-chat">
          <p class="your-chat-balloon"><?php echo $this->_tpl_vars['k']['msg']; ?>
</p>
          <p class="chat-datetime"><span class="glyphicon glyphicon-ok"></span> <?php echo $this->_tpl_vars['k']['date']; ?>
 | <?php echo $this->_tpl_vars['k']['time']; ?>
</p>
        </div>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
         

      </div>

      <!-- typing area -->
<div id="typing-area" class="typing-area">
        <!-- input form -->
         <form method="post" onsubmit="" >
<input type="hidden" name="hide" value="h">  
        <input id="type-area" name="msg" class="type-area" placeholder="Type something...">
        <!-- attachment btn -->
        <div class="attach-btn">
          <!-- <span class="glyphicon glyphicon-paperclip file-btn"></span> -->
          <!-- <span class="glyphicon glyphicon-camera"></span> -->
          <!-- <span class="glyphicon glyphicon-picture"></span> -->
        </div>
        <!-- send btn -->
        <!-- <span class="glyphicon glyphicon-send send-btn">  -->
          <input type="submit" class="glyphicon glyphicon-send send-btn" >
        <!-- </span> -->     

      </div>



</section>







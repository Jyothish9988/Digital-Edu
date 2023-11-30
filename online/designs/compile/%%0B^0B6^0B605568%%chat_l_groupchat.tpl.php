<?php /* Smarty version 2.6.26, created on 2023-05-15 06:49:11
         compiled from chat_l_groupchat.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chat App Template</title>
  <link rel="stylesheet" href="chat/bootstrap3.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="chat/chat.css">
</head>
<body>

  <div id="app" class="app">

    <!-- LEFT SECTION -->

    <section id="main-left" class="main-left">
      <!-- header -->
      <div id="header-left" class="header-left">
        <!-- <span class="glyphicon glyphicon-menu-hamburger hamburger-btn"></span> -->
        <?php if ($this->_tpl_vars['sid'] == 46): ?>
        <span><a href="hod_main_header.php"><img src="images/homepage.png" width="45px" height="50px"></a></span>
        

        <?php elseif ($this->_tpl_vars['utyp'] == '3'): ?>
        <span><a href="teacher_main_header.php"><img src="images/homepage.png" width="45px" height="50px"></a></span>
        <!-- <span class="glyphicon glyphicon-search search-btn"></span> -->
          <?php else: ?>
          <span><a href="student_main_header.php"><img src="images/homepage.png" width="45px" height="50px"></a></span>
          <?php endif; ?>
        <span ></span>
        <span ></span>
        <span ></span>
        <span><a href="logout.php"><img src="images/power.png" width="50px" height="50px"></a></span>
      </div>
 

        
      <!-- chat list -->
      <div id="chat-list" class="chat-list">

                                     <!-- --------------------------------GROUP chat------------------------------ -->
             

<!-- <div id="friends" class="friends">
        <a href="groupchat.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
"><div class="friends-credent">
        <span class="friends-name">GROUP CHAT</span>
      </div></a>
    </div> -->



     <div id="friends" class="friends">
          <!-- photo -->
          <div class="profile friends-photo">
            <img src="images/group.jpg" alt="" height="80px">
          </div>
          
          <a href="groupchat.php?sem=<?php echo $this->_tpl_vars['sem']; ?>
"><div class="friends-credent">
            <!-- name -->
            <span class="friends-name">Group Chat</span>
            <!-- last message -->
            <span class="friends-message">CS</span>
          </div></a>
          <!-- notification badge -->
          <!-- <span class="badge notif-badge">7</span> -->
        </div>

    <!-- --------------------------------------------------------------group chat------------------------------------------------ -->


<?php if ($this->_tpl_vars['utyp'] == '4'): ?>



        <!-- ------------------------------Hod-------------------------- -->
        <!-- user lists -->

        
        <?php if ($this->_tpl_vars['sid'] != 46): ?>
        <div id="friends" class="friends">
          <!-- photo -->
          <div class="profile friends-photo">
            <img src="images/hod.jpg" alt="" height="80px">
          </div>
          
          <a href="std_hod_chat2.php?std_key=<?php echo $this->_tpl_vars['j']['std_key']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
"><div class="friends-credent">
            <!-- name -->
            <span class="friends-name">HOD</span>
            <!-- last message -->
            <span class="friends-message">CS</span>
          </div></a>
          <!-- notification badge -->
          <!-- <span class="badge notif-badge">7</span> -->
        </div>

    
        <?php endif; ?>
        <!-- ------------------------------hod--------------------------------- -->




    <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
       <?php if ($this->_tpl_vars['j']['lid'] != 46): ?>
        <div id="friends" class="friends">
          <!-- photo -->
          <div class="profile friends-photo">
            <img src="uploads/<?php echo $this->_tpl_vars['j']['tr_key']; ?>
/<?php echo $this->_tpl_vars['j']['photo']; ?>
" alt="">
          </div>
          
          <a href="std_tr_chat2.php?tr_key=<?php echo $this->_tpl_vars['j']['tr_key']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
"><div class="friends-credent">
            <!-- name -->
            <span class="friends-name"><?php echo $this->_tpl_vars['j']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['j']['name2']; ?>
</span>
            <!-- last message -->
           <span class="friends-message">Teacher</span>
          </div></a>
          <!-- notification badge -->
          <span class="badge notif-badge"></span>
        </div>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>

<?php else: ?>


        <!-- ------------------------------Hod-------------------------- -->
        <!-- user lists -->

        
        <?php if ($this->_tpl_vars['sid'] != 46): ?>
        <div id="friends" class="friends">
          <!-- photo -->
          <div class="profile friends-photo">
            <img src="images/hod.jpg" alt="" height="80px">
          </div>
          
          <a href="tr_hod_chat2.php?std_key=<?php echo $this->_tpl_vars['j']['std_key']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
"><div class="friends-credent">
            <!-- name -->
            <span class="friends-name">HOD</span>
            <!-- last message -->
            <span class="friends-message">CS</span>
          </div></a>
          <!-- notification badge -->
          <!-- <span class="badge notif-badge">7</span> -->
        </div>

    
        <?php endif; ?>
        <!-- ------------------------------hod--------------------------------- -->
        <?php if ($this->_tpl_vars['utyp'] == '3'): ?>
        <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
        <div id="friends" class="friends">
          <!-- photo -->
          <div class="profile friends-photo">
            <img src="uploads/<?php echo $this->_tpl_vars['j']['std_key']; ?>
/<?php echo $this->_tpl_vars['j']['photo']; ?>
" alt="">
          </div>
          
          <a href="tr_std_chat2.php?std_key=<?php echo $this->_tpl_vars['j']['std_key']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
"><div class="friends-credent">
            <!-- name -->
            <span class="friends-name"><?php echo $this->_tpl_vars['j']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['j']['name2']; ?>
&nbsp;CS</span>
            <!-- last message -->
            <span class="friends-message">Student(Sem:<?php echo $this->_tpl_vars['j']['sem']; ?>
)</span>
          </div></a>
          <!-- notification badge -->
          <!-- <span class="badge notif-badge">7</span> -->
        </div>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>


        <?php if ($this->_tpl_vars['utyp'] == '1'): ?>
                <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
        <div id="friends" class="friends">
          <!-- photo -->
          <div class="profile friends-photo">
            <img src="uploads/<?php echo $this->_tpl_vars['j']['std_key']; ?>
/<?php echo $this->_tpl_vars['j']['photo']; ?>
" alt="">
          </div>
          
          <a href="hod_std_chat2.php?std_key=<?php echo $this->_tpl_vars['j']['std_key']; ?>
&&sem=<?php echo $this->_tpl_vars['sem']; ?>
"><div class="friends-credent">
            <!-- name -->
            <span class="friends-name"><?php echo $this->_tpl_vars['j']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['j']['name2']; ?>
&nbsp;CS</span>
            <!-- last message -->
            <span class="friends-message">Student(Sem:<?php echo $this->_tpl_vars['j']['sem']; ?>
)</span>
          </div></a>
          <!-- notification badge -->
          <!-- <span class="badge notif-badge">7</span> -->
        </div>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
<?php endif; ?>
        <!-- <a href="" class="btn btn-danger"></a> -->
      </div>



    </section>


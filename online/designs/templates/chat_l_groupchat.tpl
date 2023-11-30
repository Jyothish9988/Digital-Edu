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
        {if $sid==46}
        <span><a href="hod_main_header.php"><img src="images/homepage.png" width="45px" height="50px"></a></span>
        

        {elseif $utyp=='3'}
        <span><a href="teacher_main_header.php"><img src="images/homepage.png" width="45px" height="50px"></a></span>
        <!-- <span class="glyphicon glyphicon-search search-btn"></span> -->
          {else}
          <span><a href="student_main_header.php"><img src="images/homepage.png" width="45px" height="50px"></a></span>
          {/if}
        <span ></span>
        <span ></span>
        <span ></span>
        <span><a href="logout.php"><img src="images/power.png" width="50px" height="50px"></a></span>
      </div>
 

        
      <!-- chat list -->
      <div id="chat-list" class="chat-list">

                                     <!-- --------------------------------GROUP chat------------------------------ -->
             

<!-- <div id="friends" class="friends">
        <a href="groupchat.php?sem={$sem}"><div class="friends-credent">
        <span class="friends-name">GROUP CHAT</span>
      </div></a>
    </div> -->



     <div id="friends" class="friends">
          <!-- photo -->
          <div class="profile friends-photo">
            <img src="images/group.jpg" alt="" height="80px">
          </div>
          
          <a href="groupchat.php?sem={$sem}"><div class="friends-credent">
            <!-- name -->
            <span class="friends-name">Group Chat</span>
            <!-- last message -->
            <span class="friends-message">CS</span>
          </div></a>
          <!-- notification badge -->
          <!-- <span class="badge notif-badge">7</span> -->
        </div>

    <!-- --------------------------------------------------------------group chat------------------------------------------------ -->


{if $utyp=='4'}



        <!-- ------------------------------Hod-------------------------- -->
        <!-- user lists -->

        
        {if $sid!=46}
        <div id="friends" class="friends">
          <!-- photo -->
          <div class="profile friends-photo">
            <img src="images/hod.jpg" alt="" height="80px">
          </div>
          
          <a href="std_hod_chat2.php?std_key={$j.std_key}&&sem={$sem}"><div class="friends-credent">
            <!-- name -->
            <span class="friends-name">HOD</span>
            <!-- last message -->
            <span class="friends-message">CS</span>
          </div></a>
          <!-- notification badge -->
          <!-- <span class="badge notif-badge">7</span> -->
        </div>

    
        {/if}
        <!-- ------------------------------hod--------------------------------- -->




    {foreach from=$view1 item="j"}
       {if $j.lid!=46}
        <div id="friends" class="friends">
          <!-- photo -->
          <div class="profile friends-photo">
            <img src="uploads/{$j.tr_key}/{$j.photo}" alt="">
          </div>
          
          <a href="std_tr_chat2.php?tr_key={$j.tr_key}&&sem={$sem}"><div class="friends-credent">
            <!-- name -->
            <span class="friends-name">{$j.name1}&nbsp;{$j.name2}</span>
            <!-- last message -->
           <span class="friends-message">Teacher</span>
          </div></a>
          <!-- notification badge -->
          <span class="badge notif-badge"></span>
        </div>
        {/if}
        {/foreach}

{else}


        <!-- ------------------------------Hod-------------------------- -->
        <!-- user lists -->

        
        {if $sid!=46}
        <div id="friends" class="friends">
          <!-- photo -->
          <div class="profile friends-photo">
            <img src="images/hod.jpg" alt="" height="80px">
          </div>
          
          <a href="tr_hod_chat2.php?std_key={$j.std_key}&&sem={$sem}"><div class="friends-credent">
            <!-- name -->
            <span class="friends-name">HOD</span>
            <!-- last message -->
            <span class="friends-message">CS</span>
          </div></a>
          <!-- notification badge -->
          <!-- <span class="badge notif-badge">7</span> -->
        </div>

    
        {/if}
        <!-- ------------------------------hod--------------------------------- -->
        {if $utyp=='3'}
        {foreach from=$view1 item="j"}
        <div id="friends" class="friends">
          <!-- photo -->
          <div class="profile friends-photo">
            <img src="uploads/{$j.std_key}/{$j.photo}" alt="">
          </div>
          
          <a href="tr_std_chat2.php?std_key={$j.std_key}&&sem={$sem}"><div class="friends-credent">
            <!-- name -->
            <span class="friends-name">{$j.name1}&nbsp;{$j.name2}&nbsp;CS</span>
            <!-- last message -->
            <span class="friends-message">Student(Sem:{$j.sem})</span>
          </div></a>
          <!-- notification badge -->
          <!-- <span class="badge notif-badge">7</span> -->
        </div>
        {/foreach}
        {/if}


        {if $utyp=='1'}
                {foreach from=$view1 item="j"}
        <div id="friends" class="friends">
          <!-- photo -->
          <div class="profile friends-photo">
            <img src="uploads/{$j.std_key}/{$j.photo}" alt="">
          </div>
          
          <a href="hod_std_chat2.php?std_key={$j.std_key}&&sem={$sem}"><div class="friends-credent">
            <!-- name -->
            <span class="friends-name">{$j.name1}&nbsp;{$j.name2}&nbsp;CS</span>
            <!-- last message -->
            <span class="friends-message">Student(Sem:{$j.sem})</span>
          </div></a>
          <!-- notification badge -->
          <!-- <span class="badge notif-badge">7</span> -->
        </div>
        {/foreach}
        {/if}
{/if}
        <!-- <a href="" class="btn btn-danger"></a> -->
      </div>



    </section>



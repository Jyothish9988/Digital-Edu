

    <!-- RIGHT SECTION -->

    <section id="main-right" class="main-right">
      <!-- header -->
      <div id="header-right" class="header-right">
        <!-- profile pict -->
        
        <div id="header-img" class="profile header-img">
          
          <img src="uploads/{$k.std_key}/{$k.photo}" alt="">
          
        </div>

        <!-- name -->
        <h4 class="name friend-name">{$k.name1}&nbsp;{$k.name2}</h4>
        
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
        {foreach from=$msgs item="k"}
        {if $k.slid!=$sid}
        <div id="friends-chat" class="friends-chat">
          <div class="profile friends-chat-photo">
            <img src="uploads/{$k.std_key}/{$k.photo}" alt="">
          </div>


          <div class="friends-chat-content">
            <p class="friends-chat-name">{$k.name1}&nbsp;{$k.name2}</p>
            <p class="friends-chat-balloon">{$k.msg}</p>
            <h5 class="chat-datetime">{$k.date} | {$k.time}</h5>
          </div>
        </div>

        
        <!-- YOUR CHAT TEMPLATE -->
        {else $k.slid==$sid}
        <div id="your-chat" class="your-chat">
          <p class="your-chat-balloon">{$k.msg}</p>
          <p class="chat-datetime"><span class="glyphicon glyphicon-ok"></span> {$k.date} | {$k.time}</p>
        </div>
        {/if}
        {/foreach}
         

      </div>

      <!-- typing area -->
      <div id="typing-area" class="typing-area">
   

   <form method="post" onsubmit="" >
<input type="hidden" name="hide" value="h">    

<table>

        <tr><td><input type="text" name="msg" id="t1" class="type-area"></td>
            
            <td><span class="glyphicon glyphicon-send send-btn"><input type="submit"></span></td>
        
        </tr>
</table>

</form>
</div>
</section>








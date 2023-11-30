<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  {literal}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>Chat App</title>

<style>
#chat {
  height: 500px;
  overflow: auto;
  font-size: 16px;
}

.container > .jumbotron {
  height: 120px;
  padding: 1.5% 1% 5% 1%;
}

.content {
  box-sizing: border-box;
  overflow: auto;
  height: 85%;
  margin: 1% 0;
}

/* msg */

.msg {
  padding: 1%;
  margin: 1%;
  border: 1px solid var(--blue);
  border-radius: 3px;
  color: var(--dark);
  width: fit-content;
  max-width: 80%;
}

.msg .head {
  width: 100%;
  color: var(--indigo);
  font-weight: 350;
  font-style: italic;
  font-size: 12px;
}

.msg .body {
  margin: 1% 0;
  font-size: 16px;
}

.msg .footer {
  color: gray;
  font-size: 12px;
}

/* tools */

.tools {
  position: relative;
}

.tools .emoji-list {
  display: none;
  flex-wrap: wrap;
  position: absolute;
  right: 2%;
  bottom: 110%;
  border-radius: 5px;
  border: 1px solid gray;
  width: 270px;
  height: 150px;
  overflow: auto;
}

.tools .emoji-list .emoji {
  margin: 1%;
}

.t1.t2{
display:inline;
}


</style>
{/literal}




</head>

<body>


  <div class="container">
<div class="jumbtron">
      <h2 class="display-4">GROUP CHAT SEM {$sem}</h2>
  </div>

    <div class="container-fluid bg-light" id="chat">
      <div class="content d-flex flex-column" id="chat-content">


           {foreach from=$msgs item="j"}

   <span class="msg">
       <div class='head'> {$j.name1}&nbsp;{$j.name2} </div>
   <p class='body'> {$j.msg} </p>
  <div class='footer'> {$j.time} <br> {$j.date} </div>
   </span>
{/foreach}

      </div>
      <form class="tools form-row" method="post">
        <input type="hidden" name="hide" value="h">
    
        <input id="t1" class="form-control col mr-2" type="text" name="msg" placeholder="Message">

          <input id="t2" class="btn btn-primary " type="submit" value="submit">

       
      </form>
    </div>
  </div>
</body>

</html>
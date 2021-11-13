
<html>
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/index.css">
        <link rel="icon" href="img/leaves.png">
        <script src="js/dropdown.js" type="application/javascript"></script>
        <title>Medicbot</title>
        
      <!-- 
        <link rel="stylesheet" href="css/superslides.css">

         font-awesome
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

       bootstrap
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
         <link rel="stylesheet" href="css/style1.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>


    <body>
        

<link rel="stylesheet" href="../css/index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/dropdown.js"></script>
  
<div class="header">
    <div id="header_text">
      <b> MEDICBOT</b>
    </div>
    <div id="header_right">
        
      <div class="dropdown">
        <button  type="button" class="dropbtn">
          <a class="header_link" href="./history">Account</a></button>
        <div class="dropdown-content">
  <a href="#">Link 1</a>
  <a href="#">Link 2</a>
  <a href="#">Link 3</a>
  </div>
      </div>
      
        <button  type="button" class="jik"> <a class="header_link" href="./history">Contact</a> </button>
        <button  type="button" class="jik"> <a class="header_link" href="./docs">Docs</a> </button>
        <button  type="button" class="jik"> <a class="header_link" href="./">Chatbot</a> </button>
        <!--<button  type="button"class="jik"> <a class="header_link" href="./">Developers</a> </button>-->
        
    </div>
</div>


        

        <div id="index_page">
          <div id="main_content">
            <p><span>Hii 
              {{#if username}} {{username}} {{/if}} ,</span><br> I am your<br><span>Virtual Assistant</span></p>
          </div>
        <!--
        <div id="rasa-chat-widget" data-websocket-url="http://34.131.236.128"></div>
        <script src="https://unpkg.com/@rasahq/rasa-chat" type="application/javascript"></script>
        -->
        </div> 
        <br><br><br><br>

        <div id="kil">
           <h1>Medicbot</h1>
            
        </div>

       
        <script>!(function () {
            let e = document.createElement("script"),
              t = document.head || document.getElementsByTagName("head")[0];
            (e.src =
              "https://cdn.jsdelivr.net/npm/rasa-webchat/lib/index.js"),
              // Replace 1.x.x with the version that you want
              (e.async = !0),
              (e.onload = () => {
                window.WebChat.default(
                  {
                    initPayload: '/greet_0_1',
                    customData: { language: "en" },
                    socketUrl: "http://34.131.236.128",
                    // add other props here
                  },
                  null
                );
              }),
              t.insertBefore(e, t.firstChild);
          })();
          </script>
    <script src="js/typed.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
   
    </body>




</html>




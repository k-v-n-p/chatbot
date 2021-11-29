<!DOCTYPE html>
<html>
    <head> 
    <?php include 'partials/head.php'; ?>
    <link rel="stylesheet" href="css/header.css">
   </head>


    <body>
        
        <?php include 'partials/header.php'; ?>

        <div id="chatbot-page">
      <div class="container">
          <div class="row">
            <div class="col-lg-12  chatbot-page-content">
            
              <div class="d-flex flex-column bd-highlight mb-3">
                <div class="p-2 bd-highlight"><h1>A Healthcare Chatbot</h1></div>
                <div class="p-2 bd-highlight"><h3>We aim to make healthcare easily accessible with<br> our AI powered diagnostic engine, <br> which uses Natural Language Understanding for diagnosis</h3></div>
                
                
              </div>
             
            </div>
           
          </div>
      </div>
      </div>

        
       <style>
        
         .rw-launcher{background-color: #279be9;
          box-shadow: 4px 5px 20px 5px #272952;
        }
         .rw-conversation-container .rw-header{background-color: #279be9;}
         .rw-conversation-container .rw-messages-container .rw-message .rw-client{background-color: #279be9;}
         .rw-conversation-container .rw-messages-container .rw-message .rw-replies .rw-reply{background-color: #279be9;}

         /* .rw-widget-container{background-color: #34ADFF;} */
         </style>
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
                    initPayload: '/greet',
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
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
        <?php include 'partials/footer.php'; ?>
   
    </body>




</html>


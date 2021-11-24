<!DOCTYPE html>
<html>
    <head> 
        <?php include 'partials/head.php'; ?>
    </head>


    <body>
        
        <?php include 'partials/header.php'; ?>

        <div class="container">
          <div class="row">
            <div class="col-lg-6  main-page-container">
              <!-- <h1>A Healthcare <br> Conversational AI<br> </h1>
              <p>Combining AI and Technology with human expertise</p>
              <span><p>Powered by RASA</p></span> -->
              <div class="d-flex flex-column bd-highlight mb-3">
                <div class="p-2 bd-highlight"><h1>A Healthcare <br> Conversational AI</h1></div>
                <div class="p-2 bd-highlight"><h3>AI and technology<be></be> combined with human expertise</h3></div>
                <div class="p-2 bd-highlight">powered by RASA</div>
              </div>
             
            </div>
            <div class="col-lg-6 main-page-container">
              <img src="img/medicbot.png" alt="">
            </div>
          </div>
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
    
   
    </body>




</html>


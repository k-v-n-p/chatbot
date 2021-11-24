<!DOCTYPE html>
<html>
    <head> 
    <?php include 'partials/head.php'; ?>
    <link rel="stylesheet" href="css/header.css">
   </head>


    <body>
        
        <?php include 'partials/header.php'; ?>
        

        
       
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


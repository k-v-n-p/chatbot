<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

    define('DB_SERVER', '185.187.241.1');
    define('DB_USERNAME', 'u803052346_dev_1');
    define('DB_PASSWORD', 'n=[3>bXX6?');
    define('DB_NAME', 'u803052346_MedicbotDB');
    


    /* Attempt to connect to MySQL database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if(!$link){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


?>
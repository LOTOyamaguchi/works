<?php
    function getAddress(){
        $apiAddr = ["url" => "http://api.ipify.org/?format=json"];
        $response = json_decode(file_get_contents($apiAddr["url"]),true);
        echo $response["ip"];
    }
?>
<html>
    <head>
        <title>SHOW YOUR GLOBAL IP ADRESS</title>
    </head>
    <body>
        <p>YOUR GLOBAL IP ADDRESS IS <b><?php getAddress() ?></b></p>
    </body>
</html>
        


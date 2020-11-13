<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Geheim</title>
        <link rel="stylesheet" href="css/cookieclicker.css">
        <script src="js/cookieclicker.js"></script>
    </head>
    <body onload="updateScore()">
        <div class="wrapper">
            <div>
                <img src="img/cookie.png" id="cookie" onclick="clickCookie()">
            <div>
            <p id="score" class="text"></p>
            <div class="buttons">
                <button id="upgrade1" onclick="upgrade1()">Upgrade</button>
                <button id="autoupgrade" onclick="autoupgrade()">Auto upgrade</button>
                <button id="reset" onclick="reset()">Reset</button>
            <div class="buttons">
        </div>
    </body>
</html>
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HekwerkOnline</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-3.5.1.js"></script>
    </head>
    <body>
        <header>
            <nav>
                <div id="header" class="header sticky">
                <a href="/HekwerkOnline/" class="header-logo"><img src="img/logo.png" height="75"></a>
                    <nav>
                        <ul class="nav">
                            <div class="dropdown">
                            <li><a>Decoratieve hekken</a>
                                <div class="dropdown-content">
                                    <a href="houtenhek">Houten hekken</a>
                                    <a href="metalenhek">Metalen hekken</a>
                                </div>
                            </div>
                            </li>

                            <div class="dropdown">
                            <li><a>Beschermhekken</a>
                                <div class="dropdown-content">
                                    <a href="metalendranghek">Dranghekken</a>
                                    <a href="metalenbouwomheining">Bouwomheiningen</a>
                                </div>
                            </div></li>
                            
                            <div class="dropdown">
                            <li><a>Poorten</a>
                                <div class="dropdown-content">
                                    <a href="houtenpoort">Houten poorten</a>
                                    <a href="metalenpoort">Metalen poorten</a>
                                </div>
                            </li>
                            </div>

                            <li><a href="account">Mijn Hekwerk</a></li>
                            <li><a href="cart">Winkelwagen</a></li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </header>
    </body>
</html>
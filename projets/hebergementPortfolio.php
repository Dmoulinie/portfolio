<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/root.css">
    <link rel="stylesheet" type="text/css" href="/css/hebergementPortfolio.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet - Quizz Java</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>

    <?php
        include '../includes/navbar.php';
    ?>


    <div>
        <div class="center">
            <h1 class="bigTitle">Hébergement de portfolio</h1>
        </div>

        <div class="center">
            <img src="/img/ovhcloud.jpg" style="filter: invert(10%);" alt="">
        </div>

        <div class="center">
            <h2 class="title">Technologies utilisées</h2>
        </div>

        <div class="center" id="technologies">
            <div>
                <p class="text-default center">
                    Suivi du tutoriel de
                    <a href="https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mariadb-php-lamp-stack-on-debian-11" class="lien" style="padding-left:10px" target="_blank">
                        Digital Ocean 
                    </a>
                </p>
                <img src="/img/lamp.jpg" alt="" >
            </div>
            <div>
                <p class="text-default center">
                    Passage en HTTPS avec 
                    <a href="https://certbot.eff.org/" class="lien" style="padding-left:10px" target="_blank">
                        Let's Encrypt Certbot
                    </a>
                </p>
                <img src="/img/lets-encrypt.png" alt="">
            </div>
        </div>


        <div class="center">
            <h2 class="title">Résultats</h2>
        </div>

        <div id="resultats">
            <h1 class="bigTitle"><a href="https://garage.dmoulinie.me" class="lien">Projet Garage</a></h1>
            <h1 class="bigTitle"><a href="https://portfolio.dmoulinie.me" class="lien">Projet Portfolio</a></h1>
        </div>

    </div>
<br><br><br><br><br><br>


    <footer> <small>&copy; Copyright 2022, Dan Moulinie</small> </footer> 
</body>

</html>
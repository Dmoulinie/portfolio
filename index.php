<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Accueil - PortFolio Dan</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <?php
        include 'includes/navbar.php';
    ?>

    <div id="title">
        <p id="name">Dan Moulinie</p>
        <p id="subtitleName">Développeur web Full Stack</p>
    </div>

    <div id="photoCircle">
        <img src="img/moi.jpg" alt="">
    </div>

    <div id="description">
        <p>
            Bonjour vous êtes arrivés sur mon
            portfolio, je suis un étudiant en
            BTS SIO qui souhaite s'orienter
            vers le développement web.
            <!--  web en
            licence en alternance à l'UNC puis
            un diplôme d'ingénieur. -->
        </p>
    </div>

    <div class="buttons">
        <a href="leBTS.html"><button class="button" title="En savoir plus">Le BTS SIO</button></a>
        <button class="button" title="Me contacter">Me contacter</button>
    </div>
</body>
<footer> <small>&copy; Copyright 2022, Dan Moulinie</small> </footer> 

</html>
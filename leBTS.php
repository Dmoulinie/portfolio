<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/root.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
    <title>Accueil - PortFolio Dan</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>

    <?php
        include 'includes/navbar.php';
    ?>


    <div id="logoBTS">
        <img src="img/btsLogo.png" alt="Logo du bts">
    </div>
    <div id ="descriptionBTS">
        <p>
            Une formation informatique solide qui associe développement et réseaux.
            En plus des matières en lien avec l’ingénierie informatique,
            la formation propose également des enseignements de culture générale,
            d’anglais (avec la possibilité de continuer une LV2), de mathématiques
            appliquées à l’informatique, ainsi que des outils d’analyse économique, 
            managériale et juridique des services informatiques utiles à l’entreprenariat.
        </p>
    </div>
 
    <div id="titleOptions">
        <p>Deux options</p>
    </div>

<div class="cards">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <div class="card-header">
                    <div class="card-logo">
                        <img src="img/devLogo.png">
                    </div>
                    <h2 class="card-title">Option développement</h2>
                    <h3 class="class-underTitle">(SLAM)</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">En sortant d’un BTS SIO SLAM, vous serez capables de développer des solutions informatiques au sein des entreprises et de gérer un parc informatique complet.</p>
                </div>
            </div>

          <div class="flip-card-back">
            <h2>Possibilités de metiers</h2>
            <ul>
                <li>Développeur informatique</li>
                <li>Webmaster</li>
                <li>Analyste programmeur</li>
                <li>Chargé d’études informatiques</li>
                <li>Intégrateur web</li>
                <li>Responsable des services applicatifs</li>
                <li>Testeur informatique</li>
            </ul>
          </div>
        </div>
    </div>

    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <div class="card-header">
                    <div class="card-logo">
                        <img src="img/reseauLogo.png">
                    </div>
                    <h2 class="card-title">Option réseaux</h2>
                    <h3 class="class-underTitle">(SISR)</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">En sortant d’un BTS SIO SISR, vous serez capables de gérer et d’administrer le réseau d’une société et d’en assurer la sécurité et la maintenance.</p>
                </div>
            </div>
            <div class="flip-card-back">
                <h2>Possibilités de metiers</h2>
                <ul>
                    <li>Administrateur systèmes et réseaux</li>
                    <li>Responsable cybersécurité</li>
                    <li>Gestionnaire de parc informatique</li>
                    <li>Responsable support informatique</li>
                    <li>Technicien de maintenance informatique</li>
                    <li>Pilote d’exploitation</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="buttons">
    <a href="https://www.btsinfo.nc/le-bts-sio-vous-interesse/" target="_blank"><button class="button" title="Rejoindre le BTS SIO">En savoir plus</button></a>
</div>
</body>
<footer> <small>&copy; Copyright 2022, Dan Moulinie</small> </footer> 
</html>
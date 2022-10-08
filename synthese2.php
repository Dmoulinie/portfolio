<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/synthese2.css">
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

    <h1 class="title center">Présentation du projet</h1>

    <div id="presentationEntreprise">
        <a href="https://digit.nc/" target="_blank"><img src="img/digit.png" id="logoEntreprise" alt=""></a>
        <div id="containerTextEntreprise">
            <p id="textEntreprise">
                Digit est une société du groupe SF2I spécialisée en développement informatique et édition de logiciels.
                Nous sommes constamment à la recherche de nouveaux talents.
            </p>
        </div>
    </div>

    <div id="presentationProjet">
        <img src="img/dCapteur.png">
        <p class="text-default">
            L'application Capteur est une application web développé en <a href="https://angular.io/" class="lien" target="_blank">Angular</a>,
            anciennement en Java (JEE). Elle permet de réunir plusieurs services sous forme de cercle/carte.
        </p>

    </div>

    <div id="titleLogiciels" class="title centrer">Technologies utilisés</div>

    
    <div id="logiciels" class="centrer">
        <div class="container">
            <img src="img/angular.jpg" alt="" >
            <div class="overlay">
                <a href="https://angular.io/" target="_blank" class="textOverlayLogiciels">Angular</a>
            </div>
        </div>
        <div class="container">
            <img src="img/Vscode.png" alt="">
            <div class="overlay">
                <a href="https://code.visualstudio.com/" target="_blank" class="textOverlayLogiciels">Vs Code</a>
            </div>
        </div>
        <div class="container">
            <img src="img/teams.png" alt="" >
            <div class="overlay">
                <a href="https://www.microsoft.com/fr-fr/microsoft-teams/group-chat-software" target="_blank" class="textOverlayLogiciels">Teams</a>
            </div>
        </div>
        <div class="container">
            <img src="img/firebase.png" alt="">
            <div class="overlay">
                <a href="https://firebase.google.com/" target="_blank" class="textOverlayLogiciels">Firebase</a>
            </div>
        </div>
        <div class="container">
            <img src="img/gitlab.png" alt="">
            <div class="overlay">
                <a href="https://about.gitlab.com/" target="_blank" class="textOverlayLogiciels">Gitlab</a>
            </div>
        </div>      
    </div>

    

    <div class="title centrer" id="titleAngularMVC">L'angular et l'approche MVC</div>
    <div class="imgAndTextLeftToRight" id="angularMVC">
        <img src="img/mvc2.png" alt="" id="imgMVC">
        <p class="text-default">
            L'architecture MVC se compose de trois modules ou objets principaux à utiliser dans le développement de logiciels : <br> <br>

            Un modèle représentant la structure logique sous-jacente des données dans une application logicielle,
                ainsi que la classe supérieure qui y est associée.
                Ce modèle d'objet ne contient aucune information sur l'interface utilisateur.  <br> <br>

            * Une vue, autrement dit un ensemble de classes représentant les éléments de l'interface utilisateur
                (tous ceux que l'utilisateur voit à l'écran et avec lesquels il peut interagir : boutons,
                boîtes de dialogue, etc.). <br> <br>

            * Un contrôleur représentant les classes qui se connectent au modèle et à la vue,
                et servant à la communication entre les classes dans le modèle et la vue.
        </p>
    </div>

    <div class="smallTitle centrer">Organisation du projet</div>
    <div>
        <div id="containerOrganisation">
            <div class="orgaElement">
                <p class="text-default">
                    Ce projet est développé en Angular et est donc orientée objet,
                    le modèle de l'architecture MVC sont des classes en Typscript,
                    elles permettent de travailler avec des objets précis
                    et d'y assigner des fonctions.
                </p>
                <img src="img/capteurModele.png" alt="">
            </div>
            <div class="orgaElement">
                <p class="text-default">
                    L'arborescence du projet est organisé sous forme de component,
                    dans chaque component se trouve un fichier html,css et typescript,
                    le fichier typescript est le contrôleur et le reste la vue.
                </p>
                <img src="img/capteurVueControlleur.png" alt="">
            </div>
        </div>
    </div>
    

    <div id="objectifStageTitle" class="center smallTitle">L'objectif du stage</div>
    <div class="objectifStage">
        <p class="text-default">
            Lors de ce stage de 6 semaines, j'ai du m'autoformer à l'Angular.
            Notamment grâce au
            <a  href="https://openclassrooms.com/fr/courses/7471261-debutez-avec-angular"
                class="lien"
                target="_blank">cours d'Openclassroom</a> sur comment débuter avec Angular.
            Puis j'ai reproduis une page du site
            afin de voir le CRUD(Create, Read, Update, Delete). Toutes les données sont stockées
            dans une base de donnée NoSQL(<a href="https://firebase.google.com/" class="lien">Firebase</a>).
            <br><br>
            Je me suis ensuite intéressé a l'application actuelle, en collaboration avec un autre stagiaire


        </p>
    </div>

    
</body>
<br>
<br>
<footer> <small>&copy; Copyright 2022, Dan Moulinie</small> </footer> 

</html>
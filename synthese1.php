<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/synthese.css">
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


    <div id="titleStage" class="centrer title">
        <p>Synthese de stage 1ère année</p>
    </div>

    <div>
        <p class="smallText">J’ai réalisé un stage dans la filiale DIGIT du groupe SF2i du 02/11/2021 au 17/12/2021
            pour une durée de 7 semaines. J’ai réalisé une grande partie de ce stage en télétravail
            mais cela ne m’a pas empêché d’apprendre.</p>
    </div>

    <div id="bar1"></div>

    <div id="titleLogiciels" class="centrer title">
        <p>Logiciels utilisés</p>
    </div>


    <div id="logiciels" class="centrer">
        <div class="container">
            <img src="img/teams.png" alt="" >
            <div class="overlay">
                <a href="https://www.microsoft.com/fr-fr/microsoft-teams/group-chat-software" target="_blank" class="textOverlayLogiciels">Teams</a>
            </div>
        </div>
        <div class="container">
            <img src="img/mysql.png" alt="">
            <div class="overlay">
                <a href="https://www.mysql.com/fr/products/workbench/" target="_blank" class="textOverlayLogiciels">Mysql Workbench</a>
            </div>
        </div>
        <div class="container">
            <img src="img/eclipse.png" alt="">
            <div class="overlay">
                <a href="https://www.eclipse.org/" target="_blank" class="textOverlayLogiciels">Eclipse</a>
            </div>
        </div>
        <div class="container">
            <img src="img/tomcat.png" alt="">
            <div class="overlay">
                <a href="https://tomcat.apache.org/" target="_blank" class="textOverlayLogiciels">Tomcat</a>
            </div>
        </div>    
        <div class="container">
            <img src="img/gitlab.png" alt="">
            <div class="overlay">
                <a href="https://about.gitlab.com/" target="_blank" class="textOverlayLogiciels">Gitlab</a>
            </div>
        </div>      
    </div>
    
    <div id="presentationApp" class="title centrer">
        <p>Présentation</p>
    </div>
<!--  a refaire en bas la  // trop de hover-->
    <div id="presentationCapteur">

        <div class="containerReunion">
            <img src="img/services.png">
        
            <div class="overlayReunion">
                L’objet de mon stage était l’amélioration d’une application web développée  JEE avec une base de données MySQL(DAO).
                Elle est nommée Capteur et permet de réunir plusieurs services sous forme de cercle/carte.
            
            </div>
        </div>
        
        
        
        <div class="containerReunion">
            <img src="img/reunion.png" alt="">
            <div class="overlayReunion">
                Chaque membre est stocké dans un annuaire et peut être assigné à un cercle selon l’administrateur du cercle.
                Chacun de ces cercles peuvent créer des réunions et les membres peuvent voter avec 3 couleurs (vert,orange,rouge) pour donner son ressenti de la semaine
            </div>
        </div>
    </div>
        
<div class="title centrer presentationAppText">
    <p>Organisation de l’application : </p>
</div>

<div>
    <p class="textNormal">
        L’application est déployée sur un serveur Tomcat qui tourne sur un serveur AWS avec un serveur SQL.
        Elle fonctionnait avec le protocole http non sécurisé.
        Pour la sécuriser il a fallu se connecter sur le serveur AWS et ajouter un certificat Let’s Encrypt. <br>
        L’application est organisé avec le modèle MVC : <br>
        - Le modèle est la page web <br>
        - La vue est l’affichage des données <br>
        - Le contrôleur effectue les calculs et renvoie les données aux pages. <br>
        - Ce modèle permet de bien organiser le projet, afin de se retrouver plus facilement et facilite le fonctionnement.
    </p>
</div>

<div id="titleModif" class="title centrer">
    <p>Modifications effectuées</p>
</div>

<div id="modifEff">

    <h2 class="centrer">Modifications</h2>
    <!-- espacer les puces -->
    <div id="listModif">
        <p class="texteListeModif">○ Un bouton pour réouvrir une réunion précédemment fermée</p>
        <p class="texteListeModif">○ Une Checkbox pour autoriser les absents à voter</p>
        <p class="texteListeModif">○ Une nouvelle page qui récupere la liste des votes par cercle</p>
    </div>

    <br>
    <h2 class="centrer">Mission principale</h2>
    <p class="textNormal">
        La mission principale de mon stage était une intégration des utilisateurs avec Azure Active Directory.
        C’est-à-dire faire un lien entre l’AAD de SF2i et l’application web pour que le système de connexion
        fonctionne avec son identifiant dans l’AAD.
        Pour faire cela il a fallu créer une application dans l’AAD de capteur, 
    </p>
    <img src="img/aadConnect.png" class="imgCentrer" alt="formulaire de login">
</div>

<div>
    <p class="textNormal">
        Pour faire cela il a fallu créer une application dans l’AD, j’ai donc contacté le consultant infrastructures qui m’a fourni les informations nécessaires :  <br>
        Application ID : 2f36************************ <br>
        Tenant ID : 5c97************************
    </p>
    <p class="textNormal">
        Grâce à ça j’avais maintenant un accès “Read” de l’API de Microsoft Graph.
        Je pouvais maintenant récupérer chaque utilisateur de l’AAD de SF2i
        Puis je demande à l’API Microsoft Graph si le compte existe et est correct
        Si je reçois une réponse convenable,
        j’autorise le login afin qu’il accède à l’application en tant que membre.
        Cela permet à chaque membre présent dans l’AAD de SF2i peut se connecter sur Capteur.
    </p>
</div>


</body>
<footer> <small>&copy; Copyright 2022, Dan Moulinie</small> </footer> 

</html>
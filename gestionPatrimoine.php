<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/gestion.css">
    <link rel="stylesheet" href="css/synthese2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>Accueil - PortFolio Dan</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>

    <?php
        include 'includes/navbar.php';
    ?>



    <h1 id="titleGestion">Gestion du patrimoine</h1>


    <p id="defPatrimoine">
        La gestion du patrimoine informatique est un ensemble de pratiques visant à gérer le parc informatique de son organisation.
        En général de façons à l’améliorer, ceci aussi bien au niveau des ressources tangibles (Logiciel, Matériel, …)
        qu’intangibles (Connaissances, Documentation, …).
        L’organisation peut donc maitriser fermement son Si afin de garantir son efficience et sa pérennité.   
    </p>
    <br>
    <a href="pdf/gestion.pdf" id="buttonLien" target="_blank"><button id="buttonGestion">Télécharger le questionnaire</button></a> 
    <br>

    <h1 id="titleGestion">Synthèse</h1>
    <br>
    <p id="synthesePatrimoine">
        Lors de ma présence en BTS SIO, j’ai pu apprendre à gérer le patrimoine informatique de mon entreprise. 
        En effet, l'entreprise <a href="https://digit.nc" target="_blank">Digit</a> est une entreprise qui a pour but de développer des applications. <br> <br>
        Nous communiquons avec <a href="https://www.microsoft.com/fr-fr/microsoft-teams/group-chat-software" target="_blank">Microsoft Teams</a> 
        ainsi que <a href="https://about.gitlab.com/" target="_blank">Gitlab</a> pour le travail collaboratif. 
        Chaque personne a son propre compte sur <span class="importantWord">l'Active Directory</span>
        de <a href="https://sf2i.nc/" target="_blank">SF2i</a> 
        J'ai pu assister et participer aux travail quotidien d'une entreprise en développement. <br>
        Lorsqu'un incident arrive, les incidents/problèmes sont classés par <span class="importantWord">ordre de priorité</span> puis pour que l'on puisse agir rapidement 
        nous créons une branche git spécialement pour régler ce problème. 
        Quand le problème est résolu, nous pouvons alors merger la branche avec la branche principale. <br>
        L'entreprise travaille avec la <span class="importantWord">méthode agile</span> 
        avec présentation au client au moins 1 fois toutes les 2 semaines. <br> <br> 
        J'ai participé à la création d'une application web nommée <a href="https://capteur.digit.nc" target="_blank">Capteur</a>.
        Afin de pouvoir participer au développement de cette application, j'ai du m'autoformer a <a href="https://angular.io/">l'Angular</a>
        et <a href="https://www.typescriptlang.org/" target="_blank">Typescript</a>. La gestion de la base de donnée se faisait en NoSQL avec <a href="https://firebase.google.com/" target="_blank">Firebase</a>.
    </p>

    
</body>
<footer> <small>&copy; Copyright 2022, Dan Moulinie</small> </footer> 

</html>
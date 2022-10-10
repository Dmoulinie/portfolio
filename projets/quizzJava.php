<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/projetQuizz.css">
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
        <div id="titleJava">
            <h1 class="bigTitle center">Projet Quizz en Java</h1>
        </div>
        <div>
            <h2 class="center">Description du projet</h2>
            <p class="text-default" id="text-quizz"> 
                Il s'agit d'un quizz sur les capitales des pays.
                L'utilisateur devait trouver la capitale d'un pays qui lui était proposé aléatoirement.
                <!-- Il avait 3 essais pour trouver la bonne réponse. -->
                Si l'utilisateur trouvait la bonne réponse, il gagnait 1 point et la question suivante lui était proposée.
                Les questions/réponses était stockées dans une base de donnée MySQL.
            </p>
        </div>
        <div id="presentationApp">
            <img src="img/askQuestion.png" alt="" id="img1">
            <img src="img/askReponse.png" alt="" id="img2">
        </div>
        <img src="img/displayScore.png" alt="" id="img3">
        
        <div id="troisTier"class="center" style="margin-top:5vh;">
            <h1 class="title">3-tier</h2>



            <div id="tier-orga">
                <p class="text-default">L'application est organisé en 3 parties : </p>
            </div>
            <div id="description-3tier">

                <p> ● Data : Communique avec la base de donnée</p>
                <p>
                    ● Entreprise : Effectue les calculs et prend les décisions
                    puis renvoie les données
                </p>
                <p> ● IHM : Affichage utilisateur</p>
            </div>
            <img src="img/3tier.png" alt="">
        </div>
<br><br><br><br><br><br>


    </div>
    <footer> <small>&copy; Copyright 2022, Dan Moulinie</small> </footer> 
</body>

</html>
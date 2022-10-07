<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/projetAndroid.css">
    <title>Projet - Quizz Android</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>

    <?php
        include '../includes/navbar.php';
    ?>
    

    <div>
        <div>
            <h1 class="bigTitle center">Projet Quizz pour Android en Java</h1>
        </div>
        <div>

            <h2 class="center">Description du projet</h2>
            <p class="text-default" id="text-quizz"> 
                Il s'agit d'un quizz sur les capitales des pays.
                L'utilisateur devait trouver la capitale dans un choix de 4 pays 
                qui lui était proposé aléatoirement.
                Si l'utilisateur trouvait la bonne réponse, il gagnait 1 point et la question suivante lui était proposée.
                Les questions/réponses était stockées dans une base de donnée MySQL.
            </p>
        </div>
        
        <div id="android">
            <div class="androidExplain">
                <h1>Interface : </h1>
                <img src="/projets/img/androidAskQuestion.png" alt="">
            </div>
            <div class="androidExplain">
                <h1>Architecture MVC</h1>
                <img src="/projets/img/androidMVC.png" alt="">
            </div>
        </div>



    </div>


<br><br><br><br><br><br>


    </div>
    <footer> <small>&copy; Copyright 2022, Dan Moulinie</small> </footer> 
</body>
</html>
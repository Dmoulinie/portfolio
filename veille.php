<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/css/veille.css">
    <link rel="stylesheet" href="/css/root.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="/css/style.css">
    <title>Veille technologique - PortFolio Dan</title>
</head>
<body>

    <?php
        include 'includes/navbar.php';
    ?>

    <div class="center">
        <h1 class="title" style="font-weight: 700;"> Bienvenue sur ma veille technologique qui porte sur les failles informatiques.</h1>
    </div>
    <div class=" center">
        <h4 class="smallTitle" style="font-weight: 500;">Comment faire une veille technologique ?</h1>
    </div>
    <div id="logosVeille">
        <img src="/img/google-alerts.jpg" alt="" id="logo-alert">
        <img src="/img/flux-rss.png" alt="" id="logo-rss">
        <img src="/img/newsletter.png" alt="" id="logo-news">
    </div>
    
    <div class="center">
        <h1 class="title">Articles récents</h1>
    </div>
    <div id="articles">
        <rssapp-wall id="toKjGY9NKu96dFS4"></rssapp-wall><script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>    </div>
</body>
</html>



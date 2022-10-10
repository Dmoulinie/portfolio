<?php
define('documentRoot','https://'.$_SERVER['SERVER_NAME'] . '/'); 

function setLink($filename) {
    return documentRoot . $filename;
}
?>

<link rel="stylesheet" type="text/css" href="../css/navbar.css">
<link rel="stylesheet" type="text/css" href="../css/root.css">
<div id="backgroundNav"></div>
<nav id="navbar">
        <ul id="navbar-list" class="nav-off">
            <li><a href="<?php echo setLink('index.php')?>" title="Accueil">Accueil</a></li>

            <!-- Dropdown BTS -->
            <div class="dropdown"> 
                    <button class="dropbtn" id="btsButton">
                        BTS SIO
                        <span class="material-symbols-outlined" style="user-select:none" id="btsButtonArrow">keyboard_arrow_down</span>
                    </button>
                <div class="dropdown-content">
                    <a href="<?php echo setLink('leBTS.php')?>" title="Etudes">A propos</a>

                    <div class= "dropdownRight">
                        <a id="projects" title="Projets" style="cursor:pointer;">
                            Projets <span class="material-symbols-outlined" id="rightArrowDropdown" style="user-select:none">keyboard_arrow_right</span>
                        </a>
                        <div class="dropdown-content-right">
                            <a href="https://garage.dmoulinie.me" target="_blank">Garage</a>
                            <a href="<?php echo setLink('projets/quizzJava.php')?>">Quizz Java</a>
                            <a href="<?php echo setLink('projets/quizzAndroid.php')?>">Quizz Android</a>
                            <a href="<?php echo setLink('projets/hebergementPortfolio.php')?>">Hébergement</a>
                        </div>
                    </div>
                    
                    <a href="<?php echo setLink('veille.php')?>" projectstitle="Veille">Veille</a>
                    <div class="dropdownRight">
                        <a id="stages" title="Stages" style="cursor:pointer;">
                            Stages <span class="material-symbols-outlined" id="rightArrowDropdown" style="user-select:none">keyboard_arrow_right</span>
                        </a>
                        <div class="dropdown-content-right">
                            <a href="<?php echo setLink('synthese2.php')?>" title="Synthese 2">2022 - Digit</a>
                            <a href="<?php echo setLink('synthese1.php')?>" title="Synthese 1">2021 - Digit</a>
                        </div>
                    </div>
                    
                    <a href="<?php echo setLink('gestionPatrimoine.php')?>" title="Gestion du patrimoine">Gestion du patrimoine</a>
                </div>
            </div>  
            <!-- Fin Dropdown BTS  -->


            <li><a href="<?php echo setLink('cv.php')?>" title="C.V">A propos de moi</a></li>
            <li><a href="<?php echo setLink('index.php')?>" title="Contact">Contact</a></li>
            <div id="reseaux">
                <a href="https://github.com/Dmoulinie">
                    <img src="../img/GitHub.png" alt="">
                </a>

                <a href="">
                    <img src="../img/linkedIn.png" style="filter:invert(100%)" alt="">
                </a>
            </div>
        </ul>
    </nav>

    <img src="<?php echo setLink('img/logo_green_dan2.png')?>" id="logoSite" alt="">

    <div id="menuNavbarOpen">
        <span class="material-symbols-outlined" id="menuButton" style="user-select:none">menu</span>
    </div>
<script src="../js/navbar.js"></script>

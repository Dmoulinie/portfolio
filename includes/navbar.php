<?php
define('documentRoot','http://'.$_SERVER['SERVER_NAME'] . '/'); 

function setLink($filename) {
    return documentRoot . $filename;
}
?>

<link rel="stylesheet" type="text/css" href="../css/navbar.css">
<nav id="navbar">
        <ul>
            <li><a href="<?php echo setLink('index')?>" title="Accueil">Accueil</a></li>

            <!-- Dropdown BTS -->
            <div class="dropdown"> 
                    <button class="dropbtn" id="btsButton">
                        BTS SIO<span class="material-symbols-outlined" style="user-select:none">keyboard_arrow_down</span>
                    </button>
                <div class="dropdown-content">
                    <a href="<?php echo setLink('leBTS')?>" title="Etudes">A propos</a>

                    <div class="dropdownRight">
                        <a id="projects" title="Projets" style="cursor:pointer;">
                            Projets <span class="material-symbols-outlined" id="rightArrowDropdown" style="user-select:none">keyboard_arrow_right</span>
                        </a>
                        <div class="dropdown-content-right">
                            <a href="https://garage.dmoulinie.me" target="_blank">Garage</a>
                            <a href="<?php echo setLink('projets/quizzJava')?>">Quizz Java</a>
                            <a href="<?php echo setLink('projets/quizzAndroid')?>">Quizz Android</a>
                            <a href="<?php echo setLink('projets/hebergementPortfolio')?>">Hébergement</a>
                        </div>
                    </div>
                    
                    <a href="<?php echo setLink('veille')?>" projectstitle="Veille">Veille</a>
                    <div class="dropdownRight">
                        <a id="projects" title="Projets" style="cursor:pointer;">
                            Stages <span class="material-symbols-outlined" id="rightArrowDropdown" style="user-select:none">keyboard_arrow_right</span>
                        </a>
                        <div class="dropdown-content-right">
                            <a href="<?php echo setLink('synthese2')?>" title="Synthese 2">2022 - Digit</a>
                            <a href="<?php echo setLink('synthese1')?>" title="Synthese 1">2021 - Digit</a>
                        </div>
                    </div>
                    
                    <a href="<?php echo setLink('gestionPatrimoine')?>" title="Gestion du patrimoine">Gestion du patrimoine</a>
                </div>
            </div>  
            <!-- Fin Dropdown BTS  -->


            <li><a href="<?php echo setLink('cv')?>" title="C.V">A propos de moi</a></li>
            <li><a href="<?php echo setLink('index')?>" title="Contact">Contact</a></li>
        </ul>
    </nav>


    <div id="navButton">
        <div id="navButtonLine1"></div>
        <div id="navButtonLine2"></div>
        <div id="navButtonLine3"></div>
    </div>

<style>

    /* TODO navbar responsive /mobile */
    @media screen and (max-width: 478px) {
        #navbar {
            display: none;
        }

        #navButtonLine1 {
            height: 60px;
            width: 60px;
            background-color: #58f0b3;
            position: absolute;
            top:-10px;
            left:50%;
            transform:rotate(45deg) translate(-50%, -1%);
            z-index: 1;
        }
        #navButtonLine2 {
            height: 40px;
            width: 40px;
            background-color: #242a36;
            position: absolute;
            top:-5px;
            left:50%;
            transform:rotate(45deg) translate(-50%, -12%);
            z-index: 2;
        }

        #navButtonLine3 {
            height: 20px;
            width: 20px;
            background-color: #58f0b3;
            position: absolute;
            top:0px;
            left:50%;
            transform:rotate(45deg) translate(-50%, -45%);
            z-index: 3;
        }


    }
        
</style>
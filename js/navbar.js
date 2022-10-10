
document.getElementById("menuNavbarOpen").addEventListener("click", navbar);

function navbar() {
    var nav = document.getElementById("navbar-list");
    if (nav.classList.contains("nav-off")) {
        nav.classList.remove("nav-off");
        nav.classList.add("nav-on");
        document.getElementById("menuButton").innerHTML = "close";
        lockScroll();

    } else {
        nav.classList.add("nav-off");
        nav.classList.remove("nav-on");
        document.getElementById("menuButton").innerHTML = "menu";
        lockScroll();

    }

}

function lockScroll() {
    document.body.classList.toggle('lock-scroll');
}

function btsButtonClicked() {
    var btsButton = document.getElementById("btsButton");
    
}


//event listener for bts button
document.getElementById("btsButton").addEventListener("click", btsButtonClicked);

document.getElementById("menuNavbarOpen").addEventListener("click", navbar);

function navbar() {
    var nav = document.getElementById("navbar-list");
    if (nav.classList.contains("nav-off")) {
        nav.classList.remove("nav-off");
        nav.classList.add("nav-on");

        lockScroll();
    } else {
        nav.classList.add("nav-off");
        nav.classList.remove("nav-on");

        lockScroll();
    }

}

function lockScroll() {
    document.body.classList.toggle('lock-scroll');
  }
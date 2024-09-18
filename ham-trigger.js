window.addEventListener('load', function () {
    "use strict";
    const navmenu = document.getElementById('mobile-nav');
    const menuL = document.getElementById('ham-icon');
    let menu_clicked = false;

    function toggle() {
        menu_clicked = !menu_clicked;
        if (menu_clicked) {
            navmenu.className = 'show';
        }
        else {
            navmenu.classList.remove('show');
        }
    }
    menuL.addEventListener("click", toggle);
});
"use strict";

const navbarOpenButton = document.getElementById("navbarOpen");
const navbarCloseButton = document.getElementById("navbarClose");
const collapseNavbar = document.getElementById("collapseNavbar");

navbarOpenButton.addEventListener("click", function () {
    collapseNavbar.classList.add('visible');
});

navbarCloseButton.addEventListener("click", function () {
    collapseNavbar.classList.remove("visible");
});
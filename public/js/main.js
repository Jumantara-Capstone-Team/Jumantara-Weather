document.addEventListener("DOMContentLoaded", function () {
    const mobileNavToggle = document.getElementById("mobileNavToggle");
    const navbar = document.getElementById("navbar");

    mobileNavToggle.addEventListener("click", function () {
        navbar.classList.toggle("active");
    });
});

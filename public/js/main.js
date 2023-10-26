const mobileNavToggle = document.getElementById("mobileNavToggle");
const navbarList = document.querySelector(".navbar ul");

mobileNavToggle.addEventListener("click", () => {
    navbarList.classList.toggle("active");
});

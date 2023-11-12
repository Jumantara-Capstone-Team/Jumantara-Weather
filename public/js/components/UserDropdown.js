function toggleDropdown() {
    const dropdownMenu = document.getElementById("dropdownMenu");
    if (dropdownMenu.classList.contains("hidden")) {
        dropdownMenu.classList.remove("hidden");
    } else {
        dropdownMenu.classList.add("hidden");
    }
}

document.addEventListener("click", function (event) {
    const dropdownButton = document.querySelector(".relative");
    const dropdownMenu = document.getElementById("dropdownMenu");

    if (
        !dropdownButton.contains(event.target) &&
        !dropdownMenu.contains(event.target)
    ) {
        dropdownMenu.classList.add("hidden");
    }

    function toggleDropdown() {
        const dropdownMenu = document.getElementById("dropdownMenu");
        dropdownMenu.classList.toggle("hidden");
    }
});

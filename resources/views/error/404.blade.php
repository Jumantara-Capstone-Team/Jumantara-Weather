<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page not found</title>
    <link href="{{ asset('css/error.css') }}" rel="stylesheet">

    <link href="{{ asset('/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/img/icon.png') }}" rel="apple-touch-icon">
</head>

<body>
    <main id="main" class="main">
        <div class="text-404">
            <h1>4 0 4</h1>
            <p>Page not found!</p>
            <a class="back-btn" href="/">Back To Beranda</a>
        </div>
        <div class="image"><img id="big_image" src="{{ asset('/img/error/astronaut.png') }}" alt="#"></div>
    </main>
</body>
<script>
    let main = document.getElementById("main");
    let toggle = document.getElementById("toggle");
    let menuitem = document.getElementById("menu-page");

    toggle.addEventListener("click", function() {
        if (menuitem.classList.contains("active")) {
            menuitem.classList.remove("active")
            menuitem.style.height = 0 + "px"
            toggle.classList.remove("active")
        } else {
            menuitem.classList.add("active")
            menuitem.style.height = (main.offsetHeight - 2) + "px"
            toggle.classList.add("active")
        }
    })
    let image_box = document.getElementById("image-box");
    let big_image = document.getElementById("big_image");
    let small_image = document.getElementsByClassName("small_image");
    document.getElementById("close_ImageBox").addEventListener("click", () => image_box.style.display = "none")
    for (let smallImageKey in small_image) {
        small_image[smallImageKey].addEventListener("click", switchImage)
    }

    function switchImage() {
        for (let i = 0; i < small_image.length; i++) {
            small_image[i].classList.remove("active")
        }
        this.classList.add("active")
        big_image.src = this.src
        big_image.style.maxWidth = this.style.maxWidth
    }
</script>

</html>

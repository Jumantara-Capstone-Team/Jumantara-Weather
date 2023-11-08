<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $title }} Admin</title>

    <link href="{{ asset('/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/img/icon.png') }}" rel="apple-touch-icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/login/login.css') }}" rel="stylesheet">

</head>

<body>
    <a href="/" class="logo d-flex align-items-center">
        <img src="{{ asset('img/navbar/logo.png') }}" alt="">
    </a>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h3>Login Disini</h3>
        <p> Login untuk masuk ke dalam Dashboard admin</p>

        @if ($errors->any())
            <div class="error-message">
                <h4>Email atau password salah. Silakan coba lagi.</h4>
            </div>
        @endif

        <label for="username">Email</label>
        <input type="text" placeholder="Email" name="email" id="username">

        <label for="password">Password</label>
        <div class="password-wrapper">
            <input type="password" placeholder="Password" name="password" id="password">
            <i class="fas fa-eye" id="show-password"></i>
            <i class="fas fa-eye-slash" id="hide-password"></i>
        </div>

        <button type="submit">Log In</button>
        <a href="/" class="custom-back">Back To Beranda</a>
    </form>
    <script>
        const passwordInput = document.getElementById("password");
        const showPasswordIcon = document.getElementById("show-password");
        const hidePasswordIcon = document.getElementById("hide-password");

        showPasswordIcon.addEventListener("click", function() {
            passwordInput.type = "text";
            showPasswordIcon.style.display = "none";
            hidePasswordIcon.style.display = "block";
        });

        hidePasswordIcon.addEventListener("click", function() {
            passwordInput.type = "password";
            showPasswordIcon.style.display = "block";
            hidePasswordIcon.style.display = "none";
        });
    </script>

</body>

</html>

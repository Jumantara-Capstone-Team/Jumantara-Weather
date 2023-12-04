<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ asset('/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/img/icon.png') }}" rel="apple-touch-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Jumantara</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-slate-200 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-xl shadow-md w-96">
        <h2 class="text-3xl font-semibold text-center mb-8 text-gray-800">Login Dashboard Admin</h2>

        <form method="POST" action="{{ route('login') }}" class="mx-auto mt-6">
            @csrf

            @if ($errors->any())
                <div class="error-message bg-red-100 text-red-600 p-2 rounded my-4 text-center">
                    <h4>Email atau password salah. Silakan coba lagi.</h4>
                </div>
            @endif

            <div class="mb-4">
                <input type="text" placeholder="Email" name="email" id="username"
                    class="p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4 relative">
                <input type="password" placeholder="Password" name="password" id="password"
                    class="p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">

                <i class="fas fa-eye absolute top-1/2 right-3 transform -translate-y-1/2 text-gray-500 cursor-pointer"
                    id="show-password"></i>
                <i class="fas fa-eye-slash absolute top-1/2 right-3 transform -translate-y-1/2 text-gray-500 cursor-pointer"
                    id="hide-password" style="display: none;"></i>
            </div>

            <button type="submit"
                class="bg-blue-500 text-white p-2 rounded-md w-full focus:outline-none hover:bg-blue-600">Log
                In</button>

            <p class="text-sm text-center text-gray-600 mt-4">Don't have an account? <a href="#"
                    class="text-blue-500 hover:underline">Sign up</a></p>

            <div class="flex justify-center items-center mt-6">
                <div class="h-px bg-gray-300 w-16"></div>
                <p class="mx-2 text-gray-500">or</p>
                <div class="h-px bg-gray-300 w-16"></div>
            </div>

            <div class="flex items-center justify-center mt-6">
                <a href="#" class="flex items-center space-x-2 text-gray-600 hover:underline">
                    <i class="fab fa-facebook"></i>
                    <span>Login with Facebook</span>
                </a>
            </div>
        </form>
    </div>

    <script>
        const showPassword = document.getElementById('show-password');
        const hidePassword = document.getElementById('hide-password');
        const passwordInput = document.getElementById('password');

        showPassword.addEventListener('click', function() {
            showPassword.style.display = 'none';
            hidePassword.style.display = 'block';
            passwordInput.type = 'text';
        });

        hidePassword.addEventListener('click', function() {
            showPassword.style.display = 'block';
            hidePassword.style.display = 'none';
            passwordInput.type = 'password';
        });
    </script>
</body>

</html>

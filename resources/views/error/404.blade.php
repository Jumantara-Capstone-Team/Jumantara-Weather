<!DOCTYPE html>
<html lang="en">

<title>Page Not Found | Jumantara</title>

@include('components.head.head')

@include('components.navbar.navbar')

<body class="bg-white">
    <main id="main" class="main flex items-center justify-center h-screen">
        <div class="text-center">
            <h1 class="text-6xl font-bold text-red-500">404</h1>
            <p class="text-lg text-gray-800 mb-4">Oops! Page not found</p>
            <a href="/"
                class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">
                Back to Beranda
            </a>
        </div>
    </main>
</body>

@include('components.footer.footer')

</html>

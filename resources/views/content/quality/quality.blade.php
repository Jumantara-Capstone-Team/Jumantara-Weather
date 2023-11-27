<!DOCTYPE html>
<html lang="en">
<title>Air Quality | Jumantara</title>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Quality | Jumantara</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


</head>

@include('components.head.head')

@include('components.navbar.navbar')

<body class="bg-gray-200 mt-24 font-sans">
    <div class="container mx-auto mt-8 mb-8">
        <section class="bg-white p-8 rounded shadow-md">
            <h2 class="text-2xl text-black font-bold mb-4">Air Quality Monitoring</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-blue-200 p-4 rounded-md">
                    <h3 class="text-lg font-semibold mb-2">Jakarta</h3>
                    <p class="text-gray-700">Air Quality Index: 85</p>
                    <p class="text-gray-700">Temperature: 25°C</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-green-200 p-4 rounded-md">
                    <h3 class="text-lg font-semibold mb-2">Bandung</h3>
                    <p class="text-gray-700">Air Quality Index: 92</p>
                    <p class="text-gray-700">Temperature: 28°C</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-yellow-200 p-4 rounded-md">
                    <h3 class="text-lg font-semibold mb-2">Bali</h3>
                    <p class="text-gray-700">Air Quality Index: 78</p>
                    <p class="text-gray-700">Temperature: 22°C</p>
                </div>
            </div>
            <div class="col-span-3 mt-8">
                <iframe src="https://www.iqair.com/air-quality-map" width="100%" height="600" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        </section>
    </div>

</body>



@include('components.footer.footer')

<script src="{{ asset('js/main.js') }}"></script>

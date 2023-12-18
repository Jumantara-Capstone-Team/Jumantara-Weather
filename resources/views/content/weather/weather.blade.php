<!DOCTYPE html>
<html lang="en">
<title>Jumantara | Find Current Weather Forecast Here</title>

@include('components.head.head')

@include('components.navbar.navbar')

<body class="mt-15">
    <section class="bg-gray-50 dark:bg-gray-800 bg-gradient-to-b from-green-200 to-sky-300 backdrop-blur-lg">
        <div class="max-w-screen-xl px-4 py-8 mx-auto  lg:py-24 lg:px-6">
            <div class="font-bold text-4xl text-white text-center">Temukan Suhu Harian di Lokasi Anda</div>
            <div class="bg-white items-center justify-between w-full flex rounded-full shadow-lg p-2 my-12"
                style="top: 5px ">
                <input
                    class="font-bold rounded-full w-full py-4 pl-4 text-gray-700 bg-gray-100 leading-tight focus:outline-none focus:shadow-outline lg:text-sm text-xs"
                    type="text" placeholder="Cari Lokasi">


                <body>
                    <iframe
                        src="https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=1.3013&lon=103.7981&zoom=5"
                        width="100%" height="800" frameborder="0" allowfullscreen></iframe>
                </body>
                @include('components.footer.footer')

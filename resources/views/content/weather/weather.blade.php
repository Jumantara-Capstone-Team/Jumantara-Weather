<!DOCTYPE html>
<html lang="en">
<title>Jumantara | Find Current Weather Forecast Here</title>

@include('components.head.head')

@include('components.navbar.navbar')

<body class="mt-20">
<section class="bg-gray-50 dark:bg-gray-800 bg-gradient-to-b from-green-200 to-sky-300">
    <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
    <div class="font-bold text-4xl text-white text-center">Temukan Suhu Harian di Lokasi Anda</div>
        <!-- <div class="flex flex-col bg-white rounded p-4 w-full max-w-xs">
						<div class="font-bold text-xl">Sydney</div>
						<div class="text-sm text-gray-500">Thursday 10 May 2020</div>
						<div class="mt-6 text-6xl self-center inline-flex items-center justify-center rounded-lg text-indigo-400 h-24 w-24">
                        <svg class="w-32 h-32" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
						</div>
						<div class="flex flex-row items-center justify-center mt-6">
							<div class="font-medium text-6xl">24°</div>
							<div class="flex flex-col items-center ml-6">
								<div>Cloudy</div>
								<div class="mt-1">
									<span class="text-sm"><i class="far fa-long-arrow-up"></i></span>
									<span class="text-sm font-light text-gray-500">28°C</span>
								</div>
								<div>
									<span class="text-sm"><i class="far fa-long-arrow-down"></i></span>
									<span class="text-sm font-light text-gray-500">20°C</span>
								</div>
							</div>
						</div>
						<div class="flex flex-row justify-between mt-6">
							<div class="flex flex-col items-center">
								<div class="font-medium text-sm">Wind</div>
								<div class="text-sm text-gray-500">9k/h</div>
							</div>
							<div class="flex flex-col items-center">
								<div class="font-medium text-sm">Humidity</div>
								<div class="text-sm text-gray-500">68%</div>
							</div>
							<div class="flex flex-col items-center">
								<div class="font-medium text-sm">Visibility</div>
								<div class="text-sm text-gray-500">10km</div>
							</div>
						</div>
					</div> -->
        <div class="bg-white items-center justify-between w-full flex rounded-full shadow-lg p-2 mb-5" style="top: 5px ">
        <input class="font-bold rounded-full w-full py-4 pl-4 text-gray-700 bg-gray-100 leading-tight focus:outline-none focus:shadow-outline lg:text-sm text-xs" type="text" placeholder="Cari Lokasi">

            <div class="bg-gray-600 p-2 hover:bg-blue-400 cursor-pointer mx-2 rounded-full">

                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    <div class="container mx-auto">
        <div class="bg-white rounded-lg shadow-lg p-4">
            <h1 class="text-2xl font-bold mb-4">Today's Weather</h1>
            <div class="flex justify-between items-center">
                <div class="text-5xl font-bold mb-4">12°C</div>
                <div class="text-sm">Monday, 16:00</div>
            </div>
            <div class="text-sm">Mostly cloudy</div>
            <div class="mt-4">
                <div class="flex justify-between items-center">
                    <div class="text-sm">Humidity</div>
                    <div class="text-sm">12%</div>
                </div>
                <div class="mt-2 flex justify-between items-center">
                    <div class="text-sm">Wind Status</div>
                    <div class="text-sm">Visibility 7.70 km/h</div>
                </div>
                <div class="mt-2 flex justify-between items-center">
                    <div class="text-sm">P WSW</div>
                    <div class="text-sm">5.2 km</div>
                </div>
            </div>
        </div>
    </div>
    <div class=" mx-auto py-8 my-auto">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3">
            <div class="bg-white rounded shadow-lg p-4">
                <h2 class="text-xl font-semibold mb-2 text-center">Tuesday</h2>
                    <div class="items-center  rounded-lg text-indigo-400 h-24 w-24">
                        <svg class="w-32 h-32 items-center" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
				    </div>
                <p class="text-gray-600 text-center">Partly cloudy</p>
                <p class="text-gray-600 text-center">25°C</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4">
                <h2 class="text-xl font-semibold mb-2 text-center">Wednesday</h2>
                <img src="https://via.placeholder.com/50" alt="Weather Icon" class="mx-auto mb-4">
                <p class="text-gray-600 text-center">Sunny</p>
                <p class="text-gray-600 text-center">28°C</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4">
                <h2 class="text-xl font-semibold mb-2 text-center">Thursday</h2>
                <img src="https://via.placeholder.com/50" alt="Weather Icon" class="mx-auto mb-4">
                <p class="text-gray-600 text-center">Cloudy</p>
                <p class="text-gray-600 text-center">24°C</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4">
                <h2 class="text-xl font-semibold mb-2 text-center">Friday</h2>
                <img src="https://via.placeholder.com/50" alt="Weather Icon" class="mx-auto mb-4">
                <p class="text-gray-600 text-center">Partly cloudy</p>
                <p class="text-gray-600 text-center">23°C</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4">
                <h2 class="text-xl font-semibold mb-2 text-center">Saturday</h2>
                <img src="https://via.placeholder.com/50" alt="Weather Icon" class="mx-auto mb-4">
                <p class="text-gray-600 text-center">Sunny</p>
                <p class="text-gray-600 text-center">27°C</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4">
                <h2 class="text-xl font-semibold mb-2 text-center">Sunday</h2>
                <img src="https://via.placeholder.com/50" alt="Weather Icon" class="mx-auto mb-4">
                <p class="text-gray-600 text-center">Partly cloudy</p>
                <p class="text-gray-600 text-center">25°C</p>
            </div>
        </div>
    </div>
</div>
</section>
</body>

@include('components.footer.footer')

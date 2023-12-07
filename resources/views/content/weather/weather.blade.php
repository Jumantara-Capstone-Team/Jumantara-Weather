<!DOCTYPE html>
<html lang="en">
<title>Jumantara | Find Current Weather Forecast Here</title>

@include('components.head.head')

@include('components.navbar.navbar')

<body class="mt-20">
<div class="min-h-screen flex items-center justify-center mx-12">
<div class="flex flex-col bg-white rounded p-4 w-full max-w-xs">
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
					</div>

    <div class="container mx-auto pl-4 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-3">
            <div class="bg-white rounded shadow p-4">
                <h2 class="text-xl font-semibold mb-2">Tuesday</h2>
                <div class="mt-6 text-6xl self-center inline-flex items-center justify-center rounded-lg text-indigo-400 h-24 w-24">
                        <svg class="w-32 h-32" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
						</div>
                <p class="text-gray-600 text-center">Partly cloudy</p>
                <p class="text-gray-600 text-center">25°C</p>
            </div>
            <div class="bg-white rounded shadow p-4">
                <h2 class="text-xl font-semibold mb-2">Wednesday</h2>
                <img src="https://via.placeholder.com/50" alt="Weather Icon" class="mx-auto mb-4">
                <p class="text-gray-600 text-center">Sunny</p>
                <p class="text-gray-600 text-center">28°C</p>
            </div>
            <div class="bg-white rounded shadow p-4">
                <h2 class="text-xl font-semibold mb-2">Thursday</h2>
                <img src="https://via.placeholder.com/50" alt="Weather Icon" class="mx-auto mb-4">
                <p class="text-gray-600 text-center">Cloudy</p>
                <p class="text-gray-600 text-center">24°C</p>
            </div>
            <div class="bg-white rounded shadow p-4">
                <h2 class="text-xl font-semibold mb-2">Friday</h2>
                <img src="https://via.placeholder.com/50" alt="Weather Icon" class="mx-auto mb-4">
                <p class="text-gray-600 text-center">Partly cloudy</p>
                <p class="text-gray-600 text-center">23°C</p>
            </div>
            <div class="bg-white rounded shadow p-4">
                <h2 class="text-xl font-semibold mb-2">Saturday</h2>
                <img src="https://via.placeholder.com/50" alt="Weather Icon" class="mx-auto mb-4">
                <p class="text-gray-600 text-center">Sunny</p>
                <p class="text-gray-600 text-center">27°C</p>
            </div>
            <div class="bg-white rounded shadow p-4">
                <h2 class="text-xl font-semibold mb-2">Sunday</h2>
                <img src="https://via.placeholder.com/50" alt="Weather Icon" class="mx-auto mb-4">
                <p class="text-gray-600 text-center">Partly cloudy</p>
                <p class="text-gray-600 text-center">25°C</p>
            </div>
        </div>
    </div>
</div>
<div class="container mx-auto px-4">
        <div class="bg-white rounded shadow p-4">
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
</body>

@include('components.footer.footer')

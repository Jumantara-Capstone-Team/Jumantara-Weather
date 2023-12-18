<!DOCTYPE html>
<html lang="en">
<title>Jumantara | Find Current Weather Forecast Here</title>

@include('components.head.head')

@include('components.navbar.navbar')



<body>
    <iframe
        src="https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=1.3013&lon=103.7981&zoom=5"
        width="100%" height="800" frameborder="0" allowfullscreen></iframe>
</body>
@include('components.footer.footer')

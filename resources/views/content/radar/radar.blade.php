<title>Jumantara | Find Current Conditions Using Our Weather Maps</title>

@include('components.head.head')
@include('components.navbar.navbar')

<body>
    <iframe
        src="https://embed.windy.com/embed2.html?lat=-10.488&lon=136.670&detailLat=-6.595&detailLon=106.789&width=1000&height=1000&zoom=5&level=surface&overlay=wind&product=ecmwf&menu=&message=true&marker=true&calendar=now&pressure=&type=map&location=coordinates&detail=true&metricWind=default&metricTemp=default&radarRange=-1"
        class="mt-6" width="100%" height="800" frameborder="0" allowfullscreen></iframe>
</body>
@include('components.footer.footer')

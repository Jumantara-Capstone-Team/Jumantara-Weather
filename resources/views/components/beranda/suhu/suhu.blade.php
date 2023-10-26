<section id="suhu" class="suhu">
    <div class="card">
        <div class="day">
            <p>Monday</p>
            <p>Monday</p>
            <p>Monday</p>
            <p>Monday</p>
            <p>Monday</p>
            <p>Monday</p>
        </div>
        <div class="monday">
            <h2>Informasi Suhu Cuaca Terkini</h2>
            <h3>Jakarta, Indonesia</h3>
            <h1><i class="fas fa-sun"></i> <span id="temperature">Loading...</span></h1>
            <p>Kelembaban: <span id="humidity">Loading...</span></p>
            <p>Perkiraan cuaca: <span id="weather">Loading...</span></p>
        </div>

        <script>
            // Fungsi untuk mengambil data cuaca dari sumber eksternal (misalnya, API cuaca)
            function getWeatherData() {
                // fetch('URL_API_CUACA')
                //     .then(response => response.json())
                //     .then(data => {
                //         updateWeatherInfo(data);
                //     });

                // Sebagai contoh
                const fakeWeatherData = {
                    temperature: "25°C",
                    humidity: "60%",
                    weather: "Cerah"
                };

                updateWeatherInfo(fakeWeatherData);
            }

            // Fungsi untuk memperbarui informasi cuaca di dalam HTML
            function updateWeatherInfo(data) {
                document.getElementById("temperature").textContent = data.temperature;
                document.getElementById("humidity").textContent = data.humidity;
                document.getElementById("weather").textContent = data.weather;
            }

            // Panggil fungsi getWeatherData saat halaman dimuat
            getWeatherData();
        </script>

    </div>
</section>

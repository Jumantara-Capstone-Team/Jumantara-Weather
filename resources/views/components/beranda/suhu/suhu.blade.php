<section id="suhu" class="suhu">
    <div class="container">
        <div class="suhu-container">
            <div class="today suhu">
                <div class="suhu-header">
                    <div class="day">Senin</div>
                    <div class="date">30 Oktober</div>
                </div>
                <div class="suhu-content">
                    <div class="location">Jakarta, Indonesia</div>
                    <div class="degree">
                        <div class="num">
                            29
                            <sup>o</sup>
                            C
                        </div>
                        <div class="suhu-icon">
                            <img src="..\public\img\icons\icon-1.svg">
                        </div>
                    </div>
                    <p>Kelembaban: <span id="humidity">Loading...</span></p>
                    <p>Perkiraan cuaca: <span id="weather">Loading...</span></p>
                </div>
            </div>
            <div class="suhu">
                <div class="suhu-header">
                    <div class="day">Selasa</div>
                </div>
                <div class="suhu-content">
                    <div class="suhu-icon">
                        <img src="..\public\img\icons\icon-1.svg">
                    </div>
                    <div class="degree">
                        27
                        <sup>o</sup>
                        C
                    </div>
                </div>
            </div>

            <div class="suhu">
                <div class="suhu-header">
                    <div class="day">Rabu</div>
                </div>
                <div class="suhu-content">
                    <div class="suhu-icon">
                        <img src="..\public\img\icons\icon-1.svg">
                    </div>
                    <div class="degree">
                        27
                        <sup>o</sup>
                        C
                    </div>
                </div>
            </div>

            <div class="suhu">
                <div class="suhu-header">
                    <div class="day">Kamis</div>
                </div>
                <div class="suhu-content">
                    <div class="suhu-icon">
                        <img src="..\public\img\icons\icon-1.svg">
                    </div>
                    <div class="degree">
                        27
                        <sup>o</sup>
                        C
                    </div>
                </div>
            </div>

            <div class="suhu">
                <div class="suhu-header">
                    <div class="day">Jumat</div>
                </div>
                <div class="suhu-content">
                    <div class="suhu-icon">
                        <img src="..\public\img\icons\icon-1.svg">
                    </div>
                    <div class="degree">
                        27
                        <sup>o</sup>
                        C
                    </div>
                </div>
            </div>

            <div class="suhu">
                <div class="suhu-header">
                    <div class="day">Sabtu</div>
                </div>
                <div class="suhu-content">
                    <div class="suhu-icon">
                        <img src="..\public\img\icons\icon-1.svg">
                    </div>
                    <div class="degree">
                        27
                        <sup>o</sup>
                        C
                    </div>
                </div>
            </div>

            <div class="suhu">
                <div class="suhu-header">
                    <div class="day">Minggu</div>
                </div>
                <div class="suhu-content">
                    <div class="suhu-icon">
                        <img src="..\public\img\icons\icon-1.svg">
                    </div>
                    <div class="degree">
                        27
                        <sup>o</sup>
                        C
                    </div>
                </div>
            </div>


            <!-- <div class="monday">
                <h2>Informasi Suhu Cuaca Terkini</h2>
                <h3>Jakarta, Indonesia</h3>
                <h1><i class="fas fa-sun"></i> <span id="temperature">Loading...</span></h1>
                <p>Kelembaban: <span id="humidity">Loading...</span></p>
                <p>Perkiraan cuaca: <span id="weather">Loading...</span></p>
            </div> -->

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
    </div>
</section>

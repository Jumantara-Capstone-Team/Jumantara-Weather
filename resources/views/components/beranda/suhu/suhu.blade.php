<section id="suhu" class="suhu">
    <div class="container">
        <div class="suhu-container">
            <div class="today suhu">
                <div class="suhu-header">
                    <div class="day">Senin</div>
                    <div class="date">11 Oktober</div>
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


            <div class="monday">
                <h2>Informasi Suhu Cuaca Terkini</h2>
                <h3>Jakarta, Indonesia</h3>
                <h1><i class="fas fa-sun"></i> <span id="temperature">Loading...</span></h1>
                <p>Kelembaban: <span id="humidity">Loading...</span></p>
                <p>Perkiraan cuaca: <span id="weather">Loading...</span></p>
            </div>

                <!-- Tambahkan script ini setelah elemen HTML di atas -->
                <script>
                    function getWeatherData() {
                        fetch('http://api.openweathermap.org/data/2.5/weather?q=Jakarta&appid=4a5840a84371e968da5eb7ffc24115e7')
                            .then(response => response.json())
                            .then(data => {
                                updateWeatherInfo(data);
                            })
                            .catch(error => console.error('Error:', error));
                    }

                    function updateWeatherInfo(data) {
                        // Update informasi cuaca untuk hari ini
                        document.getElementById("temperature").textContent = `${data.main.temp}°C`;
                        document.getElementById("humidity").textContent = `${data.main.humidity}%`;
                        document.getElementById("weather").textContent = data.weather[0].description;

                        // Update informasi cuaca untuk hari Senin
                        document.querySelector(".today .num").textContent = Math.round(data.main.temp);
                        document.querySelector(".today .suhu-icon img").src = getWeatherIcon(data.weather[0].icon);
                        document.getElementById("humidity").textContent = `${data.main.humidity}%`;
                        document.getElementById("weather").textContent = data.weather[0].description;

                        // Update informasi cuaca untuk hari-hari berikutnya
                        const days = ["Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
                        for (let i = 0; i < days.length; i++) {
                            const dayElement = document.querySelector(`.${days[i]} .degree`);
                            dayElement.textContent = `${Math.round(data.main.temp)}°C`;
                            document.querySelector(`.${days[i]} .suhu-icon img`).src = getWeatherIcon(data.weather[0].icon);
                        }
                    }

                    // Mendapatkan ikon cuaca berdasarkan kode ikon dari OpenWeatherMap
                    function getWeatherIcon(iconCode) {
                        return `http://openweathermap.org/img/w/${iconCode}.png`;
                    }

                    getWeatherData();
                </script>

        </div>
    </div>
</section>

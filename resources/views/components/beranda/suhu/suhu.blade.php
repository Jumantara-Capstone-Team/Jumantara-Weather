            <div class="forecast-table">
                <div class="container">
                    <form action="#" class="find-location">
                        <input type="text" placeholder="Cari Lokasi">
                        <input type="submit" value="Cari">
                    </form>
                </div>
                <div class="container">
                    <div class="forecast-container">
                        <div class="today forecast">
                            <div class="forecast-header">
                                <div class="day">Senin</div>
                                <div class="date">6 Oktober</div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div class="location">Jakarta</div>
                                <div class="degree">
                                    <div class="num">29<sup>o</sup>C</div>
                                    <div class="forecast-icon">
                                        <img src="images/icons/icon-1.svg" alt="" width=90>
                                    </div>
                                </div>
                                <span><img src="images/icon-umberella.png" alt="">20%</span>
                                <span><img src="images/icon-wind.png" alt="">18km/h</span>
                                <span><img src="images/icon-compass.png" alt="">Timur</span>
                            </div>
                        </div>
                        <div class="forecast">
                            <div class="forecast-header">
                                <div class="day">Selasa</div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div class="forecast-icon">
                                    <img src="images/icons/icon-3.svg" alt="" width=48>
                                </div>
                                <div class="degree">23<sup>o</sup>C</div>
                                <small>18<sup>o</sup></small>
                            </div>
                        </div>
                        <div class="forecast">
                            <div class="forecast-header">
                                <div class="day">Rabu</div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div class="forecast-icon">
                                    <img src="images/icons/icon-5.svg" alt="" width=48>
                                </div>
                                <div class="degree">23<sup>o</sup>C</div>
                                <small>18<sup>o</sup></small>
                            </div>
                        </div>
                        <div class="forecast">
                            <div class="forecast-header">
                                <div class="day">Kamis</div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div class="forecast-icon">
                                    <img src="images/icons/icon-7.svg" alt="" width=48>
                                </div>
                                <div class="degree">23<sup>o</sup>C</div>
                                <small>18<sup>o</sup></small>
                            </div>
                        </div>
                        <div class="forecast">
                            <div class="forecast-header">
                                <div class="day">Jumat</div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div class="forecast-icon">
                                    <img src="images/icons/icon-12.svg" alt="" width=48>
                                </div>
                                <div class="degree">23<sup>o</sup>C</div>
                                <small>18<sup>o</sup></small>
                            </div>
                        </div>
                        <div class="forecast">
                            <div class="forecast-header">
                                <div class="day">Sabtu</div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div class="forecast-icon">
                                    <img src="images/icons/icon-13.svg" alt="" width=48>
                                </div>
                                <div class="degree">23<sup>o</sup>C</div>
                                <small>18<sup>o</sup></small>
                            </div>
                        </div>
                        <div class="forecast">
                            <div class="forecast-header">
                                <div class="day">Sunday</div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div class="forecast-icon">
                                    <img src="images/icons/icon-14.svg" alt="" width=48>
                                </div>
                                <div class="degree">23<sup>o</sup>C</div>
                                <small>18<sup>o</sup></small>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="suhu-card">
                                    <div class="suhu-card-content">
                                        <h4 class="suhu-card-content-title">Air Quality</h4>
                                        <h2 class="suhu-card-content-isi">70%</h2>
                                        <p class="suhu-card-content-description">Good</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="suhu-card">
                                    <div class="suhu-card-content">
                                        <h4 class="suhu-card-content-title">Wind Status</h4>
                                        <h2 class="suhu-card-content-isi">18km/h</h2>
                                        <p class="suhu-card-content-description">Good</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="suhu-card">
                                    <div class="suhu-card-content">
                                        <h4 class="suhu-card-content-title">Humidity</h4>
                                        <h2 class="suhu-card-content-isi">12%</h2>
                                        <p class="suhu-card-content-description">Normal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="suhu-card">
                                    <div class="suhu-card-content">
                                        <h4 class="suhu-card-content-title">Visibility</h4>
                                        <h2 class="suhu-card-content-isi">5.2km</h2>
                                        <p class="suhu-card-content-description">Normal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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

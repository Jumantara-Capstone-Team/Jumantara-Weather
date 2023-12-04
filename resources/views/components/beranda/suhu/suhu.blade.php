<section class="bg-gray-50 dark:bg-gray-800 container mx-auto p-4 md:p-8 bg-white rounded-lg shadow-md mb-5">

    <!-- Form Cari Lokasi -->
    <form action="#" class="mb-4 md:mb-8 max-w-md mx-auto">
        <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4">
            <input type="text" placeholder="Cari Lokasi"
                class="w-full md:w-auto px-4 py-2 border border-gray-300 rounded-lg mb-2 md:mb-0">
            <button type="submit" class="w-full md:w-auto px-4 py-2 bg-blue-500 text-white rounded-lg">Cari</button>
        </div>
    </form>


    <!-- Informasi Cuaca -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8">

        <!-- Hari Ini -->
        <div class="bg-white p-4 md:p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-2 md:mb-4">Hari Ini</h3>
            <div class="flex items-center mb-2 md:mb-4">
                <div class="text-2xl md:text-4xl font-bold mr-2" id="temperature">29<sup>o</sup>C</div>
                <div class="forecast-icon">
                    <img src="images/icons/icon-1.svg" alt="" width=48>
                </div>
            </div>
            <p class="mb-2 md:mb-4" id="weather">Cerah</p>
            <div class="flex items-center space-x-2 md:space-x-4">
                <span><img src="images/icon-umberella.png" alt="" class="w-3 md:w-4 h-3 md:h-4"> 20%</span>
                <span><img src="images/icon-wind.png" alt="" class="w-3 md:w-4 h-3 md:h-4"> 18km/h</span>
                <span><img src="images/icon-compass.png" alt="" class="w-3 md:w-4 h-3 md:h-4"> Timur</span>
            </div>
        </div>

        <!-- Perkiraan Mingguan -->
        <div class="col-span-2 lg:col-span-1 space-y-4">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2 md:mb-4">Perkiraan Mingguan</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Hari 1 -->
                    <div class="flex items-center mb-2 md:mb-4">
                        <div class="text-base md:text-lg font-semibold mr-2">Senin</div>
                        <div class="text-gray-500" id="humidity">28<sup>o</sup>C</div>
                    </div>

                    <!-- Hari 2 -->
                    <div class="flex items-center mb-2 md:mb-4">
                        <div class="text-base md:text-lg font-semibold mr-2">Selasa</div>
                        <div class="text-gray-500">30<sup>o</sup>C</div>
                    </div>
                    <!-- Tambahkan hari-hari berikutnya sesuai kebutuhan -->
                </div>
            </div>
        </div>
        <div class="col-span-2 lg:col-span-1 space-y-4">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2 md:mb-4">Perkiraan Mingguan</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Hari 1 -->
                    <div class="flex items-center mb-2 md:mb-4">
                        <div class="text-base md:text-lg font-semibold mr-2">Senin</div>
                        <div class="text-gray-500" id="humidity">28<sup>o</sup>C</div>
                    </div>

                    <!-- Hari 2 -->
                    <div class="flex items-center mb-2 md:mb-4">
                        <div class="text-base md:text-lg font-semibold mr-2">Selasa</div>
                        <div class="text-gray-500">30<sup>o</sup>C</div>
                    </div>
                    <!-- Tambahkan hari-hari berikutnya sesuai kebutuhan -->
                </div>
            </div>
        </div>
        <div class="col-span-2 lg:col-span-1 space-y-4">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2 md:mb-4">Perkiraan Mingguan</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Hari 1 -->
                    <div class="flex items-center mb-2 md:mb-4">
                        <div class="text-base md:text-lg font-semibold mr-2">Senin</div>
                        <div class="text-gray-500" id="humidity">28<sup>o</sup>C</div>
                    </div>

                    <!-- Hari 2 -->
                    <div class="flex items-center mb-2 md:mb-4">
                        <div class="text-base md:text-lg font-semibold mr-2">Selasa</div>
                        <div class="text-gray-500">30<sup>o</sup>C</div>
                    </div>
                    <!-- Tambahkan hari-hari berikutnya sesuai kebutuhan -->
                </div>
            </div>
        </div>
        <div class="col-span-2 lg:col-span-1 space-y-4">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2 md:mb-4">Perkiraan Mingguan</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Hari 1 -->
                    <div class="flex items-center mb-2 md:mb-4">
                        <div class="text-base md:text-lg font-semibold mr-2">Senin</div>
                        <div class="text-gray-500" id="humidity">28<sup>o</sup>C</div>
                    </div>

                    <!-- Hari 2 -->
                    <div class="flex items-center mb-2 md:mb-4">
                        <div class="text-base md:text-lg font-semibold mr-2">Selasa</div>
                        <div class="text-gray-500">30<sup>o</sup>C</div>
                    </div>
                    <!-- Tambahkan hari-hari berikutnya sesuai kebutuhan -->
                </div>
            </div>
        </div>

    </div>

    <!-- Info Cuaca Lainnya -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8 mt-4 md:mt-8">
        <!-- Card Air Quality -->
        <div class="suhu-card bg-white rounded-xl shadow-md">
            <div class="suhu-card-header">
                <h4 class="suhu-card-content-title ml-2">Air Quality</h4>
            </div>
            <div class="suhu-card-content">
                <h2 class="suhu-card-content-isi ml-2">70</h2>
                <p class="suhu-card-content-description ml-2">Good</p>
            </div>
        </div>


        <div class="suhu-card bg-white rounded-xl shadow-md">
            <div class="suhu-card-header">
                <h4 class="suhu-card-content-title ml-2">Air Quality</h4>
            </div>
            <div class="suhu-card-content">
                <h2 class="suhu-card-content-isi ml-2">70</h2>
                <p class="suhu-card-content-description ml-2">Good</p>
            </div>
        </div>

        <div class="suhu-card bg-white rounded-xl shadow-md">
            <div class="suhu-card-header">
                <h4 class="suhu-card-content-title ml-2">Air Quality</h4>
            </div>
            <div class="suhu-card-content">
                <h2 class="suhu-card-content-isi ml-2">70</h2>
                <p class="suhu-card-content-description ml-2">Good</p>
            </div>
        </div>

        <div class="suhu-card bg-white rounded-xl shadow-md">
            <div class="suhu-card-header">
                <h4 class="suhu-card-content-title ml-2">Air Quality</h4>
            </div>
            <div class="suhu-card-content">
                <h2 class="suhu-card-content-isi ml-2">70</h2>
                <p class="suhu-card-content-description ml-2">Good</p>
            </div>
        </div>

    </div>
</section>

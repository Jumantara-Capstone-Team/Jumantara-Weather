<!DOCTYPE html>
<html lang="en">

@include('components.head.head')

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
    #sticky-container {
        position: relative;
    }

    #sticky-content {
        @apply sticky top-8;
        z-index: 10;

    }
</style>

@include('components.navbar.navbar')

<body class="bg-gray-100 font-sans mt-32">

    <div class="container mx-auto p-4 md:p-8 flex flex-col md:flex-row">

        <!-- Kolom Kiri - Detail Berita -->
        <div class="md:w-2/3 md:pr-8 mb-4 md:mb-0 space-y-6">
            <!-- Berita -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="https://placekitten.com/800/400" alt="Gambar Berita"
                    class="mb-4 w-full h-48 object-cover rounded-md">
                <h2 class="text-3xl text-black font-bold mb-2">Kucing Lucu Hari Ini</h2>
                <div class="flex items-center mb-2">
                    <span class="text-gray-600 text-sm">Author: John Doe</span>
                    <span class="mx-2">•</span>
                    <span class="text-gray-600 text-sm">Tanggal: 17 November 2023</span>
                </div>
                <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis
                    corporis, deleniti ipsam repudiandae ducimus enim eius dignissimos, in aperiam maiores natus esse,
                    itaque veniam temporibus fugit. Ad ea exercitationem provident ullam aspernatur reiciendis ducimus
                    expedita repellat, blanditiis inventore! Accusantium....</p>
                <a href="#"
                    class="text-white block mt-2 p-1 border border-blue-500 rounded bg-blue-700 hover:bg-blue-600 hover:underline w-40 h-8">
                    Baca Selengkapnya
                </a>


            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="https://placekitten.com/800/400" alt="Gambar Berita"
                    class="mb-4 w-full h-48 object-cover rounded-md">
                <h2 class="text-3xl text-black font-bold mb-2">Kucing Lucu Hari Ini</h2>
                <div class="flex items-center mb-2">
                    <span class="text-gray-600 text-sm">Author: John Doe</span>
                    <span class="mx-2">•</span>
                    <span class="text-gray-600 text-sm">Tanggal: 17 November 2023</span>
                </div>
                <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis
                    corporis, deleniti ipsam repudiandae ducimus enim eius dignissimos, in aperiam maiores natus esse,
                    itaque veniam temporibus fugit. Ad ea exercitationem provident ullam aspernatur reiciendis ducimus
                    expedita repellat, blanditiis inventore! Accusantium....</p>
                <a href="#"
                    class="text-white block mt-2 p-1 border border-blue-500 rounded bg-blue-700 hover:bg-blue-600 hover:underline w-40 h-8">
                    Baca Selengkapnya
                </a>


            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="https://placekitten.com/800/400" alt="Gambar Berita"
                    class="mb-4 w-full h-48 object-cover rounded-md">
                <h2 class="text-3xl text-black font-bold mb-2">Kucing Lucu Hari Ini</h2>
                <div class="flex items-center mb-2">
                    <span class="text-gray-600 text-sm">Author: John Doe</span>
                    <span class="mx-2">•</span>
                    <span class="text-gray-600 text-sm">Tanggal: 17 November 2023</span>
                </div>
                <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis
                    corporis, deleniti ipsam repudiandae ducimus enim eius dignissimos, in aperiam maiores natus esse,
                    itaque veniam temporibus fugit. Ad ea exercitationem provident ullam aspernatur reiciendis ducimus
                    expedita repellat, blanditiis inventore! Accusantium....</p>
                <a href="#"
                    class="text-white block mt-2 p-1 border border-blue-500 rounded bg-blue-700 hover:bg-blue-600 hover:underline w-40 h-8">
                    Baca Selengkapnya
                </a>


            </div>
            <!-- Tambahkan Berita ke depannya menggunakan database ini hanya cek sticky -->
        </div>

        <!-- Kolom Kanan - Pencarian dan Daftar Berita -->
        <div id="sticky-container" class="md:w-1/3 md:pl-8">
            <!-- Pencarian dan Daftar Berita dalam satu border -->
            <div id="sticky-content" class="bg-white p-6 rounded-lg shadow-md border border-gray-300">
                <!-- Pencarian -->
                <h2 class="text-xl mb-4 text-gray-600">Cari Berita Dan Artikel</h2>
                <div class="mb-6 flex">
                    <input type="text" placeholder="Cari berita..."
                        class="w-full p-2 border border-gray-300 rounded-l-md text-black outline-none">

                    <button class="bg-blue-500 text-white p-2 rounded-r-md hover:bg-blue-600 transition duration-300">
                        <i class="fas fa-search"></i>
                    </button>
                </div>

                <!-- Daftar Berita -->
                <div>
                    <h2 class="text-xl mb-4 text-gray-600">Berita Lainnya</h2>
                    <ul>
                        <li class="mb-4 bg-white">
                            <div class="flex items-start">
                                <img src="https://placekitten.com/200/100" alt="Gambar Berita"
                                    class="w-16 h-16 object-cover rounded-md">
                                <div class="ml-4">
                                    <a href="#" class="text-blue-500 hover:underline">Judul Berita 1</a>
                                    <p class="text-gray-600">Ringkasan berita...</p>
                                    <a href="#" class="text-blue-500 hover:underline block mt-2">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </li>
                        <li class="mb-4 bg-white">
                            <div class="flex items-start">
                                <img src="https://placekitten.com/200/100" alt="Gambar Berita"
                                    class="w-16 h-16 object-cover rounded-md">
                                <div class="ml-4">
                                    <a href="#" class="text-blue-500 hover:underline">Judul Berita 2</a>
                                    <p class="text-gray-600">Ringkasan berita...</p>
                                    <a href="#" class="text-blue-500 hover:underline block mt-2">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <script>
        window.addEventListener('scroll', function() {
            var stickyContent = document.getElementById('sticky-content');
            var containerRect = document.getElementById('sticky-container').getBoundingClientRect();

            if (containerRect.top <= 8) {
                stickyContent.classList.add('fixed', 'top-8');
            } else {
                stickyContent.classList.remove('fixed', 'top-8');
            }
        });
    </script>

</body>



@include('components.footer.footer')

<script src="{{ asset('js/main.js') }}"></script>

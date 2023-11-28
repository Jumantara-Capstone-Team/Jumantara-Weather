<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Temukan semua elemen span yang menjadi tombol
        const buttons = document.querySelectorAll('[data-accordion-target]');

        // Loop melalui setiap elemen span dan tambahkan penanganan klik
        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Temukan elemen <p> yang sesuai dengan elemen span yang diklik
                const targetId = this.getAttribute('data-accordion-target');
                const targetElement = document.querySelector(targetId);

                // Toggle class 'hidden' untuk elemen <p>
                targetElement.classList.toggle('hidden');
            });
        });
    });
</script>

<!-- Start block -->
<section class="bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-24 lg:px-6">
        <h2
            class="mb-6 text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:mb-8 lg:text-3xl dark:text-white">
            Frequently asked questions
        </h2>
        <div class="max-w-screen-md mx-auto">
            <div id="accordion-flush" data-accordion="collapse"
                data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h3 id="accordion-flush-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                        data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                        aria-controls="accordion-flush-body-2">
                        <span>Apa itu Jumantara?</span>
                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h3>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">
                            Jumantara adalah sebuah aplikasi yang menyediakan informasi cuaca terkini, prediksi cuaca,
                            berita cuaca, dan informasi kualitas udara. Tujuannya adalah membantu pengguna untuk tetap
                            informasi dan mengambil keputusan yang tepat berdasarkan kondisi cuaca.

                        </p>

                    </div>
                </div>
                <h3 id="accordion-flush-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                        data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                        aria-controls="accordion-flush-body-2">
                        <span> Bagaimana cara melihat cuaca saat ini di Jumantara?

                        </span>
                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h3>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">
                            Untuk melihat kondisi cuaca saat ini, buka aplikasi Jumantara dan pergi ke halaman utama. Di
                            sana, Anda akan melihat informasi terkini tentang suhu, kelembapan, kecepatan angin, dan
                            kondisi cuaca secara umum.
                        </p>

                    </div>
                </div>
                <h3 id="accordion-flush-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                        data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                        aria-controls="accordion-flush-body-3">
                        <span>Dapatkah saya mendapatkan prediksi cuaca untuk beberapa hari ke depan?</span>
                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h3>
                <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">
                            Ya, Jumantara menyediakan prediksi cuaca hingga beberapa hari ke depan. Anda dapat
                            menavigasi ke bagian "Prediksi" untuk melihat perkiraan cuaca harian dan mingguan.
                        </p>

                    </div>
                </div>
                <h3 id="accordion-flush-heading-4">
                    <button type="button"
                        class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                        data-accordion-target="#accordion-flush-body-4" aria-expanded="false"
                        aria-controls="accordion-flush-body-4">
                        <span>Bagaimana cara melacak kualitas udara di lokasi saya?</span>
                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h3>
                <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">
                            Anda dapat memeriksa kualitas udara di lokasi Anda dengan membuka bagian "Air Quality" di
                            aplikasi Jumantara. Di sana, Anda akan menemukan informasi tentang tingkat polusi udara dan
                            rekomendasi terkait.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End block -->

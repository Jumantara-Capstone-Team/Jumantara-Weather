<!DOCTYPE html>
<html lang="en">

<head>
    <title>Activity Admin | Jumantara</title>
    @include('components.admin.auth.head.head')
</head>

<body>
    @include('components.admin.auth.navbar.navbar')



    @if (auth()->check())
        <section class="bg-neutral-200 dark:bg-gray-900">
            <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16">
                <div class="container mt-10">
                    <div class="text-left mb-5">
                        <a href="/dashboard">
                            <button
                                class="text-black px-4 py-2 rounded-lg text-lg hover:text-blue-600 transition ease-in-out duration-300">
                                <i class="fas fa-arrow-left mr-2"></i> Kembali Ke Profile
                            </button>
                        </a>
                    </div>
                    <h1 class="text-black font-bold text-3xl ml-4">Notification Jumantara Apps</h1>
                    <p class="text-black ml-4">Fitur Notifikasi data yang di tambahkan ke dalam jumantara weather apps
                    </p>
                    <div class="max-w-screen-lg mx-auto my-8 ml-4">
                        @foreach ($notifications as $notification)
                            <div class="w-full lg:w-2/3 bg-white shadow-lg rounded-lg overflow-hidden mb-4">
                                <div class="p-4">
                                    <button
                                        class="close-btn float-right text-gray-500 hover:text-red-500 transition-transform transform duration-300 ease-in-out hover:scale-110"
                                        onclick="closeNotification(this)">&times;</button>
                                    <h2 class="text-gray-800 font-bold text-xl">{{ $notification->title }}</h2>
                                    <p class="text-gray-600 text-sm">{{ strip_tags($notification->body) }}</p>
                                    <p class="text-gray-800 text-sm">{{ $notification->selected_country }}
                                    </p>
                                    <p class="text-gray-600 text-sm">
                                        {{ \Carbon\Carbon::parse($notification->updated_at)->format('Y-m-d') }}
                                    </p>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </section>
    @endif


    @include('components.admin.auth.footer.footer')

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Tambahkan event handler untuk tombol close
            $('.close-btn').on('click', function() {
                // Dapatkan elemen div notifikasi yang berisi tombol close yang ditekan
                var notificationDiv = $(this).closest('.w-full');

                // Sembunyikan notifikasi dengan efek fadeOut
                notificationDiv.fadeOut();

                // Tambahkan logika lain yang diperlukan, seperti mengirim permintaan ke server untuk menandai notifikasi sebagai telah dibaca, dll.
            });
        });

        function closeNotification(button) {
            var notificationDiv = $(button).closest('.w-full');

            // Sembunyikan notifikasi dengan efek fadeOut
            notificationDiv.fadeOut(500, function() {
                // Hapus notifikasi dari DOM setelah animasi selesai (opsional)
                $(this).remove();
            });
        }
    </script>


    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>

</html>

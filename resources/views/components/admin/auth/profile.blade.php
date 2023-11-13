<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile Admin | Jumantara</title>
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
                                class=" text-black px-4 py-2 rounded-lg text-lg  hover:text-blue-600 transition ease-in-out duration-300">
                                <i class="fas fa-arrow-left mr-2"></i> Kembali Ke Profile
                            </button>
                        </a>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-md">
                        <a href="">
                            <div class="text-right">
                                {{-- <a href="{{ route('edit') }}"> --}}
                                <button
                                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 hover:text-white transition ease-in-out duration-300">
                                    <i class="fas fa-edit mr-2"></i> Edit Profile
                                </button>
                        </a>
                    </div>
                    </a>

                    <div class="text-center">
                        <img src="{{ asset('img/auth/user/unnamed.jpg') }}" alt="User Image"
                            class="w-32 h-32 rounded-full mx-auto">
                        <h2 class="text-2xl font-semibold">{{ auth()->user()->first_name }}
                            {{ auth()->user()->last_name }}</h2>
                        <p class="text-gray-500 mt-2">Admin </p>
                    </div>

                    <div class="mt-4 text-black">
                        <h3 class="text-2xl font-semibold text-center">Informasi Lainnya</h3>
                        <p class="mt-4 text-lg">Email: {{ auth()->user()->name }}</p>
                        <p class="text-lg">Email: {{ auth()->user()->email }}</p>
                        <p class="text-lg">Alamat: Indonesia</p>
                        <p class="text-lg">Id: {{ auth()->user()->id }}</p>
                        {{-- <p class="text-lg">Waktu Buat: {{ auth()->user()->created_at->format('d F Y') }}</p> --}}
                        <p class="text-lg">Community Level: <span class="text-yellow-500 "> <i class="fas fa-star"></i>
                                Gold Member</span></p>
                    </div>
                </div>
            </div>
            </div>
            <div class="px-14 pb-8 mx-auto font-bold">
                <h2 class="text-xl text-black">Fitur Yang Tersedia</h2>
            </div>
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-24 lg:px-6">
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex text-center">
                    <div class="flex items-center justify-center w-full h-full">
                        <img src="{{ asset('img/auth/empty/empty-search.webp') }}" alt="hero image" />
                    </div>
                </div>
                <div class="max-w-screen-md mx-auto mb-8 text-center lg:mb-12">
                    <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-gray-400 dark:text-white">
                        Masi Tahap Development
                    </h2>
                </div>
            </div>

        </section>
    @endif

    @include('components.admin.auth.footer.footer')


    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>

</html>

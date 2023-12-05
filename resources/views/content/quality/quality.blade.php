<title>Jumantara | View Ratings and Air Quality Around You</title>

@include('components.head.head')

@include('components.navbar.navbar')

<body class="bg-gray-50 font-sans dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <h1 class="text-gray-800 mt-20 mb-2 text-3xl font-bold sm:text-3xl md:text-3xl lg:text-3xl">Air Quality
            Monitoring</h1>
        <p class="text-gray-600 mb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum enim quidem quod,
            odio
            nemo quibusdam cum dolorem corporis quae pariatur.</p>

        <section class="bg-white p-4 md:p-8 rounded shadow-md mb-8">
            <iframe src="https://www.iqair.com/air-quality-map" width="100%" height="400" frameborder="0"
                allowfullscreen></iframe>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4 rounded-xl">
                <div class="bg-blue-200 p-4 rounded-md">
                    <h3 class="text-lg font-semibold mb-2 text-gray-800">Jakarta</h3>
                    <p class="text-gray-700">Air Quality Index: 85</p>
                    <p class="text-gray-700">Temperature: 25°C</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-green-200 p-4 rounded-md">
                    <h3 class="text-lg font-semibold mb-2 text-gray-800">Bandung</h3>
                    <p class="text-gray-700">Air Quality Index: 92</p>
                    <p class="text-gray-700">Temperature: 28°C</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-yellow-200 p-4 rounded-md">
                    <h3 class="text-lg font-semibold mb-2 text-gray-800">Bali</h3>
                    <p class="text-gray-700">Air Quality Index: 78</p>
                    <p class="text-gray-700">Temperature: 22°C</p>
                </div>
            </div>
        </section>

        <h1 class="mt-5 font-bold text-black text-3xl sm:text-3xl md:text-3xl lg:text-3xl">Air Quality Tips and Fact
        </h1>
        <p class="text-gray-600 mb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia recusandae
            explicabo
            quaerat, libero deserunt illum iusto dignissimos fuga nemo provident?</p>

        <div class="mb-8">
            <div class="w-full bg-white shadow-md rounded-full mb-4">
                <div class="flex items-center">
                    <input type="text" placeholder="Search..."
                        class="w-full text-black px-4 py-2 focus:outline-none rounded-l-full">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-r-full">Search</button>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-center mb-10 -mx-4">
            @foreach ($quality->sortByDesc('created_at') as $quality)
                <div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 px-4 mb-8">
                    <div class="card bg-base-100 shadow-xl">
                        @if ($quality->image)
                            <figure><img src="{{ asset('storage/' . $quality->image) }}" alt="Air Quality" />
                            </figure>
                        @else
                            <figure><img src="{{ asset('img/asset/not-found/not-found.png') }}" alt="Air Quality" />
                            </figure>
                        @endif
                        <div class="card-body">
                            <h2 class="card-title text-lg">{{ Str::ucfirst(Str::limit($quality->title, 40)) }}
                            </h2>
                            <p class="text-base text-gray-600 text-sm">
                                {{ strip_tags(Str::ucfirst(Str::limit($quality->body, 200))) }}
                            </p>
                            <a href="/quality/{{ $quality->slug }}">
                                <div class="card-actions justify-end">
                                    <button class="btn btn-primary">Baca Selengkapnya</button>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('components.footer.footer')

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>

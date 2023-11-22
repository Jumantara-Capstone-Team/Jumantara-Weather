<!DOCTYPE html>
<html lang="en">
<title>News | Jumantara</title>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News | Jumantara</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


</head>

@include('components.head.head')

@include('components.navbar.navbar')

<body class="mt-32">

    <h1 class="text-black ml-3 mb-2">Berita Terbaru Jumantara</h1>
    <div class="flex flex-col items-center mb-8">
        <!-- Modern Search Bar -->
        <div class="w-96 bg-white shadow-md rounded-full mb-4">
            <div class="flex items-center">
                <input type="text" placeholder="Search..."
                    class="w-full text-black px-4 py-2 focus:outline-none rounded-l-full">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-r-full">Search</button>
            </div>
        </div>
    </div>



    <div class="flex flex-wrap justify-center mb-10 -mx-4">

        @foreach ($posts->sortByDesc('created_at') as $post)
            <div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 px-4 mb-8">
                <div class="card bg-base-100 shadow-xl">
                    <figure><img src="{{ asset('/img/shoes.jpg') }}" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">{{ Str::ucfirst(Str::limit($post->title, 40)) }}</h2>
                        <p>{{ $post->body }}</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 px-4 mb-8">
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="{{ asset('/img/shoes.jpg') }}" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Shoes!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 px-4 mb-8">
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="{{ asset('/img/shoes.jpg') }}" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Shoes!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 px-4 mb-8">
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="{{ asset('/img/shoes.jpg') }}" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Shoes!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 px-4 mb-8">
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="{{ asset('/img/shoes.jpg') }}" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Shoes!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Repeat the same structure for the next cards -->

    </div>

</body>



@include('components.footer.footer')

<script src="{{ asset('js/main.js') }}"></script>

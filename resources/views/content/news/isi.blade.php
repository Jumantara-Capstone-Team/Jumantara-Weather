<!DOCTYPE html>
<html lang="en">

<title>{{ $post->title }} | Jumantara</title>

@include('components.head.head')

@include('components.navbar.navbar')

<body class="bg-gray-200 font-sans">

    <div class="ml-28 mt-14">
        <a href="/berita">
            <button
                class="text-white px-4 py-2 rounded-xl text-lg bg-blue-500 hover:bg-blue-800 transition ease-in-out duration-300">
                <i class="fas fa-arrow-left mr-2"></i> Kembali Ke Profile
            </button>
        </a>
    </div>
    <div class="container mx-auto bg-white shadow-lg p-8 my-10 text-center rounded-3xl">
        <h1 class="text-3xl text-black font-semibold mb-6">{{ $post->title }}</h1>
        <img src="{{ asset('/img/shoes.jpg') }}" alt="Gambar Berita" class="mx-auto block rounded-xl mb-4">
        <div class="flex justify-center items-center space-x-8 text-gray-500 text-sm">
            <p class="author"><i class="fas fa-user"></i>{{ $post->author }}</p>
            <p class="date"><i class="far fa-calendar-alt"></i>{{ $post->created_at }}</p>

        </div>
        <p class="text-gray-600 text-base leading-7 mb-8">
            {!! $post->body !!}
        </p>
    </div>


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
        <div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 px-4 mb-8">
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="{{ asset('/img/shoes.jpg') }}" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Shoes!</h2>
                    <p class="text-base text-gray-600">If a dog chews shoes whose shoes does he choose?</p>
                    <a href="/posts/{{ $post->slug }}">
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Baca Selengkapnya</button>
                        </div>
                    </a>

                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 px-4 mb-8">
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="{{ asset('/img/shoes.jpg') }}" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Shoes!</h2>
                    <p class="text-base text-gray-600">If a dog chews shoes whose shoes does he choose?</p>
                    <a href="/posts/{{ $post->slug }}">
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Baca Selengkapnya</button>
                        </div>
                    </a>

                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 px-4 mb-8">
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="{{ asset('/img/shoes.jpg') }}" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Shoes!</h2>
                    <p class="text-base text-gray-600">If a dog chews shoes whose shoes does he choose?</p>
                    <a href="/posts/{{ $post->slug }}">
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Baca Selengkapnya</button>
                        </div>
                    </a>

                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 px-4 mb-8">
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="{{ asset('/img/shoes.jpg') }}" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Shoes!</h2>
                    <p class="text-base text-gray-600">If a dog chews shoes whose shoes does he choose?</p>
                    <a href="/posts/{{ $post->slug }}">
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Baca Selengkapnya</button>
                        </div>
                    </a>

                </div>
            </div>
        </div>

    </div>

</body>


@include('components.footer.footer')

</html>

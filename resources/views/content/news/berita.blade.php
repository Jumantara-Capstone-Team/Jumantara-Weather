<!DOCTYPE html>
<html lang="en">
<title>Jumantara | Find Various Weather News Here</title>
@include('components.head.head')

@include('components.navbar.navbar')

<body class="bg-white font-sans dark:bg-gray-800">

    <h1 class="text-gray-800 ml-6 mt-20 mb-2 text-3xl font-bold">Berita Terbaru Jumantara</h1>
    <p class=" text-gray-600 ml-6">Berita dan Artikel terbaru dari Jumantara Weather</p>
    <div class="flex flex-col items-center mb-8">
        <div class="w-96 bg-white shadow-md rounded-full mb-4 mt-4">
            <div class="flex items-center">
                <form action="{{ route('berita.search') }}" method="GET" class="flex w-full">
                    <input type="text" placeholder="Search..." name="query"
                        class="w-full text-black px-4 py-2 focus:outline-none rounded-l-full">
                    <button
                        class="bg-blue-500 text-white px-4 py-2 rounded-r-full transition duration-300 ease-in-out hover:bg-blue-700">Search</button>
                </form>
            </div>
        </div>
    </div>



    <div style="display: flex; flex-wrap: wrap; justify-content: center; max-width: 1200px; margin: 0 auto; gap: 20px;">
        @foreach ($posts->sortByDesc('created_at') as $post)
            <div class="card card-compact w-96 bg-base-100 shadow-xl mb-10 dark:bg-white">


                <figure><img src="https://drive.google.com/uc?id=1FGUdPaMJLj9avfjBCej43rS7XmI3js0R" alt="Shoes" />
                </figure>

                <div class="card-body">
                    <h2 class="card-title dark:text-white">{{ Str::ucfirst(Str::limit($post->title, 40)) }}</h2>
                    <p class="text-gray-600 dark:text-white">{{ $post->selected_country }}</p>
                    <p class="text-gray-600 dark:text-white">
                        {{ strip_tags(Str::ucfirst(Str::limit($post->body, 200))) }}
                    </p>
                    <a href="/posts/{{ $post->slug }}">
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Baca Selengkapnya</button>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>


</body>



@include('components.footer.footer')

<script src="{{ asset('js/main.js') }}"></script>

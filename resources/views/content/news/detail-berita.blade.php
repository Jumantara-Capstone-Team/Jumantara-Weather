<!DOCTYPE html>
<html lang="en">

<title>{{ $post->title }} | Jumantara</title>

@include('components.head.head')

@include('components.navbar.navbar')

<body class="bg-white font-sans mt-20 dark:bg-gray-800">

    <div class="container mx-auto bg-white shadow-lg p-8 my-10 rounded-3xl">
        <h1 class="text-3xl text-black font-semibold mb-6 text-center">{{ $post->title }}</h1>

        <img src="https://drive.google.com/uc?id=1FGUdPaMJLj9avfjBCej43rS7XmI3js0R" alt="Gambar Berita"
            class="mx-auto block rounded-xl mb-4">


        <div class="flex justify-center items-center space-x-8 text-gray-500 text-sm">
            <p class="author"><i class="fas fa-user"></i>{{ $post->author }}</p>
            <p class="country"><i class="fas fa-user"></i>{{ $post->selected_country }}</p>
            <p class="date"><i
                    class="far fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($post->updated_at)->format('Y-m-d') }}
            </p>
        </div>
        <p class="text-gray-600 text-base leading-7 mb-8">
            {!! $post->body !!}
        </p>
    </div>

    <div class="flex flex-col items-center mb-8">
        <!-- Modern Search Bar -->
        <div class="w-full md:w-96 bg-white shadow-md rounded-full mb-4">
            <div class="flex items-center">
                <input type="text" placeholder="Search..."
                    class="w-full text-black px-4 py-2 focus:outline-none rounded-l-full">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-r-full">Search</button>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap justify-center mb-10 -mx-4">
        @foreach ($latestPosts->sortByDesc('created_at') as $latestPost)
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4 px-4 mb-8">
                <div class="card bg-base-100 shadow-xl dark:bg-blue-950">

                    <figure><img src="https://drive.google.com/uc?id=1FGUdPaMJLj9avfjBCej43rS7XmI3js0R"
                            alt="Not Found" />
                    </figure>

                    <div class="card-body">
                        <h2
                            class="card-title text-black text-xl font-semibold hover:text-blue-800 dark:text-white hover:dark:text-gray-500">
                            {{ Str::ucfirst(Str::limit($latestPost->title, 40)) }}</h2>
                        <p class="text-gray-400 dark:text-gray-400 text-sm">Admin/
                            {{ \Carbon\Carbon::parse($latestPost->updated_at)->format('j M Y') }}
                        </p>
                        <a href="/posts/{{ $latestPost->slug }}">
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary dark:text-white">Baca Selengkapnya</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>



@include('components.footer.footer')

</html>

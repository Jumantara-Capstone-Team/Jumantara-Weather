<section class="bg-gray-50 dark:bg-gray-800 p-4 mt-10">

    <h1 class="mb-2 text-3xl font-bold text-center">Berita Cuaca dan Artikel Terkini</h1>
    <p class="text-center mb-8 text-gray-500">Berita dan Artikel terbaru dari Jumantara Weather</p>

    <div class="flex flex-col md:flex-row md:justify-center">
        @foreach ($posts->sortByDesc('created_at')->take(3) as $post)
            <div class="card card-compact w-full md:w-96 bg-base-100 shadow-xl mx-2 mb-4 md:mb-0 dark:bg-white">

                <figure>
                    <img src="https://drive.google.com/uc?id=1FGUdPaMJLj9avfjBCej43rS7XmI3js0R" alt="Berita Img" />
                </figure>

                <div class="card-body">
                    <h2 class="card-title dark:text-white">{{ Str::ucfirst(Str::limit($post->title, 40)) }}</h2>
                    <p class="dark:text-white">{{ strip_tags(Str::ucfirst(Str::limit($post->body, 200))) }}</p>
                    <a href="/posts/{{ $post->slug }}">
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Baca Selengkapnya</button>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach

    </div>

</section>

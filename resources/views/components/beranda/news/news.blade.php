<section class="bg-gray-50 dark:bg-gray-800 p-4 mt-10">

    <h1 class="mb-2 text-3xl font-bold text-center">Berita Cuaca Terkini</h1>
    <p class="text-center mb-8 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum distinctio
        sequi ut alias pariatur odio suscipit nostrum, numquam accusamus quas?</p>

    <div class="flex flex-col md:flex-row md:justify-center">
        @foreach ($posts->sortByDesc('created_at')->take(3) as $post)
            <div class="card card-compact w-full md:w-96 bg-base-100 shadow-xl mx-2 mb-4 md:mb-0">
                @if ($post->image)
                    <figure>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Shoes" />
                    </figure>
                @else
                    <figure>
                        <img src="{{ asset('img/asset/not-found/not-found.png') }}" alt="Shoes" />
                    </figure>
                @endif
                <div class="card-body">
                    <h2 class="card-title">{{ Str::ucfirst(Str::limit($post->title, 40)) }}</h2>
                    <p>{{ strip_tags(Str::ucfirst(Str::limit($post->body, 200))) }}</p>
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

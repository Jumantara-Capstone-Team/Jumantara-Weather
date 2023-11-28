<!-- <section id="news" class="news">
    <header class="section-news">
        <p>Recently News</p>
    </header>
    <div class="news-container">

        <div class="news-card">
            <img class="news-img" src="{{ asset('img/contoh.jpeg') }}" alt="Gambar Berita 1">
            <div class="news-content">
            <div class="news-title">Berita 1</div>
                <p>Ini adalah isi berita kedua.</p>
            </div>
        </div>

        <div class="news-card">
            <img class="news-img" src="{{ asset('img/contoh.jpeg') }}" alt="Gambar Berita 2">
            <div class="news-content">
            <div class="news-title">Berita 2</div>
                <p>Ini adalah isi berita kedua.</p>
            </div>
        </div>

        <div class="news-card">
            <img class="news-img" src="{{ asset('img/contoh.jpeg') }}" alt="Gambar Berita 3">
            <div class="news-content">
            <div class="news-title">Berita 3</div>
                <p>Ini adalah isi berita kedua.</p>
            </div>
        </div>
    </div>
</section> -->
<section id="news" class="news">
<div class="fullwidth-block">
<div class="container">
<div class="flex flex-wrap justify-center mb-10 -mx-4">

<h2>Recently News</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque temporibus
                excepturi autem et quam corrupti culpa non fugiat aliquam facilis!</p>

<div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 px-4 mb-8">
    <div class="card bg-base-100 shadow-xl">
        <figure><img class="rounded-md" src="{{ asset('/img/contoh.jpeg') }}" alt="Shoes" /></figure>
        <div class="card-body">
            <h2 class="card-title text-lg">Melakukan pengecekan kualitas udara di daerah masing-masing</h2>
            <p class="text-base text-gray-600 text-sm">If a dog chews shoes whose shoes does he choose?</p>
            <a href="">
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Baca Selengkapnya</button>
                </div>
            </a>

        </div>
    </div>
</div>

<div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 px-4 mb-8">
    <div class="card bg-base-100 shadow-xl">
        <figure><img class="rounded-md" src="{{ asset('/img/contoh.jpeg') }}" alt="Shoes" /></figure>
        <div class="card-body">
            <h2 class="card-title text-lg">Melakukan pengecekan kualitas udara di daerah masing-masing</h2>
            <p class="text-base text-gray-600 text-sm">If a dog chews shoes whose shoes does he choose?</p>
            <a href="">
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Baca Selengkapnya</button>
                </div>
            </a>

        </div>
    </div>
</div>

<div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 px-4 mb-8">
    <div class="card bg-base-100 shadow-xl">
        <figure><img class="rounded-md" src="{{ asset('/img/contoh.jpeg') }}" alt="Shoes" /></figure>
        <div class="card-body">
            <h2 class="card-title text-lg">Melakukan pengecekan kualitas udara di daerah masing-masing</h2>
            <p class="text-base text-gray-600 text-sm">If a dog chews shoes whose shoes does he choose?</p>
            <a href="">
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Baca Selengkapnya</button>
                </div>
            </a>

        </div>
    </div>
</div>

<div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 px-4 mb-8">
    <div class="card bg-base-100 shadow-xl">
        <figure><img class="rounded-md" src="{{ asset('img/contoh.jpeg') }}" alt="Shoes" /></figure>
        <div class="card-body">
            <h2 class="card-title text-lg">Melakukan pengecekan kualitas udara di daerah masing-masing</h2>
            <p class="text-base text-gray-600 text-sm">If a dog chews shoes whose shoes does he choose?</p>
            <a href="">
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Baca Selengkapnya</button>
                </div>
            </a>

        </div>
    </div>
</div>
</div>
</div>
</div>
</section>

<!-- </div>
    <div class="fullwidth-block">
        <div class="container-news">
            <h2>Recently News</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque temporibus
                excepturi autem et quam corrupti culpa non fugiat aliquam facilis!</p>
            <div class="row">
                @foreach ($posts->sortByDesc('created_at')->take(4) as $post)
                    <div class="col-md-3 col-sm-6">
                        <div class="news-card">
                            <figure class="news-card-cover"><img src="{{ asset('img/contoh.jpeg') }}" alt="">
                            </figure>
                            <div class="news-content-card">
                                <h3 class="news-title">{{ Str::limit($post->title, 50) }}</h3>
                                <p class="news-description">{{ strip_tags($post->body) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-3 col-sm-6">
                    <div class="news-card">
                        <figure class="news-card-cover"><img src="{{ asset('img/contoh.jpeg') }}" alt="">
                        </figure>
                        <div class="news-content-card">
                            <h4 class="news-title">Berita Satu</h4>
                            <p class="news-description">Lorem ipsum dolor, sit amet consectur...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="news-card">
                        <figure class="news-card-cover"><img src="{{ asset('img/contoh.jpeg') }}" alt="">
                        </figure>
                        <div class="news-content-card">
                          <h4 class="news-title">Berita Dua</h4>
                          <p class="news-description">Lorem ipsum dolor, sit amet consectur...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="news-card">
                        <figure class="news-card-cover"><img src="{{ asset('img/contoh.jpeg') }}" alt="">
                        </figure>
                        <div class="news-content-card">
                            <h4 class="news-title">Berita Tiga</h4>
                            <p class="news-description">Lorem ipsum dolor, sit amet consectur...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="news-card">
                        <figure class="news-card-cover"><img src="{{ asset('img/contoh.jpeg') }}" alt="">
                        </figure>
                        <div class="news-content-card">
                            <h4 class="news-title">Berita Empat</h4>
                            <p class="news-description">Lorem ipsum dolor, sit amet consectur...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


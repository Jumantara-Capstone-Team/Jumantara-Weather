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
                                <small class="news-description">{{ strip_tags($post->body) }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-3 col-sm-6">
                    <div class="news-card">
                        <figure class="news-card-cover"><img src="{{ asset('img/contoh.jpeg') }}" alt="">
                        </figure>
                        <div class="news-content-card">
                            <h3 class="news-title">Berita Satu</h3>
                            <small class="news-description">Lorem ipsum dolor, sit amet consectur...</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="news-card">
                        <figure class="news-card-cover"><img src="{{ asset('img/contoh.jpeg') }}" alt="">
                        </figure>
                        <div class="news-content-card">
                            <h3 class="news-title">Berita Satu</h3>
                            <small class="news-description">Lorem ipsum dolor, sit amet consectur...</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="news-card">
                        <figure class="news-card-cover"><img src="{{ asset('img/contoh.jpeg') }}" alt="">
                        </figure>
                        <div class="news-content-card">
                            <h3 class="news-title">Berita Satu</h3>
                            <small class="news-description">Lorem ipsum dolor, sit amet consectur...</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

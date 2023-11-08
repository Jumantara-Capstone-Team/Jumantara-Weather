<!DOCTYPE html>
<html lang="en">

@include('components.head.head')
{{-- -> @include berguna untuk menyisipkan file view untuk ke dalam halaman kita,
untuk yg di maksud components.head.head adalah dimana letak sebuah file nya dan di akhiri oleh nama file nya yaitu head --}}

@include('components.navbar.navbar')

<body>
    <div class="image_banner">
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Apa Yang Kamu Cari  Hayoo?">
            <button class="search-button">Search</button>
        </div>
    </div>
    <section class="sepuh" id="sepuh">
        @include('components.beranda.suhu.suhu')
        @include('components.beranda.news.news')
    </section>
</body>
@include('components.footer.footer')

<script src="{{ asset('js/main.js') }}"></script>

</html>
<script src="{{ asset('/sw.js') }}"></script>
<script>
    if ("serviceWorker" in navigator) {
        // Register a service worker hosted at the root of the
        // site using the default scope.
        navigator.serviceWorker.register("/sw.js").then(
            (registration) => {
                console.log("Service worker registration succeeded:", registration);
            },
            (error) => {
                console.error(`Service worker registration failed: ${error}`);
            },
        );
    } else {
        console.error("Service workers are not supported.");
    }
</script>

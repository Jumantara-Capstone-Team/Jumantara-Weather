<!DOCTYPE html>
<html lang="en">

@include('components.head.head')

@include('components.navbar.navbar')

<body>
    <section class="sepuh" id="sepuh">
        @include('components.beranda.hero.hero')

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

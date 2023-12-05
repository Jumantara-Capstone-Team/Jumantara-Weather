<!DOCTYPE html>
<html lang="en">
<title>Know your weather now and in the future | Jumantara</title>

@include('components.head.head')

@include('components.navbar.navbar')

<body>
    <section class="sepuh" id="sepuh">
        @include('components.beranda.hero.hero')

        @include('components.beranda.collaboration.collaboration')
        @include('components.beranda.benefit.benefit')
        @include('components.beranda.cuaca.cuaca')
        @include('components.beranda.video.video')
        {{-- @include('components.beranda.suhu.suhu') --}}
        @include('components.beranda.news.news')
        @include('components.beranda.motivasi.motivasi')

        @include('components.beranda.faq.faq')


    </section>
</body>
@include('components.footer.footer')

<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/components/Scroll.js') }}"></script>

</html>

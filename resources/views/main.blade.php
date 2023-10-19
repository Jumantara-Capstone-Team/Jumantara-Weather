<!DOCTYPE html>
<html lang="en">

@include('components.head.head')
{{-- -> @include berguna untuk menyisipkan file view untuk ke dalam halaman kita,
untuk yg di maksud components.head.head adalah dimana letak sebuah file nya dan di akhiri oleh nama file nya yaitu head --}}

@include('components.navbar.navbar')

<body>



</body>
@include('components.footer.footer')

<script src="{{ asset('js/main.js') }}"></script>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search | Jumantara</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    @include('components.admin.auth.head.head')
</head>

<body class="bg-gray-200">

    @include('components.admin.auth.navbar.navbar')



    <div class="container mx-auto p-8 bg-white rounded shadow-lg mt-24 mb-24">
        <h2 class="text-3xl font-bold mb-4 text-black">Search Results</h2>

        @if ($results->count() > 1)
            <ul>
                @foreach ($results as $result)
                    <li class="mb-4 border-b pb-4 text-black">
                        <h3 class="text-xl font-semibold mb-2">{{ $result->title }}</h3>
                        <p class="text-gray-700">{!! $result->body !!}</p>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="flex flex-col items-center justify-center">
                <img src="{{ asset('img/search/search.jpg') }}" alt="No Results Image"
                    class="flex items-center justify-center w-72 h-72">
                <p class="text-gray-700 text-center font-semibold text-2xl">Data Not Found</p>
            </div>
        @endif
    </div>

    @include('components.admin.auth.footer.footer')


    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

</body>

</html>

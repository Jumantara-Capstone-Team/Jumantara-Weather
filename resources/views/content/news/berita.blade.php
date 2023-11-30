<!DOCTYPE html>
<html lang="en">
<title>News | Jumantara</title>
@include('components.head.head')

@include('components.navbar.navbar')

<body class="bg-gray-50 font-sans dark:bg-gray-800">

    <h1 class="text-gray-800 ml-3 mt-20 mb-2 text-3xl font-bold">Berita Terbaru Jumantara</h1>
    <p class=" text-gray-600 ml-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum enim quidem quod,
        odio
        nemo quibusdam cum
        dolorem corporis quae pariatur.</p>
    <div class="flex flex-col items-center mb-8">
        <div class="w-96 bg-white shadow-md rounded-full mb-4 mt-4">
            <div class="flex items-center">
                <input type="text" placeholder="Search..."
                    class="w-full text-black px-4 py-2 focus:outline-none rounded-l-full">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-r-full">Search</button>
            </div>
        </div>
    </div>



    <div style="display: flex; flex-wrap: wrap; justify-content: center; max-width: 1200px; margin: 0 auto; gap: 20px;">
        @foreach ($posts->sortByDesc('created_at') as $post)
            <div class="card card-compact w-96 bg-base-100 shadow-xl">
                @if ($post->image)
                    <figure><img src="{{ asset('storage/' . $post->image) }}" alt="Shoes" />
                    </figure>
                @else
                    <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                            alt="Shoes" />
                    </figure>
                @endif
                <div class="card-body">
                    <h2 class="card-title">{{ Str::ucfirst(Str::limit($post->title, 40)) }}</h2>
                    <p>{{ strip_tags(Str::ucfirst(Str::limit($post->body, 200))) }}
                    </p>
                    <a href="/posts/{{ $post->slug }}">
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Baca Selengkapnya</button>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach

        {{-- <div class="card card-compact w-96 bg-base-100 shadow-xl">
            <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>


        <div class="card card-compact w-96 bg-base-100 shadow-xl">
            <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>


        <div class="card card-compact w-96 bg-base-100 shadow-xl">
            <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>


        <div class="card card-compact w-96 bg-base-100 shadow-xl">
            <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div> --}}

    </div>


</body>



@include('components.footer.footer')

<script src="{{ asset('js/main.js') }}"></script>

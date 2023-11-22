<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News | Jumantara</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


</head>
@include('components.head.head')

@include('components.navbar.navbar')

<body class="bg-gray-200 font-sans">

    <div class="ml-28 mt-24">
        <a href="/berita">
            <button
                class="text-white px-4 py-2 rounded-xl text-lg bg-blue-500 hover:bg-blue-800 transition ease-in-out duration-300">
                <i class="fas fa-arrow-left mr-2"></i> Kembali Ke Profile
            </button>
        </a>
    </div>
    <div class="container mx-auto bg-white shadow-lg p-8 my-10 text-center rounded-3xl">
        <h1 class="text-3xl text-black font-semibold mb-6">Kucing Lucu Hari Ini</h1>
        <img src="https://placekitten.com/800/400" alt="Gambar Berita" class="mx-auto block rounded-xl mb-4">
        <div class="flex justify-center items-center space-x-8 text-gray-500 text-sm">
            <p class="author"><i class="fas fa-user"></i> Author: John Doe</p>
            <p class="date"><i class="far fa-calendar-alt"></i> Tanggal: 17 November 2023</p>

        </div>
        <p class="text-gray-600 text-base leading-7 mb-8">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores sint autem molestiae tenetur nostrum ex!
            Vitae voluptate molestiae, vero modi praesentium debitis repellendus voluptates, enim, ullam voluptatibus
            sint veritatis optio? Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt id, cupiditate
            pariatur
            similique recusandae excepturi ducimus! Optio ipsum voluptate facere deleniti asperiores provident quia
            inventore officiis, obcaecati tempora, cum qui? Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Molestias omnis architecto libero distinctio quisquam, enim dolorem ipsa soluta, sed magni quia ipsum quam
            accusamus ut impedit asperiores veritatis dicta. Voluptate. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Architecto rem quis culpa similique ipsa autem quas sapiente natus inventore. Delectus,
            possimus. Ipsa cumque totam, consectetur iste libero a id praesentium. Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Incidunt inventore nulla molestiae explicabo architecto quas! Ullam nobis eius
            odit non? Excepturi omnis ex eius adipisci nisi dolorem facilis. Cupiditate, dolore? Lorem ipsum dolor sit
            amet consectetur adipisicing elit. Et cupiditate doloribus architecto nihil, ratione magnam temporibus,
            officiis porro commodi voluptate harum. Odio a nisi error repellendus quos at dolor quas. Lorem ipsum dolor
            sit amet consectetur adipisicing elit. Eveniet nemo ipsa aperiam quia consequuntur reiciendis vero, rerum
            inventore alias exercitationem, recusandae esse. Ex quasi, laboriosam rem eum cupiditate quidem accusamus?
        </p>
    </div>


    <div class="flex flex-col items-center mb-8">
        <!-- Modern Search Bar -->
        <div class="w-96 bg-white shadow-md rounded-full mb-4">
            <div class="flex items-center">
                <input type="text" placeholder="Search..."
                    class="w-full text-black px-4 py-2 focus:outline-none rounded-l-full">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-r-full">Search</button>
            </div>
        </div>
    </div>


    <div class="flex space-x-4 justify-center mb-10">
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure><img src="{{ asset('/img/shoes.jpg') }}" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Baca Selengkapnya</button>
                </div>
            </div>
        </div>

        <div class="card w-96 bg-base-100 shadow-xl">
            <figure><img src="{{ asset('/img/shoes.jpg') }}" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Baca Selengkapnya</button>
                </div>
            </div>
        </div>

        <div class="card w-96 bg-base-100 shadow-xl">
            <figure><img src="{{ asset('/img/shoes.jpg') }}" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Baca Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>

</body>


@include('components.footer.footer')

</html>

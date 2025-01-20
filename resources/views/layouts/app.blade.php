<!doctype html>  
<html lang="en">  
<head>  
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Blog</title>  

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>  
</head>  
<body class="bg-gray-100 antialiased leading-none font-sans">  
    @include('partials.header')  
    
    <!-- Hero Section -->  
    <section class="relative mb-10">  
        <img alt="Bookshelf background" class="w-full h-96 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/bdmXcTlPZHpyPV9pYKQddpOIHPvlgx66dx8p9Te7P7Mx6TDKA.jpg" width="1200"/>  
        <div class="absolute inset-0 bg-green-700 bg-opacity-75 flex items-center justify-center">  
            <div class="text-center text-white">  
                <h1 class="text-4xl font-bold mb-4">  
                    Good Author &amp; Wonderful Plot in One Book Altogether Now.  
                </h1>  
                <a class="mt-4 inline-block bg-white text-green-700 px-6 py-3 rounded shadow" href="#">  
                    Read More  
                </a>  
            </div>  
        </div>  
    </section>  
    
    <!-- Discover Section -->  
    @php
    use App\Models\Produk;

    // Mengambil semua data produk
    $produks = Produk::all();
    @endphp

    <section class="py-12">  
        <div class="relative bg-white overflow-x-hidden">  
            <div class="container mx-auto px-4 md:px-10">  
                @foreach ($produks as $produk)
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Discover More</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">  

                        <h3 class="text-lg font-bold text-[#111318] mb-4">{{ $produk->nama_produk }}</h3>  
                        <div class="flex flex-wrap gap-6">  
                            <div class="flex flex-col bg-gray-50 p-4 rounded-lg shadow">  
                                <img src="{{ asset('storage/' . $produk->gambar_produk) }}" class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl" alt="{{ $produk->nama_produk }}">  
                                <div class="mt-2 text-left">  
                                    <p class="text-[#111318] text-base font-medium leading-normal">{{ $produk->deskripsi_produk }}</p>  
                                    <p class="text-[#636f88] text-sm font-normal leading-normal"> {{ $produk->harga_produk }}</p>  
                                </div>  
                            </div>  
                        </div>  
                    @endforeach
                        <!-- Repeat other items as needed -->  
                    </div>  

                    <!-- Camping Gadgets Section -->  
                    <h3 class="text-lg font-bold text-[#111318] mb-4">Camping Gadgets</h3>  
                    <div class="flex flex-wrap gap-6">  
                        <div class="flex flex-col bg-gray-50 p-4 rounded-lg shadow">  
                            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl" style='background-image: url("https://sdxl10/72bfbd69-531d-4b2b-a563-f49e8c37f21c.png");'></div>  
                            <div class="mt-2 text-left">  
                                <p class="text-[#111318] text-base font-medium leading-normal">Portable Solar Charger</p>  
                                <p class="text-[#636f88] text-sm font-normal leading-normal">$50</p>  
                            </div>  
                        </div>  
                        <!-- Repeat other items as needed -->  
                    </div>  

                    <!-- Camping Gear Section -->  
                    <h3 class="text-lg font-bold text-[#111318] mb-4">Camping Gear</h3>  
                    <div class="flex flex-wrap gap-6">  
                        <div class="flex flex-col bg-gray-50 p-4 rounded-lg shadow">  
                            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl" style='background-image: url("https://sdxl10/75e59990-c44a-42a9-9b52-bd6e22f28f08.png");'></div>  
                            <div class="mt-2 text-left">  
                                <p class="text-[#111318] text-base font-medium leading-normal">Tents</p>  
                                <p class="text-[#636f88] text-sm font-normal leading-normal">$100</p>  
                            </div>  
                        </div>  
                        <!-- Repeat other items as needed -->  
                    </div>  
                </div>  
            </div>  
        </div>  
    </section>  
    
    @include('partials.footer')  
    @livewireScripts  
</body>  
</html>
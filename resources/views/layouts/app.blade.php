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
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Discover More</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">  
                    @foreach ($produks as $produk)
                    <div class="flex flex-col bg-gray-50 p-4 rounded-lg shadow">  
                        <img src="{{ asset('storage/' . $produk->gambar_produk) }}" class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl" alt="{{ $produk->nama_produk }}">  
                        <div class="mt-2 text-left">  
                            <p class="text-[#111318] text-base font-medium leading-normal">{{ $produk->nama_produk }}</p>  
                            <p class="text-[#636f88] text-sm font-normal leading-normal"> {{ $produk->deskripsi_produk }}</p>  
                            <p class="text-[#636f88] text-sm font-normal leading-normal"> {{ $produk->harga_produk }}</p>  
                        </div>  
                    </div>  
                    @endforeach
                </div>  
            </div>  
        </div>  
    </section>  
    
    @include('partials.footer')  
    @livewireScripts  
</body>  
</html>
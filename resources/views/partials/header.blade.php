<header class="fixed top-0 left-0 right-0 z-50 bg-green-500 text-white">
    <div class="container mx-auto flex justify-between items-center py-4 px-6 md:px-10">
        <div class="flex items-center">
            <img alt="Bookshop logo" class="h-10 w-10 md:h-12 md:w-12" src="https://storage.googleapis.com/a1aa/image/9kiky24wjcrAIxYK4wBGhEOwl7S9SrVUCQf18X1VMgVD0TDKA.jpg" />
            <span class="ml-2 text-2xl font-bold md:text-3xl">Bookshop</span>
        </div>
        <div class="md:hidden">
            <button id="menu-toggle" class="focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <nav id="menu" class="hidden md:flex space-x-6 md:space-x-12">
            <a class="hover:text-gray-300" href="#">Home</a>
            <a class="hover:text-gray-300" href="#">About us</a>
            <a class="hover:text-gray-300" href="#">Services</a>
            <a class="hover:text-gray-300" href="#">Pages</a>
            <a class="hover:text-gray-300" href="#">Contact us</a>
            <div class="flex items-center space-x-4">
                <a class="bg-white text-green-500 px-4 py-2 rounded hover:bg-gray-200" href="{{ route('login')}}">Sign In</a>
                <a class="bg-white text-green-500 px-4 py-2 rounded hover:bg-gray-200" href="{{ route('register')}}">Sign Up</a>
            </div>
        </nav>
       
    </div>
    <div id="mobile-menu" class="hidden md:hidden bg-green-500">
        <nav class="flex flex-col space-y-2 py-4 px-6">
            <a class="hover:text-gray-300" href="#">Home</a>
            <a class="hover:text-gray-300" href="#">About us</a>
            <a class="hover:text-gray-300" href="#">Services</a>
            <a class="hover:text-gray-300" href="#">Pages</a>
            <a class="hover:text-gray-300" href="#">Contact us</a>
            <div class="flex items-center space-x-4 mt-4">
                <a class="bg-white text-green-500 px-4 py-2 rounded hover:bg-gray-200" href="{{ route('login')}}">Sign In</a>
                <a class="bg-white text-green-500 px-4 py-2 rounded hover:bg-gray-200" href="{{ route('register')}}">Sign Up</a>
            </div>
        </nav>
    </div>
</header>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
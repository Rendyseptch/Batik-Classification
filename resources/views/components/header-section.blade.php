<header class="sticky top-0 bg-white shadow z-50">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <!-- Logo -->
        <div class="flex items-center text-gray-400 text-2xl ">
            <div class="w-10 mr-2">
                <img src="{{ URL::asset('image/LogoBatik.png') }}" alt="Logo Batik"
                class="w-14 h-14 object-cover" />
            </div>
            <h1>Batik Malang</h1>
        </div>

        <!-- Custom Hamburger -->
        <button id="hamburger" class="group flex h-14 w-14 cursor-pointer items-center justify-center rounded-3xl bg-white p-2 hover:bg-slate-200 lg:hidden">
            <div class="space-y-2">
                <span class="block h-1 w-10 origin-center rounded-full bg-slate-500 transition-transform ease-in-out group-hover:translate-y-1.5 group-hover:rotate-45"></span>
                <span class="block h-1 w-8 origin-center rounded-full bg-blue-500 transition-transform ease-in-out group-hover:w-10 group-hover:-translate-y-1.5 group-hover:-rotate-45"></span>
            </div>
        </button>

        <!-- Navigation -->
        <nav id="nav-menu" class="hidden flex-col lg:flex lg:flex-row lg:items-center lg:space-x-6 absolute top-full left-0 w-full lg:static lg:w-auto bg-white shadow-md lg:shadow-none transition-all duration-300 ease-in-out px-6 py-4 lg:px-0">
            @if (Request::is('classification-batik'))
                <a class="block uppercase font-semibold py-2 lg:py-0 text-gray-400 hover:text-blue-600" href="/">< Back To Home</a>
            @else
                <a class="block uppercase text-gray-500 font-semibold py-2 lg:py-0 hover:text-blue-600" href="#services">About</a>
                <a class="block uppercase text-gray-500 font-semibold py-2 lg:py-0 hover:text-blue-600" href="#testimonials">Tentang Batik</a>
                <a class="block uppercase text-gray-500 font-semibold py-2 lg:py-0 hover:text-blue-600" href="/classification-batik">Klasifikasi Batik</a>
            @endif
        </nav>
    </div>
</header>

<script>
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');

    hamburger.addEventListener('click', () => {
        navMenu.classList.toggle('hidden');
    });
</script>

    <div class="container mx-auto px-8 lg:flex">
        <div class="text-center lg:text-left lg:w-1/2">
            <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold leading-none">
                Get to know Batik Malang?
            </h1>
            <p class="text-xl lg:text-base mt-6 font-light">Batik Malang yang kaya akan makna dan sejarah. Motif-motif
                yang ada terbagi dalam
                beberapa kategori yang mencerminkan berbagai aspek budaya, alam, dan simbol-simbol penting di kota
                Malang. Setiap motif
                memiliki cerita dan filosofi tersendiri yang menggambarkan kearifan lokal serta warisan yang telah ada
                sejak abad ke-19.
            </p>
            <p class="mt-8 md:mt-12">
                {{-- <x-button-section >
                    Get Started
                 </x-button-section> --}}
                <a href="/classification-batik"
                    class="bg-blue-500 mx-auto text-white px-20 py-6 rounded-full py-2 rounded hover:bg-blue-600 transition-colors">Get
                    Started</a>
            </p>
            {{-- <p class="mt-4 text-gray-600">Sed fermentum felis ut cursu
            </p> --}}
        </div>

        <div class="lg:w-1/2 sm:w-full ">
            <img src="{{ URL::asset('image/BatikFeatures1.jpg') }}" alt="Logo Batik"
                class="w-full sm:w-1/2 lg:w-3/4 sm:mx-auto h-3/4 rounded-3xl object-cover lg:m-16 mt-10" />
        </div>
    </div>

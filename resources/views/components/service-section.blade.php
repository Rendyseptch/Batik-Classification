@props([
    'title',
    'description',
    'reverse' => false,
])

<section class="py-4" id="services">
    <div class="container mx-auto px-6 md:px-16 flex flex-col {{ $reverse ? 'lg:flex-row-reverse' : 'lg:flex-row' }} items-center gap-10">

        {{-- Text --}}
        <div class="lg:w-1/2">
            <div class="lg:pr-12 xl:pr-20">
                <h3 class="text-3xl font-semibold leading-tight">{{ $title }}</h3>
                <p class="mt-8 text-xl font-light leading-relaxed">{{ $description }}</p>
            </div>
        </div>

        {{-- Illustration --}}
        <div class="w-full lg:w-1/2">
            {{ $slot }}
        </div>
    </div>
</section>

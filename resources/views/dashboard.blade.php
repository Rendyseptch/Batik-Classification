<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batik Classification Malang</title>
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        /* Only keeping necessary custom styles, using Tailwind classes for colors */
        :root {
            --header-height: 4rem;
            --sidebar-width: 240px;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .animate-slide-down {
            animation: slideDown 0.5s ease-out;
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        .animate-slide-up {
            animation: slideUp 0.5s ease-out forwards;
        }
    </style>
</head>

<body class="bg-indigo-50 min-h-screen overflow-x-hidden">

    <div>


        <x-header-section>

        </x-header-section>

        <main class="text-gray-900">
            <section class="pt-10 md:pt-40">
                <x-hero></x-hero>
            </section>
            <section class="pt-10 md:pt-40">
                <div class="mt-20">
                    <div class="container mx-auto px-4 py-8">
                        <h1 class="text-4xl font-bold text-center mb-8">Galeri Batik Malang</h1>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                            <!-- Large item -->
                            <div class="md:col-span-2 md:row-span-2 relative overflow-hidden rounded-2xl shadow-lg group">
                                <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxuYXR1cmV8ZW58MHwwfHx8MTcyMTA0MjYwMXww&ixlib=rb-4.0.3&q=80&w=1080" alt="Nature" class="w-full h-full object-cover">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4">
                                        <h3 class="text-2xl font-bold text-white">Explore Nature</h3>
                                        <p class="text-white">Discover the beauty of the natural world</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Two small items -->
                            <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                                <img src="https://images.unsplash.com/photo-1493770348161-369560ae357d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw2fHxmb29kfGVufDB8MHx8fDE3MjEwNDI2MTR8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="Food" class="w-full h-48 object-cover">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4">
                                        <h4 class="text-xl font-bold text-white">Culinary Delights</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHx0ZWNobm9sb2d5fGVufDB8MHx8fDE3MjEwNDI2Mjh8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="Technology" class="w-full h-48 object-cover">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4">
                                        <h4 class="text-xl font-bold text-white">Tech Innovations</h4>
                                    </div>
                                </div>
                            </div>

                            <!-- Three medium items -->
                            <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                                <img src="https://images.unsplash.com/photo-1503220317375-aaad61436b1b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHx0cmF2ZWx8ZW58MHwwfHx8MTcyMTA0MjY0MXww&ixlib=rb-4.0.3&q=80&w=1080" alt="Travel" class="w-full h-48 object-cover">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4">
                                        <h4 class="text-xl font-bold text-white">Travel Adventures</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                                <img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxhcnR8ZW58MHwwfHx8MTcyMTA0MjY5Nnww&ixlib=rb-4.0.3&q=80&w=1080" alt="Art" class="w-full h-48 object-cover">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4">
                                        <h4 class="text-xl font-bold text-white">Artistic Expressions</h4>
                                    </div>
                                </div>
                            </div>

                            <!-- bottom cards -->
                            <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                                <img src="https://images.unsplash.com/photo-1530549387789-4c1017266635?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxzd2ltbWluZ3xlbnwwfDB8fHwxNzIxMDQzMjkxfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="Sport" class="w-full h-48 object-cover">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4">
                                        <h4 class="text-xl font-bold text-white">Swimming</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                                <img src="https://images.unsplash.com/photo-1611195974226-a6a9be9dd763?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMnx8Y2hlc3N8ZW58MHwwfHx8MTcyMTA0MzI0Nnww&ixlib=rb-4.0.3&q=80&w=1080" alt="Sport" class="w-full h-48 object-cover">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4">
                                        <h4 class="text-xl font-bold text-white">Chess</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                                <img src="https://images.unsplash.com/photo-1553778263-73a83bab9b0c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxmb290YmFsbHxlbnwwfDB8fHwxNzIxMDQzMjExfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="Sport" class="w-full h-48 object-cover">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4">
                                        <h4 class="text-xl font-bold text-white">Football</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                                <img src="https://images.unsplash.com/photo-1624526267942-ab0ff8a3e972?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHxjcmlja2V0fGVufDB8MHx8fDE3MjEwNDMxNTh8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="Sport" class="w-full h-48 object-cover">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4">
                                        <h4 class="text-xl font-bold text-white">Cricket</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Service of Batik classification --}}
            <section>
                {{-- Gambar di kanan (default) --}}
                <x-service-section title="Market Analysis"
                    description="Our team of enthusiastic marketers will analyse and evaluate how your company stacks against the closest competitors.">
                    <img src="{{ URL::asset('image/BatikFeatures1.JPG') }}" alt="Cover Batik"
                    class="w-3/4 h-3/4 object-cover rounded-full" />
                </x-service-section>
            </section>


            <section>
                {{-- Gambar di kiri --}}
                <x-service-section title="Strategy Planning"
                    description="We’ll help you craft a marketing plan that suits your brand goals and customer needs."
                    :reverse="true">
                    <img src="{{ URL::asset('image/BatikFeature4.JPG') }}" alt="Cover Batik"
                    class="w-3/4 h-3/4 object-cover rounded-full" />
                </x-service-section>
            </section>

                 {{-- Service of Batik classification --}}
                 <section>
                    {{-- Gambar di kanan (default) --}}
                    <x-service-section title="Market Analysis"
                        description="Our team of enthusiastic marketers will analyse and evaluate how your company stacks against the closest competitors.">
                        <img src="{{ URL::asset('image/BatikFeature3.JPG') }}" alt="Cover Batik"
                        class="w-3/4 h-3/4 object-cover rounded-full" />
                    </x-service-section>
                </section>

            <section id="testimonials" class="py-4 lg:py-10">
                <div class="container mx-auto">
                    <div class="flex items-center mt-28">
                        <div class="border-t border-4 border-gray-200 flex-grow"></div>
                        <div class="px-3 py-6 text-gray-800 font-semibold text-2xl uppercase">Fakta Mengenai Batik Malang </div>
                        <div class="border-t border-4 border-gray-200 flex-grow"></div>
                    </div>

                    <div class="flex flex-col md:flex-row md:-mx-3">
                        <x-card
                            title="Lorem ipsum dolor sit amet, consectetur adipiscing"
                            description="Eu lobortis elementum nibh tellus molestie nunc non blandit massa. Sit amet consectetur adipiscing elit duis."
                            name="Jane Doe"
                            position="Director of Research and Data"
                            image="https://placeimg.com/150/150/people"
                        />

                        <x-card
                            title="Pengaruh Budaya Topeng dalam Desain Batik"
                            description="Salah satu motif khas Batik Malang adalah Topeng Malangan, yang menggambarkan berbagai karakter topeng khas Malang. Motif ini menjadi simbol kebudayaan dan seni asli dari daerah Malang. Batik Topeng Malangan ini berkembang pesat karena pemasaran yang dilakukan oleh Rumah Batik Blimbing bekerja sama dengan pemerintah daerah, dan kini semakin dikenal luas ."
                            name="John Doe"
                            position="Director of Research and Data"
                            image="https://placeimg.com/150/150/people"
                            {{--  sumber :https://ejournal.unesa.ac.id/index.php/va/article/view/39109/34305 --}}

                        />

                        <x-card
                            title="Batik Malang sebagai Produk Ekonomi Kreatif Lokal"
                            description="Batik Malang tidak hanya berfungsi sebagai warisan budaya, tetapi juga sebagai produk ekonomi kreatif yang mendukung perekonomian lokal. Pengrajin batik di Malang mengembangkan desain-desain baru yang inovatif, seperti motif daun pakis, untuk meningkatkan daya saing produk di pasar global. Selain itu, prinsip zero waste diterapkan dalam produksi batik, di mana kain yang rusak atau kurang sempurna diolah kembali menjadi produk fungsional seperti tas dan dompet, meningkatkan nilai ekonomi produk tersebut."
                            name="Jane Smith"
                            position="Director of Research and Data"
                            image="https://placeimg.com/150/150/people"
                        />
                    </div>
                </div>
            </section>



            <section class="container mx-auto my-20 py-24 bg-gray-200 rounded-lg text-center">
                <h3 class="text-5xl font-semibold">Ready to grow your business?</h3>
                <p class="mt-8 text-xl font-light">Quis lectus nulla at volutpat diam ut. Enim lobortis scelerisque
                    fermentum dui faucibus in.
                </p>
                <p class="mt-8">
                    <x-button-section>
                        Get Started
                    </x-button-section>
                </p>
            </section>


        </main>
        <footer class="container mx-auto py-16 px-3 mt-48 mb-8 text-gray-800">
            <div class="flex -mx-3">
                <div class="flex-1 px-3">
                    <h2 class="text-lg font-semibold">About Us</h2>
                    <p class="mt-5">Ridiculus mus mauris vitae ultricies leo integer malesuada nunc.
                    </p>
                </div>
                <div class="flex-1 px-3">
                    <h2 class="text-lg font-semibold">Important Links</h2>
                    <ul class="mt-4 leading-loose">
                        <li><a href="https://codebushi.com">Terms &amp; Conditions</a></li>
                        <li><a href="https://codebushi.com">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="flex-1 px-3">
                    <h2 class="text-lg font-semibold">Social Media</h2>
                    <ul class="mt-4 leading-loose">
                        <li><a href="https://dev.to/changoman">Dev.to</a></li>
                        <li><a href="https://twitter.com/HuntaroSan">Twitter</a></li>
                        <li><a href="https://github.com/codebushi/gatsby-starter-lander">GitHub</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>

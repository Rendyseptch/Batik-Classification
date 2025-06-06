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
            <section class="pt-10 md:pt-20">
                <x-hero></x-hero>
            </section>
            <section class="pt-10 md:pt-40 px-4 sm:px-6 lg:px-20 mb-20">
                <div id="galeriBatik" class="mt-10">
                    <div class="container mx-auto px-2 sm:px-4 py-8">
                        <h1 class="text-3xl sm:text-4xl font-bold text-center mb-8">Galeri Batik Malang</h1>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            <!-- Large item -->
                            <div
                                class="sm:col-span-2 sm:row-span-2 relative overflow-hidden rounded-2xl shadow-lg group">
                                <img src="{{ URL::asset('image/Leres Pending.jpg') }}" alt="Logo Batik"
                                    class="w-full h-full object-cover">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-80 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4">
                                        <h3 class="text-xl sm:text-2xl font-bold text-white">Leres Pending</h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Other items -->
                            @foreach ([['Tugu', 'Tugu.jpg'], ['Teratai', 'Teratai.jpg'], ['Topeng', 'Topeng.jpg'], ['Biota Laut', 'Boiota Laut.jpg'], ['Sekartaji Prameswari Juwita', 'sekartajiprameswari.JPG'], ['Apel Malang', 'Apel.jpg'], ['Candi Jago', 'CandiJago.JPG'], ['Adiluhung', 'Adiluhung.jpg']] as [$title, $file])
                                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                                    <img src="{{ URL::asset('image/' . $file) }}" alt="{{ $title }}"
                                        class="w-full h-full object-cover">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-80 transition-opacity duration-300">
                                        <div class="absolute bottom-0 left-0 right-0 p-4">
                                            <h4 class="text-base sm:text-xl font-bold text-white">{{ $title }}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            {{-- Service of Batik classification --}}
            <section>
                {{-- Gambar di kanan (default) --}}
                <x-service-section title="Daya Ungkit Ekonomi dan Pasar yang Besar"
                    description=" Potensi Batik Malang menunjukkan bahwa sektor fesyen batik memberikan kontribusi yang cukup besar terhadap pertumbuhan ekonomi dan ekspor, sehingga pasar batik Malang sangat potensial untuk dikembangkan lebih lanjut.">
                    <img src="{{ URL::asset('image/BatikFeatures1.JPG') }}" alt="Cover Batik"
                        class="w-3/4 h-3/4 object-cover rounded-full" />
                </x-service-section>
            </section>


            <section>
                {{-- Gambar di kiri --}}
                <x-service-section title="Pemberdayaan dan Daya Saing Industri Kecil Menengah (IKM)"
                    description="Strategi pemberdayaan oleh Dinas Perindustrian Kota Malang yang fokus pada peningkatan sumber daya manusia,
                    pemasaran, dan perizinan telah meningkatkan daya saing IKM batik. Dampaknya positif berupa peningkatan pendapatan, terbukanya
                     lapangan kerja, dan inovasi produk"
                    :reverse="true">
                    <img src="{{ URL::asset('image/BatikFeature4.JPG') }}" alt="Cover Batik"
                        class="w-3/4 h-3/4 object-cover rounded-full" />
                </x-service-section>
            </section>

            {{-- Service of Batik classification --}}
            <section>
                {{-- Gambar di kanan (default) --}}
                <x-service-section title="Digitalisasi Publikasi dan Merambah Pada sektor pemasaran Digital"
                    description="Pemanfaatan media sosial dan platform e-commerce seperti Instagram, Facebook, WhatsApp, Tokopedia, dan Shopee. Digitalisasi ini membuka peluang pasar yang lebih luas dan membantu pelestarian kearifan lokal batik Malang melalui promosi yang lebih efektif dan interaktif">
                    <img src="{{ URL::asset('image/BatikFeature3.JPG') }}" alt="Cover Batik"
                        class="w-3/4 h-3/4 object-cover rounded-full" />
                </x-service-section>
            </section>

            <section id="testimonials" class="py-4 lg:py-10">
                <div class="container mx-auto">
                    <div class="flex items-center mt-28">
                        <div class="border-t border-4 border-gray-200 flex-grow"></div>
                        <div class="px-3 py-6 text-gray-800 font-semibold text-2xl uppercase">Fakta Mengenai Batik
                            Malang </div>
                        <div class="border-t border-4 border-gray-200 flex-grow"></div>
                    </div>

                    <div class="flex flex-col md:flex-row md:mx-20">
                        <x-card title="Warna Cerah yang Melambangkan Semangat Arek Malang"
                            description="Berbeda dari batik tradisional lainnya yang cenderung menggunakan warna gelap seperti coklat sogan, Batik Malang dikenal dengan warna-warna cerah dan berani seperti biru,
                             merah, dan hijau. Warna-warna ini dianggap mewakili jiwa muda dan semangat khas masyarakat Malang, terutama arek-arek Malang."
                            {{-- name="Jane Doe"
                            position="Director of Research and Data" --}} image="https://placeimg.com/150/150/people" />

                        <x-card title="Pengaruh Budaya Topeng dalam Desain Batik"
                            description="Salah satu motif khas Batik Malang adalah Topeng Malangan, yang menggambarkan berbagai karakter topeng khas Malang. Motif ini menjadi simbol kebudayaan dan seni asli dari daerah Malang. Batik Topeng Malangan ini berkembang pesat karena pemasaran yang dilakukan oleh Rumah Batik Blimbing bekerja sama dengan pemerintah daerah, dan kini semakin dikenal luas ."
                            {{-- name="John Doe" --}} {{-- position="Director of Research and Data" --}} image="https://placeimg.com/150/150/people"
                            {{--  sumber :https://ejournal.unesa.ac.id/index.php/va/article/view/39109/34305 --}} />

                        <x-card title="Batik Malang sebagai Produk Ekonomi Kreatif Lokal"
                            description="Batik Malang tidak hanya berfungsi sebagai warisan budaya, tetapi juga sebagai produk ekonomi kreatif yang mendukung perekonomian lokal. Pengrajin batik di Malang mengembangkan desain-desain baru yang inovatif, seperti motif daun pakis, untuk meningkatkan daya saing produk di pasar global. Selain itu, prinsip zero waste diterapkan dalam produksi batik, di mana kain yang rusak atau kurang sempurna diolah kembali menjadi produk fungsional seperti tas dan dompet, meningkatkan nilai ekonomi produk tersebut."
                            {{-- name="Jane Smith"
                            position="Director of Research and Data" --}} image="https://placeimg.com/150/150/people" />
                    </div>
                </div>
            </section>


        </main>

    </div>
    <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full  md:px-24 lg:px-8">
        <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
            <div class="sm:col-span-2">
                <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                    <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round"
                        stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor"
                        fill="none">
                        <rect x="3" y="1" width="7" height="12"></rect>
                        <rect x="3" y="17" width="7" height="6"></rect>
                        <rect x="14" y="1" width="7" height="6"></rect>
                        <rect x="14" y="11" width="7" height="12"></rect>
                    </svg>
                    <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Batik Malang</span>
                </a>
                <div class="mt-6 lg:max-w-sm">
                    <p class="text-sm text-gray-800">
                        Batik Malang adalah platform untuk mengenal dan mengklasifikasikan motif batik khas Malang
                        secara digital.
                    </p>
                    <p class="mt-4 text-sm text-gray-800">
                        Dalam Pengembangan sistem klasifikasi Batik Malang, kami mengkombinasikan teknologi
                         serta Berkolaborasi bersama Batik Blimbing, Batik Soendari, dan Rumah Seni Budaya Singhasari dalam upaya pelestarian batik khas Malang.


                    </p>
                </div>
            </div>
            <div class="space-y-2 text-sm">
                <p class="text-base font-bold tracking-wide text-gray-900">Batik Industrial Center in Colaborated</p>
                </p>
                <div class="flex flex-col">
                    <p class="mb-1 text-gray-800">Batik Blimbing</p>
                    <p class="mb-1 text-gray-800">Batik Soendari</p>
                    <p class="mb-1 text-gray-800">Rumah Seni Budaya Singhasari</p>
                </div>


            </div>
            
        </div>
        <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
            <p class="text-sm text-gray-600">
                © Copyright 2025 Batik Malang Detection - All rights reserved.
            </p>

        </div>
    </div>
</body>

</html>

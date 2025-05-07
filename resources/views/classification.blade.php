<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batik Classification Malang</title>
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .rotate-gradient {
            animation: spin 4s linear infinite;
            animation-timing-function: linear;
            /* Ensure constant speed */
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
    <x-header-section></x-header-section>
</head>

<body class="min-h-screen   ">

    <div>
        <div class="bg bg-gray-100 pb-6 ">
            <x-breadcrumbs :items="[['label' => 'Home', 'url' => '/'], ['label' => 'Klasifikasi Batik']]" />
        </div>

        <div class="px-4 relative  transform -translate-y-1/2">
            <div class="relative z-50  max-w-5xl mx-auto rounded-lg overflow-hidden border-white border-4  ">
                <!-- Background Image -->
                <div class="absolute inset-0">
                    <img src="{{ URL::asset('image/Batik_cover.JPG') }}" alt="Cover Batik"
                        class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-blue-500 opacity-40"></div> <!-- Yellow shading -->
                </div>

                <!-- Text Content -->
                <div class="relative px-14 py-6 flex items-center justify-center">
                    <h1
                        class="lg:text-4xl md:text-sm text-white text-shadow-black lg:text-5xl xl:text-6xl font-bold leading-none text-center text-black ">
                        Klasifikasi Batik Malang
                    </h1>
                </div>
            </div>
        </div>

        <section>
            <div>
                <h2 class=" max-w-7xl mx-auto text-xl font-semibold text-gray-400 font-sans ">
                    Scan Motif Batik Atau Aploud Gambar untuk Mengenali batik anda
                </h2>
            </div>

            <div class="flex items-center justify-center space-x-4 w-full my-10">
                <x-button-section variant="shimmer" iconGap="-2" shimmerBg="black"
                    icon="<svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2'>
                    <path stroke-linecap='round' stroke-linejoin='round' d='M3 7h4l2-3h6l2 3h4a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2z'/>
                    <circle cx='12' cy='13' r='3'/>
                </svg>"
                    gap class="bg-gray-100">
                    Scan
                </x-button-section>


                <div class="relative">
                    <label title="Click to upload" for="button2"
                        class="cursor-pointer flex items-center gap-4 px-6 py-4 before:border-gray-400/60 hover:before:border-gray-300 group before:bg-gray-100 before:absolute before:inset-0 before:rounded-3xl before:border before:border-dashed before:transition-transform before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                        <div class="w-max relative">
                            <img class="w-12" src="https://www.svgrepo.com/show/485545/upload-cicle.svg"
                                alt="file upload icon" width="512" height="512">
                        </div>
                        <div class="relative">
                            <span
                                class="block text-base font-semibold relative text-blue-900 group-hover:text-blue-500">
                                Upload a file
                            </span>
                            <span class="mt-0.5 block text-sm text-gray-500">Max 2 MB</span>
                        </div>
                    </label>
                    <input hidden="" type="file" name="button2" id="button2">
                </div>
            </div>
        </section>

        {{-- Hasil Klasifikasi motif batik --}}
        <section>
            <div class="py-40 ">
                <div class="flex items-center mt-28">
                    <div class="border-t border-4 border-gray-200 flex-grow"></div>
                    <div class="px-3 py-6 text-gray-800 font-bold text-2xl">Hasil Klasifikasi Batik </div>
                    <div class="border-t border-4 border-gray-200 flex-grow"></div>
                </div>

                <h2 class=" max-w-7xl mx-auto text-xl font-semibold text-gray-400 font-sans text-center">
                    Prediksi Motif Batik :
                    <span class="text-blue-600 text-2xl"> Batik Leres Pending</span>
                </h2>
                <div class="mx-6 gap-4 flex justify-center  ">
                    <div class=" justify-center ">
                        <h2 class="italic text-gray-400 ">Tingkat Confidence :
                            <span class="  text-xl"> 0.99</span>
                        </h2>
                    </div>
                    <span class="text-gray-400"> | </span>
                    <div class="justify-center ">
                        <h2 class="italic text-gray-400 ">Waktu Prediksi :
                            <span class="  text-xl"> 38.5 <span>s</span></span>
                        </h2>
                    </div>
                </div>
            </div>
        </section>




</body>

</html>

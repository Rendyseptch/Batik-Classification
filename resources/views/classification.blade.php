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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
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

<body class="min-h-screen bg-gray-50">
    <div>
        <div class="bg-gray-100 pb-6">
            <x-breadcrumbs :items="[['label' => 'Home', 'url' => '/'], ['label' => 'Klasifikasi Batik']]" />
        </div>

        <div class="px-4 relative transform -translate-y-1/2">
            <div class="relative z-50 max-w-5xl mx-auto rounded-lg overflow-hidden border-white border-4">
                <!-- Background Image -->
                <div class="absolute inset-0">
                    <img src="{{ asset('image/Batik_cover.JPG') }}" alt="Cover Batik"
                        class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-blue-500 opacity-40"></div>
                </div>

                <!-- Text Content -->
                <div class="relative px-14 py-6 flex items-center justify-center">
                    <h1 class="lg:text-4xl md:text-sm text-white text-shadow-black lg:text-5xl xl:text-6xl font-bold leading-none text-center">
                        Klasifikasi Batik Malang
                    </h1>
                </div>
            </div>
        </div>

        <section class="mt-16">
            <div class="max-w-7xl mx-auto text-center">
                <h2 class="text-xl font-semibold text-gray-400 font-sans">
                    Scan Motif Batik Atau Upload Gambar untuk Mengenali Batik Anda
                </h2>
            </div>

            <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-8 w-full my-10 px-4">
                <!-- Tombol Scan Kamera -->
                <button id="openCameraBtn" class="flex items-center gap-2 px-6 py-4 bg-blue-500 text-white rounded-3xl hover:bg-blue-600 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Buka Kamera
                </button>

                <!-- Modal Kamera -->
                <div id="cameraModal" class="hidden fixed inset-0 bg-black bg-opacity-75 z-50 flex items-center justify-center">
                    <div class="bg-white rounded-lg p-4 w-full max-w-md">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold">Ambil Foto</h3>
                            <button id="closeCameraBtn" class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <div class="relative">
                            <video id="cameraFeed" class="w-full rounded-lg" autoplay playsinline></video>
                            <canvas id="cameraCanvas" class="hidden"></canvas>
                        </div>

                        <div class="mt-4 flex justify-center">
                            <button id="captureBtn" class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 transition-colors">
                                Ambil Foto
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Upload Button -->
                <div class="relative">
                    <label title="Click to upload" for="imageUpload"
                        class="cursor-pointer flex items-center gap-4 px-6 py-4 before:border-gray-400/60 hover:before:border-gray-300 group before:bg-gray-100 before:absolute before:inset-0 before:rounded-3xl before:border before:border-dashed before:transition-transform before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                        <div class="w-max relative">
                            <img class="w-12" src="https://www.svgrepo.com/show/485545/upload-cicle.svg" alt="file upload icon">
                        </div>
                        <div class="relative">
                            <span class="block text-base font-semibold relative text-blue-900 group-hover:text-blue-500">
                                Upload Gambar
                            </span>
                            <span class="mt-0.5 block text-sm text-gray-500">Max 2 MB</span>
                        </div>
                    </label>
                    <input hidden type="file" name="image" id="imageUpload" accept="image/png, image/jpeg, image/jpg, image/gif">
                </div>
            </div>

            <!-- Results Section -->
            <div id="resultsSection" class="hidden max-w-4xl mx-auto px-4 py-8">
                <div id="classificationResult" class="bg-white rounded-lg shadow-lg p-6"></div>
            </div>

            <!-- Default Results (Loading) -->
            <div id="defaultResults" class="max-w-4xl mx-auto px-4 py-8 text-center text-gray-500">
                <p>Hasil klasifikasi akan muncul di sini setelah Anda mengupload gambar atau mengambil foto.</p>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Variabel global
            let stream = null;
            const imageUpload = document.getElementById('imageUpload');
            const openCameraBtn = document.getElementById('openCameraBtn');
            const closeCameraBtn = document.getElementById('closeCameraBtn');
            const captureBtn = document.getElementById('captureBtn');
            const cameraModal = document.getElementById('cameraModal');
            const cameraFeed = document.getElementById('cameraFeed');
            const cameraCanvas = document.getElementById('cameraCanvas');
            const resultsSection = document.getElementById('resultsSection');
            const defaultResults = document.getElementById('defaultResults');
            const classificationResult = document.getElementById('classificationResult');

            // Fungsi untuk menampilkan hasil
            function showResults(data) {
            if (data.success) {
                // Format confidence dengan 2 digit desimal dan koma sebagai separator
                const formatConfidence = (percentage) => {
                    // Konversi string percentage ke number dan format
                    const num = typeof percentage === 'string'
                        ? parseFloat(percentage.replace('%', ''))
                        : percentage;
                    return num.toLocaleString('id-ID', {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    }) + '%';
                };
                    const topPrediction = data.data.top_predictions[0];
                    const otherPredictions = data.data.top_predictions.slice(1);

                    classificationResult.innerHTML = `
                        <div class="bg-white rounded-lg shadow-md p-6 animate-slide-up">
                            <h2 class="text-xl font-semibold text-gray-800 text-center mb-4">
                                Prediksi Motif Batik:
                                <span class="text-blue-600">${topPrediction.class_name}</span>
                            </h2>

                            <div class="flex flex-col md:flex-row justify-center items-center gap-4 mb-6">
                                <div class="text-center">
                                    <p class="text-gray-500">Tingkat Confidence:</p>
                                    <p class="text-xl font-semibold">${topPrediction.confidence_percentage}</p>
                                </div>
                                <div class="hidden md:block text-gray-400">|</div>
                                <div class="text-center">
                                    <p class="text-gray-500">Waktu Prediksi:</p>
                                    <p class="text-xl font-semibold">${data.data.performance_metrics.processing_time_ms} ms</p>
                                </div>
                                <div class="hidden md:block text-gray-400">|</div>
                                <div class="text-center">
                                    <p class="text-gray-500">Memori Digunakan:</p>
                                    <p class="text-xl font-semibold">${data.data.performance_metrics.memory_usage_mb} MB</p>
                                </div>
                            </div>

                            ${otherPredictions.length > 0 ? `
                            <div class="mt-6 border-t pt-4">
                                <h3 class="text-lg font-medium text-gray-700 text-center mb-3">Prediksi lainnya:</h3>
                                <ul class="space-y-2 max-w-md mx-auto">
                                    ${otherPredictions.map(pred => `
                                        <li class="flex justify-between items-center bg-gray-50 p-3 rounded-lg">
                                            <span class="text-gray-700">${pred.class_name}</span>
                                            <span class="text-gray-500 text-sm bg-white px-2 py-1 rounded">${pred.confidence_percentage}</span>
                                        </li>
                                    `).join('')}
                                </ul>
                            </div>
                            ` : ''}

                            <div class="mt-6 pt-4 border-t text-center">
                                <button id="tryAgainBtn" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors">
                                    Coba Lagi
                                </button>
                            </div>
                        </div>
                    `;

                    // Tambahkan event listener untuk tombol coba lagi
                    document.getElementById('tryAgainBtn').addEventListener('click', function() {
                        resultsSection.classList.add('hidden');
                        defaultResults.classList.remove('hidden');
                        imageUpload.value = ''; // Reset file input
                    });
                } else {
                    classificationResult.innerHTML = `
                        <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-red-700">${data.error || 'Gagal memproses gambar'}</p>
                                </div>
                            </div>
                        </div>
                    `;
                }
            }

            // Fungsi untuk mengirim gambar ke API
            async function sendImageToAPI(imageData, isFile = true) {
                defaultResults.classList.add('hidden');
                resultsSection.classList.remove('hidden');
                classificationResult.innerHTML = `
                    <div class="text-center py-8">
                        <div class="inline-block animate-spin rounded-full h-8 w-8 border-t-2 border-b-2 border-blue-500"></div>
                        <p class="mt-2 text-gray-600">Memproses gambar...</p>
                    </div>
                `;

                try {
                    const formData = new FormData();
                    const url = isFile ? '/classify' : '/scan';

                    if (isFile) {
                        formData.append('image', imageData);
                    } else {
                        // For camera capture (base64)
                        const response = await fetch('/scan', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify({ image: imageData })
                        });

                        const data = await response.json();
                        showResults(data);
                        return;
                    }

                    const response = await fetch(url, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: isFile ? formData : JSON.stringify({ image: imageData })
                    });

                    const data = await response.json();
                    showResults(data);
                } catch (error) {
                    classificationResult.innerHTML = `
                        <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded">
                            <p class="text-sm text-red-700">Error: ${error.message || 'Terjadi kesalahan'}</p>
                        </div>
                    `;
                }
            }

            // Event listener untuk upload gambar
            imageUpload.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (!file) return;

                // Validasi tipe file
                const validTypes = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];
                if (!validTypes.includes(file.type)) {
                    alert('Hanya file gambar (PNG, JPG, JPEG, GIF) yang diperbolehkan');
                    return;
                }

                sendImageToAPI(file);
            });

            // Event listener untuk tombol buka kamera
            openCameraBtn.addEventListener('click', async function() {
                try {
                    cameraModal.classList.remove('hidden');
                    stream = await navigator.mediaDevices.getUserMedia({
                        video: {
                            facingMode: 'environment' // Gunakan kamera belakang
                        },
                        audio: false
                    });
                    cameraFeed.srcObject = stream;
                } catch (err) {
                    console.error("Error accessing camera:", err);
                    alert('Tidak dapat mengakses kamera. Pastikan izin kamera telah diberikan.');
                }
            });

            // Event listener untuk tombol tutup kamera
            closeCameraBtn.addEventListener('click', function() {
                cameraModal.classList.add('hidden');
                if (stream) {
                    stream.getTracks().forEach(track => track.stop());
                    stream = null;
                }
            });

            // Event listener untuk tombol ambil foto
            captureBtn.addEventListener('click', function() {
                // Set ukuran canvas sama dengan video
                cameraCanvas.width = cameraFeed.videoWidth;
                cameraCanvas.height = cameraFeed.videoHeight;

                // Gambar frame video ke canvas
                const context = cameraCanvas.getContext('2d');
                context.drawImage(cameraFeed, 0, 0, cameraCanvas.width, cameraCanvas.height);

                // Konversi canvas ke base64
                const imageData = cameraCanvas.toDataURL('image/jpeg', 0.9);

                // Tutup modal kamera
                cameraModal.classList.add('hidden');
                if (stream) {
                    stream.getTracks().forEach(track => track.stop());
                    stream = null;
                }

                // Kirim gambar ke API
                sendImageToAPI(imageData, false);
            });
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WeNews</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="/build/assets/app-4yj9CmAe.css">
    <script src="/build/assets/app-Bf4POITK.js" defer></script>
</head>

<body>
    <header class="absolute inset-x-0 top-0 z-50">
        <x-navbar></x-navbar>
    </header>

    <!-- Main Content -->
    <div class="relative px-6 pt-45 lg:px-8">
        <div class="max-w-7xl mx-auto text-center">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <!-- Left Side - Berita -->
                <div class="lg:w-1/2 text-left p-6">
                    <h2 class="text-3xl font-bold text-red-500">Hot News</h2>
                    <div class="flex space-x-2 mt-4">
                        <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                        <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                    </div>
                    <h3 class="text-2xl font-semibold mt-2">{{ $mainNews->judul ?? 'Judul Berita Utama' }}</h3>
                    <p class="mt-4 text-lg text-gray-700">{{ $mainNews->konten ?? 'Deskripsi berita utama...' }}</p>
                </div>

                <!-- Right Side - Image -->
                <div class="lg:w-1/2 mt-8 lg:mt-0 p-6 flex flex-col items-start">
                    <img class="rounded-lg shadow-lg"
                        src="{{ $mainNews->gambar_url ?? asset('assets/img/sample.jpg') }}" alt="Hot News Image">

                    <!-- Arrow Icon and Text aligned to the right -->
                    <div class="flex items-center justify-start mt-4 ml-auto space-x-2">
                        <a href="{{ $mainNews ? route('news.show', ['id' => $mainNews->id]) : '#' }}"
                            class="flex items-center space-x-2">
                            <span class="text-lg font-semibold text-gray-700">Baca Selengkapnya</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-yellow-500 h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="text-center py-4 mt-40">
        <h3 class="text-2xl font-semibold">Berita Terkini</h3>
    </div>

    {{-- <!-- Section with Text Above Image (with Left Align and Center Image) -->
    <div class="relative px-6 pt-8 lg:px-8 mt-8">
        <div class="max-w-7xl mx-auto text-left"> <!-- Align text left -->
            <div class="flex flex-col items-start"> <!-- Align text left -->
                <!-- Text Above Image -->
                <h2 class="text-2xl font-semibold mt-2">Terungkap! Alasan Dibalik Turunnya Harga Properti di Jakarta
                    Tahun Ini</h2>
                <div class="flex space-x-2 mt-4">
                    <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                    <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                </div>
                <p class="mt-4 text-lg text-gray-700">Penurunan harga properti di Jakarta selama beberapa bulan terakhir
                    mengejutkan banyak pihak. Artikel ini mengungkapkan faktor-faktor yang menyebabkan hal tersebut dan
                    apa dampaknya bagi pasar properti.</p>

                <!-- Image Below Text (Center image) -->
                <div class="lg:w-1/2 mt-8 mx-auto"> <!-- Center image -->
                    <img class="rounded-lg shadow-lg" src="assets/img/sample.jpg" alt="New Image">

                    <!-- Baca Selengkapnya text aligned to the bottom right -->
                    <div class="flex items-center justify-end mt-4"> <!-- Align text to the right -->
                        <a href="{{ route('news') }}" class="flex items-center space-x-2">
                            <span class="text-lg font-semibold text-gray-700">Baca Selengkapnya</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-yellow-500 h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Section with Text Above Image (with Left Align and Center Image) -->
    <div class="relative px-6 pt-8 lg:px-8 mt-24">
        <div class="max-w-7xl mx-auto text-left"> <!-- Align text left -->
            <div class="flex flex-col items-start"> <!-- Align text left -->
                <!-- Text Above Image -->
                <h2 class="text-2xl font-semibold mt-2">Terungkap! Alasan Dibalik Turunnya Harga Properti di Jakarta
                    Tahun Ini</h2>
                <div class="flex space-x-2 mt-4">
                    <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                    <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                </div>
                <p class="mt-4 text-lg text-gray-700">Penurunan harga properti di Jakarta selama beberapa bulan
                    terakhir mengejutkan banyak pihak. Artikel ini mengungkapkan faktor-faktor yang menyebabkan hal
                    tersebut dan apa dampaknya bagi pasar properti.</p>

                <!-- Image Below Text (Center image) -->
                <div class="lg:w-1/2 mt-8 mx-auto"> <!-- Center image -->
                    <img class="rounded-lg shadow-lg" src="assets/img/sample.jpg" alt="New Image">

                    <!-- Baca Selengkapnya text aligned to the bottom right -->
                    <div class="flex items-center justify-end mt-4"> <!-- Align text to the right -->
                        <a href="{{ route('news') }}" class="flex items-center space-x-2">
                            <span class="text-lg font-semibold text-gray-700">Baca Selengkapnya</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-yellow-500 h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="relative px-6 pt-8 lg:px-8 mt-24">
        <div class="max-w-7xl mx-auto text-left"> <!-- Align text left -->
            <div class="flex flex-col items-start"> <!-- Align text left -->
                <!-- Text Above Image -->
                <h2 class="text-2xl font-semibold mt-2">Terungkap! Alasan Dibalik Turunnya Harga Properti di Jakarta
                    Tahun Ini</h2>
                <div class="flex space-x-2 mt-4">
                    <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                    <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                </div>
                <p class="mt-4 text-lg text-gray-700">Penurunan harga properti di Jakarta selama beberapa bulan
                    terakhir mengejutkan banyak pihak. Artikel ini mengungkapkan faktor-faktor yang menyebabkan hal
                    tersebut dan apa dampaknya bagi pasar properti.</p>

                <!-- Image Below Text (Center image) -->
                <div class="lg:w-1/2 mt-8 mx-auto"> <!-- Center image -->
                    <img class="rounded-lg shadow-lg" src="assets/img/sample.jpg" alt="New Image">

                    <!-- Baca Selengkapnya text aligned to the bottom right -->
                    <div class="flex items-center justify-end mt-4"> <!-- Align text to the right -->
                        <a href="{{ route('news') }}" class="flex items-center space-x-2">
                            <span class="text-lg font-semibold text-gray-700">Baca Selengkapnya</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-yellow-500 h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="text-center py-4 mt-25">
        <h3 class="text-2xl font-semibold">Lihat Berita Lainnya > </h3>
    </div> --}}

    <!-- Displaying Berita -->
    <div id="newsContainer">
        <div class="relative px-6 pt-8 lg:px-8 mt-8">
            <div class="max-w-7xl mx-auto text-left">
                <!-- Looping through Berita -->
                @foreach ($berita as $beritaItem)
                    <div class="flex flex-col items-start mb-8">

                        <h2 class="text-2xl font-semibold mt-2">{{ $beritaItem->judul }}</h2>
                        <div class="flex space-x-2 mt-4">
                            <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                            <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                        </div>
                        <p class="mt-4 text-lg text-gray-700">{{ $beritaItem->konten }}</p>

                        <!-- Image Below Text (Center image) -->
                        <div class="lg:w-1/2 mt-8 mx-auto">
                            <img class="rounded-lg shadow-md" src="{{ $beritaItem->gambar_url }}"
                                alt="Image for {{ $beritaItem->judul }}">

                            <div class="flex items-center justify-end mt-4">
                                <a href="{{ route('news.show', ['id' => $beritaItem->id]) }}"
                                    class="flex items-center space-x-2">
                                    <span class="text-lg font-semibold text-gray-700">Baca Selengkapnya</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-yellow-500 h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="text-center mt-8">
        <button id="loadMore" class="text-lg font-semibold text-gray-700">Baca Berita Lainnya</button>
        <div id="spinner" class="hidden mt-4">
            <svg class="animate-spin h-6 w-6 text-yellow-500 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                </circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z">
                </path>
            </svg>
        </div>
    </div>

    <x-social></x-social>


    <footer class="bg-gray-900 text-white py-12">
        <x-footer></x-footer>
    </footer>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let beritaCount = 5;

        $("#loadMore").click(function() {
            $("#loadMore").addClass("hidden");
            $("#spinner").removeClass("hidden");

            $.ajax({
                url: "/othernews",
                type: "GET",
                data: {
                    ajax: true,
                    section: "othernews",
                    offset: beritaCount
                },
                success: function(response) {
                    $("#newsContainer").append(response);
                    beritaCount += 5;

                    // Restore tombol dan sembunyikan loading
                    $("#loadMore").removeClass("hidden");
                    $("#spinner").addClass("hidden");
                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);
                    $("#spinner").addClass("hidden");
                    $("#loadMore").removeClass("hidden").text("Gagal memuat berita");
                }
            });
        });
    </script>


</body>

</html>

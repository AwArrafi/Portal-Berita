<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>News</title>
</head>

<body>
    <header class="absolute inset-x-0 top-0 z-50">
        <x-navbar></x-navbar>
    </header>

    <!-- Main Content Other News -->
    <!-- Main Content Other News -->
    <div class="relative px-6 pt-45 lg:px-8">
        <div class="max-w-7xl mx-auto text-left">
            <!-- Judul & Info Berita Utama -->
            <div class="p-6">
                <div class="flex space-x-2 mt-4">
                    <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                    <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                </div>
                <h2 class="text-3xl font-bold mt-2">{{ $mainNews->judul }}</h2>
                <p class="text-lg mt-2">{{ \Carbon\Carbon::parse($mainNews->created_at)->format('d F Y') }}</p>
            </div>

            <!-- Gambar Berita Utama -->
            <div class="w-full mt-8 p-6 flex flex-col items-start">
                <img class="rounded-md shadow-md w-full max-w-xl" src="{{ $mainNews->gambar_url }}"
                    alt="Image for {{ $mainNews->judul }}">
            </div>

            <!-- Deskripsi Berita Utama -->
            <div class="p-6">
                <p class="mt-4 text-lg">{{ $mainNews->konten }}</p>

                <!-- Tombol Baca Selengkapnya Mirip Looping -->
                <div class="mt-4">
                    <a href="{{ route('news.show', ['id' => $mainNews->id]) }}"
                        class="text-yellow-500 font-semibold inline-block">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- List Berita Lainnya -->
    <div class="relative px-6 pt-8 lg:px-8 mt-8">
        <div class="max-w-7xl mx-auto text-left">
            @foreach ($berita as $beritaItem)
                <div class="flex flex-col lg:flex-row items-center mb-25">
                    <div class="lg:w-1/4">
                        <img class="rounded-md shadow-md w-full" src="{{ $beritaItem->gambar_url }}"
                            alt="Image for {{ $beritaItem->judul }}">
                    </div>
                    <div class="lg:w-3/4 lg:pl-8 mt-4 lg:mt-0">
                        <div class="flex space-x-2 mb-4">
                            <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                            <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                        </div>
                        <p class="text-sm text-gray-500">
                            {{ \Carbon\Carbon::parse($beritaItem->created_at)->format('d F Y') }}</p>
                        <h2 class="text-xl font-semibold mt-2">{{ $beritaItem->judul }}</h2>
                        <p class="mt-4 text-lg text-gray-700">{{ \Str::limit($beritaItem->konten, 150) }}</p>
                        <div class="mt-4">
                            <a href="{{ route('news.show', ['id' => $beritaItem->id]) }}"
                                class="text-yellow-500 font-semibold inline-block">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <div class="relative px-6 pt-8 lg:px-8 mt-8">
        <div class="max-w-7xl mx-auto text-left">
            <!-- Looping through Berita -->
            @foreach ($berita as $beritaItem)
                <div class="flex flex-col lg:flex-row items-center mb-25">
                    <!-- Left Side: Image -->
                    <div class="lg:w-1/4">
                        <img class="rounded-md shadow-md w-full" src="{{ $beritaItem->gambar_url }}"
                            alt="Image for {{ $beritaItem->judul }}">
                    </div>

                    <!-- Right Side: Content -->
                    <div class="lg:w-3/4 lg:pl-8 mt-4 lg:mt-0">
                        <div class="flex space-x-2 mb-4">
                            <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                            <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                        </div>
                        <p class="text-sm text-gray-500">
                            {{ \Carbon\Carbon::parse($beritaItem->created_at)->format('d F Y') }}</p>
                        <h2 class="text-xl font-semibold mt-2">{{ $beritaItem->judul }}</h2>
                        <p class="mt-4 text-lg text-gray-700">{{ \Str::limit($beritaItem->konten, 150) }}</p>

                        <!-- Baca Selengkapnya text aligned to the left below the content -->
                        <div class="mt-4">
                            <a href="{{ route('news.show', ['id' => $beritaItem->id]) }}"
                                class="text-yellow-500 font-semibold inline-block">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div id="otherNewsContainer">
        <div class="relative px-6 pt-8 lg:px-8 mt-8">
            <div class="max-w-7xl mx-auto text-left">
                <div id="newsLoadSection">
                    @foreach ($berita as $beritaItem)
                        @include('partials.othernews', ['beritaItem' => $beritaItem])
                    @endforeach
                </div>
            </div>
            <!-- Tombol "Berita Lainnya" -->
            <div class="text-center mt-6">
                <button id="loadMore" class="text-lg font-semibold text-yellow-600">Baca Berita Lainnya</button>
                <div id="spinner" class="hidden mt-4">
                    <svg class="animate-spin h-6 w-6 text-yellow-500 mx-auto" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                    </svg>
                </div>
            </div>
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
                // ...
                success: function(response) {
                    $("#newsLoadSection").append(response);
                    $("#loadMore").removeClass("hidden");
                    $("#spinner").addClass("hidden");
                },
                error: function() {
                    $("#loadMore").removeClass("hidden").text("Gagal memuat berita");
                    $("#spinner").addClass("hidden");
                },
            });
        });
    </script>
</body>

</html>

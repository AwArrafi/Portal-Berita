<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/build/assets/app-4yj9CmAe.css">
    <script src="/build/assets/app-Bf4POITK.js" defer></script>
    <title>Detail Berita</title>
</head>

<body>
    <header class="absolute inset-x-0 top-0 z-50">
        <x-navbar></x-navbar>
    </header>

    <div class="relative px-6 pt-45 lg:px-8">
        <div class="max-w-7xl mx-auto text-left">
            <div class="p-6">
                <h2 class="text-3xl font-bold">{{ $berita->judul }}</h2>
                <p class="text-lg mt-2">{{ \Carbon\Carbon::parse($berita->created_at)->format('d F Y') }}</p>
            </div>

            <div class="w-full mt-8 p-6 flex flex-col items-start">
                <img class="rounded-lg shadow-lg news-image" src="{{ $berita->gambar_url }}"
                    alt="Image for {{ $berita->judul }}">
            </div>

            <div class="p-6">
                <p class="mt-4 text-lg">{{ $berita->konten }}</p>
            </div>
        </div>
        <!-- Komentar Section -->
        <x-comments :berita="$berita"></x-comments>
    </div>

    <footer class="bg-gray-900 text-white py-12">
        <x-footer></x-footer>
    </footer>
</body>

</html>

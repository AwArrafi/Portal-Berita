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
                class="text-yellow-500 font-semibold inline-block">
                Baca Selengkapnya
            </a>
        </div>
    </div>
</div>

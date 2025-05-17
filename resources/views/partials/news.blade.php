@foreach ($berita as $beritaItem)
    <div class="relative px-6 pt-8 lg:px-8 mt-8">
        <div class="max-w-7xl mx-auto text-left">
            <h2 class="text-2xl font-semibold mt-2">{{ $beritaItem->judul }}</h2>
            <div class="flex space-x-2 mt-4">
                <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
            </div>
            <p class="mt-4 text-lg text-gray-700">{{ $beritaItem->konten }}</p>

            <div class="lg:w-1/2 mt-8 mx-auto">
                <img class="rounded-lg shadow-md" src="{{ $beritaItem->gambar_url }}"
                    alt="Image for {{ $beritaItem->judul }}">

                <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('news.show', ['id' => $beritaItem->id]) }}" class="flex items-center space-x-2">
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
@endforeach

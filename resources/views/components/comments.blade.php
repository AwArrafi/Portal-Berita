<!-- Komentar Section -->
<div class="p-6 mt-1">
    <label for="comment" class="block text-xl font-semibold text-gray-900">Komentar</label>

    <!-- Form Komentar -->
    <form action="{{ route('komentar.store') }}" method="POST" class="relative">
        @csrf
        <textarea name="komentar" rows="4"
            class="mt-2 p-4 w-full border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-700 focus:border-gray-700"
            placeholder="Tulis komentar Anda di sini"></textarea>

        <button type="submit"
            class="absolute right-4 -bottom-12 bg-gray-700 text-white px-6 py-2 rounded-lg shadow-md hover:bg-gray-700 transition">
            Kirim Komentar
        </button>
    </form>


    <!-- Daftar Komentar -->
    <div class="mt-20">
        @foreach (\App\Models\Komentar::latest()->get() as $komen)
            <div class="flex items-start space-x-4 mb-4">
                <img src="https://i.pravatar.cc/100?u={{ $komen->user_id }}" alt="User"
                    class="w-10 h-10 rounded-full border-2 border-gray-400">
                <div class="flex-1">
                    <p class="font-semibold text-gray-900">{{ $komen->user->username ?? 'Anonim' }}</p>
                    <p class="text-sm text-gray-600">{{ $komen->komentar }}</p>
                </div>
            </div>
        @endforeach
    </div>


</div>

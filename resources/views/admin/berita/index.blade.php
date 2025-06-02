@extends('admin.layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Berita</h1>

    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Judul</th>
                <th class="px-4 py-2 border">Konten</th>
                <th class="px-4 py-2 border">Gambar</th>
                <th class="px-4 py-2 border">URL</th>
                <th class="px-4 py-2 border">Created At</th>
                <th class="px-4 py-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($berita as $item)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border">{{ $item->id }}</td>
                    <td class="px-4 py-2 border">{{ $item->judul }}</td>
                    <td class="px-4 py-2 border">{{ \Illuminate\Support\Str::limit($item->konten, 50) }}</td>
                    <td class="px-4 py-2 border">
                        @if ($item->gambar_url)
                            <img src="{{ $item->gambar_url }}" alt="Gambar" class="w-20 h-auto">
                        @else
                            <span class="text-gray-500">-</span>
                        @endif
                    </td>
                    <td class="px-4 py-2 border">
                        <a href="{{ $item->url }}" class="text-blue-600 hover:underline" target="_blank">Link</a>
                    </td>
                    <td class="px-4 py-2 border">{{ $item->created_at->format('d-m-Y H:i') }}</td>
                    <td class="px-4 py-2 border text-center">
                        <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus berita ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-6">
        {{ $berita->links() }}
    </div>
@endsection

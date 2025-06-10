@extends('admin.layouts.app')

@section('title', 'Tambah Berita')
@section('page-title', 'Tambah Berita')

@section('content')
    <div class="w-full max-w-6xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-6 border-b pb-2">Form Tambah Berita</h2>

        @if ($errors->any())
            <div class="mb-6 bg-red-100 text-red-700 p-4 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.berita.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="judul" class="block mb-1 font-medium text-gray-700">Judul Berita</label>
                <input type="text" id="judul" name="judul" value="{{ old('judul') }}"
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    placeholder="Masukkan judul berita" required />
            </div>

            <div>
                <label for="konten" class="block mb-1 font-medium text-gray-700">Konten Berita</label>
                <textarea id="konten" name="konten" rows="6" placeholder="Masukkan isi berita"
                    class="w-full border border-gray-300 rounded-md px-4 py-2 resize-y focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    required>{{ old('konten') }}</textarea>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label for="penulis" class="block mb-1 font-medium text-gray-700">Penulis</label>
                    <input type="text" id="penulis" name="penulis" value="{{ old('penulis') }}"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="Nama penulis (opsional)" />
                </div>
                <div>
                    <label for="sumber" class="block mb-1 font-medium text-gray-700">Sumber</label>
                    <input type="text" id="sumber" name="sumber" value="{{ old('sumber') }}"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="Sumber berita (opsional)" />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label for="url" class="block mb-1 font-medium text-gray-700">URL Berita</label>
                    <input type="url" id="url" name="url" value="{{ old('url') }}"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="Link berita (opsional)" />
                </div>
                <div>
                    <label for="gambar_url" class="block mb-1 font-medium text-gray-700">URL Gambar</label>
                    <input type="url" id="gambar_url" name="gambar_url" value="{{ old('gambar_url') }}"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="Link gambar (opsional)" />
                </div>
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-md transition duration-200">
                    Simpan Berita
                </button>
            </div>
        </form>
    </div>
@endsection

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

    <div class="relative px-6 pt-45 lg:px-8">
        <div class="max-w-7xl mx-auto text-left">
            <!-- Judul di atas -->
            <div class="p-6">
                <div class="flex space-x-2 mt-4">
                    <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                    <span class="inline-block w-4 h-4 rounded-full bg-yellow-500"></span>
                </div>
                <h2 class="text-3xl font-bold mt-2">Keadilan Terabaikan: Hukum yang Menguntungkan Satu Pihak</h2>
                <p class="text-lg mt-2">2 Februari 2025</p>
            </div>

            <!-- Gambar di bawah judul dan tanggal -->
            <div class="w-full mt-8 p-6 flex flex-col items-start">
                <img class="rounded-lg shadow-lg" src="assets/img/sample.jpg" alt="Hot News Image">
            </div>

            <!-- Deskripsi di bawah gambar -->
            <div class="p-6">
                <p class="mt-4 text-lg ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                    Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
                    Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.
                    Vestibulum lacinia arcu eget nulla. Nulla vitae massa. Nulla quis orci. Donec elit libero, sodales
                    nec, volutpat a, suscipit non, turpis. Integer tincidunt. Cras dapibus. Vivamus elementum semper
                    nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
                    ac, enim. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero
                    nisl, porta vel, scelerisque eget, malesuada at, neque.
                </p>

                <p class="mt-6 text-lg ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                    Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
                    Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.
                    Vestibulum lacinia arcu eget nulla. Nulla vitae massa. Nulla quis orci. Donec elit libero, sodales
                    nec, volutpat a, suscipit non, turpis. Integer tincidunt. Cras dapibus. Vivamus elementum semper
                    nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
                    ac, enim. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero
                    nisl, porta vel, scelerisque eget, malesuada at, neque.
                </p>
            </div>

            <div class="w-full mt-4 p-4 flex flex-col items-start">
                <img class="rounded-lg shadow-lg" src="assets/img/sample.jpg" alt="Hot News Image">
            </div>

            <div class="p-6">
                <p class="mt-4 text-lg ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                    Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
                    Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.
                    Vestibulum lacinia arcu eget nulla. Nulla vitae massa.
                </p>
            </div>

            <!-- Komentar Section -->
            <div class="p-6 mt-1">
                <label for="comment" class="block text-xl font-semibold text-gray-900">Komentar</label>

                <!-- Wrapper untuk textarea dan tombol -->
                <div class="relative">
                    <textarea id="comment" name="comment" rows="4"
                        class="mt-2 p-4 w-full border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-700 focus:border-gray-700"
                        placeholder="Tulis komentar Anda di sini"></textarea>

                    <!-- Tombol Kirim, posisinya di bawah kanan di luar textarea -->
                    <button
                        class="absolute right-4 -bottom-12 bg-gray-700 text-white px-6 py-2 rounded-lg shadow-md hover:bg-gray-700 transition">
                        Kirim Komentar
                    </button>
                </div>
                <!-- Daftar Komentar -->
                <div class="mt-8">
                    <!-- Komentar 1 -->
                    <div class="flex items-start space-x-4 mb-4">
                        <img src="https://i.pravatar.cc/100?img=1" alt="Awang"
                            class="w-10 h-10 rounded-full border-2 border-gray-400">
                        <div class="flex-1">
                            <p class="font-semibold text-gray-900">Awang</p>
                            <p class="text-sm text-gray-600">Parah banget kondisinya sekarang</p>
                        </div>
                    </div>

                    <!-- Komentar 2 -->
                    <div class="flex items-start space-x-4 mb-4">
                        <img src="https://i.pravatar.cc/100?img=2" alt="Lintang"
                            class="w-10 h-10 rounded-full border-2 border-gray-400">
                        <div class="flex-1">
                            <p class="font-semibold text-gray-900">Lintang</p>
                            <p class="text-sm text-gray-600">Bener bang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-gray-900 text-white py-12">
        <x-footer></x-footer>
    </footer>

    <script src="{{ asset('js/dragging.js') }}"></script>
</body>

</html>

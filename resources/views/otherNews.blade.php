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
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto"
                        src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                        alt="Logo">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="{{ route('home') }}" class="text-sm/6 font-semibold text-gray-900">Berita Terkini</a>
                <a href="{{ route('otherNews') }}" class="text-sm/6 font-semibold text-gray-900">Berita Lainnya</a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900">Tentang Kami</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="#" class="text-sm/6 font-semibold text-gray-900">Log in <span
                        aria-hidden="true">&rarr;</span></a>
            </div>
        </nav>
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
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between">
                <!-- Logo atau Icon Kiri -->
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H3" />
                    </svg>
                    <span class="text-xl font-semibold">YourCompany</span>
                </div>

                <!-- Links Kolom -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- Solutions Column -->
                    <div>
                        <h3 class="text-lg font-semibold">Solutions</h3>
                        <ul class="space-y-2 mt-4">
                            <li><a href="#" class="hover:text-indigo-600">Marketing</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Analytics</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Automation</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Commerce</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Insights</a></li>
                        </ul>
                    </div>

                    <!-- Support Column -->
                    <div>
                        <h3 class="text-lg font-semibold">Support</h3>
                        <ul class="space-y-2 mt-4">
                            <li><a href="#" class="hover:text-indigo-600">Submit ticket</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Documentation</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Guides</a></li>
                        </ul>
                    </div>

                    <!-- Company Column -->
                    <div>
                        <h3 class="text-lg font-semibold">Company</h3>
                        <ul class="space-y-2 mt-4">
                            <li><a href="#" class="hover:text-indigo-600">About</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Blog</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Jobs</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Press</a></li>
                        </ul>
                    </div>

                    <!-- Legal Column -->
                    <div>
                        <h3 class="text-lg font-semibold">Legal</h3>
                        <ul class="space-y-2 mt-4">
                            <li><a href="#" class="hover:text-indigo-600">Terms of service</a></li>
                            <li><a href="#" class="hover:text-indigo-600">Privacy policy</a></li>
                            <li><a href="#" class="hover:text-indigo-600">License</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-12 border-t border-gray-700 pt-8 text-center">
                <p class="text-sm text-gray-500">&copy; 2025 YourCompany. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/dragging.js') }}"></script>
</body>

</html>

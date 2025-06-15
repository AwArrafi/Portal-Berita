<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://portal-berita-production-b9eb.up.railway.app/build/assets/app-2Ltsdhws.css">
    <script src="https://portal-berita-production-b9eb.up.railway.app/build/assets/app-DaBYqt0m.js" defer></script>
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
            <x-comments></x-comments>
        </div>
    </div>
    </div>

    <footer class="bg-gray-900 text-white py-12">
        <x-footer></x-footer>
    </footer>

</body>

</html>

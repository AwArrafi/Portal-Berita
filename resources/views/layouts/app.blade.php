<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WeNews</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://portal-berita-production-b9eb.up.railway.app/build/assets/app-2Ltsdhws.css">
    <script src="https://portal-berita-production-b9eb.up.railway.app/build/assets/app-DaBYqt0m.js" defer></script>
</head>

<body>
    <header>
        <x-navbar></x-navbar> <!-- Ini untuk navbar -->
    </header>

    <!-- Main Content -->
    <div class="container">
        @yield('content') <!-- Bagian ini yang akan diubah oleh view masing-masing -->
    </div>

    <footer>
        <x-footer></x-footer> <!-- Ini untuk footer -->
    </footer>
</body>

</html>
